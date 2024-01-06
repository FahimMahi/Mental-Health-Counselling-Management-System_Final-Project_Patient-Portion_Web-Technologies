<?php
session_start();

if (!isset($_SESSION["patient_id"])) {
    header("Location: login.php");
    exit();
}

require_once "../models/db.php";

// Handle search for counselors
if (isset($_GET['searchCounselor'])) {
    $searchTerm = $_GET['searchCounselor'];
    $searchSql = "SELECT counselors.id, counselors.name, AVG(counselor_ratings.rating) AS average_rating
                  FROM counselors
                  LEFT JOIN counselor_ratings ON counselors.id = counselor_ratings.counselor_id
                  WHERE counselors.name LIKE '%$searchTerm%'
                  GROUP BY counselors.id, counselors.name";
    $searchResult = $conn->query($searchSql);

    $searchCounselorRatings = array();
    while ($row = $searchResult->fetch_assoc()) {
        $searchCounselorRatings[] = $row;
    }
}
else {
    $sql = "SELECT counselors.id, counselors.name, AVG(counselor_ratings.rating) AS average_rating
            FROM counselors
            LEFT JOIN counselor_ratings ON counselors.id = counselor_ratings.counselor_id
            GROUP BY counselors.id, counselors.name";
    $result = $conn->query($sql);

    $counselorRatings = array();
    while ($row = $result->fetch_assoc()) {
        $counselorRatings[] = $row;
    }
}

// Handle search for all feedback
if (isset($_GET['searchAllFeedback'])) {
    $searchTermAllFeedback = $_GET['searchAllFeedback'];
    $searchSqlAllFeedback = "SELECT counselor_ratings.*, counselors.name AS counselor_name, patients.username AS client_username
                             FROM counselor_ratings
                             JOIN counselors ON counselor_ratings.counselor_id = counselors.id
                             JOIN patients ON counselor_ratings.client_id = patients.id
                             WHERE counselors.name LIKE '%$searchTermAllFeedback%'";
    $searchResultAllFeedback = $conn->query($searchSqlAllFeedback);

    $searchAllFeedbackData = array();
    while ($row = $searchResultAllFeedback->fetch_assoc()) {
        $searchAllFeedbackData[] = $row;
    }
}
else {
    $sqlAllFeedback = "SELECT counselor_ratings.*, counselors.name AS counselor_name, patients.username AS client_username
                      FROM counselor_ratings
                      JOIN counselors ON counselor_ratings.counselor_id = counselors.id
                      JOIN patients ON counselor_ratings.client_id = patients.id";
    $resultAllFeedback = $conn->query($sqlAllFeedback);

    $allFeedbackData = array();
    while ($row = $resultAllFeedback->fetch_assoc()) {
        $allFeedbackData[] = $row;
    }
}

$conn->close();
?>
