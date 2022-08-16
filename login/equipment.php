<?php
session_start();
require_once('config.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start NOW</title>
    <meta name="author" content="TIC-E" />
    <link rel="icon" href="../images/icon.ico">
    
    
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

    
    

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   
</head>
<body>

	<div class="fh5co-loader"></div>

	<div id="page">

	



<?php



require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>



	<!-- top -->
	<div>
	<style>
@font-face {
  font-family: 'icomoon';
  src: url("../fonts/icomoon/icomoon.eot?srf3rx");
  src: url("../fonts/icomoon/icomoon.eot?srf3rx#iefix") format("embedded-opentype"), url("../fonts/icomoon/icomoon.ttf?srf3rx") format("truetype"), url("../fonts/icomoon/icomoon.woff?srf3rx") format("woff"), url("../fonts/icomoon/icomoon.svg?srf3rx#icomoon") format("svg");
  font-weight: normal;
  font-style: normal;
}
/* =======================================================
*
* 	Template Style
*
* ======================================================= */




img{
    max-width: 100%;
    height: auto;
    background: lightblue;
    background: radial-gradient(white 30%, lightblue 70%);
}

.fa-star,
.fa-star-half{
    color: yellowgreen;
    padding: 3% 0;
}

#cart_count{
    text-align: center;
    padding: 0 0.9rem 0.1rem 0.9rem;
    border-radius: 3rem;
}

.shopping-cart{
    padding: 3% 0;
}

.cart-items + .cart-items{
    padding: 2% 0;
}

.price-details h6{
    padding: 3% 2%;
}


.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}



/*   Sign Up & Log in*/

/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.button2 {
  background-color: #4CAF50;
  color: white;
  padding: 5px 15px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius:5px;
}

.button3 {
  background-color: #ffffff;
  color: white;
  padding: 5px 15px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  color: #000000;
  border-radius:5px;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;

}

img.avatar {
  width: 20%;
  height: 20%;
  border-radius: 50%;
}

.container2 {
  padding: 16px;
}

span.psw {
  float: center;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
	 display: block;
	 float: none;
  }
  .cancelbtn {
	 width: 100%;
  }
  .text2 {
	  text-align: left;
  }
}


/*----------------*/


body {
  font-family: "Work Sans", Arial, sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 1.7;
  color: #828282;
  background: #fff;
}

#page {
  position:absolute;
  overflow-x: hidden;
  width: 100%;
  height: 100%;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.offcanvas #page {
  overflow: hidden;
  position: absolute;
}
.offcanvas #page:after {
  -webkit-transition: 2s;
  -o-transition: 2s;
  transition: 2s;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 101;
  background: rgba(0, 0, 0, 0.7);
  content: "";
}

a {
  color: #F85A16;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
a:hover, a:active, a:focus {
  color: #F85A16;
  outline: none;
  text-decoration: none;
}

p {
  margin-bottom: 20px;
}

h1, h2, h3, h4, h5, h6, figure {
  color: #000;
  font-family: "Work Sans", Arial, sans-serif;
  font-weight: 400;
  margin: 0 0 20px 0;
}

::-webkit-selection {
  color: #fff;
  background: #F85A16;
}

::-moz-selection {
  color: #fff;
  background: #F85A16;
}

::selection {
  color: #fff;
  background: #F85A16;
}

.fh5co-nav {
  margin: 0;
  padding: 0;
  width: 100%;
  padding: 0;
  z-index: 1001;
}
.fh5co-nav .top-menu {
  padding: 15px 0;
}
.fh5co-nav .top {
  background: #F85A16;
  padding: 0px 0;
  margin-bottom: 0;
}
.fh5co-nav .top .num, .fh5co-nav .top .fh5co-social {
  display: inline-block;
  margin: 0;
}
.fh5co-nav .top .num {
  font-size: 13px;
  padding-right: 20px;
  margin-right: 10px;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
  border-right: 1px solid rgba(255, 255, 255, 0.2);
  letter-spacing: 0px;
  color: rgba(255, 255, 255, 0.7);
}
.fh5co-nav .top .fh5co-social li {
  font-size: 14px;
}
.fh5co-nav .top .fh5co-social li a {
  padding: 0 7px;
}
.fh5co-nav .top .fh5co-social li a i {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.7);
}
.fh5co-nav #fh5co-logo {
  font-size: 24px;
  margin: 0;
  padding: 0;
  text-transform: uppercase;
  font-weight: bold;
  font-weight: 700;
  font-family: "Work Sans", Arial, sans-serif;
}
.fh5co-nav #fh5co-logo a span {
  color: #F85A16;
}
.fh5co-nav a {
  padding: 5px 10px;
  color: #000;
}
@media screen and (max-width: 768px) {
  .fh5co-nav .menu-1 {
    display: none;
  }
}
.fh5co-nav ul {
  padding: 7px;
  margin: 10px 0 0 0;
}
.fh5co-nav ul li {
  padding: 0;
  margin: 0;
  list-style: none;
  display: inline;
}
.fh5co-nav ul li a {
  font-size: 13px;
  padding: 30px 15px;
  text-transform: uppercase;
  letter-spacing: 2px;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.fh5co-nav ul li a:hover, .fh5co-nav ul li a:focus, .fh5co-nav ul li a:active {
  color: #000 !important;
}
.fh5co-nav ul li.has-dropdown {
  position: relative;
}
.fh5co-nav ul li.has-dropdown .dropdown {
  width: 140px;
  -webkit-box-shadow: 0px 14px 33px -9px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 14px 33px -9px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 14px 33px -9px rgba(0, 0, 0, 0.75);
  z-index: 1002;
  visibility: hidden;
  opacity: 0;
  position: absolute;
  top: 40px;
  left: 0;
  text-align: left;
  background: #F85A16;
  padding: 20px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
  -webkit-transition: 0s;
  -o-transition: 0s;
  transition: 0s;
}
.fh5co-nav ul li.has-dropdown .dropdown:before {
  bottom: 100%;
  left: 40px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: #F85A16;
  border-width: 8px;
  margin-left: -8px;
}
.fh5co-nav ul li.has-dropdown .dropdown li {
  display: block;
  margin-bottom: 7px;
}
.fh5co-nav ul li.has-dropdown .dropdown li:last-child {
  margin-bottom: 0;
}
.fh5co-nav ul li.has-dropdown .dropdown li a {
  padding: 2px 0;
  display: block;
  color: #f2f2f2;
  line-height: 1.2;
  text-transform: none;
  font-size: 13px;
  letter-spacing: 0;
}
.fh5co-nav ul li.has-dropdown .dropdown li a:hover {
  color: #fff;
}
.fh5co-nav ul li.has-dropdown:hover a, .fh5co-nav ul li.has-dropdown:focus a {
  color: #fff;
}
.fh5co-nav ul li.btn-cta a {
  color: #fff;
}
.fh5co-nav ul li.btn-cta a span {
  background: #F85A16;
  padding: 4px 20px;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  -ms-border-radius: 100px;
  border-radius: 100px;
}
.fh5co-nav ul li.btn-cta a:hover span {
  -webkit-box-shadow: 0px 14px 20px -9px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 14px 20px -9px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 14px 20px -9px rgba(0, 0, 0, 0.75);
}
.fh5co-nav ul li.active > a {
  color: #F85A16 !important;
}

#fh5co-header,
#fh5co-counter,
.fh5co-bg {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative;
}

.fh5co-bg {
  background-size: cover;
  background-position: center center;
  position: relative;
  width: 100%;
  float: left;
}
.fh5co-bg .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}

.fh5co-video {
  overflow: hidden;
}
@media screen and (max-width: 992px) {
  .fh5co-video {
    height: 450px;
  }
}
.fh5co-video a {
  z-index: 1001;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -45px;
  margin-left: -45px;
  width: 90px;
  height: 90px;
  display: table;
  text-align: center;
  background: #fff;
  -webkit-box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75);
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
.fh5co-video a i {
  text-align: center;
  display: table-cell;
  vertical-align: middle;
  font-size: 40px;
}
.fh5co-video .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.fh5co-video:hover .overlay {
  background: rgba(0, 0, 0, 0.7);
}
.fh5co-video:hover a {
  -webkit-transform: scale(1.2);
  -moz-transform: scale(1.2);
  -ms-transform: scale(1.2);
  -o-transform: scale(1.2);
  transform: scale(1.2);
}

.fh5co-cover {
  height: 800px;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative;
  float: left;
  width: 100%;
}
.fh5co-cover .overlay {
  z-index: 0;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.3);
}
.fh5co-cover > .fh5co-container {
  position: relative;
  z-index: 10;
}
@media screen and (max-width: 768px) {
  .fh5co-cover {
    height: 600px;
  }
}
.fh5co-cover .display-t,
.fh5co-cover .display-tc {
  z-index: 9;
  height: 700px;
  display: table;
  width: 100%;
  margin-top: 100px;
}
@media screen and (max-width: 768px) {
  .fh5co-cover .display-t,
  .fh5co-cover .display-tc {
    height: 400px;
  }
}
.fh5co-cover.fh5co-cover-sm {
  height: 600px;
}
@media screen and (max-width: 768px) {
  .fh5co-cover.fh5co-cover-sm {
    height: 400px;
  }
}
.fh5co-cover.fh5co-cover-sm .display-t,
.fh5co-cover.fh5co-cover-sm .display-tc {
  height: 400px;
  display: table;
  width: 100%;
}
@media screen and (max-width: 768px) {
  .fh5co-cover.fh5co-cover-sm .display-t,
  .fh5co-cover.fh5co-cover-sm .display-tc {
    height: 400px;
  }
}

