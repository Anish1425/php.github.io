<?php error_reporting(0); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM t_table";
$result = $conn->query($sql);

if($_GET["did"]) {
	$sql = "DELETE FROM t_table WHERE id='".$_GET["did"]."'";
	$conn->query($sql);
	header("location: list.php");
}

?>

<table  style="width:50%">
 <tr>
  <th style="width:50px; text-align: left;">ID</th>
  <th style="width:100px; text-align: left;">FName</th>
   <th style="width:100px; text-align: left;">MName</th>
  <th style="width:100px; text-align: left;">LName</th>
  <th  style="width:100px; text-align: left;">de</th>
</tr>
  <?php
  while($row = $result->fetch_array()) {  ?>
  
    <tr>
	  <td><?php echo $row["id"]; ?></td>
	  <td><?php echo $row["f_name"]; ?></td>
	  <td><?php echo $row["m_name"]; ?></td>
	  <td><?php echo $row["l_name"]; ?></td>
	  <td><?php echo $row["de"]; ?></td>
	  <td> <a href="list.php?did=<?php echo $row["id"]; ?>">Delete</a> </td>
	</tr>
 
 <?php } ?>
  


  
</table>
   