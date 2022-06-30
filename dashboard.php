<?php

//include auth_session.php file on all user panel pages

include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page. we noticed that your are  <?php echo $_SESSION['group']; ?> </p>
        <p><a href="logout.php">Logout</a></p>
    </div>
    <?php
     if(isset($_SESSION["group"])) {
        if($_SESSION["group"]=='trainee') 
        {
         include_once 'trainee.php';
         }else{
             if($_SESSION["group"]=='carpenter') {
                 include_once 'carpenter.php';
                 
             }elseif($_SESSION["group"]=='chief'){
                 include_once 'chief.php';
             }
 
         }
        
       }
       
   
    ?>
   
</body>
</html>
