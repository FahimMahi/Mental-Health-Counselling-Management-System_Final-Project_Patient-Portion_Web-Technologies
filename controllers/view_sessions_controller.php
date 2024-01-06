<?php
session_start();

if (!isset($_SESSION["patient_id"])) {
    header("Location: login.php");
    exit();
}

require_once "../models/db.php";

$patientId = $_SESSION["patient_id"];

$sql = "SELECT sessions.session_date, sessions.session_notes, counselors.name AS counselor_name
        FROM sessions
        JOIN counselors ON sessions.counselor_id = counselors.id
        WHERE sessions.client_id=$patientId";

$result = $conn->query($sql);

$sessions = array();
while ($row = $result->fetch_assoc()) {
    $sessions[] = $row;
}

$conn->close();
?>
