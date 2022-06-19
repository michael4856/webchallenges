<?php
    include_once "../dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Bus path</title>
</head>
<body>
    <h4>Add needed informations about the bus to add the bus.</h4>
    <form action="/busweb/admin/addbusdb.php" method="post">
        <label for="bus_name">Bus name:</label>
        <input type="text" name="bus_name" id="bus_name"><br><br>
        <label for="start">Start position:</label>
        <input type="text" name="start" id="start"><br><br>
        <label for="destination">Destination:</label>
        <input type="text" name="destination" id="destination"><br><br>
        <label for="start_time">Start time:</label>
        <input type="time" name="time"><br><br>
        <label for="price">Price in Birr</label>
        <input type="float" name="price" id="">
        <button type="submit">Submit</button>
    </form>
   
</body>
</html>