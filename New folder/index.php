<?php error_reporting(0); ?>
<html>
<head> </head>
<body>
 <div>
<form action= "insert.php" method="post">
<center><input type="text" name ="fname" placeholder="first name"/>
<br><br>
<input type="text" name="mname" placeholder="mname" />
<br><br>

<input type="text" name="lname" placeholder="lastname" />
<br><br>
<input type="text" name="de" placeholder="de number"/>
<br><br>
<input type="submit" name="submit" value="Add">
 </center>
<?php if($_GET["id"] !="") { ?> 
<input type="submit" name="update" value="Update">
<?php } ?>
</form>
</body>
</html>


