<?php
    include "nav.html";
    include "dbh.inc.php";
    echo "login page is loading.";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql ="SELECT * FROM user WHERE email = '".$email."'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck == 1){
        $row = mysqli_fetch_assoc($result);
        echo $row['email'];
        header("Location: /busweb/home.php");
     }
    else{
         
       echo "Hello there you are not supposed to be here.";
    }
?>