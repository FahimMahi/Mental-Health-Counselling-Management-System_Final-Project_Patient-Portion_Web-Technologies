<?php
session_start();

if (!isset($_SESSION["patient_id"])) {
    header("Location: login.php");
    exit();
}

require_once "../models/db.php";

$patientId = $_SESSION["patient_id"];

$sql = "SELECT m.*, c.name AS counselor_name
        FROM messages m
        JOIN counselors c ON m.counselor_id = c.id
        WHERE m.patient_id = $patientId
        ORDER BY m.timestamp DESC";

$result = $conn->query($sql);

$conn->close();
?>