.fh5co-social-icons {
  margin: 0;
  padding: 0;
}
.fh5co-social-icons li {
  margin: 0;
  padding: 0;
  list-style: none;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.fh5co-social-icons li a {
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
  color: #F85A16;
  padding-left: 10px;
  padding-right: 10px;
}
.fh5co-social-icons li a i {
  font-size: 20px;
}

.fh5co-contact-info ul {
  padding: 0;
  margin: 0;
}
.fh5co-contact-info ul li {
  padding: 0 0 0 40px;
  margin: 0 0 30px 0;
  list-style: none;
  position: relative;
}
.fh5co-contact-info ul li:before {
  color: #F85A16;
  position: absolute;
  left: 0;
  top: .05em;
  font-family: 'icomoon';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fh5co-contact-info ul li.address:before {
  font-size: 30px;
  content: "\e9d1";
}
.fh5co-contact-info ul li.phone:before {
  font-size: 23px;
  content: "\e9f4";
}
.fh5co-contact-info ul li.email:before {
  font-size: 23px;
  content: "\e9da";
}
.fh5co-contact-info ul li.url:before {
  font-size: 23px;
  content: "\e9af";
}

#fh5co-header .display-tc,
#fh5co-counter .display-tc,
.fh5co-cover .display-tc {
  display: table-cell !important;
  vertical-align: middle;
  padding: 0 40px;
}
#fh5co-header .display-tc h1, #fh5co-header .display-tc h2,
#fh5co-counter .display-tc h1,
#fh5co-counter .display-tc h2,
.fh5co-cover .display-tc h1,
.fh5co-cover .display-tc h2 {
  margin: 0;
  padding: 0;
  color: white;
}
#fh5co-header .display-tc h1,
#fh5co-counter .display-tc h1,
.fh5co-cover .display-tc h1 {
  margin-bottom: 20px;
  font-size: 54px;
  line-height: 1.3;
  text-transform: uppercase;
  font-weight: 400;
}
@media screen and (max-width: 768px) {
  #fh5co-header .display-tc h1,
  #fh5co-counter .display-tc h1,
  .fh5co-cover .display-tc h1 {
    font-size: 30px;
  }
}
#fh5co-header .display-tc h2,
#fh5co-counter .display-tc h2,
.fh5co-cover .display-tc h2 {
  font-size: 20px;
  line-height: 1.5;
  margin-bottom: 30px;
}
#fh5co-header .display-tc .btn,
#fh5co-counter .display-tc .btn,
.fh5co-cover .display-tc .btn {
  padding: 15px 30px;
  background: #F85A16 !important;
  color: #fff;
  border: none !important;
  font-size: 18px;
}
#fh5co-header .display-tc .btn:hover,
#fh5co-counter .display-tc .btn:hover,
.fh5co-cover .display-tc .btn:hover {
  background: #F85A16 !important;
  -webkit-box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75) !important;
  -moz-box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75) !important;
  box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75) !important;
}
#fh5co-header .display-tc .form-inline .form-group,
#fh5co-counter .display-tc .form-inline .form-group,
.fh5co-cover .display-tc .form-inline .form-group {
  width: 100% !important;
  margin-bottom: 10px;
}
#fh5co-header .display-tc .form-inline .form-group .form-control,
#fh5co-counter .display-tc .form-inline .form-group .form-control,
.fh5co-cover .display-tc .form-inline .form-group .form-control {
  width: 100%;
  background: #fff;
  border: none;
}

.fh5co-bg-section {
  background: rgba(0, 0, 0, 0.05);
}

#fh5co-services,
#fh5co-started,
#fh5co-testimonial,
#fh5co-trainer,
#fh5co-gallery,
#fh5co-schedule,
#fh5co-pricing,
#fh5co-blog,
#fh5co-contact,
#fh5co-footer {
  padding: 7em 0;
  clear: both;
}
@media screen and (max-width: 768px) {
  #fh5co-services,
  #fh5co-started,
  #fh5co-testimonial,
  #fh5co-trainer,
  #fh5co-gallery,
  #fh5co-schedule,
  #fh5co-pricing,
  #fh5co-blog,
  #fh5co-contact,
  #fh5co-footer {
    padding: 3em 0;
  }
}

#fh5co-gallery {
  padding-bottom: 0;
}

.services {
  padding: 25px;
  margin-top: -10em;
  background: #fff;
  -webkit-box-shadow: 0px 10px 23px -10px rgba(0, 0, 0, 0.43);
  -moz-box-shadow: 0px 10px 23px -10px rgba(0, 0, 0, 0.43);
  -ms-box-shadow: 0px 10px 23px -10px rgba(0, 0, 0, 0.43);
  -o-box-shadow: 0px 10px 23px -10px rgba(0, 0, 0, 0.43);
  box-shadow: 0px 10px 23px -10px rgba(0, 0, 0, 0.43);
}
@media screen and (max-width: 992px) {
  .services {
    margin-top: 0;
    margin-bottom: 10px;
  }
}
@media screen and (max-width: 768px) {
  .services {
    margin-top: 0;
    margin-bottom: 20px;
  }
}
.services span {
  width: 100%;
  display: block;
  margin-bottom: 30px;
}
.services span img {
  width: 60px;
  margin: 0 auto;
}
.services h3 {
  text-transform: uppercase;
  font-size: 16px;
  letter-spacing: 2px;
  font-weight: 500;
  position: relative;
}
.services h3:after {
  position: absolute;
  bottom: -10px;
  left: 0;
  right: 0;
  width: 40px;
  height: 2px;
  margin: 0 auto;
  background: #F85A16;
  content: '';
}

.trainer {
  position: relative;
  background: rgba(0, 0, 0, 0.05);
}
@media screen and (max-width: 768px) {
  .trainer {
    margin-bottom: 30px;
  }
}
.trainer img {
  width: 84%;
}
.trainer .title {
  width: 100%;
  position: absolute;
  bottom: 60%;
  left: 42%;
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  transform: rotate(270deg);
}
.trainer .title h3 {
  font-size: 18px;
  text-transform: uppercase;
  letter-spacing: 3px;
  margin: 0;
  padding: 0;
}
.trainer .title h3 a {
  color: #000;
}
.trainer .title h3 a:hover, .trainer .title h3 a:focus {
  color: #F85A16;
}
.trainer .title span {
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 13px;
  color: rgba(0, 0, 0, 0.4);
}
.trainer .desc {
  width: 70%;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: white;
  padding: 7px;
}
.trainer .desc .fh5co-social-icons li a {
  color: #000;
}
.trainer .desc .fh5co-social-icons li a i {
  font-size: 16px;
}

#fh5co-schedule .fh5co-heading h2 {
  color: #fff;
}
#fh5co-schedule .fh5co-heading p {
  color: rgba(255, 255, 255, 0.5);
}
#fh5co-schedule .fh5co-heading span {
  color: rgba(255, 255, 255, 0.5);
}

