<?php
session_start();

if (!isset($_SESSION["patient_id"])) {
    header("Location: login.php");
    exit();
}

require_once "../models/db.php";

$patientId = $_SESSION["patient_id"];
$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counselorId = $_POST["counselor_id"];
    $message = $_POST["message"];

    if (empty($message)) {
        $errorMessage = "Please enter a message.";
    }
    else {
        $insertSql = "INSERT INTO messages (patient_id, counselor_id, message, timestamp)
                      VALUES ($patientId, $counselorId, '$message', NOW())";

        if ($conn->query($insertSql) === TRUE) {
            $successMessage = "Message sent successfully.";
        }
        else {
            $errorMessage = "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }
}

$counselorsSql = "SELECT * FROM counselors";
$counselorsResult = $conn->query($counselorsSql);

$conn->close();
?>
