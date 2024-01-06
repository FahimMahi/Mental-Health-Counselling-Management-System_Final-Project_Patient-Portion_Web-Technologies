<?php require_once "../controllers/cancel_session_controller.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cancel Counseling Session</title>
    <link rel="stylesheet" type="text/css" href="../css/rate.css">
</head>
<body>
    <div style="background-image: url('../img/cc.jpg');background-size: 100% 1100px; width: 100%; height: 1100px">
    <div id="header"> <div id="logo">
    </div>
    <center>
        <br>
    <h1>Your Counseling Sessions</h1>

    <?php if (!empty($successMessage)): ?>
        <div style="color: green;"><?php echo $successMessage; ?></div>
        <?php echo "<script>alert('$successMessage');</script>"; ?>
    <?php endif; ?>

    <?php if (!empty($errorMessage)): ?>
        <div style="color: red;"><?php echo $errorMessage; ?></div>
        <?php echo "<script>alert('$errorMessage');</script>"; ?>
    <?php endif; ?>

    <fieldset>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="session_id">Select Session to Cancel:</label>
        <select name="session_id" required>
            <?php foreach ($sessions as $session): ?>
                <option value="<?php echo $session['id']; ?>"><?php echo $session['session_date']; ?> - <?php echo $session['session_notes']; ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <input type="submit" value="Cancel Session">
    </form>
    </fieldset>
    <br><a href="dashboard.php">Back to Dashboard</a>
    </center>
</body>
</html>