.fh5co-tabs {
  width: 90%;
  margin: 0 auto;
}
.fh5co-tabs .fh5co-tab-nav {
  clear: both;
  margin: 0;
  padding: 0;
  float: left;
  width: 100%;
  background: rgba(0, 0, 0, 0.3);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
}
.fh5co-tabs .fh5co-tab-nav li {
  float: left;
  margin: 0;
  padding: 0;
  width: 14.285%;
  text-align: center;
  list-style: none;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.fh5co-tabs .fh5co-tab-nav li a {
  padding: 10px;
  width: 100%;
  float: left;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
  color: #e6e6e6;
}
.fh5co-tabs .fh5co-tab-nav li a:hover {
  color: white;
}
.fh5co-tabs .fh5co-tab-nav li.active a {
  background: #F85A16;
  color: #fff;
}
.fh5co-tabs .fh5co-tab-content-wrap {
  clear: both;
  position: relative;
}
.fh5co-tabs .fh5co-tab-content-wrap .tab-content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  opacity: 0;
  visibility: hidden;
}
.fh5co-tabs .fh5co-tab-content-wrap .tab-content.active {
  opacity: 1;
  visibility: visible;
}
.fh5co-tabs .class-schedule {
  width: 100%;
  float: left;
  margin: 0;
  padding: 0;
}
.fh5co-tabs .class-schedule li {
  width: 25%;
  float: left;
  border-right: 1px solid rgba(255, 255, 255, 0.02);
  border-bottom: 1px solid rgba(255, 255, 255, 0.02);
  list-style: none;
  padding: 20px;
  padding-top: 40px;
  padding-bottom: 40px;
}
@media screen and (max-width: 768px) {
  .fh5co-tabs .class-schedule li {
    width: 50%;
  }
}
@media screen and (max-width: 480px) {
  .fh5co-tabs .class-schedule li {
    width: 100%;
  }
}
.fh5co-tabs .class-schedule li:first-child {
  border-left: 1px solid rgba(255, 255, 255, 0.02);
}
.fh5co-tabs .class-schedule li:nth-child(5) {
  border-left: 1px solid rgba(255, 255, 255, 0.02);
}
.fh5co-tabs .class-schedule li span {
  display: block;
  margin-bottom: 20px;
}
.fh5co-tabs .class-schedule li span img {
  width: 60px;
  height: 60px;
  margin: 0 auto;
}
.fh5co-tabs .class-schedule li h4 {
  color: rgba(255, 255, 255, 0.8);
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.fh5co-tabs .class-schedule li .time {
  display: inline-block;
  padding: 5px 12px;
  background: #F85A16;
  color: #fff;
  font-size: 13px;
}

.pricing {
  display: block;
  float: left;
  margin-bottom: 30px;
  width: 100%;
}

.price-box {
  width: 100%;
  text-align: center;
  padding: 30px;
  background: rgba(0, 0, 0, 0.05);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  border-radius: 5px;
  margin-bottom: 40px;
  position: relative;
}
.price-box.popular .btn-select-plan {
  background: #F85A16;
}
.price-box.popular .price {
  color: #F85A16;
}
.price-box .btn-select-plan {
  padding: 10px 20px;
  background: #5bc0de;
  color: #fff;
}
.price-box .classes {
  padding: 0;
}
.price-box .classes li {
  display: block;
  width: 100%;
  list-style: none;
  margin: 0;
  font-size: 16px;
  padding: 8px 10px;
}
.price-box .classes li.color {
  background: rgba(0, 0, 0, 0.04);
}

.pricing-plan {
  margin: 0 0 50px 0;
  padding: 0;
  font-size: 13px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 700;
  color: #888f94;
}
.pricing-plan.pricing-plan-offer {
  margin-bottom: 24px;
}
.pricing-plan span {
  display: block;
  margin-top: 10px;
  margin-bottom: 0;
  color: #d5d8db;
}

.price {
  font-size: 72px;
  color: #000;
  line-height: 50px;
}
.price .currency {
  font-size: 30px;
  top: -0.9em;
  padding-right: 10px;
}
.price small {
  font-size: 13px;
  display: block;
  text-transform: uppercase;
  color: #888f94;
}

#fh5co-portfolio-list {
  flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  position: relative;
  float: left;
  padding: 0;
  margin: 0;
  width: 100%;
}
#fh5co-portfolio-list li {
  display: block;
  padding: 0;
  margin: 0 0 15px 1%;
  list-style: none;
  min-height: 400px;
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  float: left;
  clear: left;
  position: relative;
}
@media screen and (max-width: 480px) {
  #fh5co-portfolio-list li {
    margin-left: 0;
  }
}
#fh5co-portfolio-list li a {
  min-height: 400px;
  padding: 2em;
  position: relative;
  width: 100%;
  display: block;
}
#fh5co-portfolio-list li a:before {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  content: "";
  z-index: 80;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
  background: transparent;
}
#fh5co-portfolio-list li a:hover:before {
  background: rgba(0, 0, 0, 0.5);
}
#fh5co-portfolio-list li a .case-studies-summary {
  width: auto;
  bottom: 2em;
  left: 2em;
  right: 2em;
  position: absolute;
  z-index: 100;
}
@media screen and (max-width: 768px) {
  #fh5co-portfolio-list li a .case-studies-summary {
    bottom: 1em;
    left: 1em;
    right: 1em;
  }
}
#fh5co-portfolio-list li a .case-studies-summary span {
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 13px;
  color: rgba(255, 255, 255, 0.7);
}
#fh5co-portfolio-list li a .case-studies-summary h2 {
  color: #fff;
  margin-bottom: 0;
}
@media screen and (max-width: 768px) {
  #fh5co-portfolio-list li a .case-studies-summary h2 {
    font-size: 20px;
  }
}
#fh5co-portfolio-list li.two-third {
  width: 48.6%;
}
@media screen and (max-width: 768px) {
  #fh5co-portfolio-list li.two-third {
    width: 49%;
  }
}
@media screen and (max-width: 480px) {
  #fh5co-portfolio-list li.two-third {
    width: 100%;
  }
}
#fh5co-portfolio-list li.one-third {
  width: 23.8%;
}
@media screen and (max-width: 768px) {
  #fh5co-portfolio-list li.one-third {
    width: 49%;
  }
}
@media screen and (max-width: 480px) {
  #fh5co-portfolio-list li.one-third {
    width: 100%;
  }
}
#fh5co-portfolio-list li.one-half {
  width: 49%;
}
@media screen and (max-width: 480px) {
  #fh5co-portfolio-list li.one-half {
    width: 100%;
  }
}

.fh5co-heading {
  margin-bottom: 5em;
}
.fh5co-heading h2 {
  font-size: 30px;
  margin-bottom: 40px;
  line-height: 1.5;
  color: #000;
  text-transform: uppercase;
  position: relative;
}
.fh5co-heading h2:after {
  position: absolute;
  bottom: -10px;
  left: 0;
  right: 0;
  width: 60px;
  height: 2px;
  margin: 0 auto;
  background: #F85A16;
  content: '';
}
.fh5co-heading p {
  font-size: 18px;
  line-height: 1.5;
  color: #828282;
}
.fh5co-heading span {
  display: block;
  margin-bottom: 10px;
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 2px;
}

#fh5co-testimonial {
  background: #efefef;
}
#fh5co-testimonial .testimony-slide {
  text-align: center;
}
#fh5co-testimonial .testimony-slide span {
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 700;
  display: block;
}
#fh5co-testimonial .testimony-slide figure {
  margin-bottom: 10px;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
#fh5co-testimonial .testimony-slide figure img {
  width: 100px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
#fh5co-testimonial .testimony-slide blockquote {
  border: none;
  margin: 30px auto;
  width: 70%;
  position: relative;
  padding: 0;
}
@media screen and (max-width: 992px) {
  #fh5co-testimonial .testimony-slide blockquote {
    width: 100%;
  }
}
#fh5co-testimonial .arrow-thumb {
  position: absolute;
  top: 40%;
  display: block;
  width: 100%;
}
#fh5co-testimonial .arrow-thumb a {
  font-size: 32px;
  color: #dadada;
}
#fh5co-testimonial .arrow-thumb a:hover, #fh5co-testimonial .arrow-thumb a:focus, #fh5co-testimonial .arrow-thumb a:active {
  text-decoration: none;
}

#fh5co-started {
  position: relative;
}
#fh5co-started .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
#fh5co-started h2 {
  text-transform: uppercase;
  color: #fff;
  margin-bottom: 20px !important;
  line-height: 1.5em;
}
#fh5co-started h2 span {
  font-weight: 100;
  color: rgba(255, 255, 255, 0.7);
}
#fh5co-started h2 .percent {
  color: #F85A16;
  font-weight: 700;
}
#fh5co-started p {
  color: rgba(255, 255, 255, 0.5);
}
#fh5co-started .form-control {
  background: rgba(255, 255, 255, 0.2);
  border: none !important;
  color: #fff;
  font-size: 16px !important;
  width: 100%;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
#fh5co-started .form-control::-webkit-input-placeholder {
  color: #fff;
}
#fh5co-started .form-control:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}
#fh5co-started .form-control::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}
#fh5co-started .form-control:-ms-input-placeholder {
  color: #fff;
}
#fh5co-started .form-control:focus {
  background: rgba(255, 255, 255, 0.3);
}
#fh5co-started .btn {
  height: 54px;
  border: none !important;
  background: #F85A16;
  color: #fff;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 400;
  padding-left: 50px;
  padding-right: 50px;
}
#fh5co-started .form-inline .form-group {
  width: 100% !important;
  margin-bottom: 10px;
}
#fh5co-started .form-inline .form-group .form-control {
  width: 100%;
}

.fh5co-blog {
  margin-bottom: 60px;
}
.fh5co-blog a img {
  width: 100%;
}
@media screen and (max-width: 768px) {
  .fh5co-blog {
    width: 100%;
  }
}
.fh5co-blog .blog-text {
  margin-bottom: 30px;
  position: relative;
  background: #fff;
  width: 90%;
  padding: 30px;
  float: right;
  margin-top: -5em;
  -webkit-box-shadow: 0px 10px 20px -12px rgba(0, 0, 0, 0.18);
  -moz-box-shadow: 0px 10px 20px -12px rgba(0, 0, 0, 0.18);
  box-shadow: 0px 10px 20px -12px rgba(0, 0, 0, 0.18);
}
.fh5co-blog .blog-text span {
  display: inline-block;
  margin-bottom: 20px;
}
.fh5co-blog .blog-text span.posted_on {
  color: white;
  font-size: 18px;
  padding: 2px 10px;
  padding-left: 40px;
  margin-left: -40px;
  background: #F85A16;
  position: relative;
}
.fh5co-blog .blog-text span.posted_on:before {
  position: absolute;
  top: -9px;
  left: 0;
  content: '';
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 0 9px 9px;
  border-color: transparent transparent #F85A16 transparent;
}
.fh5co-blog .blog-text span.comment {
  float: right;
}
.fh5co-blog .blog-text span.comment a {
  color: rgba(0, 0, 0, 0.3);
}
.fh5co-blog .blog-text span.comment a i {
  color: #F85A16;
  padding-left: 7px;
}
.fh5co-blog .blog-text h3 {
  font-size: 20px;
  margin-bottom: 20px;
  line-height: 1.5;
}
.fh5co-blog .blog-text h3 a {
  color: black;
}

#fh5co-footer {
  position: relative;
}
#fh5co-footer .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.9);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
#fh5co-footer h3 {
  margin-bottom: 15px;
  font-weight: bold;
  font-size: 15px;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.8);
}
#fh5co-footer .fh5co-footer-links {
  padding: 0;
  margin: 0;
}
#fh5co-footer .fh5co-footer-links li {
  padding: 0;
  margin: 0;
  list-style: none;
}
#fh5co-footer .fh5co-footer-links li a {
  color: rgba(255, 255, 255, 0.5);
  text-decoration: none;
}
#fh5co-footer .fh5co-footer-links li a:hover {
  text-decoration: underline;
}
#fh5co-footer .fh5co-widget {
  margin-bottom: 30px;
}
@media screen and (max-width: 768px) {
  #fh5co-footer .fh5co-widget {
    text-align: left;
  }
}
#fh5co-footer .fh5co-widget h3 {
  margin-bottom: 15px;
  font-weight: bold;
  font-size: 15px;
  letter-spacing: 2px;
  text-transform: uppercase;
}
#fh5co-footer .copyright .block {
  display: block;
}

#map {
  width: 100%;
  height: 500px;
  position: relative;
}
@media screen and (max-width: 768px) {
  #map {
    height: 200px;
  }
}

