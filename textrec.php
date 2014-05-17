<html>
<meta charset="utf-8">    
<body>
สมุดเยี่ยมของ ภาณุภณ <br>
    <hr>
ชื่อ ที่ส่งมาจากตัวแปร name คือ 
    <?php echo $_POST['name'];?><br>
นามสกุลที่ส่งมาคือ <?php echo $_POST['lastname'];?><br>
    commentคือ <?php echo $_POST['comment']; ?>
//บันทึกลงไฟล์    
<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$comment = $_POST['comment'];
$ft=fopen("guestbook.txt","a+");
fputs($ft, "ชื่อ : $name \n");
fputs($ft, "นามสกุล : $lastname \n");
fputs($ft, "comment :  $comment \n");
fclose($ft);
?>
    
    
    
    
    
    
    
    
    
    
</body>
</html>