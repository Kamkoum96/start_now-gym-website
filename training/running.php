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
						 


						<p class="num">Phone : (+216) 55 614 886</p>

						<button class="button2" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

						<div id="id01" class="modal">
						  <form class="modal-content animate" action="/action_page.php" method="post">
							<div class="imgcontainer" >
							  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
							  <img src="images/user.png" alt="Avatar" class="avatar">
							</div>

							<div class="container2" align="left">
							  <label for="uname"><b>Username</b></label>
							  <input type="text" placeholder="Enter Username" name="Username" required>

							  <label for="psw"><b>Password</b></label>
							  <input type="password" placeholder="Enter Password" name="Password" required>

							  <button type="submit">Login</button>
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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="about.php">Trainer</a></li>
							<li><a href="about.php">Training</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Training</a>
								<ul class="dropdown">
									<li><a href="Weight_lifting.php">Weight lifting</a></li>
									<li><a href="running.php">Running</a></li>
									<li><a href="yoga.php">Yoga</a></li>
									<li><a href="boxing.php">Boxing</a></li>
								</ul>
							</li>
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
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/running2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Make it a lifestyle, not a duty</h1>
							<p><a class="btn btn-primary popup-vimeo">Watch Our Gallery</a></p>
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
						<span><img class="img-responsive" src="images/dumbbell.svg" alt=""></span>
						<h3>Weight Lifting</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis modi animi fugiat similique porro, nostrum dolores maxime!</p>
						<p><a href="Weight_lifting.php" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/two-boxing-gloves.svg" alt=""></span>
						<h3>Boxing</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis temporibus adipisci reiciendis.</p>
						<br>
						<p><a href="boxing.php" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/yoga-carpet.svg" alt=""></span>
						<h3>Yoga</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</p>
						<p><a href="yoga.php" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Training -->
	
	<div><br><br><br></div>



	<div class="container-fluid gtco-feature" id="services">
    <div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="cover">
						<div class="card">
							<svg
									class="back-bg"
									width="100%" viewBox="0 0 900 700" style="position:absolute; z-index: -1">
								<defs>
									<linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
										<stop offset="10%" stop-color="rgb(233,78,27)" stop-opacity="1"/>
									</linearGradient>
								</defs>
								<path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
									  d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"/>
							</svg>
							<!-- *************-->

							<svg width="100%" viewBox="0 0 700 500">
								<clipPath id="clip-path">
									<path d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"></path>
								</clipPath>
								<!-- xlink:href for modern browsers, src for IE8- -->
								<image clip-path="url(#clip-path)" xlink:href="images/running4.jpg" width="100%"
									   height="465" class="svg__image"></image>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<h2> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus. </h2>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus turpis nisl, vitae dictum mi
						semper convallis. Ut sapien leo, varius ac dapibus a, cursus quis ante. </p>
					<p>
						<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati totam quam, sed sunt, nulla modi. Doloribus nam, recusandae reiciendis distinctio!
						</small>
					</p>
					<a href="#">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
			</div>
		</div>
	</div>

	<div><br><br></div>

	<div class="container-fluid gtco-feature" id="services">
    <div class="container">
			<div class="row">
				<div class="col-md-7">
					<h2> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, aut. </h2>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam autem deserunt vel magni quam ipsum, adipisci, at officia, quod rem quas, ad necessitatibus sapiente repellendus. </p>
					<p>
						<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quam sapiente beatae, pariatur inventore nobis. Nemo eveniet molestiae eius, aspernatur minima numquam illo!
						</small>
					</p>
					<a href="#">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
				<div class="col-md-5">
					<div class="cover">
						<div class="card">
							<svg
									class="back-bg"
									width="100%" viewBox="0 0 900 700" style="position:absolute; z-index: -1">
								<defs>
									<linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
										<stop offset="10%" stop-color="rgb(233,78,27)" stop-opacity="1"/>
									</linearGradient>
								</defs>
								<path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
									  d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"/>
							</svg>
							<!-- *************-->

							<svg width="100%" viewBox="0 0 700 500">
								<clipPath id="clip-path">
									<path d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"></path>
								</clipPath>
								<!-- xlink:href for modern browsers, src for IE8- -->
								<image clip-path="url(#clip-path)" xlink:href="images/running3.jpg" width="100%"
									   height="465" class="svg__image"></image>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

	<div><br><br><br></div>


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
				</div>
			</div>
		</div>
	</div>
	<!-- Discount -->
	
	
	<!-- Footer -->
	<footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg); height: 400px" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>A Little About Stamina.</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					<p>		<button class="btn btn-primary" onclick="document.getElementById('id02').style.display='block'" style="width:auto;" name="member" >Become a Member</button>	</p>
				</div>
				<div class="col-md-8">
					<h3>Classes</h3>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							<li><a href="#">Cardio</a></li>
							<li><a href="#">Body Building</a></li>
							<li><a href="#">Yoga</a></li>
							<li><a href="#">Boxing</a></li>
							<li><a href="#">Running</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							<li><a href="#">Boxing</a></li>
							<li><a href="#">Martial Arts</a></li>
							<li><a href="#">Karate</a></li>
							<li><a href="#">Kungfu</a></li>
							<li><a href="#">Basketball</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							<li><a href="#">Badminton</a></li>
							<li><a href="#">Body Building</a></li>
							<li><a href="#">Teams</a></li>
							<li><a href="#">Advertise</a></li>
							<li><a href="#">API</a></li>
						</ul>
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

	<script>
		// Get the modal
		var modal = document.getElementById('id02');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
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