#fh5co-offcanvas {
  position: absolute;
  z-index: 1901;
  width: 270px;
  background: black;
  top: 0;
  right: 0;
  top: 0;
  bottom: 0;
  padding: 75px 40px 40px 40px;
  overflow-y: auto;
  display: none;
  -moz-transform: translateX(270px);
  -webkit-transform: translateX(270px);
  -ms-transform: translateX(270px);
  -o-transform: translateX(270px);
  transform: translateX(270px);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
@media screen and (max-width: 768px) {
  #fh5co-offcanvas {
    display: block;
  }
}
.offcanvas #fh5co-offcanvas {
  -moz-transform: translateX(0px);
  -webkit-transform: translateX(0px);
  -ms-transform: translateX(0px);
  -o-transform: translateX(0px);
  transform: translateX(0px);
}
#fh5co-offcanvas a {
  color: rgba(255, 255, 255, 0.5);
}
#fh5co-offcanvas a:hover {
  color: rgba(255, 255, 255, 0.8);
}
#fh5co-offcanvas ul {
  padding: 0;
  margin: 0;
}
#fh5co-offcanvas ul li {
  padding: 0;
  margin: 0;
  list-style: none;
}
#fh5co-offcanvas ul li > ul {
  padding-left: 20px;
  display: none;
}
#fh5co-offcanvas ul li.offcanvas-has-dropdown > a {
  display: block;
  position: relative;
}
#fh5co-offcanvas ul li.offcanvas-has-dropdown > a:after {
  position: absolute;
  right: 0px;
  font-family: 'icomoon';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\e921";
  font-size: 20px;
  color: rgba(255, 255, 255, 0.2);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
#fh5co-offcanvas ul li.offcanvas-has-dropdown.active a:after {
  -webkit-transform: rotate(-180deg);
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -o-transform: rotate(-180deg);
  transform: rotate(-180deg);
}

.uppercase {
  font-size: 14px;
  color: #000;
  margin-bottom: 10px;
  font-weight: 700;
  text-transform: uppercase;
}

.gototop {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 999;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.gototop.active {
  opacity: 1;
  visibility: visible;
}
.gototop a {
  width: 50px;
  height: 50px;
  display: table;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  text-align: center;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
}
.gototop a i {
  height: 50px;
  display: table-cell;
  vertical-align: middle;
}
.gototop a:hover, .gototop a:active, .gototop a:focus {
  text-decoration: none;
  outline: none;
}

.fh5co-nav-toggle {
  width: 25px;
  height: 25px;
  cursor: pointer;
  text-decoration: none;
}
.fh5co-nav-toggle.active i::before, .fh5co-nav-toggle.active i::after {
  background: #fff !important;
}
.fh5co-nav-toggle:hover, .fh5co-nav-toggle:focus, .fh5co-nav-toggle:active {
  outline: none;
  border-bottom: none !important;
}
.fh5co-nav-toggle i {
  position: relative;
  display: inline-block;
  width: 25px;
  height: 2px;
  color: #252525;
  font: bold 14px/.4 Helvetica;
  text-transform: uppercase;
  text-indent: -55px;
  background: #252525;
  transition: all .2s ease-out;
}
.fh5co-nav-toggle i::before, .fh5co-nav-toggle i::after {
  content: '';
  width: 25px;
  height: 2px;
  background: #252525;
  position: absolute;
  left: 0;
  transition: all .2s ease-out;
}
.fh5co-nav-toggle.fh5co-nav-white > i {
  color: #000;
  background: #000;
}
.fh5co-nav-toggle.fh5co-nav-white > i::before, .fh5co-nav-toggle.fh5co-nav-white > i::after {
  background: #000;
}

.fh5co-nav-toggle i::before {
  top: -7px;
}

.fh5co-nav-toggle i::after {
  bottom: -7px;
}

.fh5co-nav-toggle:hover i::before {
  top: -10px;
}

.fh5co-nav-toggle:hover i::after {
  bottom: -10px;
}

.fh5co-nav-toggle.active i {
  background: transparent;
}

.fh5co-nav-toggle.active i::before {
  top: 0;
  -webkit-transform: rotateZ(45deg);
  -moz-transform: rotateZ(45deg);
  -ms-transform: rotateZ(45deg);
  -o-transform: rotateZ(45deg);
  transform: rotateZ(45deg);
}

.fh5co-nav-toggle.active i::after {
  bottom: 0;
  -webkit-transform: rotateZ(-45deg);
  -moz-transform: rotateZ(-45deg);
  -ms-transform: rotateZ(-45deg);
  -o-transform: rotateZ(-45deg);
  transform: rotateZ(-45deg);
}

.fh5co-nav-toggle {
  position: absolute;
  right: 0px;
  top: 65px;
  z-index: 21;
  padding: 6px 0 0 0;
  display: block;
  margin: 0 auto;
  display: none;
  height: 44px;
  width: 44px;
  z-index: 2001;
  border-bottom: none !important;
}
@media screen and (max-width: 768px) {
  .fh5co-nav-toggle {
    display: block;
  }
}

.btn {
  margin-right: 4px;
  margin-bottom: 4px;
  font-family: "Work Sans", Arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  -ms-border-radius: 30px;
  border-radius: 30px;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
  padding: 8px 20px;
}
.btn.btn-md {
  padding: 8px 20px !important;
}
.btn.btn-lg {
  padding: 18px 36px !important;
}
.btn:hover, .btn:active, .btn:focus {
  box-shadow: none !important;
  outline: none !important;
}

.btn-primary {
  background: #F85A16;
  color: #fff;
  border: 2px solid #F85A16;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active {
  background: #f96c2f !important;
  border-color: #f96c2f !important;
}
.btn-primary.btn-outline {
  background: transparent;
  color: #F85A16;
  border: 1px solid #F85A16;
}
.btn-primary.btn-outline:hover, .btn-primary.btn-outline:focus, .btn-primary.btn-outline:active {
  background: #F85A16;
  color: #fff;
}

.btn-success {
  background: #5cb85c;
  color: #fff;
  border: 2px solid #5cb85c;
}
.btn-success:hover, .btn-success:focus, .btn-success:active {
  background: #4cae4c !important;
  border-color: #4cae4c !important;
}
.btn-success.btn-outline {
  background: transparent;
  color: #5cb85c;
  border: 1px solid #5cb85c;
}
.btn-success.btn-outline:hover, .btn-success.btn-outline:focus, .btn-success.btn-outline:active {
  background: #5cb85c;
  color: #fff;
}

.btn-info {
  background: #5bc0de;
  color: #fff;
  border: 2px solid #5bc0de;
}
.btn-info:hover, .btn-info:focus, .btn-info:active {
  background: #46b8da !important;
  border-color: #46b8da !important;
}
.btn-info.btn-outline {
  background: transparent;
  color: #5bc0de;
  border: 1px solid #5bc0de;
}
.btn-info.btn-outline:hover, .btn-info.btn-outline:focus, .btn-info.btn-outline:active {
  background: #5bc0de;
  color: #fff;
}

.btn-warning {
  background: #f0ad4e;
  color: #fff;
  border: 2px solid #f0ad4e;
}
.btn-warning:hover, .btn-warning:focus, .btn-warning:active {
  background: #eea236 !important;
  border-color: #eea236 !important;
}
.btn-warning.btn-outline {
  background: transparent;
  color: #f0ad4e;
  border: 1px solid #f0ad4e;
}
.btn-warning.btn-outline:hover, .btn-warning.btn-outline:focus, .btn-warning.btn-outline:active {
  background: #f0ad4e;
  color: #fff;
}

.btn-danger {
  background: #d9534f;
  color: #fff;
  border: 2px solid #d9534f;
}
.btn-danger:hover, .btn-danger:focus, .btn-danger:active {
  background: #d43f3a !important;
  border-color: #d43f3a !important;
}
.btn-danger.btn-outline {
  background: transparent;
  color: #d9534f;
  border: 1px solid #d9534f;
}
.btn-danger.btn-outline:hover, .btn-danger.btn-outline:focus, .btn-danger.btn-outline:active {
  background: #d9534f;
  color: #fff;
}

.btn-outline {
  background: none;
  border: 1px solid gray;
  font-size: 16px;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.btn-outline:hover, .btn-outline:focus, .btn-outline:active {
  box-shadow: none;
}

.btn.with-arrow {
  position: relative;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.btn.with-arrow i {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  right: 0px;
  top: 50%;
  margin-top: -8px;
  -webkit-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
}
.btn.with-arrow:hover {
  padding-right: 50px;
}
.btn.with-arrow:hover i {
  color: #fff;
  right: 18px;
  visibility: visible;
  opacity: 1;
}

.form-control {
  box-shadow: none;
  background: transparent;
  border: 2px solid rgba(0, 0, 0, 0.1);
  height: 54px;
  font-size: 18px;
  font-weight: 300;
}
.form-control:active, .form-control:focus {
  outline: none;
  box-shadow: none;
  border-color: #F85A16;
}

.row-pb-md {
  padding-bottom: 4em !important;
}

.row-pb-sm {
  padding-bottom: 2em !important;
}

.js .animate-box {
  opacity: 0;
}
/************Running*****************/
/*****P1****/
#img_run{
  width: 500px;
  height: 370px;
}
 div.col p
{
 width: 500px;
 text-align: center;
}
#txt
{
  font-size: 20px;
  color:black;

}
div.col img{
margin:0 20px 20px 100px;
border-radius: 8px;
}
div.col{
  display:flex;
}
/*****P1****/
#img_run2{
  width: 500px;
  height: 370px;
}
div.col2{
  display:flex;
  float:right;
}
div.col2 img{
margin:100px 100px 100px 20px;
border-radius: 8px;
}
div.col2 p
{
margin:130px 0 0 0;
width: 500px;
text-align: center;
}



		
	</style>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="../sweetalert2.min.css">

	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	
	
	
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
						<a href="index.php"><img src="../images/logo.png" style="background: white"></a>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="index2.php">Home</a></li>
							<li><a href="gallery.php">Gallery</a></li>
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
							<li class="active"><a href="index.php">Equipment</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					</div>


			</div>
		</div>
 	</nav>
 	</div>
 	<!-- top -->


<div>
<style>

	img{
    max-width: 100%;
    height: auto;
    background: lightblue;
    background: radial-gradient(white 30%, lightblue 70%);
}

.fa-star,
.fa-star-half{
    color: yellowgreen;
    padding: 3% 0;
}

#cart_count{
    text-align: center;
    padding: 0 0.9rem 0.1rem 0.9rem;
    border-radius: 3rem;
}

