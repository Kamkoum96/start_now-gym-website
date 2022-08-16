<?php

$db_user = "root";
$db_pass = "";
$db_name = "users";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$con=mysqli_connect('localhost','root','','users');

if(!$con){
  die(' Please check Your Connection'.mysqli_error($con));
}
?>
