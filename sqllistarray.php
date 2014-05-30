
<html>
<head>
<meta charset="utf-8"> 
</head>
<body>
    <form action="search.php" method="get">
    [<a href="guestform.php">เพิ่มข้อมูล</a>] . 
    [<a href="sqllistarray.php?pageid=1">ขอดูข้อมูล</a>]
    [<a href="logout.php">logout</a>]
    <input type="text" name="search">
    <input type="submit" value="ค้นหา">
    </form>
    <hr> 

<?php
ob_start();
include "adminpwd.php";
$aduser2 = $_COOKIE["aduser"];
if(strcmp($adpasswd, $aduser2) != 0){
echo $_COOKIE["aduser"];    
echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";    
    
}

//ส่วนแสดงผล
include 'dbconn.php';
mysql_query("SET NAMES utf8");
$sql1 = "SELECT * FROM guestbook;";
$result = mysql_query($sql1);
$totalrecord = mysql_num_rows($result);
$pagesite = 5;
$pageid = $_GET['pageid'];
$nf = mysql_num_fields($result);
$totalpage = (int)($totalrecord / $pagesite);

if(($totalrecord % $pagesite) != 0){
$totalpage += 1;    
}
if(isset($pageid)){
$start = $pagesite * ($pageid - 1);    
    
}
 else {
$pageid = 1;
$start = 0;
}
//page แต่ละหน้า
mysql_query("SET NAME utf-8");
$sql = "SELECT * FROM guestbook LIMIT $start, $pagesite;";
$result = mysql_query($sql);
$numrows = $totalrecord;
$nf = mysql_num_fields($result);
echo "จำนวน $numrows เรคคอร์ด<br>";
echo $_COOKIE["aduser"];
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
echo "<hr>";
//สร้าง Link Page
for($i=1; $i<=$totalpage; $i++){
   if($i == $pageid){
       echo $i;
   } else {
 echo "[<a href=\"sqllistarray.php?pageid=$i\">$i</a>]&nbsp;";   
   }
}


?>    
</body>
</html>
<?php ob_end_flush(); //ปิดส่งข้อมูลที่อยู่ในบัฟเฟอร์?>