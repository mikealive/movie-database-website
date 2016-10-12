

<?php
//require_once("java/Java.inc");
require_once("http://localhost:8080/mdb/java/Java.inc");
$System = new Java("java.lang.System");
#echo $System->getProperties();
echo "Why is that";
#$con = new Java("mvdb.Connector");
#$stmt=$con->stmt;
#$r=$stmt->executeQuery("select * from Movies where name like '%Thor%'");
#$r->next();
#echo $r->getString("name");
#$con->closeConnection();
#$con->closeConnection();
#$t = new Java("brigdetest.bridge");
#echo $t;
$con = new Java("mvdb.Connector");
$com = new Java("mvdb.Movie");
#echo java_cast($com->Movies("name","Hello",$con->stmt),"S");
echo java_cast($com->test(),'S');
$con->closeConnection();
?>
