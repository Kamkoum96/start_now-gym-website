<?php
require_once('config.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Start NOW</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="....." />
	<meta name="author" content="TIC-E" />

	<link rel="icon" href="images/icon.ico">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- style  -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>


	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">



	<!-- top -->
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<?php

					if((isset($_POST['register'])) or (isset($_POST['member'])))
					 {



						 if ($_POST['password']==$_POST['confirmpassword']){

						 $username = $_POST['username'];
						 $email = $_POST['email'];
						 $password = $_POST['password'];
						 $confirmpassword = $_POST['confirmpassword'];




						 $sql = "INSERT INTO user (username,email,password) VALUES(?,?,?)";
						 $stmtinsert= $db->prepare($sql);
						 $result = $stmtinsert->execute([$username,$email,$password]);
						 if($result){
							echo "<script type='text/javascript'>swal('Good! ','Succesfully saved!','success')</script>";
						 }
						 else{
							echo "<script type='text/javascript'>swal('Sorry ! ','There are errors while saving the data !','error')</script>";
						 }

						}
						else{
						echo "<script type='text/javascript'>swal('Sorry ! ','two password do not match !','error')</script>";

					}
				}
							 ?>
							 <?php
							 if(@$_GET['Empty']==true){
								 echo "<script type='text/javascript'>swal('Sorry ! ','Please fill in the blanks !','error')</script>";}
							 ?>


							 <?php
							 if(@$_GET['Invalid']==true){
								 echo "<script type='text/javascript'>swal('Sorry ! ','Please enter correct username and password!','error')</script>";}
							 ?>

						<p class="num">Phone : (+216) 55 614 886</p>

						<button class="button2" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

						<div id="id01" class="modal">

						  <form class="modal-content animate" action="Process.php" method="post">
							<div class="imgcontainer">
							  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
							  <img src="images/user.png" alt="Avatar" class="avatar">
							</div>

							<div class="container2" align="left">
							  <label for="uname"><b>Username</b></label>
							  <input type="text" placeholder="Enter Username" name="User" >

							  <label for="psw"><b>Password</b></label>
							  <input type="password" placeholder="Enter Password" name="Pass" >

							  <button type="submit" name="login" >Login</button>
							  <label>
								<input type="checkbox" checked="checked" name="remember"> Remember me
							  </label>
							</div>

							<div class="container2" style="background-color:#f1f1f1">
							  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
							</div>
						  </form>
						</div>

						<button class="button3" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>

						<div id="id02" class="modal">

							<form class="modal-content animate" action="index.php" method="post">

 						 <div class="imgcontainer">
 							 <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
 							 <img src="images/user.png" alt="Avatar" class="avatar">
 						 </div>

 						 <div class="container2" align="left">
 							 <label for="uname"><b>Full name</b></label>
 							 <input type="text" placeholder="Enter Username" name="username" required>

 							 <label for="umail"><b>Email</b></label>
 							 <input type="email" placeholder="Enter Email" name="email" required>

 							 <label for="psw"><b>Password</b></label>
 							 <input type="password" placeholder="Enter Password" name="password" required>

 							 <label for="psw2"><b>Password (confirmation)</b></label>
 							 <input type="password" placeholder="Enter Password" name="confirmpassword" required>

 							 <button type="submit"  name="register">Sign Up</button>

 						 </div>

 						 <div class="container2" style="background-color:#f1f1f1">
 							 <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
 						 </div>
 						 </form>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<a href="index.php"><img src="images/logo.png" style="background: white"></a>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="pricing.php">Pricing</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					</div>


			</div>
		</div>
	</nav>
	<!-- top -->



	<!-- header -->
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_4.png);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Make it a lifestyle, not a duty</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header -->



	<!-- Training -->
	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/dumbbell.svg" style="background: none"></span>
						<h3>Weight Lifting</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis modi animi fugiat similique porro, nostrum dolores maxime!</p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/two-boxing-gloves.svg" style="background: none"></span>
						<h3>Boxing</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis temporibus adipisci reiciendis.</p>
						<br>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/yoga-carpet.svg" style="background: none"></span>
						<h3>Yoga</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius asperiores vitae velit veniam!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Training -->


	<!-- Training -->
	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/exercise.svg" style="background: white"></span>
						<h3>Runnig</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis modi animi fugiat similique porro, nostrum dolores maxime! consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/cardio.svg" style="background: white"></span>
						<h3>Cardio</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis modi animi fugiat similique dolores maxime!</p>
						<br>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/ballet.svg" style="background: white"></span>
						<h3>Ballet Dance</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis modi animi fugiat similique dolores maxime!</p>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Training -->


	<!-- Schedule -->
	<div id="fh5co-schedule" class="fh5co-bg" style="background-image: url(images/sch.png);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Class Schedule</h2>
				</div>
			</div>

			<div class="row animate-box">

				<div class="fh5co-tabs">
					<ul class="fh5co-tab-nav">
						<li class="active"><a href="#" data-tab="1"><span class="visible-xs">S</span><span class="hidden-xs">Sunday</span></a></li>
						<li><a href="#" data-tab="2"><span class="visible-xs">M</span><span class="hidden-xs">Monday</span></a></li>
						<li><a href="#" data-tab="3"><span class="visible-xs">T</span><span class="hidden-xs">Tuesday</span></a></li>
						<li><a href="#" data-tab="4"><span class="visible-xs">W</span><span class="hidden-xs">Wednesday</span></a></li>

						<li><a href="#" data-tab="5"><span class="visible-xs">Th</span><span class="hidden-xs">Thursday</span></a></li>
						<li><a href="#" data-tab="6"><span class="visible-xs">F</span><span class="hidden-xs">Friday</span></a></li>
						<li><a href="#" data-tab="7"><span class="visible-xs">S</span><span class="hidden-xs">Saturday</span></a></li>
					</ul>

					<!-- Tabs -->
					<div class="fh5co-tab-content-wrap">
						<div class="fh5co-tab-content tab-content active" data-tab-content="1">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="2">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="3">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="4">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="5">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="6">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="7">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" style="background: none"></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" style="background: none"></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" style="background: none"></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Schedule -->




	<!-- Pricing -->
	<div id="fh5co-pricing">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Pricing Plan</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="pricing">
					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Starter</h2>
							<div class="price"><sup class="currency">TND</sup>40<small>/month</small></div>
							<ul class="classes">
								<li>5 Cardio Classes</li>
								<li class="color">10 Running Lesson</li>
								<li>5 Yoga Classes</li>
								<li class="color">20 Aerobics</li>
								<li>5 Boxing Classes</li>
								<li class="color">5 Massage</li>
								<li>5 Body Building</li>
							</ul>
							<button   class="btn btn-select-plan btn-sm" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Select Plan</button>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Basic</h2>
							<div class="price"><sup class="currency">TND</sup>70<small>/month</small></div>
							<ul class="classes">
								<li>10 Cardio Classes</li>
								<li class="color">10 Running Lesson</li>
								<li>5 Yoga Classes</li>
								<li class="color">20 Aerobics</li>
								<li>5 Boxing Classes</li>
								<li class="color">5 Massage</li>
								<li>10 Body Building</li>
							</ul>
								<button   class="btn btn-select-plan btn-sm" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Select Plan</button>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							<h2 class="pricing-plan pricing-plan-offer">Pro <span>Best Offer</span></h2>
							<div class="price"><sup class="currency">TND</sup>120<small>/month</small></div>
							<ul class="classes">
								<li>15 Cardio Classes</li>
								<li class="color">10 Running Lesson</li>
								<li>15 Yoga Classes</li>
								<li class="color">20 Aerobics</li>
								<li>15 Boxing Classes</li>
								<li class="color">5 Massage</li>
								<li>15 Body Building</li>
							</ul>
								<button   class="btn btn-select-plan btn-sm" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Select Plan</button>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Unlimited</h2>
							<div class="price"><sup class="currency">TND</sup>160<small>/month</small></div>
							<ul class="classes">
								<li>20 Cardio Classes</li>
								<li class="color">10 Running Lesson</li>
								<li>15 Yoga Classes</li>
								<li class="color">20 Aerobics</li>
								<li>15 Boxing Classes</li>
								<li class="color">5 Massage</li>
								<li>20 Body Building</li>
							</ul>
								<button   class="btn btn-select-plan btn-sm" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Select Plan</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pricing -->





	<!-- Discount -->
	<div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2>Fitness Classes this Summer <br> <span> Pay Now and <br> Get <span class="percent">35%</span> Discount</span></h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p>		<button class="btn btn-primary" onclick="document.getElementById('id02').style.display='block'" style="width:auto;" name="member" >Become a Member</button>	</p>
					<!-- <p><a href="#" class="btn btn-default btn-lg">Become a Member</a></p> -->
				</div>
			</div>
		</div>
	</div>
	<!-- Discount -->

	<!-- Footer -->
	<footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(images/footer.jpg); height: 400px" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>A Little About Start NOW.</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					<p>		<button class="btn btn-primary" onclick="document.getElementById('id02').style.display='block'" style="width:auto;" name="member" >Become a Member</button>	</p>
				</div>
				<div class="col-md-8">
					<h3>Classes</h3>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							<li><a href="Cadio.php">Cardio</a></li>
							<li><a href="Weight_lifting.php">Body Building</a></li>
							<li><a href="yoga.php">Yoga</a></li>
							<li><a href="boxing.php">Boxing</a></li>
							<li><a href="running.php">Running</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							<li><a href="boxing.php">Boxing</a></li>
							<li><a href="#">Martial Arts</a></li>
							<li><a href="#">Karate</a></li>
							<li><a href="#">Kungfu</a></li>
							<li><a href="#">Basketball</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<img src="images/logo2.png" style="background: none">
					</div>
				</div>
			</div>

		</div>
	</footer>
	<!-- Footer -->


	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>



	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>

	<script type="text/javascript">
		$(windows).on("scroll", function() {
			if($(windows).scrollTop()){
				$('nav').addClass('black');
			}else{
				$('nav').removeClass('black')
			}
		})
	</script>



	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>






	</body>
</html>
