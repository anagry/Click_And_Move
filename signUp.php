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
                <h2>Sign Up</h2>
                <p>Please fill out the information fields. </p>
            </div>
        </header>

        <!-- Content -->
        <section id="footer">
            <div class="inner">
                <h2 class="major"></h2>
                <p>Please make sure the information you enter is accurate.</p>
                <form method="post" action="thankyouSignUp.php">
                    <div class="fields">
                        <div class="field">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" required/>
                        </div>
                        <div class="field">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" required/>
                        </div>
                        <div class="field">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" required/>
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required/>
                        </div>
                        <div class="field">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="field">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="text" name="phoneNumber" id="phoneNumber" pattern="[0-9]{10}" required/>
                        </div>
                        <div class="field">
                            <label for="role">I am a</label>
                            <input type="radio" id="role" name="break" value="tenant">
                            <label for="tenant">Tenant</label>
                            <input type="radio" id="role" name="break" value="landlord">
                            <label for="landlord">Landlord</label>
                        </div>
                        <div class="field">
                            <label>Choose a Password :
                                <input name="password" id="password" type="password" onkeyup='check();'  required/>
                            </label>
                            <br>
                            <label>Confirm Password:
                                <input type="password" name="confirm_password" id="confirm_password"  onkeyup='check();' required/>
                                <span id='message'></span>
                            </label>
                        </div>
                        <div class="field">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob" required>
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
