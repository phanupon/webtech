<?php ob_start(); ?>
<html>
    <head>
        <meta charset="utf-8"></head>
    <body>
        <?php 
        
        $send = $_POST['send'];
        if(!$send){?>
   
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            usernames : <input type="text" name="user" size="25"><br>
            password : <input type="password" name="passwd" size="25">
            <input type="submit" value="OK" name="send"> 
            <input type="reset" value="clear"><br>
        </form>
        <?php 
        } else {

            include 'admin_secret.php';
            $user = $_POST['user'];
            $passwd = $_POST['passwd'];
            $valid_user = strcmp($user, $adusr);
            
            $valid_passwd = strcmp(md5($passwd), $adpwd);
            
            if($valid_user !=0 || $valid_passwd !=0){
                echo "ชื่อหรือหรัสผู้ใช้ไม่ถูกต้อง";
                echo "<input type=\"button\" value=\"ลองใหม่\" onclick=\"location.href='login.php'\">";
                exit();
                                                    }    
                setcookie("adminpage", md5($passwd),  time()+3600);
            
            echo "ยินดีต้อนรับคุณ $adusr<br>";
            echo "<input type=\"button\" value=\"เข้าสู่เมนูหลัก\" onclick=\"location.href='sqllistarray-old.php'\">";
                }
        ?>
    </body>
</html>
<?php ob_end_flush();



