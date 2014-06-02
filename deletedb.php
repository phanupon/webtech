<html>
    <head> 
    <meta charset="utf-8" >
    </head>
    <body>
<?php
//include 'dbconn.php';
include 'dbconn.php';
$result = mysql_query($sql);

$id = $_GET['id'];
//ลบข้อมูล
$delete = "DELETE FROM guestbook WHERE id=$id;";
//mysql_query("SET NAMES utf8");
$result = mysql_query($delete);
mysql_close($conn);

echo "ลบข้อมูลแล้ว<br>";
echo "[<a href='guestform.php'> กลับไปเพิ่มข้อความ</a>]";
echo "[<a href='sqllistarray.php'>แสดงข้อมูล</a>]";
?>
        </body>
    </html>