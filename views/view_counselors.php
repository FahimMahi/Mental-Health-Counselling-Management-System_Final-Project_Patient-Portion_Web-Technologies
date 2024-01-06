<?php require_once "../controllers/view_counselors_controller.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Counselors</title>
    <link rel="stylesheet" type="text/css" href="../css/rate.css">
</head>
<body>
    <div style="background-image: url('../img/stethoscope-blister-pack-pill-with-office-supplies-green-background.jpg');background-size: 100% 1100px; width: 100%; height: 1100px">
    <div id="header"> <div id="logo">
    </div>
    <center>
        <br>
    <h1>Available Counselors</h1>
    <fieldset>
    <ul>
        <?php foreach ($counselors as $counselor): ?>
            <li>Name: <?php echo $counselor['name'];?>  - Time: <?php echo $counselor['note']; ?> - Email: <?php echo $counselor['email']; ?> - Phone: <?php echo $counselor['phone']; ?></li>
        <?php endforeach; ?>
    </ul>
    </fieldset>
    <br><a href="dashboard.php">Back to Dashboard</a>
    </center>
</body>
</html>
