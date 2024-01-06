<?php
include_once '../controllers/UserController.php';

require_once "../models/db.php";

$userController = new UserController($conn);

session_start();

$loginMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userData = $_POST;
    $loginResult = $userController->loginUser($userData);

    if ($loginResult['status'] == 'fail') {
        echo json_encode(array('status' => 'fail', 'message' => $loginResult['message']));
        exit();
    } else {
        echo json_encode(array('status' => 'success'));
        exit();
    }
}

$conn->close();
?>
