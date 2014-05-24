<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
           <form action="search.php" method="get">
   [<a href="guestform.php">เพิ่มข้อมูล</a>]: 
   [<a href="sqllistarray.php?pageid=1">ขอดูข้อมูล</a>] 
       <input type="text" name="search"> <input type="submit" value="ค้นหา">        
   </form>
   <hr>
<?php
include 'dbconn.php';
$search=$_GET['search'];
mysql_query("SET NAMES utf8");
$sql = "SELECT * FROM guestbook WHERE name like '$search'OR lastname like '$search' OR comment like'%$search%';";
$result = mysql_query($sql);
$numrows = mysql_num_rows($result);
$nf = mysql_num_fields($result);
echo "จำนวนที่ค้นพบ $numrows ";
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
?>
    </body>
</html>
