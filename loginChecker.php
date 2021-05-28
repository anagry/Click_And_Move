<?php

session_start();
include "../RentalBuddy/connProperties.php";

if (isset($_POST['username']) && isset($_POST['password']) &&
    isset($_POST['break'])){

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        $username = test_input($_POST['username']);
        $password = test_input($_POST['password']);
        $user_type = test_input($_POST['break']);

        if (empty($username)) {
            echo "Username must be provided";
        } else if (empty($password)) {
            echo "Password must be provided";
        } else {
            $sql = "select * from user_login_info where username = '$username' and password = '$password'";
            //$password = md5($password);
            //echo $password;
            //$sql = "select * from user_login_info where username = '$username' and password = '$password'";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['PASSWORD'] == $password && $row['USER_TYPE'] == $user_type) {
                    $_SESSION['username'] = $row['USERNAME'];
                    $_SESSION['user_type'] = $row['USER_TYPE'];
                    header("Location: home.php");
                }else{
                    echo "Something went wrong.";
                }
            } else {
                echo "Something went wrong. Please try again!";
                echo $user_type;
            }
        }
}else{
    header("Location: ../index.php");
}

