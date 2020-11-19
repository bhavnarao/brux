
<?php
session_start();
include('connection.php');
include('logout.php'); ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>


    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="css/rockville.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="signup.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>

</head>
<body>

  <nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="./shopping.php"><strong>BRUX.</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Men
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Shirts</a>
          <a class="dropdown-item" href="#">Blazers</a>
          <a class="dropdown-item" href="#">Jeans</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="./women.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Women
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">lehangs</a>
          <a class="dropdown-item" href="#">Crop Tees</a>
          <a class="dropdown-item" href="#">Jeans</a>
          <a class="dropdown-item" href="#">Kurthi</a>
          <a class="dropdown-item" href="#">Frocks</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kids
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <div class="right">

      <ul>

        <li><a href="./signuplayout.php">Sign up</a></li>
          <li>
             <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      </form>
    </li>
      </ul>
  </div>
</div>
</nav>

<div class="st">
  <img src="img/s8.jpg">
</div>

<br>


<blockquote>
  <div class="ani1"><strong>
  	<span>B</span>
  	<span>R</span>
    <span>U</spanN>

      <span>X</spanN>
    <span class="letter"></span>

</strong>

  </div>
  <footer class="tap">Style Your You</footer>
</blockquote>


<div class="signup__container">
  <div class="container__child signup__thumbnail">

    </div>
    <div class="thumbnail__logo">
    </div>
    <div class="thumbnail__content text-center">


    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
  <form  method="post" id="loginform">
<div id="loginmessage"></div>
      <div class="signin">
      <h1 color>LOGIN<H1>
      </div>
      <div class="form-group">
        <label for="loginemail">email</label>
        <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email Address" maxlength="50">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">
      </div>

      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" name="login" type="submit" value="Login" />
          </li>
          <li>
            <a class="signup__link" href="#">forgot password*</a>
          </li>
        </ul>
      </div>
    </form>
  </div>
</div>


<footer class="site-footer">
     <div class="container">
       <div class="row">
         <div class="col-sm-12 col-md-6">
           <h6>About</h6>
           <p class="text-justify"> Be it clothing, footwear or accessories, BRUX. offers you the ideal combination of fashion and functionality for men, women and kids. You will realise that the sky is the limit when it comes to the types of outfits that you can purchase for different occasions.</p>
         </div>

         <div class="col-xs-6 col-md-3">
           <h6>Categories</h6>
           <ul class="footer-links">
             <li><a href="http://scanfcode.com/category/c-language/">Ethnic wear</a></li>
             <li><a href="http://scanfcode.com/category/front-end-development/">Party wear</a></li>
             <li><a href="http://scanfcode.com/category/back-end-development/">Denim</a></li>
             <li><a href="http://scanfcode.com/category/android/">Casuals</a></li>
             <li><a href="http://scanfcode.com/category/templates/">Simple</a></li>
           </ul>
         </div>

         <div class="col-xs-6 col-md-3">
           <h6>Quick Links</h6>
           <ul class="footer-links">
             <li><a href="http://scanfcode.com/about/">About Us</a></li>
             <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
             <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
             <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
             <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
           </ul>
         </div>
       </div>
       <hr>
     </div>
     <div class="container">
       <div class="row">
         <div class="col-md-8 col-sm-6 col-xs-12">
           <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
        <a href="#">BRUX.</a>.
           </p>
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12">
           <ul class="social-icons">
             <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
             <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
             <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
             <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
           </ul>
         </div>
       </div>
     </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="javascript.js"></script>
<script src="js/main.js"></script>











</body></html>
