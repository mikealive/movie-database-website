<?php
session_start();
$cookie_name = 'user';
$cookie_value = '';
if(count($_COOKIE) <= 0 || !isset($_COOKIE['user']) || $_COOKIE['user']=='') {
	$_SESSION['Alert']='unLogin';
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}
else{
	$_SESSION['UserName']=$_COOKIE['user'];
	$_SESSION['Alert']='Login';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Movie Huner, website for you all!</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>
</head>
<body>
<!-- Shell -->
<div id="shell">
	<!-- Header -->
	<div id="header">
		<h1 id="logo"><a href="#">Movie Hunter</a></h1>
		<div class="social">
			<span>FOLLOW US ON:</span>
			<ul>
			    <li><a class="twitter" href="#">twitter</a></li>
			    <li><a class="facebook" href="#">facebook</a></li>
			    <li><a class="vimeo" href="#">vimeo</a></li>
			    <li><a class="rss" href="#">rss</a></li>
			</ul>
		</div>
		<div class="socia">
			<?php
			if(isset($_SESSION['Alert']) && $_SESSION['Alert']=='Login'){
				echo "<span>".$_SESSION['userName']."</span>";
				if($_SESSION['userName']=='admin'){
					echo "<a href='/administer'>Go to admin page</a>";
				}
				else{
					echo "Hello, welcome!";
				}
			}
		    ?>
		</div>

		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a class="active" href="#">HOME</a></li>
			    <!--li><a href="#">IN THEATERS</a></li>
			    <li><a href="#">COMING SOON</a></li>
			    <li><a href="#">CONTACT</a></li>
			    <li><a href="#">ADVERTISE</a></li-->
			    <?php
			    if(isset($_SESSION['Alert']) && $_SESSION['Alert']=='Login'):
			    ?>
				<li><a href="/logout.php">LOGOUT</a></li>
				<?php
				else:
				?>
			    <li><a href="/login/">LOGIN</a></li>
			    <?php
				endif;
				?>
				<li><a href="/Search/">Go Search</a></li>
			</ul>
		</div>
		<!-- end Navigation -->

		<!-- Sub-menu -->
		<div id="sub-navigation">
			<ul>
			    <li><a href="#">SHOW ALL</a></li>
			    <li><a href="#">LATEST TRAILERS</a></li>
			    <li><a href="#">TOP RATED</a></li>
			    <li><a href="#">MOST COMMENTED</a></li>
			</ul>
		</div>
		<div style="border-bottom: 1px dashed #666; padding: 8px">
		</div>
		<!-- end Sub-Menu -->

	</div>
	<!-- end Header -->

	<!-- Main -->
	<div id="main">
		<!-- Content -->
		<div id="content">

			<!-- Box -->
			<div class="box">
				<div class="head">
					<h2>LATEST TRAILERS</h2>
					<p class="text-right"><a href="#">See all</a></p>
				</div>

				<!-- Movie -->
				<div class="movie">

					<div class="movie-image">

						<a href="#"><span class="play"><span class="name">X-MAN</span></span><img src="css/images/movie1.jpg" alt="movie" /></a>
					</div>

					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">SPIDER MAN 2</span></span><img src="css/images/movie2.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">SPIDER MAN 3</span></span><img src="css/images/movie3.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">VALKYRIE</span></span><img src="css/images/movie4.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">GLADIATOR</span></span><img src="css/images/movie5.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie last">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">ICE AGE</span></span><img src="css/images/movie6.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end Box -->

			<!-- Box -->
			<div class="box">
				<div class="head">
					<h2>TOP RATED</h2>
					<p class="text-right"><a href="#">See all</a></p>
				</div>

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">TRANSFORMERS</span></span><img src="css/images/movie7.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">MAGNETO</span></span><img src="css/images/movie8.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">KUNG FU PANDA</span></span><img src="css/images/movie9.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">EAGLE EYE</span></span><img src="css/images/movie10.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">NARNIA</span></span><img src="css/images/movie11.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie last">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">ANGELS &amp; DEMONS</span></span><img src="css/images/movie12.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end Box -->

			<!-- Box -->
			<div class="box">
				<div class="head">
					<h2>MOST COMMENTED</h2>
					<p class="text-right"><a href="#">See all</a></p>
				</div>

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">HOUSE</span></span><img src="css/images/movie13.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">VACANCY</span></span><img src="css/images/movie14.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">MIRRORS</span></span><img src="css/images/movie15.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">THE KINGDOM</span></span><img src="css/images/movie16.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">MOTIVES</span></span><img src="css/images/movie17.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->

				<!-- Movie -->
 				<div class="movie last">
 					<div class="movie-image">
						<a href="#"><span class="play"><span class="name">THE PRESTIGE</span></span><img src="css/images/movie18.jpg" alt="movie" /></a>
					</div>
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">

							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end Box -->

		</div>
		<!-- end Content -->

		<!-- NEWS -->
		<div id="news">
			<div class="head">
				<h3>NEWS</h3>
				<p class="text-right"><a href="#">See all</a></p>
			</div>

			<div class="content">
				<p class="date">12.04.09</p>
				<h4>Disney's A Christmas Carol</h4>
				<p>&quot;Disney's A Christmas Carol,&quot; a multi-sensory thrill ride re-envisioned by Academy Award&reg;-winning filmmaker Robert Zemeckis, captures... </p>
				<a href="#">Read more</a>
			</div>
			<div class="content">
				<p class="date">11.04.09</p>
				<h4>Where the Wild Things Are</h4>
				<p>Innovative director Spike Jonze collaborates with celebrated author Maurice Sendak to bring one of the most beloved books of all time to the big screen in &quot;Where the Wild Things Are,&quot;...</p>
				<a href="#">Read more</a>
			</div>
			<div class="content">
				<p class="date">10.04.09</p>
				<h4>The Box</h4>
				<p>Norma and Arthur Lewis are a suburban couple with a young child who receive an anonymous gift bearing fatal and irrevocable consequences.</p>
				<a href="#">Read more</a>
			</div>
		</div>
		<!-- end NEWS -->

		<!-- Coming -->
		<div id="coming">
			<div class="head">
				<h3>COMING SOON<strong>!</strong></h3>
				<p class="text-right"><a href="#">See all</a></p>
			</div>
			<div class="content">
				<h4>The Princess and the Frog </h4>
					<a href="#"><img src="css/images/coming-soon1.jpg" alt="coming soon" /></a>
				<p>Walt Disney Animation Studios presents the musical "The Princess and the Frog," an animated comedy set in the great city of New Orleans...</p>
				<a href="#">Read more</a>
			</div>
			<div class="cl">&nbsp;</div>
			<div class="content">
				<h4>The Princess and the Frog </h4>
					<a href="#"><img src="css/images/coming-soon2.jpg" alt="coming soon" /></a>
				<p>Walt Disney Animation Studios presents the musical "The Princess and the Frog," an animated comedy set in the great city of New Orleans...</p>
				<a href="#">Read more</a>
			</div>

		</div>
		<!-- end Coming -->
		<div class="cl">&nbsp;</div>
	</div>
	<!-- end Main -->

	<!-- Footer -->
	<div id="footer">
		<p>
			<a href="#">HOME</a> <span>|</span>
			<a href="#">NEWS</a> <span>|</span>
			<a href="#">IN THEATERS</a> <span>|</span>
			<a href="#">COMING SOON </a> <span>|</span>
			<a href="#">LATERS TRAILERS</a> <span>|</span>
			<a href="#">TOP RATED TRAILERS</a> <span>|</span>
			<a href="#">MOST COMMENTED TRAILERS</a> <span>|</span>
			<a href="#">ADVERTISE</a> <span>|</span>
			<a href="#">CONTACT </a>
		</p>
		<p> &copy; 2009 Movie Hunter, LLC. All Rights Reserved.  Designed by <a href="http://chocotemplates.com" target="_blank" title="The Sweetest CSS Templates WorldWide">ChocoTemplates.com</a></p>
	</div>
	<!-- end Footer -->
</div>
<!-- end Shell -->
</body>
</html>
