<?php
session_start();

if (!isset($_SESSION["patient_id"])) {
    header("Location: login.php");
    exit();
}

require_once "../models/db.php";

$sql = "SELECT * FROM counselors";
$result = $conn->query($sql);

$counselors = array();
while ($row = $result->fetch_assoc()) {
    $counselors[] = $row;
}

$conn->close();

?>
