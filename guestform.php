<html>
<head>
<meta charset="utf-8">
</head>
<body>
   <form action="search.php" method="get">
   [<a href="guestform.php">เพิ่มข้อมูล</a>]: 
   [<a href="sqllistarray.php?pageid=1">ขอดูข้อมูล</a>] 
       <input type="text" name="search"> <input type="submit" value="ค้นหา">        
   </form>
   <hr>
    <form action="insertdb.php" method="post">
ชื่อ <input type="text" name="name" size="60"><br>
    นามสกุล <input type="text" name="lastname" size="20"><br>
comment <textarea name="comment" rows="5" cols="70"></textarea><br>
        <input type="submit"  value="บันทึก">    
</form>
</body>
</html>