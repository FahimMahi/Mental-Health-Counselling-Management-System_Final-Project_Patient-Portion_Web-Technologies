<?php require_once "../controllers/dashboardcontroller.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="../css/dashboardstyles.css">
</head>
<body>
    <div id="dashboard-container">
        <div id="header">
            <div id="logo">
            </div>
            <h1>Welcome to Mental Health Counselling Management System!</h1>
            <h1>Dashboard</h1>
        </div>
        <br>
        <fieldset>
            <center>
            <a href="update_profile.php">Update Profile</a>
            <a href="view_counselors.php">View Counselors</a>
            <a href="view_sessions.php">View Sessions</a>
            <a href="schedule_session.php">Schedule Session</a>
            <a href="cancel_session.php">Cancel Session</a>
            <a href="change_password.php">Change Password</a>
            <a href="send_message.php">Send Message</a>
            <a href="view_messages.php">View Message</a>
            <a href="rate_counselor.php">Give Rating and Feedback of Counselor</a>
            <a href="view_average_ratings.php">View Ratings and Feedback of Counselor</a>
            <a href="../controllers/logout.php">Logout</a>
            </center>
        </fieldset>
    </div>
</body>
</html>
