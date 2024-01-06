<?php
session_start();

if (!isset($_SESSION["patient_id"])) {
    header("Location: login.php");
    exit();
}

require_once "../models/db.php";
require_once "../models/schedule_session_models.php";
?>
