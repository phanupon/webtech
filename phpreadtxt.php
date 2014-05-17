<html>
<head>
    <meta charset="utf-8">
</head>
    <body>
อ่านข้อมูล
<hr>
<?php
echo '|<a href = phpreadtxt.php>ขอดูข้อมูลจากไฟล์</a>|';
echo '|<a href = phptest.php>เพิ่มข้อมูลลงในไฟล์</a>|';
echo '<br>';
echo '<hr>';
$filename = "guestbook.txt";
$line = file($filename);

for ($i = 0;$i < sizeof($line);$i++){
echo $line[$i],"<br>";
}
?>
 </body>   
    </html>