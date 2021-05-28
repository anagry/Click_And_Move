<?php
session_start();
if (isset($_SESSION['username'])){
?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Landlord View</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

    <script>
        function pageRedirect(num) {
            if (num == 1){
                window.location.replace("createAgreement.php");
            }else {
                window.location.replace("loginPage.php");
            }
        }
    </script>
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
                <li><a href="elements.php">Maintenance</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <?php if (!isset($_SESSION['username'])){ ?>
                    <li><a href="loginPage.php">Sign Up - Log In</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['username'])){ ?>
                    <li><a href="home.php">My Account</a></li>
                    <li><a href="agreement_page.php">Agreement</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>
            </ul>
            <a href="#" class="close">Close</a>
        </div>
    </nav>

    <!-- Wrapper -->
    <section id="wrapper">
        <header>
            <div class="inner align-center">
            <?php if($_SESSION['user_type'] == 1){?>
                <h2>Welcome <?php echo $_SESSION['username']?> (Landlord)</h2>
                <p>This will be your new home screen.</p>
                <section id="footer">
                    <div class="inner">
                        <h2 class="major"></h2>
                        <form method="post" action="">
                            <div class="fields">
                                <div style="position: absolute; top: 75%; left: 17%">
                                    Here you can create a new agreement for your new tenants.
                                </div>
                                <div style="position: absolute; top: 80%; left: 25%">
                                    <input type="button" name="newAgreement" id="newAgreement" onclick="pageRedirect(1)" value="NEW AGREEMENT">
                                </div>
                                <div style="position: absolute; top: 75%; left: 55%">
                                    In this page you'll be able to manage your property.
                                </div>
                                <div style="position: absolute; top: 80%; left: 60%">
                                    <input type="button" name="manProperty" id="manProperty" onclick="pageRedirect(2)" value="MANAGE PROPERTY">
                                </div>
                            </div>
                        </form>


                    </div>
                </section>
            <?php }else if ($_SESSION['user_type'] == 0){?>
                <h2>Welcome <?php echo $_SESSION['username']?> (Tenant)</h2>
                <p>This will be your new home screen.</p>
            <?php } ?>
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
<?php }else{
    header("Location: ../index.php");
}