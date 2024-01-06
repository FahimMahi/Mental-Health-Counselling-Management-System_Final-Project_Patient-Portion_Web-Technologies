<?php require_once "../controllers/rate_controllers.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rate Counselor</title>
    <link rel="stylesheet" type="text/css" href="../css/rate.css">
    <script src="../js/rate_validation.js"></script>
</head>
<body>
    <div style="background-image: url('../img/rate.jpg');background-size: 100% 1100px; width: 100%; height: 1100px">
        <div id="header">
            <div id="logo"></div>
            <center>
                <br>
                <h1>Rate Your Counselor</h1>
                <fieldset>
                    <?php
                    if (!empty($successMessage)) {
                        echo '<p style="color: green;">' . $successMessage . '</p>';
                        echo "<script>alert('$successMessage');</script>";
                    }

                    if (!empty($errorMessage)) {
                        echo '<p style="color: red;">' . $errorMessage . '</p>';
                        echo "<script>alert('$errorMessage');</script>";
                    }
                    ?>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="ratingForm" onsubmit="return validateForm()">
                        <label for="counselor_id">Select Counselor:</label>
                        <select name="counselor_id">
                            <?php foreach ($counselors as $counselor): ?>
                                <option value="<?php echo $counselor['id']; ?>"><?php echo $counselor['name']; ?></option>
                            <?php endforeach; ?>
                        </select><br><br>

                        <label for="rating">Rating (1-5):</label>
                        <input type="number" name="rating" min="1" max="5"><br><br>

                        <label for="feedback">Feedback:</label>
                        <textarea name="feedback" rows="4"></textarea><br><br>

                        <input type="submit" value="Submit Rating"><br>
                    </form>
                </fieldset>
                <br><a href="dashboard.php">Back to Dashboard</a>
            </center>
        </div>
    </div>
</body>
</html>
