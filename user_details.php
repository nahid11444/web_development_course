<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_details_session</title>
    <?php session_start() ?>
</head>
<body>
    Logged in user details:
    <br>
    Username : <?php echo $_SESSION['username'].'<br>'; ?>
    Password : <?php echo $_SESSION['password'];?>
</body>
</html>