.shopping-cart{
    padding: 3% 0;
}

.cart-items + .cart-items{
    padding: 2% 0;
}

.price-details h6{
    padding: 3% 2%;
}

	
</style>
<?php require_once ("php/header.php"); ?>
<div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
            ?>
        </div>
</div>
</div>


	<!-- Footer -->
	<div>
	<style>
@font-face {
  font-family: 'icomoon';
  src: url("../fonts/icomoon/icomoon.eot?srf3rx");
  src: url("../fonts/icomoon/icomoon.eot?srf3rx#iefix") format("embedded-opentype"), url("../fonts/icomoon/icomoon.ttf?srf3rx") format("truetype"), url("../fonts/icomoon/icomoon.woff?srf3rx") format("woff"), url("../fonts/icomoon/icomoon.svg?srf3rx#icomoon") format("svg");
  font-weight: normal;
  font-style: normal;
}
/* =======================================================
*
* 	Template Style
*
* ======================================================= */


.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}



/*   Sign Up & Log in*/

/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.button2 {
  background-color: #4CAF50;
  color: white;
  padding: 5px 15px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius:5px;
}

.button3 {
  background-color: #ffffff;
  color: white;
  padding: 5px 15px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  color: #000000;
  border-radius:5px;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;

}

img.avatar {
  width: 20%;
  height: 20%;
  border-radius: 50%;
}

.container2 {
  padding: 16px;
}

span.psw {
  float: center;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
	 display: block;
	 float: none;
  }
  .cancelbtn {
	 width: 100%;
  }
  .text2 {
	  text-align: left;
  }
}


/*----------------*/


body {
  font-family: "Work Sans", Arial, sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 1.7;
  color: #828282;
  background: #fff;
}

#page {
  position:absolute;
  overflow-x: hidden;
  width: 100%;
  height: 100%;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.offcanvas #page {
  overflow: hidden;
  position: absolute;
}
.offcanvas #page:after {
  -webkit-transition: 2s;
  -o-transition: 2s;
  transition: 2s;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 101;
  background: rgba(0, 0, 0, 0.7);
  content: "";
}

a {
  color: #F85A16;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
a:hover, a:active, a:focus {
  color: #F85A16;
  outline: none;
  text-decoration: none;
}

p {
  margin-bottom: 20px;
}

h1, h2, h3, h4, h5, h6, figure {
  color: #000;
  font-family: "Work Sans", Arial, sans-serif;
  font-weight: 400;
  margin: 0 0 20px 0;
}

::-webkit-selection {
  color: #fff;
  background: #F85A16;
}

::-moz-selection {
  color: #fff;
  background: #F85A16;
}

::selection {
  color: #fff;
  background: #F85A16;
}

.fh5co-nav {
  margin: 0;
  padding: 0;
  width: 100%;
  padding: 0;
  z-index: 1001;
}
.fh5co-nav .top-menu {
  padding: 15px 0;
}
.fh5co-nav .top {
  background: #F85A16;
  padding: 0px 0;
  margin-bottom: 0;
}
.fh5co-nav .top .num, .fh5co-nav .top .fh5co-social {
  display: inline-block;
  margin: 0;
}
.fh5co-nav .top .num {
  font-size: 13px;
  padding-right: 20px;
  margin-right: 10px;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
  border-right: 1px solid rgba(255, 255, 255, 0.2);
  letter-spacing: 0px;
  color: rgba(255, 255, 255, 0.7);
}
.fh5co-nav .top .fh5co-social li {
  font-size: 14px;
}
.fh5co-nav .top .fh5co-social li a {
  padding: 0 7px;
}
.fh5co-nav .top .fh5co-social li a i {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.7);
}
.fh5co-nav #fh5co-logo {
  font-size: 24px;
  margin: 0;
  padding: 0;
  text-transform: uppercase;
  font-weight: bold;
  font-weight: 700;
  font-family: "Work Sans", Arial, sans-serif;
}
.fh5co-nav #fh5co-logo a span {
  color: #F85A16;
}
.fh5co-nav a {
  padding: 5px 10px;
  color: #000;
}
@media screen and (max-width: 768px) {
  .fh5co-nav .menu-1 {
    display: none;
  }
}
.fh5co-nav ul {
  padding: 7px;
  margin: 10px 0 0 0;
}
.fh5co-nav ul li {
  padding: 0;
  margin: 0;
  list-style: none;
  display: inline;
}
.fh5co-nav ul li a {
  font-size: 13px;
  padding: 30px 15px;
  text-transform: uppercase;
  letter-spacing: 2px;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.fh5co-nav ul li a:hover, .fh5co-nav ul li a:focus, .fh5co-nav ul li a:active {
  color: #000 !important;
}
.fh5co-nav ul li.has-dropdown {
  position: relative;
}
.fh5co-nav ul li.has-dropdown .dropdown {
  width: 140px;
  -webkit-box-shadow: 0px 14px 33px -9px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 14px 33px -9px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 14px 33px -9px rgba(0, 0, 0, 0.75);
  z-index: 1002;
  visibility: hidden;
  opacity: 0;
  position: absolute;
  top: 40px;
  left: 0;
  text-align: left;
  background: #F85A16;
  padding: 20px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
  -webkit-transition: 0s;
  -o-transition: 0s;
  transition: 0s;
}
.fh5co-nav ul li.has-dropdown .dropdown:before {
  bottom: 100%;
  left: 40px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: #F85A16;
  border-width: 8px;
  margin-left: -8px;
}
.fh5co-nav ul li.has-dropdown .dropdown li {
  display: block;
  margin-bottom: 7px;
}
.fh5co-nav ul li.has-dropdown .dropdown li:last-child {
  margin-bottom: 0;
}
.fh5co-nav ul li.has-dropdown .dropdown li a {
  padding: 2px 0;
  display: block;
  color: #f2f2f2;
  line-height: 1.2;
  text-transform: none;
  font-size: 13px;
  letter-spacing: 0;
}
.fh5co-nav ul li.has-dropdown .dropdown li a:hover {
  color: #fff;
}
.fh5co-nav ul li.has-dropdown:hover a, .fh5co-nav ul li.has-dropdown:focus a {
  color: #fff;
}
.fh5co-nav ul li.btn-cta a {
  color: #fff;
}
.fh5co-nav ul li.btn-cta a span {
  background: #F85A16;
  padding: 4px 20px;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  -ms-border-radius: 100px;
  border-radius: 100px;
}
.fh5co-nav ul li.btn-cta a:hover span {
  -webkit-box-shadow: 0px 14px 20px -9px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 14px 20px -9px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 14px 20px -9px rgba(0, 0, 0, 0.75);
}
.fh5co-nav ul li.active > a {
  color: #F85A16 !important;
}

#fh5co-header,
#fh5co-counter,
.fh5co-bg {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative;
}

.fh5co-bg {
  background-size: cover;
  background-position: center center;
  position: relative;
  width: 100%;
  float: left;
}
.fh5co-bg .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}

.fh5co-video {
  overflow: hidden;
}
@media screen and (max-width: 992px) {
  .fh5co-video {
    height: 450px;
  }
}
.fh5co-video a {
  z-index: 1001;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -45px;
  margin-left: -45px;
  width: 90px;
  height: 90px;
  display: table;
  text-align: center;
  background: #fff;
  -webkit-box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75);
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
.fh5co-video a i {
  text-align: center;
  display: table-cell;
  vertical-align: middle;
  font-size: 40px;
}
.fh5co-video .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.fh5co-video:hover .overlay {
  background: rgba(0, 0, 0, 0.7);
}
.fh5co-video:hover a {
  -webkit-transform: scale(1.2);
  -moz-transform: scale(1.2);
  -ms-transform: scale(1.2);
  -o-transform: scale(1.2);
  transform: scale(1.2);
}

.fh5co-cover {
  height: 800px;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative;
  float: left;
  width: 100%;
}
.fh5co-cover .overlay {
  z-index: 0;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.3);
}
.fh5co-cover > .fh5co-container {
  position: relative;
  z-index: 10;
}
@media screen and (max-width: 768px) {
  .fh5co-cover {
    height: 600px;
  }
}
.fh5co-cover .display-t,
.fh5co-cover .display-tc {
  z-index: 9;
  height: 700px;
  display: table;
  width: 100%;
  margin-top: 100px;
}
@media screen and (max-width: 768px) {
  .fh5co-cover .display-t,
  .fh5co-cover .display-tc {
    height: 400px;
  }
}
.fh5co-cover.fh5co-cover-sm {
  height: 600px;
}
@media screen and (max-width: 768px) {
  .fh5co-cover.fh5co-cover-sm {
    height: 400px;
  }
}
.fh5co-cover.fh5co-cover-sm .display-t,
.fh5co-cover.fh5co-cover-sm .display-tc {
  height: 400px;
  display: table;
  width: 100%;
}
@media screen and (max-width: 768px) {
  .fh5co-cover.fh5co-cover-sm .display-t,
  .fh5co-cover.fh5co-cover-sm .display-tc {
    height: 400px;
  }
}

