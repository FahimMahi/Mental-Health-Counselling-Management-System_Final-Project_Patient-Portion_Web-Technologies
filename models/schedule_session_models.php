<?php
$sql = "SELECT * FROM counselors";
$result = $conn->query($sql);

$counselors = array();
while ($row = $result->fetch_assoc()) {
    $counselors[] = $row;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counselorId = $_POST["counselor"];
    $sessionDate = $_POST["session_date"];
    $sessionNotes = $_POST["session_notes"];
    $patientId = $_SESSION["patient_id"];

    $sql = "INSERT INTO sessions (counselor_id, client_id, session_date, session_notes)
            VALUES ($counselorId, $patientId, '$sessionDate', '$sessionNotes')";

    if ($conn->query($sql) === TRUE) {
        $successMessage = "Session scheduled successfully.";
    } else {
        $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
