<?php require_once '../controllers/logincontroller.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Login</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../js/jquery-3.6.4.min.js"></script>
    <script src="../js/login_validation.js"></script>
</head>
<body>
    <div id="login-container">
    <div id="header"> <div id="logo">
        </div>
        <center>

            <h1>Patient Login</h1>

            <div id="validation-messages" style="color: red;"><?php echo $loginMessage; ?></div>

            <form id="login-form">
            <fieldset>
                <br>
                <label for="username">Username:</label>
                <input type="text" name="username"><br> <br>

                <label for="password">Password:</label>
                <input type="password" name="password"><br><br>

                <input type="submit" value="Login">
            </fieldset>
            </form>
            <p>Don't have an account? <a href="register.php">Register here</a>.</p>
        </center>
    </div>

    <script>
        $(document).ready(function () {
            $('#login-form').submit(function (e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'login.php',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === 'success') {
                            window.location.href = 'dashboard.php';
                        } else {
                            $('#validation-messages').html(response.message);
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
