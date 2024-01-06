<?php require_once "../controllers/view_rating_Controller.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Average Ratings</title>
    <link rel="stylesheet" type="text/css" href="../css/view_rate.css">
    <!--<script src="../js/jquery-3.6.4.min.js"></script>
    <script src="../js/view_rating.js"></script>-->
</head>
<body>
    <div style="background-image: url('../img/vrate1.jpg');background-size: 100% 1400px; width: 100%; height: 1400px">
    <div id="header"> <div id="logo">
    </div>
    <center>
        <br>
    <h1>Average Ratings for Counselors</h1>

    <!-- Search Form for Counselors -->
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="searchCounselor">Search Counselor:</label>
        <input type="text" name="searchCounselor" placeholder="Enter counselor's name">
        <input type="submit" value="Search">
    </form>

    <?php if (isset($searchCounselorRatings)): ?>
        <table border="1">
            <tr>
                <th>Counselor Name</th>
                <th>Average Rating</th>
            </tr>
            <?php foreach ($searchCounselorRatings as $rating): ?>
                <tr>
                    <td><?php echo $rating['name']; ?></td>
                    <td><?php echo ($rating['average_rating'] !== null) ? number_format($rating['average_rating'], 2) : 'N/A'; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <!-- Display all ratings for counselors if no search term -->
        <table border="1">
            <tr>
                <th>Counselor Name</th>
                <th>Average Rating</th>
            </tr>
            <?php foreach ($counselorRatings as $rating): ?>
                <tr>
                    <td><?php echo $rating['name']; ?></td>
                    <td><?php echo ($rating['average_rating'] !== null) ? number_format($rating['average_rating'], 2) : 'N/A'; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <br>
    <h1>All Feedback and Ratings for Every User</h1>

    <!-- Search Form for All Feedback -->
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="searchAllFeedback">Search All Feedback:</label>
        <input type="text" name="searchAllFeedback" placeholder="Enter counselor's name">
        <input type="submit" value="Search">
    </form>

    <?php if (isset($searchAllFeedbackData)): ?>
        <table border="1">
            <tr>
                <th>Counselor Name</th>
                <th>Client Username</th>
                <th>Rating</th>
                <th>Feedback</th>
            </tr>
            <?php foreach ($searchAllFeedbackData as $feedback): ?>
                <tr>
                    <td><?php echo $feedback['counselor_name']; ?></td>
                    <td><?php echo $feedback['client_username']; ?></td>
                    <td><?php echo $feedback['rating']; ?></td>
                    <td><?php echo ($feedback['feedback'] !== null) ? $feedback['feedback'] : 'No feedback available'; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <!-- Display all feedback if no search term -->
        <table border="1">
            <tr>
                <th>Counselor Name</th>
                <th>Client Username</th>
                <th>Rating</th>
                <th>Feedback</th>
            </tr>
            <?php foreach ($allFeedbackData as $feedback): ?>
                <tr>
                    <td><?php echo $feedback['counselor_name']; ?></td>
                    <td><?php echo $feedback['client_username']; ?></td>
                    <td><?php echo $feedback['rating']; ?></td>
                    <td><?php echo ($feedback['feedback'] !== null) ? $feedback['feedback'] : 'No feedback available'; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <br>
    <a href="dashboard.php">Back to Dashboard</a>
    </center>
</body>
</html>
