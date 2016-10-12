
<!-- START PAGE SOURCE -->

<?php
try{
session_start();
if(isset($_POST['login'])){
  session_unset();
}
require_once("http://localhost:8080/mdb/java/Java.inc");
$MAX=198;
if(!isset($_SESSION['mvres']) || $_SESSION['mvres']==NULL || isset($_GET['what'])){
  if(isset($_POST['login']) || isset($_GET['what']))
  {
    if(isset($_POST['login'])){
      $inputContent = $_POST['fname'];
        $inputValue = $_POST['classid'];
    }
    else{
      if($_GET['what']='back'){
      $inputContent = $_GET['fname'];
        $inputValue = $_GET['classid'];
        $tmind=$_GET['bind'];
      }
    }
        switch($inputValue){
      case 0;
      $type = 'name';
      break;
      case 1;
      $type = 'cast';
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
    if($inputContent!='')
      $rs =  java_cast($movie->getMovie($type,$inputContent,$con->stmt),"A");
    else
      $rs =  java_cast($movie->getMovie($type,$inputContent,$con->stmt),"A");
    $con->closeConnection();
    $_SESSION['mvres']=$rs;
    $size=count($rs);
    $_SESSION['size']=$size;
    //echo $rs[0];
    if($tmind)
      $ind=$tmind;
    else
      $ind=0;
    $uind=0;
    $umax=$MAX;
    $_SESSION['index']=0;
    $con->closeConnection();
    setcookie('fname', $inputContent, time() + (86400 * 30), "/");
    setcookie('classid', $inputValue, time() + (86400 * 30), "/");
    setcookie('ind', 0, time() + (86400 * 30), "/");
  }
  else{
    $inputContent=$_COOKIE['fname'];
    $inputValue=$_COOKIE['classid'];
    $con = new Java("mvdb.Connector");
    $movie = new Java("mvdb.Movie");
    //echo java_cast($movie->getMovie("name","Hello",$con->stmt),"S");
    $rs =  java_cast($movie->getMovie($type,$inputContent,$con->stmt),"A");
    $_SESSION['mvres']=$rs;
    $size=count($rs);
    $_SESSION['size']=$size;
    //echo $rs[0];
    if($tmind)
      $ind=$tmind;
    else
      $ind=0;
    $uind=0;
    $umax=$MAX;
    $_SESSION['index']=0;
    $con->closeConnection();
    setcookie('searchrs', $rs, time() + (86400 * 30), "/");
  }
}
else{
  $rs=$_SESSION['mvres'];
  $ind=$_SESSION['index'];
  $size=$_SESSION['size'];
  $uind=0;
  $umax=$MAX;
}
}
catch(Exception $e){
  header("Refresh:0");
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
        <li><a href="http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com"><span>Home Page</span></a></li>
        <li><a href="#"><span>Contact Us</span></a></li>
        <li><a href=<?php echo '.?what=back&fname='.$inputContent.'&classid='.$inputValue.'&bind='.($ind+$MAX); ?>><span>Next Page</span></a></li>
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

    <?php
    while($ind<$size && $uind<$umax):
    ?>
    <div class="image-box"> <span class="drag-pointer">&nbsp;</span>
      <div class="photo-cover"> <a href="#" class="big-image"><img src=<?php echo $rs[$ind+6].'@._V1_UX182_CR0,0,170,230_AL_.jpg'?> alt="" /></a> </div>
      <p class="photo-name"><a target = '_blank' href=<?php echo '"http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com/fenye?mid='.$rs[$ind].'"'?> ><?php echo $rs[$ind+1];?></a></p>
    </div>
    <?php
    $ind+=11;
    $uind+=11;
    endwhile;
    $_SESSION['ind']=$ind;
    setcookie('ind', $ind, time() + (86400 * 30), "/");
    ?>

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