<html>
    <head><meta charset="utf-8"></head>
    <body>
    
<?php
echo $_COOKIE["adpasswd"];
setcookie("adpasswd");
?>
คุณได้ออกจากระบบแล้ว<br>
<input type="button" value="เข้าระบบ" onclick="location.href='login.php'">
</body>       
</html>