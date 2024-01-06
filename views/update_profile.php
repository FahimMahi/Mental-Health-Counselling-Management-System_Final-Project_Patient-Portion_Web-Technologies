<?php require_once "../controllers/update_controller.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Profile</title>
    <link rel="stylesheet" href="../css/upstyles.css">
    <script src="../js/update_profile_validation.js"></script>
</head>
<body>
    <div style="background-image: url('../img/5166950.jpg');background-size: 100% 1100px; width: 100%; height: 1100px">
    <div id="header"> <div id="logo">
    </div>
    <center>
        <br><br><br><br><br><br>
    <h1>Update Your Profile</h1>
    <?php
    if (!empty($successMessage)) {
        echo "<p style='color: green;'>$successMessage</p>";
        echo "<script>alert('$successMessage');</script>";
    }
    if (!empty($errorMessage)) {
        echo "<p style='color: red;'>$errorMessage</p>";
        echo "<script>alert('$errorMessage');</script>";
     }
    ?>
    <fieldset>
    <form name="updateForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm();">
        <label for="name">Full Name:</label>
        <input type="text" name="name" value="<?php echo $patient['name']; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $patient['email']; ?>"><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" value="<?php echo $patient['phone']; ?>"><br><br>

        <input type="submit" value="Update Profile"><br>
    </form>
    </fieldset>
    <br><a href="dashboard.php">Back to Dashboard</a>
    </center>
</body>
</html>
