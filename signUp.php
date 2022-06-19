<?php
    include "nav.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <h2>Complete the following form and submit to register.</h2>
    <form action="/busweb/registerUser.php" method="post">
        <label for="fname">First name:</label>
        <input type="text" name="fname" id="fname"><br><br>
        <label for="lname">Last name:</label>
        <input type="text" name="lname" id="lname"><br><br>
        <label for="sex" name="sex">Sex</label>
        <input type="text" name="sex" id="sex"><br><br>
        <label for="pno">Phone number:</label>
        <input type="tel" name="pno" id="pno"><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br><br>
        <button type="submit">Submit</button><br><br>
    </form>
</body>
</html>