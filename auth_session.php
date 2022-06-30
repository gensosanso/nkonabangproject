<?php
    session_start();
      $connection = new PDO("mysql:host=bybxdmjoztajm04ieume-mysql.services.clever-cloud.com;
                           dbname=bybxdmjoztajm04ieume", 
                           "u40sswnbrx8jzr5zroot", 
                           "h3a0xNBIAhPSALaH8yhM");
  

    // $connection = new PDO("mysql:host=localhost;
    //                        dbname=officehqtest", 
    //                        "root", 
    //                        "");
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];

    $query    = "SELECT * FROM `personal_user` WHERE user_name='$username' AND password='" . md5($password) . "'";
    $statement = $connection->prepare($query);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    //var_dump($row["group"]);
    $_SESSION['group']=$row["group"];
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?>
