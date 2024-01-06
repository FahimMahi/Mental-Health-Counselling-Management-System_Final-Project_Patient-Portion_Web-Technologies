<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mental Health Counseling Management System</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
    <div style="background-image: url('img/health-prevention-frame.jpg');background-size: 100% 1100px; width: 100%; height: 1100px">
        <div id="header">
            <?php
                require_once "controllers/home_controller.php";
            ?>
            <div id="logo"></div>
            <center>
                <h1>Welcome to Mental Health Counseling Management System!</h1>
                <nav>
                    <a href="views/login.php" class="login-button">Login</a>
                    <a href="views/register.php" class="register-button">Register</a>
                </nav><br>
                <fieldset>
                <h2>About Us</h2>
                <p>
                The Mental Health Counseling Management System (MHCMS) is a technology-driven, effective platform designed to meet the growing need for mental health services. This initiative overcomes logistical and geographic hurdles to provide timely access to help in light of the global spike in mental health problems. It maximizes the resources of mental health practitioners by automating administrative duties, freeing them up to concentrate on providing high-quality care. Additionally, MHCMS uses data analytics to gain insightful information that supports ongoing development and well-informed decision-making. It promotes a holistic approach to well-being and goes beyond traditional systems, providing individualized resources and self-assessment tools. A future where mental health treatments are easily available, effective, and customized to meet a range of requirements is made possible by privacy and security safeguards that guarantee a reliable environment.
                </p>
                </fieldset>
            </center>
        </div>
    </div>
</body>
</html>
