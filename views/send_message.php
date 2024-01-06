<?php require_once "../controllers/send_message_controller.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Message to Counselor</title>
    <link rel="stylesheet" type="text/css" href="../css/rate.css">
    <script src="../js/send_message_validation.js"></script>
</head>
<body>
    <div style="background-image: url('../img/frame-medicine-table.jpg');background-size: 100% 1100px; width: 100%; height: 1100px">
        <div id="header">
            <div id="logo"></div>
            <center>
                <br>
                <h1>Send Message to Counselor</h1>
                <fieldset>
                <?php if (!empty($errorMessage)): ?>
                    <div style="color: red;"><?php echo $errorMessage; ?></div>
                    <?php echo "<script>alert('$errorMessage');</script>"; ?>

                <?php elseif (!empty($successMessage)): ?>
                    <div style="color: green;"><?php echo $successMessage; ?></div>
                    <?php echo "<script>alert('$successMessage');</script>"; ?>
                <?php endif; ?>

                <form name="sendMessageForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateSendMessageForm()">
                    <label for="counselor_id">Select Counselor:</label>
                    <select name="counselor_id">
                        <?php while ($counselor = $counselorsResult->fetch_assoc()): ?>
                            <option value="<?php echo $counselor['id']; ?>"><?php echo $counselor['name']; ?></option>
                        <?php endwhile; ?>
                    </select><br><br>

                    <label for="message">Message:</label>
                    <textarea name="message" rows="4" cols="50"></textarea><br><br>

                    <input type="submit" value="Send Message">
                </form>
                </fieldset>
                <br>
                <a href="dashboard.php">Back to Dashboard</a>
            </center>
        </div>
    </div>
</body>
</html>
