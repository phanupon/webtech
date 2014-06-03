<?php
//$host = "localhost";
//$OPENSHIFT_MYSQL_DB_PORT = "3306";
//$OPENSHIFT_MYSQL_DB_HOST = "127.12.70.2";
$host = "localhost";
$user = "root";
$pass = "";
$conn = mysql_connect($host, $user, $pass);
mysql_query("USE mydata;");
//
?>
