<?php
    include_once "../dbh.inc.php";


    $bus_name = $_POST['bus_name'];
    $start = $_POST['start'];
    $destination = $_POST['destination'];
    $start_time = $_POST['time'];
    $price = $_POST['price'];
    $sql = "INSERT INTO bus_info (bus_name,start,destination,price,start_time) VALUES ('$bus_name','$start','$destination','$price','$start_time');";
   

    $result = mysqli_query($conn,$sql);
    header("Location: /busweb/home.php");
    echo "The bus info has successfully registered.";
?>