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

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- style  -->
	<link rel="stylesheet" href="css/style.css">


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
						<a href="index.php"><img src="images/logo.png"></a>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="pricing.php">Pricing</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					</div>


			</div>
		</div>
	</nav>
	<!-- top -->



	<!-- header -->
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/gym5.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Action is the foundational key to all success</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header -->


	<!-- Map -->
	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div id="map" class="fh5co-map"></div>
			</div>
		</div>
	</div>
	<!-- Map -->

	<!-- Contact -->
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Contact Us</h2>
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">

					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">08 Rue Newton<br>Ariana 2088 - Tunisia</li>
							<li class="phone"><a href="tel://1234567920">(+216) 55 614 886</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">startnow@gmail.com</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form action="mailto:mehdi.miliii@gmail.com" method="post" enctype="text/plain">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
							<input type="reset" value="Reset" class="btn btn-primary">
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>
	<!-- Contact -->



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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6--cCug05FTucRbY9g_ONTYssyK0snDI&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
