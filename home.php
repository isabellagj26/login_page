<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.scss" type="text/css">
    <title>Document</title>
</head>
<body>
    <h2>
        <div class:"card-header">
            <b>Welcome User</b>
        </div>   
        <h3><b>Name: </b><?php echo $_SESSION['user_first_name'];?></h3>
        <h3><b>Lastname: </b><?php echo $_SESSION['user_last_name'];?></h3>
        <h3><b>Email: </b><?php echo $_SESSION['user_email_address'];?></h3>
    <?php
     echo '<div class="card-header">Welcome User</div><div class="card-body">';
     echo '<img src="' . $_SESSION["user_image"] . '" class="rounded-circle container"/>';
     echo '<h3><a href="logout.php">Logout</h3></div>';
    ?>
    </h2>
</body>
</html>