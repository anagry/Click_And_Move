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
            window.location.href("thankyouSignUp.php")
        }
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Matching';
                document.getElementById('subbut').disabled = false;
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Not Matching';
                document.getElementById('subbut').disabled = true;
            }
        }
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
                <h2>Login Area</h2>
                <p>Please fill out the information fields. </p>
            </div>
        </header>

        <!-- Content -->
        <section id="footer">
            <div class="inner">
                <h2 class="major"></h2>
                <p>Please make sure the information you enter is accurate.</p>
                <form method="post" action="loginChecker.php">
                    <div class="fields">
                        <div class="field">
                            <label for="username">Please type your username :
                                <input type="text" name="username" id="username" required/>
                            </label>
                        </div>
                        <div class="field">
                            <label>Please type your password :
                                <input name="password" id="password" type="password" required/>
                            </label>
                            <br>
                        </div>
                        <div class="field">
                            <label for="role">Please select your role :</label>
                            <input type="radio" id="role" name="break" value="tenant">
                            <label for="tenant">Tenant</label>
                            <input type="radio" id="role" name="break" value="landlord">
                            <label for="landlord">Landlord</label>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="SUBMIT" id="subbut" onclick="doSubmit()" /></li>
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
