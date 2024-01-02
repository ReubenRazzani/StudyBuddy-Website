<?php

require_once("MVCconnect.php");

class UserModel {
    private $conn;

    public function __construct() {
        $this->conn = new MVCconnect(); 
    }

    public function registerUser($email, $password, $username, $fullname, $number, $education) {
        $conn = $this->conn->connect();

        $stmt = $conn->prepare("CALL RegisterStudent(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $email, $password, $username, $fullname, $number, $education);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            $stmt->close();
            header("location: ../Apps/View/login.php");
            exit();
        } else {
            $stmt->close();
            header("location: ../Apps/View/register.php");
            exit();
        }
    }

    public function loginUser($email, $password) {
        $conn = $this->conn->connect();

        $stmt = $conn->prepare("CALL Login(?, ?, @isValidUser)");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $stmt->close();

        $result = mysqli_query($conn, "SELECT @isValidUser AS isValidUser");
        $row = mysqli_fetch_assoc($result);

        if ($row['isValidUser'] == 1) {
            $sqlquery = mysqli_query($conn, "SELECT * FROM studybuddy.users WHERE USERS_EMAIL = '$email' AND USERS_PASSWORD = '$password'");
            $row = mysqli_fetch_assoc($sqlquery);

            if ($row['USERS_ROLE'] == 'S') {
                session_start();
                $studentQuery = mysqli_query($conn, "SELECT * FROM studybuddy.student WHERE USERS_ID = '$row[USERS_ID]'");
                $studentRow = mysqli_fetch_assoc($studentQuery);

                $_SESSION['idUser'] = $row['USERS_ID'];
                $_SESSION['idStudent'] = $studentRow['STUDENT_ID'];
                $_SESSION['nickname'] = $row['USERS_NICKNAME'];
                $_SESSION['fullname'] = $row['USERS_NAME'];
                $_SESSION['number'] = $row['USERS_NUMBER'];
                $_SESSION['email'] = $row['USERS_EMAIL'];
                $_SESSION['password'] = $row['USERS_PASSWORD'];
                $_SESSION['role'] = $row['USERS_ROLE'];
                $_SESSION['wallet'] = $row['USERS_WALLET'];
                $_SESSION['education'] = $studentRow['STUDENT_EDU'];

                header("location: ../Apps/View/Student/homeStudent.php");
            } elseif ($row['USERS_ROLE'] == 'M') {
                session_start();
                $mentorQuery = mysqli_query($conn, "SELECT * FROM studybuddy.mentor WHERE USERS_ID = '$row[USERS_ID]'");
                $mentorRow = mysqli_fetch_assoc($mentorQuery);

                $_SESSION['idUser'] = $row['USERS_ID'];
                $_SESSION['idMentor'] = $mentorRow['MENTOR_ID'];
                $_SESSION['nickname'] = $row['USERS_NICKNAME'];
                $_SESSION['fullname'] = $row['USERS_NAME'];
                $_SESSION['number'] = $row['USERS_NUMBER'];
                $_SESSION['email'] = $row['USERS_EMAIL'];
                $_SESSION['password'] = $row['USERS_PASSWORD'];
                $_SESSION['role'] = $row['USERS_ROLE'];
                $_SESSION['wallet'] = $row['USERS_WALLET'];
                $_SESSION['subject'] = $mentorRow['MENTOR_SUBJECT'];
                $_SESSION['status'] = $mentorRow['MENTOR_STATUS'];
                $_SESSION['rating'] = $mentorRow['MENTOR_RATING'];

                header("location: ../Apps/View/Mentor/homeMentor.php");
            } else {
                $_SESSION['user_failed'] = "Gagal Login. Mengulangi Sesi Login.";

                header("location: ../Apps/View/login.php");
            }
        } else {
            $_SESSION['user_failed'] = "Gagal Login. Mengulangi Sesi Login.";

            header("location: ../View/login.php");
        }
    }

    public function logoutUser() {
        session_destroy();
        header("location: ../Apps/View/login.php");
    }

