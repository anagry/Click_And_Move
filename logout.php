<?php
    session_start();
    session_destroy();
    ?>
    <!DOCTYPE HTML>
    <!--
        Solid State by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    -->
    <html>
    <head>
        <title>Sign Out</title>
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
            <h1><a href="index.php">Home</a></h1>
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
        <section id="wrapper">
            <header>
                <div class="inner align-center">
                        <h2>You've been signed out.</h2>
                        <p>Have a pleasant day.</p>
                    <div class="col">
                        <a href="loginPage.php" style="color:white" class="btn">Login</a>
                    </div>
                </div>
            </header>
        </section>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
