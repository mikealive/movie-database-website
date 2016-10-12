
<?php
require_once("http://localhost:8080/mdb/java/Java.inc");
#$System = new Java("java.lang.System");
#echo $System->getProperties();
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$inputMovieId = $_POST['mmid'];
$inputName = $_POST['mname'];
$inputRate = $_POST['mrate'];
$inputDate = $_POST['mdate'];
$inputPoster = $_POST['mposter'];
$inputCast = $_POST['mcast'];
$inputDirector = $_POST['mdirector'];
$inputDescription = $_POST['mdescription'];
$inputPoint = $_POST['mpoint'];
$inputDuration = $_POST['mduration'];
$inputGenre = $_POST['mgenre'];
?>

<?php
if(isset($_POST['submit']))
	{
		$con = new Java("mvdb.Connector");
		$movie = new Java("mvdb.Movie");
		$rs= java_cast($movie->insertMovie($inputMovieId,$inputName,$inputRate,$inputDate,$inputPoster,$inputCast,$inputDirector,$inputDescription,$inputPoint,$inputDuration,$inputGenre,$con->stmt),"S");
		echo "Insert Success !";
?>
	<?php
		$con->closeConnection();
	}
?>

</body>
</html>