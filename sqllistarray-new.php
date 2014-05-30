<html>
<head>
    <meta charset="utf-8">
<body>
    [<a href="guestform.php">เพิ่มข้อมูล</a>] . 
    [<a href="sqllistarray.php?pageid=1">ขอดูข้อมูล</a>] 
    <br>
    <hr> 

<?php
include 'dbconn.php';
$sqltotle = "SELECT * FROM guestbook;";
$result = mysql_query($sqltotle);
$totlerecord = mysql_num_rows($result);
$pagesize = 3;
$pageid = $_GET['pageid'];
$totalpage = (int) ($totlerecord / $pagesize);

if(($totalpage % $pagesize) != 0){
$totalpage += 1;    
}

if(isset($pageid)){
$start = $pagesize * ($pageid - 1);    
    }
else{
$pageid = 1;
$start = 0;
} 
//สร้างเพจcountแบ่งหน้าแสดงผล
mysql_query("SET NAMES utf8");
$sql = "SELECT * FROM guestbook LIMIT $start, $pagesize;";
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
//mysql_close($conn);
echo "<hr>";
//สร้างเลขสำหรับ Link
for($i=1; $i<=$totalpage; $i++){
    if($i == $pageid){
        echo $i . "&nbsp;";
    }
 else {
    echo "[<a href=\"sqllistarray.php?pageid=$i\">$i</a>]&nbsp;";    
    }
}
?>    
</body>
</head>
</html>