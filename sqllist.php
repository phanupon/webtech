<html>
<head>
    <meta charset="utf-8">
</head>    
<body>
    <hr>    
<?php
$host = "localhost";
$user = "root";
$pass = "";
$conn = mysql_connect($host, $user, $pass);
mysql_query("USE mydata;");
mysql_query("SET NAMES utf8");
$sql = "SELECT * FROM guestbook;";
$result = mysql_query($sql);
$numrows = mysql_num_rows($result);
echo "จำนวน $numrows เรคคอร์ด<br>";
for ($i=0; $i <= $numrows; $i++){
$id = mysql_result($result, $i, 'id');
$iname = mysql_result($result, $i, 'name'); 
$ilastname = mysql_result($result, $i, 'lastname'); 
$icomment = mysql_result($result, $i, 'comment'); 
echo "$id";
echo "$iname";
echo "$ilastname";
echo "$icomment . <br>";    
}
mysql_close($conn);
?>    
</body>
</html>