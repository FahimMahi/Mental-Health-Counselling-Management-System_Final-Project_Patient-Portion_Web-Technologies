<?php
    session_start();

    if (isset($_SESSION["patient_id"])) {
        header("Location: views/dashboard.php");
        exit();
    }
    require_once "models/db.php";
?>
