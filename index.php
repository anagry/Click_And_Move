<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
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
    <header id="header" class="alt">
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

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <div class="logo"><span class="icon fa-gem"></span></div>
            <h2>Click And Move</h2>
            <p>We are here to put you in your new home.</a></p>
        </div>
    </section>

    <!-- Wrapper -->
    <section id="wrapper">

        <!-- One -->
        <section id="one" class="wrapper spotlight style1">
            <div class="inner">
                <a href="#" class="image"><img src="images/pic01.JPG" alt="" /></a>
                <div class="content">
                    <h2 class="major">What is this website all about</h2>
                    <p>The purpose of this website is to make it easy for both the Landlord and the tenant to sign off on their new house.</p>

                </div>
            </div>
        </section>

        <!-- Two -->
        <section id="two" class="wrapper alt spotlight style2">
            <div class="inner">
                <a href="#" class="image"><img src="images/pic02.JPG" alt="" /></a>
                <div class="content">
                    <h2 class="major">What does this website has to offer</h2>
                    <p>This website allows the landlord to make a tenency agreement for the tenants which they can request any changes to
                        and if they are happy with it then they can agree to it. We also offer a platform where both parties can commuicate with
                        each other.
                    </p>

                </div>
            </div>
        </section>

        <!-- Three
            <section id="three" class="wrapper spotlight style3">
                <div class="inner">
                    <a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
                    <div class="content">
                        <h2 class="major">Nullam dignissim</h2>
                        <p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
                        <a href="#" class="special">Learn more</a>
                    </div>
                </div>
            </section>
        -->

        <!-- Four
            <section id="four" class="wrapper alt style1">
                <div class="inner">
                    <h2 class="major">Vitae phasellus</h2>
                    <p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
                    <section class="features">
                        <article>
                            <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                            <h3 class="major">Sed feugiat lorem</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                            <a href="#" class="special">Learn more</a>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                            <h3 class="major">Nisl placerat</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                            <a href="#" class="special">Learn more</a>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
                            <h3 class="major">Ante fermentum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                            <a href="#" class="special">Learn more</a>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                            <h3 class="major">Fusce consequat</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                            <a href="#" class="special">Learn more</a>
                        </article>
                    </section>
                    <ul class="actions">
                        <li><a href="#" class="button">Browse All</a></li>
                    </ul>
                </div>
            </section>

    </section>
    -->

        <!-- Footer
            <section id="footer">
                <div class="inner">
                    <h2 class="major">Get in touch</h2>
                    <p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" />
                            </div>
                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" />
                            </div>
                            <div class="field">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="4"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" /></li>
                        </ul>
                    </form>


                </div>
            </section>

    </div>
    -->

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

</body>
</html>
