<html>
    <meta charset="utf-8">
    <body>
    <?php 
echo '|<a href = phpreadtxt.php>ขอดูข้อมูลจากไฟล์</a>|';
echo '|<a href = phptest.php>เพิ่มข้อมูลลงในไฟล์</a>|';
echo '<br>';
echo '<hr>';
?>
    <form action="textrec.php" method="post">
    ชื่อ <input type="text" name="name" size="60"><br>
    นามสกุล <input type="text" name="lastname" size="20"><br>
comment <textarea name="comment" rows="5" cols="70"></textarea><br>
        <input type="submit"  value="บันทึก">
    </form>    
    </body>
</html>
