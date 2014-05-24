<html>
<head>
<meta charset="utf-8">
</head>
<body>

   [<a href="guestform.php">เพิ่มข้อมูล</a>]: 
   [<a href="sqllistarray.php">ขอดูข้อมูล</a>] 
    <br><hr>
       
<?php
include 'dbconn.php';

$id = $_GET['id'];
mysql_query("SET NAMES utf8");
$sql = "SELECT * FROM guestbook WHERE id=$id;";
$result = mysql_query($sql);
$dbarr = mysql_fetch_array($result);
//echo "ID คือ $dbarr[0]";
//echo "$dbarr[1]";
echo "<form action=\"updatedb.php\" method=\"get\">";
echo "ID <input type=\"hiddent\" name=\"id\" value=\"$dbarr[0]\"><br>";
echo "ชื่อ <input type=\"text\" name=\"name\" size=\"60\" value=\"$dbarr[1]\"><br>";
echo "นามสกุล <input type=\"text\" name=\"lastname\" size=\"20\" value=\"$dbarr[2]\"><br>";
echo "comment <textarea name=\"comment\" rows=\"5\" cols=\"70\" >$dbarr[3]</textarea><br>";
echo "<input type=\"submit\"  value=\"บันทึก\">";    
echo "</form>";
  ?>     
</body>
</html>
