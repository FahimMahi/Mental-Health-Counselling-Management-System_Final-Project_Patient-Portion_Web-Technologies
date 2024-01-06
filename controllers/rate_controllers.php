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
    $rating = $_POST["rating"];
    $feedback = $_POST["feedback"];

    if ($rating >= 1 && $rating <= 5) {
        $sql = "INSERT INTO counselor_ratings (counselor_id, client_id, rating, feedback)
                VALUES ($counselorId, $patientId, $rating, '$feedback')";

        if ($conn->query($sql) === TRUE) {
            $successMessage = "Rating submitted successfully.";
        } else {
            $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $errorMessage = "Invalid rating. Please provide a rating between 1 and 5.";
    }
}

require_once "../models/rate_model.php";
?>
