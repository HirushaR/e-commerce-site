<?php
 $host ="localhost";
$username = "root";
$password = "";
$database = "first";

$conn = mysqli_connect($host,$username,$password,$database) or die("cannot connect db");

session_start();

    if (isset($_POST['register_btn'])){
        $username = mysqli_real_escape_string($conn,$_POST['rej-name']);
        $email = mysqli_real_escape_string($conn,$_POST['rej-email']);
        $password = mysqli_real_escape_string($conn,$_POST['rej-psw1']);
        $password2 = mysqli_real_escape_string($conn,$_POST['rej-psw2']);

        if ($password == $password2){
          $password = md5($password);
          $sql = "INSERT INTO user(name,email,password) VALUES('".$username."','".$email."','".$password."')";
          $result = mysqli_query($conn,$sql);

        if ($result)
          {
            $_SESSION['message']= "you are now log in";
            $_SESSION['username']= $username;
            header("location:home.php");
          }
          else
          {
            echo "Error";
          }
        }else {
           echo "The two password do not match";
        }
    } ?>
