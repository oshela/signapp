<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "registry";
$conn = mysqli_connect($server , $username ,$password , $db);
if(!$conn){
    die("error in database connection").mysqli_error($conn); 

}
?>