<?php
require("MVCconnect.php");
include("Controller/UserController.php");

// $database = new MVCconnect();
// $db = $database->db;

if (isset($_GET['register'])) {
    $userController = new UserController();

    $email = htmlspecialchars($_POST['emailInput']);
    $password = htmlspecialchars($_POST['passwordInput']);
    $username = htmlspecialchars($_POST['usernameInput']);
    $fullname = htmlspecialchars($_POST['fullnameInput']);
    $number = htmlspecialchars($_POST['numberInput']);
    $education = htmlspecialchars($_POST['educationInput']);

    $result = $userController->addStudent($email, $password, $username, $fullname, $number, $education);
    if ($result !== 'Success') {
        error_log('Error saat melakukan registrasi: ' . $result);
    }
}

if (isset($_GET['login'])) {
    $userController = new UserController();

    $email = htmlspecialchars($_POST['emailInput']);
    $password = htmlspecialchars($_POST['passwordInput']);

    $result = $userController->loginStudent($email, $password);
    if ($result !== 'Success') {
        error_log('Error saat melakukan login: ' . $result);
    }
}

if (isset($_GET['logout'])) {
    $userController = new UserController();

    $result = $userController->logoutStudent();
}

if (isset($_GET['topup'])) {
    session_start();
    $userController = new UserController();

    $amount = htmlspecialchars($_POST['topupAmount']);

    if (isset($_SESSION['idUser'])) {
        $userID = $_SESSION['idUser'];
    } else {
        error_log('Error saat pengambilan id user: ' . $userID);
    }

    $result = $userController->topupWallet($userID, $amount);
}

if (isset($_GET['search'])) {
    session_start();
    $userController = new UserController();

    $search = htmlspecialchars($_POST['searchMentorByName']);
    $result = $userController->searchByName($search);
    exit();
}

if (isset($_GET['getmentor'])) {
    $userController = new UserController();

    $mentorID = htmlspecialchars($_POST['mentorID']);
    $result = $userController->getMentorData($mentorID);
    if ($result !== 'Success') {
        error_log('Error saat mengambil data mentor: ' . $result);
    }
}

if (isset($_GET['payment'])) {
    $userController = new UserController();

    $studentID = htmlspecialchars($_POST['studentID']);
    $mentorID = htmlspecialchars($_POST['mentorID']);
    $amount = htmlspecialchars($_POST['amountInput']);
    $password = htmlspecialchars($_POST['passwordInput']);

    $result = $userController->addPayment($studentID, $mentorID, $email, $password);
    if ($result !== 'Success') {
        error_log('Error saat melakukan pembayaran: ' . $result);
    }
}

if (isset($_GET['schedule'])) {
    $userController = new UserController();

    $studentID = htmlspecialchars($_POST['studentID']);
    $mentorID = htmlspecialchars($_POST['mentorID']);
    $date = htmlspecialchars($_POST['dateInput']);
    $time = htmlspecialchars($_POST['timeInput']);

    $result = $userController->addSchedule($studentID, $mentorID, $date, $time);
    if ($result !== 'Success') {
        error_log('Error saat membuat jadwal: ' . $result);
    }
}

if (isset($_GET['approve'])) {
    $userController = new UserController();

    $scheduleID = htmlspecialchars($_POST['scheduleID']);
    $subject = htmlspecialchars($_POST['subject']);
    $link = htmlspecialchars($_POST['zoom']);

    $result = $userController->addInbox($scheduleID, $subject, $link);
    if ($result !== 'Success') {
        error_log('Error saat membuat jadwal: ' . $result);
    }
}

if (isset($_GET['decline'])) {
    $userController = new UserController();

    $scheduleID = htmlspecialchars($_POST['declineScheduleID']);

    $result = $userController->declineInbox($scheduleID);
    if ($result !== 'Success') {
        error_log('Error saat membuat jadwal: ' . $result);
    }
}

if (isset($_GET['rate'])) {
    $userController = new UserController();

    $scheduleID = htmlspecialchars($_POST['scheduleID']);
    $rate = htmlspecialchars($_POST['rate']);

    $result = $userController->rateMentor($scheduleID, $rate);
    if ($result !== 'Success') {
        error_log('Error saat membuat jadwal: ' . $result);
    }
}
