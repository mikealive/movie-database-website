<?php
require_once("http://localhost:8080/mdb/java/Java.inc");
session_start();
$MAX=24;
date_default_timezone_set('UTC');
$today = date('y-m-j');
if(!isset($_SESSION['mid']) || $_SESSION['mid']=='' || $_GET['mid']!=$_SESSION['mid'])
{
	$_SESSION['mid']=$_GET['mid'];
	$mid=$_SESSION['mid'];
	$type='mid';
	$inputContent=$mid;
	$con = new Java("mvdb.Connector");
    $movie = new Java("mvdb.Movie");
    //echo java_cast($movie->getMovie("name","Hello",$con->stmt),"S");
    $rs =  java_cast($movie->getMovie($inputContent,$con->stmt),"A");
    $con->closeConnection();
	$_SESSION['mname']=$rs[1];
	$_SESSION['date']=$rs[2];
	$_SESSION['director']=$rs[3];
	$_SESSION['cast']=$rs[4];
	$_SESSION['description']=$rs[5];
	$_SESSION['picture']=$rs[6];
	$_SESSION['rate']=$rs[7];
	$_SESSION['point']=$rs[8];
	$_SESSION['duration']=$rs[9];
	$_SESSION['genre']=$rs[10];
	
	$mname=$_SESSION['mname'];
	$date=$_SESSION['date'];
	$director=$_SESSION['director'];
	$cast=$_SESSION['cast'];
	$description=$_SESSION['description'];
	$picture=$_SESSION['picture'];
	$rate=$_SESSION['rate'];
	$point=$_SESSION['point'];
	$duration=$_SESSION['duration'];
	$genre=$_SESSION['genre'];

	$_SESSION['cmtind']=-1;
}
else
{
	$mid=$_SESSION['mid'];
	$mname=$_SESSION['mname'];
	$date=$_SESSION['date'];
	$director=$_SESSION['director'];
	$cast=$_SESSION['cast'];
	$description=$_SESSION['description'];
	$picture=$_SESSION['picture'];
	$rate=$_SESSION['rate'];
	$point=$_SESSION['point'];
	$duration=$_SESSION['duration'];
	$genre=$_SESSION['genre'];
}

$con = new Java("mvdb.Connector");
$comt=new Java("mvdb.Comments");
$cmtrs=java_cast($comt->getComments($mname,$date,$con->stmt),"A");
$size=count($cmtrs);
if(!isset($_SESSION['cmtind']) || $_SESSION['cmtind']==-1){
	$cmtind=0;
	$sind=0;
	$uind=0;
	$umax=$MAX;
	$_SESSION['cmtind']=$cmtind;
}
else{
	$cmtind=$_SESSION['cmtind'];
	$sind=$cmtind;
	$uind=0;
	$umax=$MAX;
}
if(isset($_GET['cmtind'])){
	$cmtind=$_COOKIE['cmtind'];
	$sind=$cmtind;
	$uind=0;
	$umax=$MAX;
}
$con->closeConnection();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $mname.'|'.$point;?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
if(isset($_POST['comments'])):
	if(isset($_COOKIE['user']) && $_COOKIE['user']!=''):
		$con = new Java("mvdb.Connector");
	    $comt=new Java("mvdb.Comments");
	    $cid=java_cast($comt->Maxcid($con->stmt),'I')+1;
	    $comments=$_POST['comments'];
	    $uid=$_COOKIE['user'];
	    $points=$_POST['points'];
	    $comt->insertComments($cid,$uid,$mname,$date,$comments,$points,$today,$con->stmt);
	    $con->closeConnection();
	    unset($_POST['comments']);
	    unset($_POST['points']);
?>
<div class="alert success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Success!</strong> Comment successfully!.
        </div>
<?php 
    else:
?>
<div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Warning!</strong> You haven't login, login first!
        </div>
<?php 
    $_SESSION['Alert']='Cmt';
    header("Location:http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com/login/");
    endif;
endif;
?>

<div id="header" style="background: url(<?php echo $picture.'@._V1_SY1000_CR0,0,575,900_AL_.jpg';?>)">
	<h1><a href="#"><?php echo $mname.'|'.$point;?></a></h1>
	<h2><a href="http://www.freecsstemplates.org/"><?php echo $date;?> </a></h2>
</div>
<div id="menu">
	<ul>
		<li><a href="http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com/Search/" accesskey="1" title="">Home</a></li>
		<li><a href="#" accesskey="2" title="">Log In</a></li>
		<li><a href="#" accesskey="3" title="">New Users</a></li>
		<li><a href="#" accesskey="4" title="">Services</a></li>
		<li><a href="#" accesskey="5" title="">Contact Us</a></li>
	</ul>
</div>
<div id="content">
	<div id="colOne">
		<h2>Description </h2>
		<p><?php echo $description;?></p>
		<h2>Comments </h2>
		<?php
        while($cmtind<$size && $uind<$umax):
        ?>
        <p>Comment No.<?php echo $cmtrs[$cmtind];?>:on <?php echo $cmtrs[$cmtind+4];?>, <?php echo $cmtrs[$cmtind+1];?> gave <?php echo $cmtrs[$ind+3];?> points and said:<br>
        	<?php echo $cmtrs[$cmtind+2];?>
        </p>
    <?php
    $cmtind+=6;
    $uind+=6;
    endwhile;
    $_SESSION['ind']=$cmtind;
    setcookie('cmtind', $cmtind, time() + (86400 * 30), "/");
    ?>
    <?php if ($sind+$MAX<$size):?>
		<p><a href = <?php echo '.?mid='.$mid.'&cmtind='.$cmtind; ?>>Next page</a></p>
	<?php endif;?>
	<form  action=<?php echo 'http://ec2-52-26-6-164.us-west-2.compute.amazonaws.com/fenye/?mid='.$mid?> method="post">
      <h1>Your Comments here:</h1>
      <p>Comments:
      <input id="comments" name="comments" required="required" type="text" placeholder="your comments"/>
      <p>Rating:
      <input id="points" name="points" required="required" type="number" placeholder="0~10" min=0 max=10/>
      </p>
      <p>
      <input type="submit" name="make" value="submit comments"/>
	  </p>
      </form>
		</div>
	<div id="colTwo">
		<h2>Information</h2>
		<h3>Cast</h3>
		<p><?php echo $cast;?></p>
		<h3>Director</h3>
		<p><?php echo $director;?></p>
		<h3>Date and Rate</h3>
		<p><?php echo $date;?><br><?php echo $rate;?></p>
		<h2>Follow Us</h2>
		<ul>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Weibo</a></li>
		</ul>
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
	<p>Copyright &copy; 2016 Movie Hunter. Designed by <a href="http://www.freecsstemplates.org"><strong>xxxxxxx</strong></a></p>
</div>
</body>
</html>
