<?php 
  session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!DOCTYPE html>
<html class="no-js">
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>jori gallery</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
  <link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
  
  <script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/icomoon-social.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <style>
  </style>

  <nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="gallery.html">Jori's Gallery</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> logout</a></li>
       

      </ul>
    </div>
  </div>
</nav>





<div class="jumbotron">
  <div class="container text-center">
 
<h2 style="font-family: New Century Schoolbook, serif ";>hellooo</h2>
<img src="https://www.w3schools.com/css/trolltunga.jpg" class="img-responsive">
<br><br>

 <?php
  if (isset($_SESSION['message'])) {
    echo "<div id='error_msg'>".$_SESSION['message']."</div>";
    unset($_SESSION['message']);
  }

?>

<div style="margin-left:50px;">
<h3>Welcome:<?php echo $_SESSION['username'];  ?> </h3>
<table>


  
<div class="container-fluid bg-3 text-center">    
  <h3>Some of my Work</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>Image 1.</p>
      <img src="https://cdn.thinglink.me/api/image/625018622057644034/1240/10/scaletowidth" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Image 2.</p>
      <img src="https://i.pinimg.com/736x/5a/e9/50/5ae9501fc3b49810db7901873f77d6f7--beautiful-nature-photos-beautiful-days.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Image 3.</p>
      <img src="http://images.all-free-download.com/images/graphiclarge/beautiful_nature_landscape_02_hd_picture_166206.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Image 4.</p>
      <img src="https://i.pinimg.com/736x/53/62/a9/5362a940ab654152d8411b0d2f56d874--sunrise-pictures-nature-pictures.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Image 5.</p>
      <img src="https://i.pinimg.com/736x/0f/a9/68/0fa9680a5bc91acce60ff418ca331cdc--future-travel-most-beautiful.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Image 6.</p>
      <img src="https://images-eu.ssl-images-amazon.com/images/I/51CuM%2BoV%2BsL._SL500_.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Image 7.</p>
      <img src="http://www.picturesonwalls.com/productshome/geevaucher_greatscoot_home.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Image 8.</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>
</div>
        
    </section>
    
  
  <div class="row" style="background-color:pink;height:70px;width:100%;">
                   
    <div class="footer-copyright" style="text-align: center;"><h3>&2017 Design by Gjorgjia Metellari.</h3></div>
                   
                </div>
       
</body>
</html>