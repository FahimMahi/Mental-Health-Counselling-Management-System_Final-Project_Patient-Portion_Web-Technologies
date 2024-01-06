<?php require_once "../controllers/view_messages_controller.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Messages</title>
    <link rel="stylesheet" type="text/css" href="../css/rate.css">
</head>
<body>
    <div style="background-image: url('../img/medicine-blue-background-flat-lay.jpg');background-size: 100% 1100px; width: 100%; height: 1100px">
        <div id="header">
            <div id="logo"></div>
            <center>
                <br>
                <h1>View Sended Messages</h1>
                <fieldset>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="message-container">
                        <li><strong><?php echo $row["counselor_name"]; ?></strong> - <?php echo $row["timestamp"]; ?><br>
                        <?php echo $row["message"]; ?></li>
                    </div>
                <?php endwhile; ?>

                <br>
                </fieldset>
                <br><a href="dashboard.php">Back to Dashboard</a>
            </center>
        </div>
    </div>
</body>
</html>
