<html>
<head>
    <meta charset="utf-8">
<body>
    [<a href="guestform.php">เพิ่มข้อมูล</a>] . 
    [<a href="sqllistarray.php">ขอดูข้อมูล</a>] 
    <br>
    <hr> 

<?php
include 'dbconn.php';
mysql_query("SET NAMES utf8");
$sql = "SELECT * FROM guestbook;";
$result = mysql_query($sql);
$numrows = mysql_num_rows($result);
$nf = mysql_num_fields($result);
echo "จำนวน $numrows เรคคอร์ด<br>";
echo "<table border='1'>";
echo "<tr><td>จัดการ</td><td>ลบ</td><td>ID</td><td>ชื่อ</td><td>นามสกุล</td><td>คำติชม</td></tr>";
while($dbarr = mysql_fetch_array($result)){
echo "<tr><td><a href='editdb.php?id={$dbarr[0]}'>แก้ไข</a></td>";
echo "<td><a href='deletedb.php?id={$dbarr[0]}'>ลบ</a></td>"; 
for($i=0;$i<$nf;$i++){
echo "<td>$dbarr[$i]</td>";
}
    
}
echo "</table>";
mysql_close($conn);
?>    
</body>
</head>
</html>