.fh5co-social-icons {
  margin: 0;
  padding: 0;
}
.fh5co-social-icons li {
  margin: 0;
  padding: 0;
  list-style: none;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.fh5co-social-icons li a {
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
  color: #F85A16;
  padding-left: 10px;
  padding-right: 10px;
}
.fh5co-social-icons li a i {
  font-size: 20px;
}

.fh5co-contact-info ul {
  padding: 0;
  margin: 0;
}
.fh5co-contact-info ul li {
  padding: 0 0 0 40px;
  margin: 0 0 30px 0;
  list-style: none;
  position: relative;
}
.fh5co-contact-info ul li:before {
  color: #F85A16;
  position: absolute;
  left: 0;
  top: .05em;
  font-family: 'icomoon';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fh5co-contact-info ul li.address:before {
  font-size: 30px;
  content: "\e9d1";
}
.fh5co-contact-info ul li.phone:before {
  font-size: 23px;
  content: "\e9f4";
}
.fh5co-contact-info ul li.email:before {
  font-size: 23px;
  content: "\e9da";
}
.fh5co-contact-info ul li.url:before {
  font-size: 23px;
  content: "\e9af";
}

#fh5co-header .display-tc,
#fh5co-counter .display-tc,
.fh5co-cover .display-tc {
  display: table-cell !important;
  vertical-align: middle;
  padding: 0 40px;
}
#fh5co-header .display-tc h1, #fh5co-header .display-tc h2,
#fh5co-counter .display-tc h1,
#fh5co-counter .display-tc h2,
.fh5co-cover .display-tc h1,
.fh5co-cover .display-tc h2 {
  margin: 0;
  padding: 0;
  color: white;
}
#fh5co-header .display-tc h1,
#fh5co-counter .display-tc h1,
.fh5co-cover .display-tc h1 {
  margin-bottom: 20px;
  font-size: 54px;
  line-height: 1.3;
  text-transform: uppercase;
  font-weight: 400;
}
@media screen and (max-width: 768px) {
  #fh5co-header .display-tc h1,
  #fh5co-counter .display-tc h1,
  .fh5co-cover .display-tc h1 {
    font-size: 30px;
  }
}
#fh5co-header .display-tc h2,
#fh5co-counter .display-tc h2,
.fh5co-cover .display-tc h2 {
  font-size: 20px;
  line-height: 1.5;
  margin-bottom: 30px;
}
#fh5co-header .display-tc .btn,
#fh5co-counter .display-tc .btn,
.fh5co-cover .display-tc .btn {
  padding: 15px 30px;
  background: #F85A16 !important;
  color: #fff;
  border: none !important;
  font-size: 18px;
}
#fh5co-header .display-tc .btn:hover,
#fh5co-counter .display-tc .btn:hover,
.fh5co-cover .display-tc .btn:hover {
  background: #F85A16 !important;
  -webkit-box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75) !important;
  -moz-box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75) !important;
  box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75) !important;
}
#fh5co-header .display-tc .form-inline .form-group,
#fh5co-counter .display-tc .form-inline .form-group,
.fh5co-cover .display-tc .form-inline .form-group {
  width: 100% !important;
  margin-bottom: 10px;
}
#fh5co-header .display-tc .form-inline .form-group .form-control,
#fh5co-counter .display-tc .form-inline .form-group .form-control,
.fh5co-cover .display-tc .form-inline .form-group .form-control {
  width: 100%;
  background: #fff;
  border: none;
}

.fh5co-bg-section {
  background: rgba(0, 0, 0, 0.05);
}

#fh5co-services,
#fh5co-started,
#fh5co-testimonial,
#fh5co-trainer,
#fh5co-gallery,
#fh5co-schedule,
#fh5co-pricing,
#fh5co-blog,
#fh5co-contact,
#fh5co-footer {
  padding: 7em 0;
  clear: both;
}
@media screen and (max-width: 768px) {
  #fh5co-services,
  #fh5co-started,
  #fh5co-testimonial,
  #fh5co-trainer,
  #fh5co-gallery,
  #fh5co-schedule,
  #fh5co-pricing,
  #fh5co-blog,
  #fh5co-contact,
  #fh5co-footer {
    padding: 3em 0;
  }
}

#fh5co-gallery {
  padding-bottom: 0;
}

.services {
  padding: 25px;
  margin-top: -10em;
  background: #fff;
  -webkit-box-shadow: 0px 10px 23px -10px rgba(0, 0, 0, 0.43);
  -moz-box-shadow: 0px 10px 23px -10px rgba(0, 0, 0, 0.43);
  -ms-box-shadow: 0px 10px 23px -10px rgba(0, 0, 0, 0.43);
  -o-box-shadow: 0px 10px 23px -10px rgba(0, 0, 0, 0.43);
  box-shadow: 0px 10px 23px -10px rgba(0, 0, 0, 0.43);
}
@media screen and (max-width: 992px) {
  .services {
    margin-top: 0;
    margin-bottom: 10px;
  }
}
@media screen and (max-width: 768px) {
  .services {
    margin-top: 0;
    margin-bottom: 20px;
  }
}
.services span {
  width: 100%;
  display: block;
  margin-bottom: 30px;
}
.services span img {
  width: 60px;
  margin: 0 auto;
}
.services h3 {
  text-transform: uppercase;
  font-size: 16px;
  letter-spacing: 2px;
  font-weight: 500;
  position: relative;
}
.services h3:after {
  position: absolute;
  bottom: -10px;
  left: 0;
  right: 0;
  width: 40px;
  height: 2px;
  margin: 0 auto;
  background: #F85A16;
  content: '';
}

.trainer {
  position: relative;
  background: rgba(0, 0, 0, 0.05);
}
@media screen and (max-width: 768px) {
  .trainer {
    margin-bottom: 30px;
  }
}
.trainer img {
  width: 84%;
}
.trainer .title {
  width: 100%;
  position: absolute;
  bottom: 60%;
  left: 42%;
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  transform: rotate(270deg);
}
.trainer .title h3 {
  font-size: 18px;
  text-transform: uppercase;
  letter-spacing: 3px;
  margin: 0;
  padding: 0;
}
.trainer .title h3 a {
  color: #000;
}
.trainer .title h3 a:hover, .trainer .title h3 a:focus {
  color: #F85A16;
}
.trainer .title span {
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 13px;
  color: rgba(0, 0, 0, 0.4);
}
.trainer .desc {
  width: 70%;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: white;
  padding: 7px;
}
.trainer .desc .fh5co-social-icons li a {
  color: #000;
}
.trainer .desc .fh5co-social-icons li a i {
  font-size: 16px;
}

#fh5co-schedule .fh5co-heading h2 {
  color: #fff;
}
#fh5co-schedule .fh5co-heading p {
  color: rgba(255, 255, 255, 0.5);
}
#fh5co-schedule .fh5co-heading span {
  color: rgba(255, 255, 255, 0.5);
}

