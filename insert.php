<?php error_reporting(0); ?>
<?php 



	$username="root";
$password= "";
$server ='localhost';
$db ='curd';


$con= mysqli_connect($server,$username,$password,$db);

if($con){
	echo "connected";
}else{
	die("faild".mysqli_connect_error());

}

 if (isset($_POST['submit'])){

$name=$_POST['user'];
$email=$_POST['email'];



$insertquery =  " insert into  anish(name,email) values('$name','$email')";

$con->query($insertquery);


	header("location: display.php");


$res= mysqli_query($con, $insertquery);

 if ($res)


  {
?>
<script>
	
alert("Thankyou for contact to us"); 

</script>
<?php
 }else{
 	?>
<script>
	
alert("data not insert sucessful");

</script>
<?php

 }

}
$sql = " SELECT * FROM  anish where id='".$_GET["eid"]."'";                           

          $result =$con->query($sql);

          $row  =$result->fetch_row();                                                                                                                                          

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<form action="" method="POST" class="form-group" >
	<div >
		<h1 class="text-capitalize text-center display-2">Contact Us</h1>
	</div>
		<div class="txtb form-group text-center">
			<label class="badge badge-info">Full Name:</label>
			<input type="text"   placeholder="Enter Your Name" value="<?php if(isset($_GET['eid'])) {
				echo $row[1];
			} else echo ""; ?>" name="user" style="border-radius: 20px;">
		</div>
		<div class="txtb form-group text-center">
			<label class="badge-info">Email:</label>
			<input type="email" placeholder="Enter Your Email"  value="<?php if(isset($_GET['eid'])){
				echo $row[2];
			}  else echo""; ?>" name="email" style="border-radius: 20px;">
		</div>
		<input type="hidden" name="eid"  value="<?php echo $_GET['eid']; ?>">

		<?php if($_GET["eid"] !="") {  ?>
	
		<input class="btn btn-info text-center" type="Submit" value="update"  name="submit">
		
<?php }  else {   ?>
<input class="btn btn-info text-center" type="Submit" value="add"  name="submit">
<?php } ?>	  	
    </form>




</body>
</html>