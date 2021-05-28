<?php
include "connProperties.php";

//function sanitize_my_email($field) {
//    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
//    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
//        return true;
//    } else {
//        return false;
//    }
//}
//
//$to_email = $_POST['email'];
//$name = $_POST['name'];
//$message = $_POST['message'];
//$subject = 'Testing PHP Mail';
//$headers = 'From: testing@myNew_Appisdebest.com';
//
//$secure_check = sanitize_my_email($to_email);
//if ($secure_check == false) {
//    echo "Invalid input";
//} else { //send email
//    mail($to_email, $subject, $message, $headers);
//    echo "This email is sent using PHP Mail";
//}
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
        <h1><a href="index.php">Rent-A-Home</a></h1>
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
                <li><a href="elements.php">Maintenance</a></li>
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

        <!-- Content -->
        <section id="footer">
            <div class="inner">
                <h2 class="major"></h2>
                <p>Welcome to your new agreement. You're almost there.</p>
                <form method="post" action="payment.php">
                    <div class="fields">
                        <div class="field">
                            <p><strong>PROPERTY</strong></p>
                            <p><?php echo $property_address?></p>
                            <img src="../RentalBuddy/images/<?php echo $image_name?>" alt="<?php echo $property_address?>" width="700" height="600">
                        </div>
                        <div class="field">
                            <p><strong>FULL NAME</strong></p>
                            <?php echo $fullname ?>
                        </div>
                        <div class="field">
                            <p><strong>AGREED PRICE PER MONTH</strong></p>
                            <?php echo "${price} pounds per month."?>
                        </div>
                        <div class="field">
                            <p><strong>BREAK CLAUSE</strong></p>
                            <?php echo $break_clause?>
                        </div>
                        <div class="field">
                            <p><strong>LEASE</strong></p>
                            <?php echo $lease ?>
                        </div>
                        <div class="field">
                            <p><strong>YOUR NEW LANDLORD WILL BE</strong></p>
                            <?php echo $landlord_fullname ?>
                        </div>
                        <div class="field">
                            <p><strong>LANDLORDS PHONE</strong></p>
                            <?php echo $landlord_phoneNumber ?>
                        </div>
                        <div class="field">
                            <p><strong>LANDLORDS EMAIL</strong></p>
                            <?php echo $landlord_email ?>
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