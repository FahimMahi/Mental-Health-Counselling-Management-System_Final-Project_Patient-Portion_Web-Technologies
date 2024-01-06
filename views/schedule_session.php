<?php require_once "../controllers/schedule_session_controller.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schedule a Counseling Session</title>
    <link rel="stylesheet" type="text/css" href="../css/rate.css">
    <script src="../js/schedule_session_validation.js"></script>
</head>
<body>
    <div style="background-image: url('../img/ss.jpg');background-size: 100% 1100px; width: 100%; height: 1100px">
        <div id="header">
            <div id="logo"></div>
            <center>
                <br>
                <h1>Schedule a Counseling Session</h1>
                <?php if (isset($successMessage)): ?>
                    <p class='success-message'><?php echo "<p style='color: green;'>$successMessage</p>"; ?></p>
                    <?php echo "<script>alert('$successMessage');</script>"; ?>
                <?php endif; ?>


                <?php if (isset($errorMessage)): ?>
                    <p class='error-message'><?php echo "<p style='color: red;'>$errorMessage</p>"; ?></p>
                    <?php echo "<script>alert('$errorMessage');</script>"; ?>
                <?php endif; ?>
                <fieldset>

                    <form name="sessionForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm();">
                        <label for="counselor">Counselor:</label>
                        <select name="counselor">
                            <?php foreach ($counselors as $counselor): ?>
                                <option value="<?php echo $counselor['id']; ?>"><?php echo $counselor['name']; ?></option>
                            <?php endforeach; ?>
                        </select><br><br>

                        <label for="session_date">Session Date:</label>
                        <input type="date" name="session_date"><br><br>

                        <label for="session_notes">Session Notes:</label>
                        <textarea name="session_notes" rows="4"></textarea><br><br>

                        <input type="submit" value="Schedule Session"><br>
                    </form>
                </fieldset>
                <br><a href="dashboard.php">Back to Dashboard</a>
            </center>
        </div>
    </div>
</body>
</html>
