<?php
if(count($_COOKIE) <= 0 || !isset($_COOKIE['user']) || $_COOKIE['user']!='admin'){
  header("Location:http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Movie Hunter-Administer</title>
<meta charset="utf-8">
<link rel="stylesheet" href="media/styles/main.css" type="text/css">
<link rel="stylesheet" href="media/styles/nivo-slider.css" type="text/css">
<!--[if lte IE 8]><link rel="stylesheet" href="media/styles/ie.css" type="text/css"><![endif]-->
<script src="media/scripts/jquery-1.6.1.min.js"></script>
<script src="media/scripts/jquery.nivo.slider.pack.js"></script>
<script src="media/scripts/blanka.js"></script>
</head>
<body>
<div id="header">
  <div class="inner cf">
    <div id="navigation">
      <ul>
        <li class="current-menu-item"><a href="http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com">Home Page</a></li>
        <li class="current-menu-item"><a href="http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com/logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</div>

<hr>
<div id="content" class="home">
  <div class="inner">
    <div id="logo" class="section logo">
      <h1> <a href="#"> <img src="media/images/f.jpg" width="300" height="200" alt=""> </a> </h1>
    </div>
    <h2><span>Movie Hunter</span></h2>
    <div class="section about">
      <h3>Hello and welcome, Administer!</h3>
    </div>
    <hr>
    <h2><span>Recent Works</span></h2>
    <div class="section">
      <ol class="works-list">
        <li class="thumb">
          <div class="thumb-inner"> <a href="http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com/insertmovie/"> <img src="media/images/1.jpg" width="200" height="145" alt=""> </a> </div>
        </li>
        <li class="thumb">
          <div class="thumb-inner"> <a href="http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com/updatemovie/"> <img src="media/images/2.jpg" width="200" height="145" alt=""> </a> </div>
        </li>
        <li class="thumb">
          <div class="thumb-inner"> <a href="http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com/deletemovie/"> <img src="media/images/3.jpg" width="200" height="145" alt=""> </a> </div>
        </li>
        <li class="thumb">
          <div class="thumb-inner"> <a href="http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com/deleteuser/"> <img src="media/images/4.jpg" width="200" height="145" alt=""> </a> </div>
        </li>
      </ol>
    </div>
    <hr>
<hr>
<div id="footer">
  <div class="inner">
    <p> <span>&copy; 2016 by <a href="#">Movie Hunter</a></span> <span>All rights reserved.</span> <span>Website Template By <a target="_blank" href="http://highonpixels.com">High on Pixels</a></span> </p>
  </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