    public function topup($userID, $amount) {
        $conn = $this->conn->connect();

        $stmt = $conn->prepare("CALL TopUpWallet(?, ?)");
        $stmt->bind_param("is", $userID, $amount);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $stmt->close();
            $_SESSION['wallet'] += $amount; 
            header("location: ../Apps/View/Student/homeStudent.php");
        } else {
            $stmt->close();
            header("location: ../Apps/View/Student/homeStudent.php");
        }
    }

    public function getMentor($mentorID) {
        session_start();
        $conn = $this->conn->connect();
    
        $stmt = $conn->prepare("CALL GetMentorbyID(?)");
        $stmt->bind_param("i", $mentorID);
        $stmt->execute();
    
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    
            $_SESSION['mentorID'] = $row['MentorID'];
            $_SESSION['mentorName'] = $row['MentorName'];
            $_SESSION['mentorSubject'] = $row['Subject'];
            $_SESSION['mentorStatus'] = $row['Status'];
            $_SESSION['mentorRating'] = $row['Rating'];
            $_SESSION['mentorPrice'] = $row['Price'];
            header("location: ../Apps/View/Student/chatDetail.php");
        } else {
            $_SESSION['mentorName'] = null;
            header("location: ../Apps/View/Student/chat.php");
        }
    }

    public function setPayment($studentID, $mentorID, $amount, $password) {
        $conn = $this->conn->connect();

        $stmt = $conn->prepare("CALL SetPayment(?, ?, ?, ?)");
        $stmt->bind_param("iids", $studentID, $mentorID, $amount, $password);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            if (isset($_SESSION['wallet'])) {
                $_SESSION['wallet'] -= $amount;
            }

            $stmt->close();

            header("location: ../Apps/View/Student/requestSchedule.php");
            exit();
        } else {
            $stmt->close();
            header("location: ../Apps/View/Student/payment.php");
            exit();
        }
    }

    public function setSchedule($studentID, $mentorID, $date, $time) {
        $conn = $this->conn->connect();

        $stmt = $conn->prepare("CALL RequestSchedule(?, ?, ?, ?)");
        $stmt->bind_param("iiss", $studentID, $mentorID, $date, $time);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            $stmt->close();
            header("location: ../Apps/View/Student/schedule.php");
            exit();
        } else {
            $stmt->close();
            header("location: ../Apps/View/Student/requestSchedule.php");
            exit();
        }
    }

    public function setApproval($scheduleID, $subject, $link) {
        $conn = $this->conn->connect();

        $stmt = $conn->prepare("CALL ApproveSchedule(?, ?, ?)");
        $stmt->bind_param("iss", $scheduleID, $subject, $link);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            $stmt->close();
            header("location: ../Apps/View/Mentor/homeMentor.php");
            exit();
        } else {
            $stmt->close();
            header("location: ../Apps/View/homeMentor.php");
            exit();
        }
    }

    public function setRejection($scheduleID) {
        $conn = $this->conn->connect();

        $stmt = $conn->prepare("CALL RejectSchedule(?)");
        $stmt->bind_param("i", $scheduleID);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            $stmt->close();
            header("location: ../../Apps/View/Mentor/homeMentor.php");
            exit();
        } else {
            $stmt->close();
            header("location: ../../Apps/View/Mentor/homeMentor.php");
            exit();
        }
    }

    public function setRating($scheduleID, $rate) {
        $conn = $this->conn->connect();

        $stmt = $conn->prepare("CALL SetMentorRating(?, ?)");
        $stmt->bind_param("ii", $scheduleID, $rate);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            $stmt->close();

            $newRating = $this->getMentorRating($scheduleID);
            $_SESSION['mentorRating'] = $newRating;

            header("location: ../Apps/View/Student/schedule.php");
            exit();
        } else {
            $stmt->close();
            header("location: ../Apps/View/Student/schedule.php");
            exit();
        }
    }

    public function getMentorRating($scheduleID) {
        $conn = $this->conn->connect();
    
        $stmt = $conn->prepare("SELECT MENTOR_RATING FROM STUDYBUDDY.MENTOR WHERE MENTOR_ID = (SELECT MENTOR_ID FROM STUDYBUDDY.SCHEDULES WHERE SCHEDULE_ID = ?)");
        $stmt->bind_param("i", $scheduleID);
        $stmt->execute();
        $stmt->bind_result($rating);
    
        if ($stmt->fetch()) {
            $stmt->close();
            return $rating;
        } else {
            $stmt->close();
            return 0;
        }
    }
}