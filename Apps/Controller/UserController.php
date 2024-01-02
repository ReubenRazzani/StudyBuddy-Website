<?php

include_once("Model/UserModel.php");

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function addStudent($email, $password, $username, $fullname, $number, $education) {
        $result = $this->userModel->registerUser($email, $password, $username, $fullname, $number, $education);
    }

    public function loginStudent($email, $password) {
        $result = $this->userModel->loginUser($email, $password);
    }

    public function logoutStudent() {
        $result = $this->userModel->logoutUser();
    }

    public function topupWallet($userID, $amount) {
        $result = $this->userModel->topup($userID, $amount);
    }

    public function searchByName($search) {
        $result = $this->userModel->searchMentor();
    }

    public function getMentorData($mentorID) {
        $result = $this->userModel->getMentor($mentorID);
    }

    public function addPayment($studentID, $mentorID, $email, $password) {
        $result = $this->userModel->setPayment($studentID, $mentorID, $amount, $password);
    }

    public function addSchedule($studentID, $mentorID, $date, $time) {
        $result = $this->userModel->setSchedule($studentID, $mentorID, $date, $time);
    }

    public function addInbox($scheduleID, $subject, $link) {
        $result = $this->userModel->setApproval($scheduleID, $subject, $link);
    }

    public function declineInbox($scheduleID) {
        $result = $this->userModel->setRejection($scheduleID);
    }

    public function rateMentor($scheduleID, $rate) {
        $result = $this->userModel->setRating($scheduleID, $rate);
    }
}

?>
