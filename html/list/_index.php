
<!-- START PAGE SOURCE -->

<?php
//require_once("java/Java.inc");
require_once("http://localhost:8080/mdb/java/Java.inc");
$System = new Java("java.lang.System");

#echo $System->getProperties();
#echo "Why is that";
#$con = new Java("mvdb.Connector");
#$stmt=$con->stmt;
#$r=$stmt->executeQuery("select * from Movies where name like '%Thor%'");
#$r->next();
#echo $r->getString("name");
#$con->closeConnection();
#$con->closeConnection();
#$t = new Java("brigdetest.bridge");
#echo $t;
//echo java_cast($com->getMovie("name","Hello",$con->stmt),"S");
//echo java_cast($com->test(),'S');

?>

<?php

  if(isset($_POST['login']))
  {
    $inputContent = $_POST['fname'];
        $inputValue = $_POST['classid'];
        switch($inputValue){
      case 0;
      $type = 'name';
      break;
      case 1;
      $type = 'hero';
      break;
      case 2;
      $type = 'director';
      break;
      case 3;
      $type = 'description';
      break;
  }
  //echo $type;
  //echo $inputContent;
    $con = new Java("mvdb.Connector");
    $movie = new Java("mvdb.Movie");
    //echo java_cast($movie->getMovie("name","Hello",$con->stmt),"S");
    $rs =  java_cast($movie->getMovie("$type","$inputContent",$con->stmt),"S");
    echo $rs;
    $con->closeConnection();
  }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Movie Hunter</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="all" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery-ui-1.8.5.custom.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
<script src="js/fancybox/jquery.fancybox-1.3.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/fancybox/jquery.mousewheel-3.0.2.pack.js" type="text/javascript" charset="utf-8"></script>
<script src="js/js-func.js" type="text/javascript" charset="utf-8"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<div class="shell">
  <div id="header">
    <div id="navigation">
      <ul id="sortable">
        <li><a href="http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com/Search/"><span>Home Page</span></a></li>
        <li><a href="#"><span>Log In</span></a></li>
        <li><a href="#"><span>Register</span></a></li>
        <li><a href="#"><span>Contact Us</span></a></li>
        <li><a href="#"><span>About Us</span></a></li>
      </ul>
    </div>
    <div class="cl">&nbsp;</div>
    <h1 id="logo" class="notext"><a href="#">PhotoWall</a></h1>
    <div class="cl">&nbsp;</div>
  </div>
  <div id="main">
    <div class="user-box"> <span class="drag-pointer">&nbsp;</span>
      <div class="cl">&nbsp;</div>
      <div class="user-picture"> <img src="css/images/1.jpg" alt="" /> </div>
      <div class="user-info">
        <p class="username">Movie Hunter</p>
        <div class="description">
          <h5>Introduction</h5>
          <p>Movie Hunter is an amazing website which could offer you the newset and hotest movies information!
          <?php
          echo $rs[0];?>
          </p>
        </div>
      </div>
      <div class="cl">&nbsp;</div>
      <div class="social-links">
        <p>FIND ME ON</p>
        <a href="#" class="linkedin">linkedin</a> <a href="#" class="skype">skype</a> <a href="#" class="facebook">facebook</a> <a href="#" class="twitter">twitter</a> <a href="#" class="picasa">picasa</a> <a href="#" class="lastfm">lastfm</a>
        <div class="cl">&nbsp;</div>
      </div>
    </div>

    <div class="image-box">
      <div class="holder"> <span class="drag-pointer">&nbsp;</span>
        <div class="photo-cover"> <a href="#" class="big-image"><img src="css/images/golden-gate.jpg" alt="" /></a> </div>
        <p class="photo-name">GOLDEN GATE</p>
      </div>
    </div>

    <div class="image-box"> <span class="drag-pointer">&nbsp;</span>
      <div class="photo-cover"> <a href="#" class="big-image"><img src="css/images/remember-love.jpg" alt="" /></a> </div>
      <p class="photo-name">REMEMBER LOVE</p>
    </div>

    <div class="image-box"> <span class="drag-pointer">&nbsp;</span>
      <div class="photo-cover"> <a href="#" class="big-image"><img src="css/images/sunset.jpg" alt="" /></a> </div>
      <p class="photo-name">THE SUNSET</p>
    </div>

    <div class="image-box"> <span class="drag-pointer">&nbsp;</span>
      <div class="photo-cover"> <a href="#" class="big-image"><img src="css/images/venice.jpg" alt="" /></a> </div>
      <p class="photo-name">Venice</p>
    </div>

    <div class="image-box"> <span class="drag-pointer">&nbsp;</span>
      <div class="photo-cover"> <a href="#" class="big-image"><img src="css/images/andrew-fashion.jpg" alt="" /></a> </div>
      <p class="photo-name">Andrew Fashion</p>
    </div>

    <div class="image-box"> <span class="drag-pointer">&nbsp;</span>
      <div class="photo-cover"> <a href="#" class="big-image"><img src="css/images/golden-gate.jpg" alt="" /></a> </div>
      <p class="photo-name">GOLDEN GATE</p>
    </div>

    <div class="image-box"> <span class="drag-pointer">&nbsp;</span>
      <div class="photo-cover"> <a href="#" class="big-image"><img src="css/images/remember-love.jpg" alt="" /></a> </div>
      <p class="photo-name">REMEMBER LOVE</p>
    </div>

    <div class="image-box"> <span class="drag-pointer">&nbsp;</span>
      <div class="photo-cover"> <a href="#" class="big-image"><img src="css/images/venice.jpg" alt="" /></a> </div>
      <p class="photo-name">Venice</p>
    </div>

    <div class="image-box"> <span class="drag-pointer">&nbsp;</span>
      <div class="photo-cover"> <a href="#" class="big-image"><img src="css/images/andrew-fashion.jpg" alt="" /></a> </div>
      <p class="photo-name">Andrew Fashion</p>
    </div>

    <div class="image-box"> <span class="drag-pointer">&nbsp;</span>
      <div class="photo-cover"> <a href="#" class="big-image"><img src="css/images/sunset.jpg" alt="" /></a> </div>
      <p class="photo-name">THE SUNSET</p>
    </div>

    <div class="cl">&nbsp;</div>
  </div>
  <div id="footer">
    <p class="lf">Copyright &copy; 2016  - All Rights Reserved</p>
    <div style="clear:both;"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>