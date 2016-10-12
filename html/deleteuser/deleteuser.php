
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
$inputId = $_POST['muid'];

echo $inputId;
?>

<?php
if(isset($_POST['submit']))
	{
		$con = new Java("mvdb.Connector");
		$user = new Java("mvdb.Users");
		$rs= java_cast($user->deleteUsers($inputId,$con->stmt),"S");
		echo "Delete Success !";
?>
	<?php
		$con->closeConnection();
	}
?>

</body>
</html>