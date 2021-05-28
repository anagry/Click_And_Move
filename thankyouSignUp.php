<?php

include "../RentalBuddy/connProperties.php";

$user = $_POST["username"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$address = $_POST["address"];
$password = $_POST['password'];
$user_type = $_POST["break"];

if ($user_type == "tenant")
    $user_type = 0;

else if ($user_type == "landlord")
    $user_type = 1;

else
    echo "Please select value";

$creationDate = new DateTime();

$query1 = "SELECT MAX(id) + 1 FROM userdata";
$result = "";
$result = mysqli_query($con,$query1);
$row = mysqli_fetch_array($result, MYSQLI_NUM);
$query = "insert into userdata(id, username, first_name, last_name, email, phone_number, address, user_type, dob, creation_date) values('$row[0]', '$user', '$fname', '$lname', '$email', '$phoneNumber', '$address', '$user_type','null', 'null')";
$query1 = "insert into user_login_info(username, password, user_type) values('$user', '$password', '$user_type')";
mysqli_query($con, $query);
mysqli_query($con, $query1);
?>
<!DOCTYPE HTML>
-->
<html>
<head>
    </script>
    <title>Click And Move</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <h1><a href="index.php">Click And Move</h1>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <div class="inner">
            <h2>Menu</h2>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="elements.php">Contact</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="loginPage.php">Sign Up - Log In</a></li>
            </ul>
            <a href="#" class="close">Close</a>
        </div>
    </nav>

    <!-- Wrapper -->
    <div id="wrapper">
        <header>
            <div class="inner">
                <h2>Thank you for signing up</h2>
            </div>
        </header>

        <!-- Content -->
        <section id="footer">
            <div class="inner">
                <p>You have successfully signed up.</p>

                <div class="col">
                    <a href="index.php" style="color:white" class="btn">Go to Home Page</a>
                </div>
            </div>
        </section>
    </div>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</div>
</body>
</html>
