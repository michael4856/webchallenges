<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include_once "./dbh.inc.php";
    include "./nav.html";

    ?>
    <?php 
        if (isset($_COOKIE['user']))
        $ticket = "./ticket.php";
        else 
        $ticket = "/log.php";
    ?>
    <a href="<?php echo $ticket ?>"><?php
    $sql = "SELECT * FROM bus_info;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['bus_name']. " ".$row['start']. " ".$row['destination']." ".$row['price']." <br>" ;
            
        }
    }
        ?></a>
</body>
</html>