<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mental_health_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$patientId = $_SESSION["patient_id"];

$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST["current_password"];
    $newPassword = password_hash($_POST["new_password"], PASSWORD_DEFAULT);

    $sql = "SELECT password FROM patients WHERE id=$patientId";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($currentPassword, $row["password"])) {
            $updateSql = "UPDATE patients SET password='$newPassword' WHERE id=$patientId";
            if ($conn->query($updateSql) === TRUE) {
                $successMessage = "Password changed successfully.";
            } else {
                $errorMessage = "Error: " . $updateSql . "<br>" . $conn->error;
            }
        } else {
            $errorMessage = "Incorrect current password.";
        }
    }
}

$conn->close();
?>
