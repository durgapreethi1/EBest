<?php
error_reporting(0);
require "init.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$email = $_POST["email"];

//$name = "sdf";
//$password = "sdf";
//$email = "sdf@r54";

$sql = "INSERT INTO `user_info` (`fname`, `lname`,`email,`mobile`,`password`) VALUES ('".$fname."','".$lname."','".$email."','".$mobile."', '".$password."');";
if(!mysqli_query($con, $sql)){
    echo '{"message":"Unable to save the data to the database."}';
}

?>