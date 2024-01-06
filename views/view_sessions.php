<?php require_once "../controllers/view_sessions_controller.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Sessions</title>
    <link rel="stylesheet" type="text/css" href="../css/rate.css">
</head>
<body>
    <div style="background-image: url('../img/vss.jpg');background-size: 100% 1100px; width: 100%; height: 1100px">
        <div id="header"> <div id="logo"></div>
    <center>
        <br><br>
            <h1>Your Counseling Sessions</h1>
            <fieldset>
            <ul>
                <?php foreach ($sessions as $session): ?>
                    <li>Date: <?php echo $session['session_date']; ?> - Notes: <?php echo $session['session_notes']; ?> - Counselor: <?php echo $session['counselor_name']; ?></li>
                <?php endforeach; ?>
            </ul>

            <br><a href="dashboard.php">Back to Dashboard</a>

        </div>
    </div>
    </fieldset>

    </center>
</body>
</html>
