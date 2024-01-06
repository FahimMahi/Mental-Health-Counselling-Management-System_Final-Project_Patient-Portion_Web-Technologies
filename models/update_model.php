<?php
$patientId = $_SESSION["patient_id"];

$successMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $sql = "UPDATE patients SET name='$name', email='$email', phone='$phone' WHERE id=$patientId";

    if ($conn->query($sql) === TRUE) {
        $successMessage = "Profile updated successfully.";
    } else {
        $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM patients WHERE id=$patientId";
$result = $conn->query($sql);
$patient = $result->fetch_assoc();

$conn->close();
?>
