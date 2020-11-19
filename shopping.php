
<?php
session_start();
include('connection.php');
 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>


    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="css/rockville.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>



    </head>
<body>

  <nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#"><strong>BRUX.</strong></a>
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
          <a class="dropdown-item" href="./women.php">lehangs</a>
          <a class="dropdown-item" href="./women.php">Crop Tees</a>
          <a class="dropdown-item" href="./women.php">Jeans</a>
          <a class="dropdown-item" href="./women.php">Kurthi</a>
          <a class="dropdown-item" href="./women.php">Frocks</a>
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

        <li><a href="./loginlayout.php">Sign in</a></li>
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



<br>
<blockquote><center>
  <div class="ani"><strong>
  	<span>B</span>
  	<span>R</span>
    <span>U</spanN>

      <span>X</spanN>
    <span class="letter"></span>

</strong>

  </div>
  <footer class="tag">Style Your You</footer>
</blockquote>
<br>


<div class="row">
  <div class="col"></div>
  <div class="col-sm-12 col-md-12">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/h11.jpg" class="d-block w-100" alt="h11">
      <div class="carousel-caption d-none d-md-block">
        <h5>THE DENIM APPAREL </h5>
        <p>A Perfect Fit to Slay</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/h16.jpg" class="d-block w-100" alt="h16">
      <div class="carousel-caption d-none d-md-block">
        <h5>ELEGANT ETHNIC</h5>
        <p>Best Of Season Collection </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/h14.jpg" class="d-block w-100" alt="h14">
      <div class="carousel-caption d-none d-md-block">
        <h5>ACTIVE ATHLEISURE APPAREL</h5>
        <p>A Perfect Choice For Your Fitspiration#</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
</div>
</div>



<br><br>
<div class="choice">
<h2><strong>SHOP FOR</strong></h2><br>
<div class="row">
  <div class="col-md-6"><h3>MEN</h3><br>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <a href="./men.php">
        <div class="carousel-item active">
          <img src="img/mk1.jpg" class="d-block w-100" alt="mk1"></a>
          <div class="carousel-caption d-none d-md-block">
            <h5>THE DENIM APPAREL </h5>
            <p>A Perfect Fit to Slay</p>
          </div>
        </div>
        <div class="carousel-item">
          <a href="./men.php">
          <img src="img/hb1.jpg" class="d-block w-100" alt="hb16"></a>
          <div class="carousel-caption d-none d-md-block">
            <h5>ELEGANT ETHNIC</h5>
            <p>Best Of Season Collection </p>
          </div>
        </div>
        <div class="carousel-item">
          <a href="./men.php">
          <img src="img/sh9.jpg" class="d-block w-100" alt="sh9"></a>
          <div class="carousel-caption d-none d-md-block">
            <h5>ACTIVE ATHLEISURE APPAREL</h5>
            <p>A Perfect Choice For Your Fitspiration#</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
</div>



  <div class="col-md-6"><h3>WOMEN</h3><br>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="./women.php">
          <img src="img/h7.jpg" class="d-block w-100" alt="h7"></a>
          <div class="carousel-caption d-none d-md-block">
            <h5>BRIDAL LEHANGA</h5>
            <p>style your you</p>
          </div>
    </div>
        <div class="carousel-item ">
          <a href="./women.php">
          <img src="img/h15.jpg" class="d-block w-100" alt="h15"></a>
          <div class="carousel-caption d-none d-md-block">
            <h5>SASSY TOPS</h5>
            <p>style your you</p>
          </div>
        </div>
        <div class="carousel-item">
<a href="./women.php">
          <img src="img/k3.jpg" class="d-block w-100" alt="k3"></a>
          <div class="carousel-caption d-none d-md-block">
            <h5>KURTHIS</h5>
            <p>A Perfect Choice For Your Fitspiration#</p>
          </div>
        </div>

      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

</div>
</div>
</div>
</div>
</div>
</div>
<br><<br><br>



<br><br><br><<br><br>


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




<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <scrip src="js/owl.carousel.min.js"></script>









  </body>
  </html>
