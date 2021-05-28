<?php
session_start();
?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <script langue="JavaScript" type="text/javascript">
        function doSubmit(form){
            window.location.href("agreement_form.html")
        }
    </script>
    <title>Rent-A-Home</title>
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
        <h1><a href="index.php">Rent-A-Home</h1>
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
                <li><a href="elements.php">Maintenance</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <?php if (!isset($_SESSION['username'])){ ?>
                    <li><a href="loginPage.php">Sign Up - Log In</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['username'])){ ?>
                    <li><a href="home.php">My Account</a></li>
                    <li><a href="agreement.php">Agreement</a></li>
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
                <h2>Agreements</h2>
                <p>Please fill out the information fields. </p>
            </div>
        </header>

        <!-- Content -->
        <section id="footer">
            <div class="inner">
                <h2 class="major"></h2>
                <p>Please make sure the information you enter is accurate.</p>
                <form method="post" action="agreement_page.php">
                    <div class="fields">
                        <div class="field">
                            <label for="name">Name of the tenants*</label>
                            <input type="text" name="name" id="name" required/>
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required/>
                        </div>
                        <div class="field">
                            <label for="numberoftenants">Number of tenants moving in*</label>
                            <select id="noadult" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="field">
                            <label for="movedate">Move in date*</label>
                            <input type="date" name="moveemail" id="movedate" required/>
                        </div>
                        <div class="field">
                            <label for="6month">would you like to add a six month clause*</label>
                            <input type="radio" id="Yes" name="break" value="Yes">
                            <label for="Yes">Yes</label>
                            <input type="radio" id="No" name="break" value="no">
                            <label for="no">No</label>
                        </div>
                        <div class="field">
                            <label for="message">Message*</label>
                            <textarea name="message" id="message" rows="4"></textarea>
                        </div>
                        <div class="field">
                            <input type="checkbox" id="accept" name="accept">
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="SUBMIT" onclick="doSubmit()" /></li>
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