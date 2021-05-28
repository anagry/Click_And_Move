<?php
$cname="localhost";
$cuser="root";
$cpassword="";

$cdbname="rentalbuddy";

$con = mysqli_connect($cname, $cuser, $cpassword, $cdbname);
if(!$con){
    echo "Connection Failed";
    exit();
}