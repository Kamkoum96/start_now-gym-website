<?php
session_start();
require_once('config.php');



if(isset($_POST['login'])){

  if(empty($_POST['User']) || empty($_POST['Pass']))
  {
    header("location:index.php?Empty=Please fill in the blanks");
  }
  else{
    $query="select * from user where username='".$_POST['User']."' and password='".$_POST['Pass']."'";
    $res=mysqli_query($con,$query);
    if(mysqli_fetch_assoc($res))
    {
      $_SESSION['User']=$_POST['User'];
      header("location:login/index2.php");
    }
    else {
      header("location:index.php?Invalid= Please enter correct username and password");
    }
  }
}
else{
  echo "not working";
}


 ?>
