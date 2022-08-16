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
	<meta name="author" content="TIC-E" />

	<link rel="icon" href="../images/icon.ico">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="../sweetalert2.min.css">

	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- style  -->
	<link rel="stylesheet" href="../css/style.css">

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>


	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">



	<!-- top -->
 	<nav class="fh5co-nav" role="navigation">
 		<div class="topp">
 			<!-- <div class="container"> -->
 				<!-- <div class="row"> -->
 					<div class="col-xs-12 text-right">
 					<style>
							#btn1 {
								  background-color: #4CAF50;
								  color: white;
								  padding: 8px 10px;
								  margin: 10px 5px;
								  border: none;
								  cursor: pointer;
								  width: 100%;
								  border-radius:5px;
								  padding-right: 20px;
						  	      margin-right: 100px;
							}
							#btn2 {
								  background-color: #ffffff;
								  color: white;
								  padding: 8px 10px;
								  margin: 10px 5px;
								  border: none;
								  cursor: pointer;
								  width: 100%;
								  color: #000000;
								  border-radius:5px;
								  margin-right: 10px;
							}
							.topp {
								background: #F85A16;
								margin-bottom: 0;
								background: #F85A16;
								padding: 10px 30px;
								height: 52px;
							}
						</style>
						<p class="num" style="
					  	          font-size: 13px;
						  	      padding-right: 20px;
						  	      margin-right: 10px;
							  	  display: -moz-inline-stack;
								  display: inline-block;
								  zoom: 1;
								  *display: inline;
								  border-right: 1px solid rgba(255, 255, 255, 0.2);
								  letter-spacing: 0px;
								  color: rgba(255, 255, 255, 0.7);">Phone : (+216) 55 614 886</p>
						<?php
							session_start();
							if(isset( $_SESSION['User']))
							{
							?>
						      <span id="btn2">
							  <?php
							  echo '<a href="logout.php?logout  ">Logout</a>';
							  }
							  ?>
							  </span>
							  <span id="btn1">
							  <?php
							  echo 'Welcome ' . $_SESSION['User'];
							  ?>
							  </span>
							  
						
						<!-- echo '<a class="button3 " style="width:auto;" href="logout.php?logout  ">Logout</a>'; -->
 					</div>
 					
 				<!-- </div> -->
 			<!-- </div> -->
 		</div>
 		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<a href="index2.php"><img src="../images/logo.png"></a>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="index2.php">Home</a></li>
							<li class="active"><a href="gallery.php">Gallery</a></li>
							<li  class="has-dropdown">
								<a href="about.php">Trainer</a>
								<ul class="dropdown">
									<li><a href="trainer1.php">Canelo Alvarez</a></li>
									<li><a href="trainer2.php">Hany Rambod</a></li>
									<li><a href="trainer3.php">Pilin Anice</a></li>
									<li><a href="trainer4.php">Bret Contreras</a></li>
								</ul>
							</li>
							<li><a href="pricing.php">Pricing</a></li>
							<li  class="has-dropdown">
								<a href="training.php">Training</a>
								<ul class="dropdown">
									<li><a href="Weight_lifting.php">Weight lifting</a></li>
									<li><a href="running.php">Running</a></li>
									<li><a href="yoga.php">Yoga</a></li>
									<li><a href="boxing.php">Boxing</a></li>
									<li><a href="Cadio.php">Cardio</a></li>
								</ul>
							</li>
							<li><a href="equipment.php">Equipment</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					</div>


			</div>
		</div>
 	</nav>
 	<!-- top -->





	<!-- header -->
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(../images/img_bg_7.png);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Train insane or remain the same</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header -->



	<!-- Gallery -->
	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Gym gallery</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../images/gym.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Illustration</span>
									<h2>Useful baskets</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../images/gym2.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Skater man in the road</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../images/gym3.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Two Glas of Juice</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../images/gym4.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Timer starts now!</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../images/gym5.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Two Glas of Juice</h2>
								</div>
							</a>
						</li>
						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../images/gym6.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Illustration</span>
									<h2>Beautiful sunset</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../images/gym9.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Two Glas of Juice</h2>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Gallery -->



	<!-- Discount -->
	<div id="fh5co-started" class="fh5co-bg" style="background-image: url(../images/img_bg_3.jpg);">
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
	<footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(../images/footer.jpg); height: 400px" role="contentinfo">
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
						<img src="../images/logo2.png" >
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
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="../js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>






	</body>
</html>