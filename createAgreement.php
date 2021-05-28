<?php
include "connProperties.php";

session_start();
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
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
        <h1><a href="index.php">Click And Move</a></h1>
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
                <li><a href="agreement.php">Agreement</a></li>
                <li><a href="elements.php">Contact</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <?php if (!isset($_SESSION['username'])){ ?>
                    <li><a href="loginPage.php">Sign Up - Log In</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['username'])){ ?>
                    <li><a href="home.php">My Account</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>
            </ul>
            <a href="#" class="close">Close</a>
        </div>
    </nav>

    <!-- Wrapper -->
    <div id="wrapper">
        <header>
            <div class="inner">
                <h2>Create A New Agreement</h2>
            </div>
        </header>

        <!-- Content -->
        <section id="footer">
            <div class="inner">
                <h2 class="major"></h2>
                <form method="post" action="proccessNewAgreement.php" enctype= "multipart/form-data">
                    <div class="fields">
                        <div class="field">
                            <p><strong>ADDRESS</strong></p>
                            <input type="text" value="" name="newAddress">
                        </div>
                        <div class="field">
                            <p><strong>PRICE PER MONTH</strong></p>
                            <input type="text" name="newPrice" value="">
                        </div>
                        <div class="field">
                            <p><strong>BREAK CLAUSE</strong></p>
                            <input type="text" name="newClause" value="">
                        </div>
                        <div class="field">
                            <p><strong>LEASE</strong></p>
                            <p></p>
                            <input type="text" value="" name="newLease" >
                        </div>
                        <div class="field">
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="SUBMIT" onclick="doSubmit()" name="submit"/></li>
                    </ul>
                </form>


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