.fh5co-tabs {
  width: 90%;
  margin: 0 auto;
}
.fh5co-tabs .fh5co-tab-nav {
  clear: both;
  margin: 0;
  padding: 0;
  float: left;
  width: 100%;
  background: rgba(0, 0, 0, 0.3);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
}
.fh5co-tabs .fh5co-tab-nav li {
  float: left;
  margin: 0;
  padding: 0;
  width: 14.285%;
  text-align: center;
  list-style: none;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.fh5co-tabs .fh5co-tab-nav li a {
  padding: 10px;
  width: 100%;
  float: left;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
  color: #e6e6e6;
}
.fh5co-tabs .fh5co-tab-nav li a:hover {
  color: white;
}
.fh5co-tabs .fh5co-tab-nav li.active a {
  background: #F85A16;
  color: #fff;
}
.fh5co-tabs .fh5co-tab-content-wrap {
  clear: both;
  position: relative;
}
.fh5co-tabs .fh5co-tab-content-wrap .tab-content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  opacity: 0;
  visibility: hidden;
}
.fh5co-tabs .fh5co-tab-content-wrap .tab-content.active {
  opacity: 1;
  visibility: visible;
}
.fh5co-tabs .class-schedule {
  width: 100%;
  float: left;
  margin: 0;
  padding: 0;
}
.fh5co-tabs .class-schedule li {
  width: 25%;
  float: left;
  border-right: 1px solid rgba(255, 255, 255, 0.02);
  border-bottom: 1px solid rgba(255, 255, 255, 0.02);
  list-style: none;
  padding: 20px;
  padding-top: 40px;
  padding-bottom: 40px;
}
@media screen and (max-width: 768px) {
  .fh5co-tabs .class-schedule li {
    width: 50%;
  }
}
@media screen and (max-width: 480px) {
  .fh5co-tabs .class-schedule li {
    width: 100%;
  }
}
.fh5co-tabs .class-schedule li:first-child {
  border-left: 1px solid rgba(255, 255, 255, 0.02);
}
.fh5co-tabs .class-schedule li:nth-child(5) {
  border-left: 1px solid rgba(255, 255, 255, 0.02);
}
.fh5co-tabs .class-schedule li span {
  display: block;
  margin-bottom: 20px;
}
.fh5co-tabs .class-schedule li span img {
  width: 60px;
  height: 60px;
  margin: 0 auto;
}
.fh5co-tabs .class-schedule li h4 {
  color: rgba(255, 255, 255, 0.8);
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.fh5co-tabs .class-schedule li .time {
  display: inline-block;
  padding: 5px 12px;
  background: #F85A16;
  color: #fff;
  font-size: 13px;
}

.pricing {
  display: block;
  float: left;
  margin-bottom: 30px;
  width: 100%;
}

.price-box {
  width: 100%;
  text-align: center;
  padding: 30px;
  background: rgba(0, 0, 0, 0.05);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  border-radius: 5px;
  margin-bottom: 40px;
  position: relative;
}
.price-box.popular .btn-select-plan {
  background: #F85A16;
}
.price-box.popular .price {
  color: #F85A16;
}
.price-box .btn-select-plan {
  padding: 10px 20px;
  background: #5bc0de;
  color: #fff;
}
.price-box .classes {
  padding: 0;
}
.price-box .classes li {
  display: block;
  width: 100%;
  list-style: none;
  margin: 0;
  font-size: 16px;
  padding: 8px 10px;
}
.price-box .classes li.color {
  background: rgba(0, 0, 0, 0.04);
}

.pricing-plan {
  margin: 0 0 50px 0;
  padding: 0;
  font-size: 13px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 700;
  color: #888f94;
}
.pricing-plan.pricing-plan-offer {
  margin-bottom: 24px;
}
.pricing-plan span {
  display: block;
  margin-top: 10px;
  margin-bottom: 0;
  color: #d5d8db;
}

.price {
  font-size: 72px;
  color: #000;
  line-height: 50px;
}
.price .currency {
  font-size: 30px;
  top: -0.9em;
  padding-right: 10px;
}
.price small {
  font-size: 13px;
  display: block;
  text-transform: uppercase;
  color: #888f94;
}

#fh5co-portfolio-list {
  flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  position: relative;
  float: left;
  padding: 0;
  margin: 0;
  width: 100%;
}
#fh5co-portfolio-list li {
  display: block;
  padding: 0;
  margin: 0 0 15px 1%;
  list-style: none;
  min-height: 400px;
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  float: left;
  clear: left;
  position: relative;
}
@media screen and (max-width: 480px) {
  #fh5co-portfolio-list li {
    margin-left: 0;
  }
}
#fh5co-portfolio-list li a {
  min-height: 400px;
  padding: 2em;
  position: relative;
  width: 100%;
  display: block;
}
#fh5co-portfolio-list li a:before {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  content: "";
  z-index: 80;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
  background: transparent;
}
#fh5co-portfolio-list li a:hover:before {
  background: rgba(0, 0, 0, 0.5);
}
#fh5co-portfolio-list li a .case-studies-summary {
  width: auto;
  bottom: 2em;
  left: 2em;
  right: 2em;
  position: absolute;
  z-index: 100;
}
@media screen and (max-width: 768px) {
  #fh5co-portfolio-list li a .case-studies-summary {
    bottom: 1em;
    left: 1em;
    right: 1em;
  }
}
#fh5co-portfolio-list li a .case-studies-summary span {
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 13px;
  color: rgba(255, 255, 255, 0.7);
}
#fh5co-portfolio-list li a .case-studies-summary h2 {
  color: #fff;
  margin-bottom: 0;
}
@media screen and (max-width: 768px) {
  #fh5co-portfolio-list li a .case-studies-summary h2 {
    font-size: 20px;
  }
}
#fh5co-portfolio-list li.two-third {
  width: 48.6%;
}
@media screen and (max-width: 768px) {
  #fh5co-portfolio-list li.two-third {
    width: 49%;
  }
}
@media screen and (max-width: 480px) {
  #fh5co-portfolio-list li.two-third {
    width: 100%;
  }
}
#fh5co-portfolio-list li.one-third {
  width: 23.8%;
}
@media screen and (max-width: 768px) {
  #fh5co-portfolio-list li.one-third {
    width: 49%;
  }
}
@media screen and (max-width: 480px) {
  #fh5co-portfolio-list li.one-third {
    width: 100%;
  }
}
#fh5co-portfolio-list li.one-half {
  width: 49%;
}
@media screen and (max-width: 480px) {
  #fh5co-portfolio-list li.one-half {
    width: 100%;
  }
}

.fh5co-heading {
  margin-bottom: 5em;
}
.fh5co-heading h2 {
  font-size: 30px;
  margin-bottom: 40px;
  line-height: 1.5;
  color: #000;
  text-transform: uppercase;
  position: relative;
}
.fh5co-heading h2:after {
  position: absolute;
  bottom: -10px;
  left: 0;
  right: 0;
  width: 60px;
  height: 2px;
  margin: 0 auto;
  background: #F85A16;
  content: '';
}
.fh5co-heading p {
  font-size: 18px;
  line-height: 1.5;
  color: #828282;
}
.fh5co-heading span {
  display: block;
  margin-bottom: 10px;
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 2px;
}

#fh5co-testimonial {
  background: #efefef;
}
#fh5co-testimonial .testimony-slide {
  text-align: center;
}
#fh5co-testimonial .testimony-slide span {
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 700;
  display: block;
}
#fh5co-testimonial .testimony-slide figure {
  margin-bottom: 10px;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
#fh5co-testimonial .testimony-slide figure img {
  width: 100px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
#fh5co-testimonial .testimony-slide blockquote {
  border: none;
  margin: 30px auto;
  width: 70%;
  position: relative;
  padding: 0;
}
@media screen and (max-width: 992px) {
  #fh5co-testimonial .testimony-slide blockquote {
    width: 100%;
  }
}
#fh5co-testimonial .arrow-thumb {
  position: absolute;
  top: 40%;
  display: block;
  width: 100%;
}
#fh5co-testimonial .arrow-thumb a {
  font-size: 32px;
  color: #dadada;
}
#fh5co-testimonial .arrow-thumb a:hover, #fh5co-testimonial .arrow-thumb a:focus, #fh5co-testimonial .arrow-thumb a:active {
  text-decoration: none;
}

#fh5co-started {
  position: relative;
}
#fh5co-started .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
#fh5co-started h2 {
  text-transform: uppercase;
  color: #fff;
  margin-bottom: 20px !important;
  line-height: 1.5em;
}
#fh5co-started h2 span {
  font-weight: 100;
  color: rgba(255, 255, 255, 0.7);
}
#fh5co-started h2 .percent {
  color: #F85A16;
  font-weight: 700;
}
#fh5co-started p {
  color: rgba(255, 255, 255, 0.5);
}
#fh5co-started .form-control {
  background: rgba(255, 255, 255, 0.2);
  border: none !important;
  color: #fff;
  font-size: 16px !important;
  width: 100%;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
#fh5co-started .form-control::-webkit-input-placeholder {
  color: #fff;
}
#fh5co-started .form-control:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}
#fh5co-started .form-control::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}
#fh5co-started .form-control:-ms-input-placeholder {
  color: #fff;
}
#fh5co-started .form-control:focus {
  background: rgba(255, 255, 255, 0.3);
}
#fh5co-started .btn {
  height: 54px;
  border: none !important;
  background: #F85A16;
  color: #fff;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 400;
  padding-left: 50px;
  padding-right: 50px;
}
#fh5co-started .form-inline .form-group {
  width: 100% !important;
  margin-bottom: 10px;
}
#fh5co-started .form-inline .form-group .form-control {
  width: 100%;
}

.fh5co-blog {
  margin-bottom: 60px;
}
.fh5co-blog a img {
  width: 100%;
}
@media screen and (max-width: 768px) {
  .fh5co-blog {
    width: 100%;
  }
}
.fh5co-blog .blog-text {
  margin-bottom: 30px;
  position: relative;
  background: #fff;
  width: 90%;
  padding: 30px;
  float: right;
  margin-top: -5em;
  -webkit-box-shadow: 0px 10px 20px -12px rgba(0, 0, 0, 0.18);
  -moz-box-shadow: 0px 10px 20px -12px rgba(0, 0, 0, 0.18);
  box-shadow: 0px 10px 20px -12px rgba(0, 0, 0, 0.18);
}
.fh5co-blog .blog-text span {
  display: inline-block;
  margin-bottom: 20px;
}
.fh5co-blog .blog-text span.posted_on {
  color: white;
  font-size: 18px;
  padding: 2px 10px;
  padding-left: 40px;
  margin-left: -40px;
  background: #F85A16;
  position: relative;
}
.fh5co-blog .blog-text span.posted_on:before {
  position: absolute;
  top: -9px;
  left: 0;
  content: '';
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 0 9px 9px;
  border-color: transparent transparent #F85A16 transparent;
}
.fh5co-blog .blog-text span.comment {
  float: right;
}
.fh5co-blog .blog-text span.comment a {
  color: rgba(0, 0, 0, 0.3);
}
.fh5co-blog .blog-text span.comment a i {
  color: #F85A16;
  padding-left: 7px;
}
.fh5co-blog .blog-text h3 {
  font-size: 20px;
  margin-bottom: 20px;
  line-height: 1.5;
}
.fh5co-blog .blog-text h3 a {
  color: black;
}

#fh5co-footer {
  position: relative;
}
#fh5co-footer .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.9);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
#fh5co-footer h3 {
  margin-bottom: 15px;
  font-weight: bold;
  font-size: 15px;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.8);
}
#fh5co-footer .fh5co-footer-links {
  padding: 0;
  margin: 0;
}
#fh5co-footer .fh5co-footer-links li {
  padding: 0;
  margin: 0;
  list-style: none;
}
#fh5co-footer .fh5co-footer-links li a {
  color: rgba(255, 255, 255, 0.5);
  text-decoration: none;
}
#fh5co-footer .fh5co-footer-links li a:hover {
  text-decoration: underline;
}
#fh5co-footer .fh5co-widget {
  margin-bottom: 30px;
}
@media screen and (max-width: 768px) {
  #fh5co-footer .fh5co-widget {
    text-align: left;
  }
}
#fh5co-footer .fh5co-widget h3 {
  margin-bottom: 15px;
  font-weight: bold;
  font-size: 15px;
  letter-spacing: 2px;
  text-transform: uppercase;
}
#fh5co-footer .copyright .block {
  display: block;
}

#map {
  width: 100%;
  height: 500px;
  position: relative;
}
@media screen and (max-width: 768px) {
  #map {
    height: 200px;
  }
}

#fh5co-offcanvas {
  position: absolute;
  z-index: 1901;
  width: 270px;
  background: black;
  top: 0;
  right: 0;
  top: 0;
  bottom: 0;
  padding: 75px 40px 40px 40px;
  overflow-y: auto;
  display: none;
  -moz-transform: translateX(270px);
  -webkit-transform: translateX(270px);
  -ms-transform: translateX(270px);
  -o-transform: translateX(270px);
  transform: translateX(270px);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
