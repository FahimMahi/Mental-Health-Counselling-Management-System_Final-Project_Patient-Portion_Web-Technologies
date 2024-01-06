<?php require_once "../controllers/change_password_controller.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="../css/rate.css">
    <script src="../js/change_password_validation.js"></script>
</head>
<body>
    <div style="background-image: url('../img/cp.jpg');background-size: 100% 1100px; width: 100%; height: 1100px">
    <div id="header"> <div id="logo">
    </div>
    <center>
        <br>
    <h1>Change Your Password</h1>

    <?php if (!empty($successMessage)): ?>
        <div style="color: green;"><?php echo $successMessage; ?></div>
        <?php echo "<script>alert('$successMessage');</script>"; ?>
    <?php endif; ?>

    <?php if (!empty($errorMessage)): ?>
        <div style="color: red;"><?php echo $errorMessage; ?></div>
        <?php echo "<script>alert('$errorMessage');</script>"; ?>
    <?php endif; ?>

    <fieldset>
    <form name="passwordForm" onsubmit="return validateForm()" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="current_password">Current Password:</label>
        <input type="password" name="current_password"><br><br>

        <label for="new_password">New Password:</label>
        <input type="password" name="new_password"><br><br>

        <input type="submit" value="Change Password"><br>
    </form>
    </fieldset>
    <br><a href="dashboard.php">Back to Dashboard</a>
    </center>
</body>
</html>
