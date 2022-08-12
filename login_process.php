<?php 
session_start();
include 'db.php';
 if(isset($_POST['submit']))
 {
    $email = mysqli_real_escape_string($con,$_POST['email']);  
    $password = mysqli_real_escape_string($con,$_POST['pass']);
 
      
      
        //to prevent from mysqli injection
        /*  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      */
        $sql = "SELECT  * from `login` where Email = '$email' and Password = '$password'";  
        $result = mysqli_query($con, $sql); 

        /*$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  */

        if(mysqli_num_rows($result)>0)
        {

            $row = mysqli_fetch_array($result); 
            $_SESSION['authentication'] = true;
            $_SESSION['auth_user'] = [
                'id'=>$row['id'],
                'email'=>$row['email'],
                'user_type'=>$row['user_type'],
            ];

            //$_SESSION['message']="You are Logged In Successfully";
                if($row['user_type'] == "customer")
                {
                    header("Location:admin/customer_home.php");
                    exit(0);
                }
                elseif($row['user_type'] == "admin"){
                    header("Location:admin/admin_home.php");
                    exit(0);
                }
                elseif($row['user_type'] == "Worker"){
                    header("Location:admin/workers_home.php");
                    exit(0);
                }
                else
                {
                   echo "<script>alert('incorrect username or password')</script>";
                    exit(0);
                }
        }    
        /*      
        if($count == 1){  
            header("Location:admindashboard.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
        */
        else
        {
            $_SESSION['message']="Invalid Email or Password";
            header("Location: login.php");
            exit(0);
        }

 }
?>