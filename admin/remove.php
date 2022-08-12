<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "rubicon";
$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
$id = $_GET['id']; // get id through query string
 
$del = mysqli_query($con,"UPDATE `workers` SET `status`=0 WHERE id=$id;"); // update query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:workers_list.php"); // redirects to all records page
    exit;   
}
else
{
    echo "Error deleting record"; // display error message if not delete
    
}
?>
