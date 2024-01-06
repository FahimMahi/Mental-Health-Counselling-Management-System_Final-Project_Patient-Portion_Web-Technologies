<?php
include_once 'UserController.php';

require_once "../models/db.php";

$userController = new UserController($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userData = $_POST;
    $registrationResult = $userController->registerUser($userData);

    echo json_encode($registrationResult);
    exit();
}
?>
