<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mental_health_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$patientId = $_SESSION["patient_id"];
$successMessage = $errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sessionId = $_POST["session_id"];

    $sql = "DELETE FROM sessions WHERE id=$sessionId AND client_id=$patientId";

    if ($conn->query($sql) === TRUE) {
        $successMessage = "Session canceled successfully.";
    } else {
        $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM sessions WHERE client_id=$patientId";
$result = $conn->query($sql);

$sessions = array();
while ($row = $result->fetch_assoc()) {
    $sessions[] = $row;
}

$conn->close();
?>
