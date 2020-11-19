<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: shopping.php");
}
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
<style>
h3.caps{
  text-transform: uppercase;
}
</style>
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


          <li>
             <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      </form>
    </li>
    <li >
      <a class="nav-link" href="./loginlayout.php?logout=1">Logout <span class="sr-only">(current)</span></a>
    </li>
      </ul>
  </div>
</div>
</nav>
<h3 class="caps"><center><strong>WELCOME </strong><b><?php echo $_SESSION['username']?></b></h3><br>
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
            <img src="hb1.jpg" class="d-block w-100" alt="hb16"></a>
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



</body>
</html>
