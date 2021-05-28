<?php
include "connProperties.php";

session_start();
$x = 0;
$result1 = 0;
$landlord_id = 0;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $sql = "select * from userdata where username = '$username'";
    //$password = md5($password);
    //echo $password;
    //$sql = "select * from user_login_info where username = '$username' and password = '$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['ID'];
        $fname = $row['FIRST_NAME'];
        $lname = $row['LAST_NAME'];
        $phoneNumber = $row['PHONE_NUMBER'];
        $email = $row['EMAIL'];
        $fullname = $fname . ' ' . $lname;
    }
        $sql1 = "select * from properties where tenant_id = '$id'";
        $result1 = mysqli_query($con, $sql1);
        if (mysqli_num_rows($result1) > 0) {
            $row1 = mysqli_fetch_assoc($result1);
            $property_address = $row1['address'];
            $property_id = $row1['id'];
            $price = $row1['price'];
            $lease = $row1['lease'];
            $break_clause = $row1['break_clause'];
            $image_name = $row1['image_name'];
            $landlord_id = $row1['landlord_id'];

            $sql1 = "select * from userdata where id = '$landlord_id'";
            $result1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($result1) > 0) {
                $row = mysqli_fetch_assoc($result1);
                $landlord_id = $row['ID'];
                $landlord_fname = $row['FIRST_NAME'];
                $landlord_lname = $row['LAST_NAME'];
                $landlord_phoneNumber = $row['PHONE_NUMBER'];
                $landlord_email = $row['EMAIL'];
                $landlord_fullname = $landlord_fname . ' ' . $landlord_lname;
            }
        } else {
            echo "You're not connected to any building";
        }
}
?>
<!doctype html>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <script langue="JavaScript" type="text/javascript">
        function ShowHideDiv(btnPassport) {
            var dvPassport = document.getElementById("reqPrice");
            if (dvPassport.style.display == "none")
                dvPassport.style.display = "block";
            else
                dvPassport.style.display = "none";
        }
        function ShowHideDiv1(btnPassport) {
            var dsPassport = document.getElementById("reqBreak");
            if (dsPassport.style.display == "none")
                dsPassport.style.display = "block";
            else
                dsPassport.style.display = "none";
        }
        function removeElement(elementId) {
            // Removes an element from the document.
            var element = document. getElementById(elementId);
            element. parentNode. removeChild(element);
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
                <h2>Agreement</h2>
            </div>
        </header>

        <div class="container">
            <div class="grid">
                <div class="col-1">
                    <div class="flex item justify-content-between">
                        <div class="flex">
                            <div class="img text-center">
                                <img src="./assets/pro1.png" alt="">
                            </div>
                            <div class="title">
                                <h3><?php echo $property_address?></h3>
                                <span>Electronics</span>
                                <div class="buttons">
                                    <button type="submit"><i class="fas fa-chevron-up"></i> </button>
                                    <input type="text" class="font-title" value="1">
                                    <button type="submit"><i class="fas fa-chevron-down"></i> </button>
                                </div>
                                <a href="#">Save for later</a> |
                                <a href="#">Delete From Cart</a>
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red">$349</h4>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="subtotal text-center">
                        <h3>Price Details</h3>
                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Products ( 3 items ) : </label>
                                <span>$399</span>
                            </li>
                            <li class="flex justify-content-between">
                                <label for="price">Delivery Charges : </label>
                                <span>Free</span>
                            </li>
                            <hr>
                            <li class="flex justify-content-between">
                                <label for="price">Amout Payble : </label>
                                <span class="text-red font-title">$399</span>
                            </li>
                        </ul>
                        <div id="paypal-payment-button">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <script src="https://www.paypal.com/sdk/js?client-id=AaoynwokdocJmBajc1MdrQutu-gaXgsdDMg5_Nnby-XEkJxD3PG4qTGx6H-REZWsSQtw2beTkwzgWp3Z&disable-funding=credit,card"></script>
    <script src="index.js"></script>
</body>
</html>