@media screen and (max-width: 768px) {
  #fh5co-offcanvas {
    display: block;
  }
}
.offcanvas #fh5co-offcanvas {
  -moz-transform: translateX(0px);
  -webkit-transform: translateX(0px);
  -ms-transform: translateX(0px);
  -o-transform: translateX(0px);
  transform: translateX(0px);
}
#fh5co-offcanvas a {
  color: rgba(255, 255, 255, 0.5);
}
#fh5co-offcanvas a:hover {
  color: rgba(255, 255, 255, 0.8);
}
#fh5co-offcanvas ul {
  padding: 0;
  margin: 0;
}
#fh5co-offcanvas ul li {
  padding: 0;
  margin: 0;
  list-style: none;
}
#fh5co-offcanvas ul li > ul {
  padding-left: 20px;
  display: none;
}
#fh5co-offcanvas ul li.offcanvas-has-dropdown > a {
  display: block;
  position: relative;
}
#fh5co-offcanvas ul li.offcanvas-has-dropdown > a:after {
  position: absolute;
  right: 0px;
  font-family: 'icomoon';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\e921";
  font-size: 20px;
  color: rgba(255, 255, 255, 0.2);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
#fh5co-offcanvas ul li.offcanvas-has-dropdown.active a:after {
  -webkit-transform: rotate(-180deg);
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -o-transform: rotate(-180deg);
  transform: rotate(-180deg);
}

.uppercase {
  font-size: 14px;
  color: #000;
  margin-bottom: 10px;
  font-weight: 700;
  text-transform: uppercase;
}

.gototop {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 999;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.gototop.active {
  opacity: 1;
  visibility: visible;
}
.gototop a {
  width: 50px;
  height: 50px;
  display: table;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  text-align: center;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
}
.gototop a i {
  height: 50px;
  display: table-cell;
  vertical-align: middle;
}
.gototop a:hover, .gototop a:active, .gototop a:focus {
  text-decoration: none;
  outline: none;
}

.fh5co-nav-toggle {
  width: 25px;
  height: 25px;
  cursor: pointer;
  text-decoration: none;
}
.fh5co-nav-toggle.active i::before, .fh5co-nav-toggle.active i::after {
  background: #fff !important;
}
.fh5co-nav-toggle:hover, .fh5co-nav-toggle:focus, .fh5co-nav-toggle:active {
  outline: none;
  border-bottom: none !important;
}
.fh5co-nav-toggle i {
  position: relative;
  display: inline-block;
  width: 25px;
  height: 2px;
  color: #252525;
  font: bold 14px/.4 Helvetica;
  text-transform: uppercase;
  text-indent: -55px;
  background: #252525;
  transition: all .2s ease-out;
}
.fh5co-nav-toggle i::before, .fh5co-nav-toggle i::after {
  content: '';
  width: 25px;
  height: 2px;
  background: #252525;
  position: absolute;
  left: 0;
  transition: all .2s ease-out;
}
.fh5co-nav-toggle.fh5co-nav-white > i {
  color: #000;
  background: #000;
}
.fh5co-nav-toggle.fh5co-nav-white > i::before, .fh5co-nav-toggle.fh5co-nav-white > i::after {
  background: #000;
}

.fh5co-nav-toggle i::before {
  top: -7px;
}

.fh5co-nav-toggle i::after {
  bottom: -7px;
}

.fh5co-nav-toggle:hover i::before {
  top: -10px;
}

.fh5co-nav-toggle:hover i::after {
  bottom: -10px;
}

.fh5co-nav-toggle.active i {
  background: transparent;
}

.fh5co-nav-toggle.active i::before {
  top: 0;
  -webkit-transform: rotateZ(45deg);
  -moz-transform: rotateZ(45deg);
  -ms-transform: rotateZ(45deg);
  -o-transform: rotateZ(45deg);
  transform: rotateZ(45deg);
}

.fh5co-nav-toggle.active i::after {
  bottom: 0;
  -webkit-transform: rotateZ(-45deg);
  -moz-transform: rotateZ(-45deg);
  -ms-transform: rotateZ(-45deg);
  -o-transform: rotateZ(-45deg);
  transform: rotateZ(-45deg);
}

.fh5co-nav-toggle {
  position: absolute;
  right: 0px;
  top: 65px;
  z-index: 21;
  padding: 6px 0 0 0;
  display: block;
  margin: 0 auto;
  display: none;
  height: 44px;
  width: 44px;
  z-index: 2001;
  border-bottom: none !important;
}
@media screen and (max-width: 768px) {
  .fh5co-nav-toggle {
    display: block;
  }
}

.btn {
  margin-right: 4px;
  margin-bottom: 4px;
  font-family: "Work Sans", Arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  -ms-border-radius: 30px;
  border-radius: 30px;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
  padding: 8px 20px;
}
.btn.btn-md {
  padding: 8px 20px !important;
}
.btn.btn-lg {
  padding: 18px 36px !important;
}
.btn:hover, .btn:active, .btn:focus {
  box-shadow: none !important;
  outline: none !important;
}

.btn-primary {
  background: #F85A16;
  color: #fff;
  border: 2px solid #F85A16;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active {
  background: #f96c2f !important;
  border-color: #f96c2f !important;
}
.btn-primary.btn-outline {
  background: transparent;
  color: #F85A16;
  border: 1px solid #F85A16;
}
.btn-primary.btn-outline:hover, .btn-primary.btn-outline:focus, .btn-primary.btn-outline:active {
  background: #F85A16;
  color: #fff;
}

.btn-success {
  background: #5cb85c;
  color: #fff;
  border: 2px solid #5cb85c;
}
.btn-success:hover, .btn-success:focus, .btn-success:active {
  background: #4cae4c !important;
  border-color: #4cae4c !important;
}
.btn-success.btn-outline {
  background: transparent;
  color: #5cb85c;
  border: 1px solid #5cb85c;
}
.btn-success.btn-outline:hover, .btn-success.btn-outline:focus, .btn-success.btn-outline:active {
  background: #5cb85c;
  color: #fff;
}

.btn-info {
  background: #5bc0de;
  color: #fff;
  border: 2px solid #5bc0de;
}
.btn-info:hover, .btn-info:focus, .btn-info:active {
  background: #46b8da !important;
  border-color: #46b8da !important;
}
.btn-info.btn-outline {
  background: transparent;
  color: #5bc0de;
  border: 1px solid #5bc0de;
}
.btn-info.btn-outline:hover, .btn-info.btn-outline:focus, .btn-info.btn-outline:active {
  background: #5bc0de;
  color: #fff;
}

.btn-warning {
  background: #f0ad4e;
  color: #fff;
  border: 2px solid #f0ad4e;
}
.btn-warning:hover, .btn-warning:focus, .btn-warning:active {
  background: #eea236 !important;
  border-color: #eea236 !important;
}
.btn-warning.btn-outline {
  background: transparent;
  color: #f0ad4e;
  border: 1px solid #f0ad4e;
}
.btn-warning.btn-outline:hover, .btn-warning.btn-outline:focus, .btn-warning.btn-outline:active {
  background: #f0ad4e;
  color: #fff;
}

.btn-danger {
  background: #d9534f;
  color: #fff;
  border: 2px solid #d9534f;
}
.btn-danger:hover, .btn-danger:focus, .btn-danger:active {
  background: #d43f3a !important;
  border-color: #d43f3a !important;
}
.btn-danger.btn-outline {
  background: transparent;
  color: #d9534f;
  border: 1px solid #d9534f;
}
.btn-danger.btn-outline:hover, .btn-danger.btn-outline:focus, .btn-danger.btn-outline:active {
  background: #d9534f;
  color: #fff;
}

.btn-outline {
  background: none;
  border: 1px solid gray;
  font-size: 16px;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.btn-outline:hover, .btn-outline:focus, .btn-outline:active {
  box-shadow: none;
}

.btn.with-arrow {
  position: relative;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.btn.with-arrow i {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  right: 0px;
  top: 50%;
  margin-top: -8px;
  -webkit-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
}
.btn.with-arrow:hover {
  padding-right: 50px;
}
.btn.with-arrow:hover i {
  color: #fff;
  right: 18px;
  visibility: visible;
  opacity: 1;
}

.form-control {
  box-shadow: none;
  background: transparent;
  border: 2px solid rgba(0, 0, 0, 0.1);
  height: 54px;
  font-size: 18px;
  font-weight: 300;
}
.form-control:active, .form-control:focus {
  outline: none;
  box-shadow: none;
  border-color: #F85A16;
}

.row-pb-md {
  padding-bottom: 4em !important;
}

.row-pb-sm {
  padding-bottom: 2em !important;
}

.js .animate-box {
  opacity: 0;
}
/************Running*****************/
/*****P1****/
#img_run{
  width: 500px;
  height: 370px;
}
 div.col p
{
 width: 500px;
 text-align: center;
}
#txt
{
  font-size: 20px;
  color:black;

}
div.col img{
margin:0 20px 20px 100px;
border-radius: 8px;
}
div.col{
  display:flex;
}
/*****P1****/
#img_run2{
  width: 500px;
  height: 370px;
}
div.col2{
  display:flex;
  float:right;
}
div.col2 img{
margin:100px 100px 100px 20px;
border-radius: 8px;
}
div.col2 p
{
margin:130px 0 0 0;
width: 500px;
text-align: center;
}

		
	</style>
	
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
						<a href="index.php"><img src="../images/logo2.png" style="background: none"></a>
					</div>
				</div>
			</div>

		</div>
	</footer>
	</div>
	<!-- Footer -->


	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	
</body>
</html>
