<?php
session_start();

if (!isset($_SESSION["patient_id"])) {
    header("Location: login.php");
    exit();
}

require_once "../models/cancel_session_model.php";
?>
