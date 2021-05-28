<?php
include "connProperties.php";
session_start();

$username = $_SESSION['username'];
$sql = "select * from userdata where username = '$username'";
//$password = md5($password);
//echo $password;
//$sql = "select * from user_login_info where username = '$username' and password = '$password'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $id = $row['ID'];

}
$sql1 = "select * from properties where tenant_id = '$id'";
$result1 = mysqli_query($con, $sql1);
if (mysqli_num_rows($result1) > 0) {
    $row1 = mysqli_fetch_assoc($result1);
    $property_id = $row1['id'];
    $property_address = $row1['address'];
    $price = $row1['price'];
    $lease = $row1['lease'];
    $break_clause = $row1['break_clause'];
    $image_name = $row1['image_name'];

    $diff_price = $_POST['ppm'];
    $diff_clause = $_POST['clauseMy'];
    echo $diff_clause;
    echo $diff_price;

    if (($diff_price == $price) && ($diff_clause == $break_clause)){
        header("Location: finalAgreement.php");
    }else{
        $query1 = "SELECT MAX(id) + 1 FROM properties_for_evaluation";
        $result = "";
        $result = mysqli_query($con,$query1);
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        $query1 = "insert into properties_for_evaluation(id, property_id, different_price, different_clause) values('$row[0]', '$property_id', '$diff_price', '$diff_clause')";
        mysqli_query($con, $query1);
        header("Location: negotiation.php");
    }
}else{
    echo "Mistakes were made!!!";
}