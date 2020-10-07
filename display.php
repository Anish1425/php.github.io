<?php error_reporting(0); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "curd";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM  anish ";
$result = $con->query($sql);

if($_GET["did"]) {
	$sql = "DELETE FROM  anish WHERE id='".$_GET["did"]."'";
	$con->query($sql);
	header("location: display.php");
}

?>
<title>Diplay</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
<table  style="width:50%"  class="form-group text-center">
 <tr>
  <th class="text-center" style="width:50px; text-align: left;">ID</th>
  <th  class="text-center" style="width:100px; text-align: left;">Name</th>
  <th  class="text-center" style="width:100px; text-align: left;">Email</th>
  
</tr>
  <?php
  while($row = $result->fetch_array()) {  ?>
  
    <tr>
	  <td><?php echo $row["id"]; ?></td>
	  <td><?php echo $row["name"]; ?></td>
	  <td><?php echo $row["email"]; ?></td>

 
	  
	  <td> <a class=" btn btn-danger" href="display.php?did=<?php echo $row["id"]; ?> ">Delete</a> </td>
	   <td> <a class=" btn btn-danger"  href="insert.php?eid=<?php echo $row["id"]; ?>">Update</a> </td>
	   


  <?php } ?>

<br>
	   <a class=" btn btn-danger text-center" href="insert.php">Add New</a> 

	    </tr>
  
</table></body>