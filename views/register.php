<?php require_once "../controllers/registercontroller.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Patient Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="../js/jquery-3.6.4.min.js"></script>
    <script src="../js/validation.js"></script>
</head>

<body>
    <div id="reg-container">
        <div id="header">
            <div id="logo"></div>
            <center>
                <h1>Patient Registration</h1>

                <div id="validation-messages" style="color: red;"></div>

                <form id="registration-form">
                    <fieldset>
                        <br>
                        <label for="username">Username:</label>
                        <input type="text" name="username"><br><br>

                        <label for="password">Password:</label>
                        <input type="password" name="password"><br><br>

                        <label for="name">Full Name:</label>
                        <input type="text" name="name"><br><br>

                        <label for="email">Email:</label>
                        <input type="email" name="email"><br><br>

                        <label for="phone">Phone:</label>
                        <input type="tel" name="phone"><br><br>

                        <input type="submit" value="Register"><br>
                    </fieldset>
                </form>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </center>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#registration-form').submit(function (e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'register.php',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === 'success') {
                            window.location.href = 'login.php';
                        } else {
                            $('#validation-messages').html("Registration failed. Please fix the following:<br>" + response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.log('Ajax error:', xhr.responseText);
                        console.log('Status:', status);
                        console.log('Error:', error);
                    }
                });
            });
        });
    </script>
</body>
</html>
