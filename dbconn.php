<?php
//$host = "localhost";
$host = "mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/";
$user = "adminjyfeVvm";
$pass = "8HMVbQwR1Pxs";
$conn = mysql_connect($host, $user, $pass);
mysql_query("USE phanupon;");

?>
