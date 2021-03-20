<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">

<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
 <link rel="shortcut icon" href="assets/images/fav.jpg">
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/all.min.css">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="assets/css/animate.css">
 <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
 <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
   <!-- Compiled and minified CSS -->

           
 <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
 <script src="script.js"></script>


</head>
<body>



  <nav class="navbar navbar-expand-lg nv " style="padding:0px;" >
    <a class="navbar-brand" href="#" style="width: 15%; "><img src="logo.png"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color:#fff; background-color: #152238; ">
      <i class="fas fa-bars"></i>
    </button>
  
    <div class="collapse navbar-collapse dd" id="navbarSupportedContent" style="width:100%;"  >
      <ul class="navbar-nav cc " style="width: 70%;" >
       
        <li class="nav-item dropdown dd  " >
          <a class="nav-link dropdown-toggle dd" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-bottom: 0px;">
     Projects
          </a>
          <div class="dropdown-menu dd"  aria-labelledby="navbarDropdown">
            <a class="dropdown-item dd" href="<?php echo $base_url; ?>township.php"   >  Township</a>
            <a class="dropdown-item dd" href="<?php echo $base_url; ?>commercial.php"   >Commercial</a>
       
            <a class="dropdown-item dd" href="<?php echo $base_url; ?>residential.php"   >Residential</a>
          </div>
        </li>
        <li class="nav-item dropdown dd " >
          <a class="nav-link dropdown-toggle dd" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
   About Us
          </a>
          <div class="dropdown-menu dd"  aria-labelledby="navbarDropdown">
            <a class="dropdown-item dd" href="<?php echo $base_url; ?>profile.php"   > Profile</a>
            <a class="dropdown-item dd" href="<?php echo $base_url; ?>mission.php"   >Mission/Visson</a>
       
            <a class="dropdown-item dd" href="<?php echo $base_url; ?>quality.php"   >Quality</a>
          </div>
        </li>
     
           <li class="nav-item dropdown dd " >
          <a class="nav-link dropdown-toggle dd" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
 Media
          </a>
          <div class="dropdown-menu dd"  aria-labelledby="navbarDropdown">
            <a class="dropdown-item dd" href="<?php echo $base_url; ?>profile.php"   > Press Release</a>
            
          </div>
        </li>
        <li class="nav-item  dd " >
          <a class="nav-link dd" href="#" >
 Career
          </a>
      
        </li>
        <li class="nav-item  dd " >
          <a class="nav-link dd" href="<?php echo $base_url; ?>contact.php" >
   Contact Us
          </a>
      
        </li>
     
      </ul>
      <div class="nav-item dd px-3 hide" style="width:15%; ">
        <a href="#" class="social-item co mx-1"><i class="fab fa-facebook"></i></a>
        <a href="#" class="social-item co "><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-item co mx-1"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-item co"><i class="fab fa-pinterest"></i></a>
      </div>
    </div>
  </nav>



