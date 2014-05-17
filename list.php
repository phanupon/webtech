<html>
    <head>
        <meta charset="utf-8"> 
    </head>
    <body>
        
   
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "mydata";
$conn = mysql_connect($host, $user, $password);
$sql  = ("USE mydata;");
$resultuse = mysql_query($sql);
mysql_query("SET NAMES utf8");
$select = "select * from guestbook;";
$result = mysql_query($select);
$numfield = mysql_num_fields($result);
$numrow = mysql_num_rows($result);
echo "จำนวนcommentทั้งหมด $numrow รายการ
<hr> <table border=1>";
while($numrow=mysql_fetch_array($result)) { echo "<tr>";
for($i=1; $i < $numfield;$i++){
echo"<td> $numrow[$i]</td>";
}       
echo '</tr>';  
   echo "</table>";                                       }
mysql_close($conn);

?>
 </body>
</html>