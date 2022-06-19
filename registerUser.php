<?php
    include "dbh.inc.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $pno = $_POST['pno'];
    $pwd = $_POST['password'];

    $sql = "INSERT INTO user (fname,lname,sex,phone_number,email,password) VALUES ('$fname','$lname','$sex','$pno','$email','$pwd');";
    $cookie = setcookie("user", $fname, time() + (86400 * 30), "/");

    $result = mysqli_query($conn,$sql);
    header("Location: /busweb/home.php");
    echo "The user has successfully registered.";
?>