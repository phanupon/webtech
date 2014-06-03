<html>
    <head>
    <meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <body>
        <?php ob_start();
        $send = $_POST['send'];
        if(!$send){?>
        <hr><br>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            username :<input type="text" name="user" size="25"><br>
            password :<input type="password" name="passwd" size="25"><br>
            <input type="submit" value="OK" name="send">
            <input type="reset" value="Reset"><br>
        </form>
        <?php
        }else{
            include 'adminpwd.php';
            $user = $_POST['user'];
            $passwd = $_POST['passwd'];
            $valid_user = strcmp($user, $aduser);
            $valid_passwd = strcmp(md5($passwd), $adpasswd);
            if($valid_user !=0 || $valid_passwd !=0){
            echo "userหรือpasswordไม่ถูกต้อง";
            echo "<input type=\"button\" value=\"ลองใหม่\"onclick=\"location.href='login.php'\">";
            exit();//จบโปรแกรม เพื่อไม่ให้ หลุดออก ไป บันทัดที่ 28 เพิ่มจากตอนสอน    
            }
            setcookie("adpasswd", md5($passwd), time() + 3600);
            echo "ยินดีต้อนรับ $aduser";
            echo $_COOKIE["adpasswd"];
            echo "<input type=\"button\" value=\"ดูข้อมูล\" onclick=\"location.href='sqllistarray.php?pageid=1'\">";
        }
        ?>
       
    </body>
</html>
<?php 
ob_end_flush();//ส่งข้อมูลที่อยู่ในบัฟเฟอร์ไปให้บราวเซอร์
?>

