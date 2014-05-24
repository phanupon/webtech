<html>
<head>
<meta charset="utf-8">
</head>
<body>

   [<a href="guestform.php">เพิ่มข้อมูล</a>]: 
   [<a href="sqllistarray.php?pageid=1">ขอดูข้อมูล</a>] 
   <div><form action="search.php" method="get">
           <input type="text" name="search"> <input type="button" name="ค้นหา">        
   </form></div>
    <br><hr>
       
<?php
include 'dbconn.php';

$id = $_GET['id'];
$name = $_GET['name'];
$lastname = $_GET['lastname'];
$comment = $_GET['comment'];
mysql_query("SET NAMES utf8");
$sql = "UPDATE guestbook SET name='$name', lastname='$lastname', comment='$comment' WHERE id=$id;";
$result = mysql_query($sql);
//$dbarr = mysql_fetch_array($result);
echo"ได้ทำการปรับปรุงข้อมูลของ $name เรียบร้อยแล้ว";
echo "โดยใช้ ID คือ $id";
mysql_close($conn);
header("location: sqllistarray.php?pageid=1");
  ?>     
</body>
</html>