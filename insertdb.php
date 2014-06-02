<html>
    <head> 
    <meta charset="utf-8" >
    </head>
    <body>
<?php


include 'dbconn.php';
$result = mysql_query($sql);
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$comment = $_POST['comment'];
//แทรกข้อมูล
$insert = "INSERT INTO guestbook (name, lastname, comment) VALUES ('$name','$lastname','$comment');";
mysql_query("SET NAMES utf8");
$result = mysql_query($insert);
mysql_close($conn);

echo $name;
echo $lastname;
echo $comment;
echo "บันทึกข้อมูลแล้ว<br>";
echo "[<a href='guestform.php'> กลับไปเพิ่มข้อความ</a>]";
echo "[<a href='sqllistarray.php'>แสดงข้อมูล</a>]";
?>
        </body>
    </html>