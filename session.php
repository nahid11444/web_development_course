<?php
    session_start() //or it can be defined above head of html
?>

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
     $username = $_POST['username'];
     $password = $_POST['password'];

     $_SESSION['username']= $username;
     $_SESSION['password']= $password;
     ?>
</body>
</html>