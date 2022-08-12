<?php
  include_once('db.php');
  if (isset($_POST['submit'])) {
    
    $name = $con->real_escape_string($_POST['name']);
    $phone= $con->real_escape_string($_POST['phone']);

    $email= $con->real_escape_string($_POST['email']);
    $password= $con->real_escape_string($_POST['password']);
    $role = $_POST['role'];
    if($role == "1")
    {  
        $user_type="Customer";
        $query= "INSERT INTO `customers`(`name`, `phone`, `email`, `password`,`user_type`) VALUES ('$name','$phone','$email','$password','$user_type')";
        $result= $con->query($query);
        $query2= "INSERT INTO `login`( `email`, `password`,`user_type`) VALUES ('$email','$password','$user_type')";
        $result2= $con->query($query2);
        if ($result==true) {
          header("Location:index.php");
          die();
        }else{
          $errorMsg  = "You are not Registred..Please Try again";
        }   
    }
    else
    {
        $user_type="Worker";
        $q1= "INSERT INTO `workers`(`name`, `phone`, `email`, `password`) VALUES ('$name','$phone','$email','$password')";
        $r1= $con->query($q1);
        $q2= "INSERT INTO `login`( `email`, `password`,`user_type`) VALUES ('$email','$password','$user_type')";
        $r2= $con->query($q2);
        if ($r2==true) {
          header("Location:reg_success.html");
          die();
        }else{
          $errorMsg  = "You are not Registred..Please Try again";
        }   
    }
    
    
       
    }
?>