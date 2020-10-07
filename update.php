<?php 



$username="root";
$password= "";
$server ='localhost';
$db ='curd';


$con= mysqli_connect($server,$username,$password,$db);

if($con){
	echo "";
}else{
	die("faild".mysqli_connect_error());

}
if (isset($_POST['submit'] == "update")){

$name=$_POST['user'];
$email=$_POST['email'];
$id =$_POST['eid']:

$sql = "UPDATE  anish set name='$name', email='$email' where id= '.$_GET['id'].'" ;
$result = $con->query($sql);


header("location: display.php");
}

?>
<title>Update</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<form action="" method="POST" class="form-group" >
	<div >
		<h1 class="text-capitalize text-center display-2">update here</h1>
	</div>
		<div class="txtb form-group text-center">
			<label class="badge badge-info">Full Name:</label>
			<input type="text"  btn="value" placeholder="Enter Your Name" name="user" style="border-radius: 20px;">
		</div>
		<div class="txtb form-group text-center">
			<label class="badge-info">Email:</label>
			<input type="email" btn="value" placeholder="Enter Your Email" name="email" style="border-radius: 20px;">
		</div>
	<div class="text-center">
		<input class="btn btn-info text-center" type="Submit" id="btnclick"  value="UPDATE" name="submit">
		
	</div>

</form>  