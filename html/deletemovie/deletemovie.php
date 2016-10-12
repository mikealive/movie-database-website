
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
$inputName = $_POST['mname'];
$inputId = $_POST['mmid'];

?>

<?php
if(isset($_POST['submit']))
	{
		$con = new Java("mvdb.Connector");
		$movie = new Java("mvdb.Movie");
		$rs= java_cast($movie->deleteMovie($inputId,$inputName,$con->stmt),"S");
		echo "Delete Success !";
?>
	<?php
		$con->closeConnection();
	}
?>

</body>
</html>