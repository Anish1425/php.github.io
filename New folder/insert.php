<?php error_reporting(0); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
mysqli_select_db($conn,'cud');

// Check connection
if ($conn->connect_error) {
  die("Connection failed:"  . $conn->connect_error);
}



if($_POST['submit'] == "Add")
{
	$fname=$_POST['fname'];
    $mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$de=$_POST['de'];
	
	$sql="insert into t_table set f_name='$fname', m_name='$mname', l_name='$lname', de='$de'";
	$conn->query($sql);
	header("location: list.php");
}

if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `users` WHERE `` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}


if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `users` SET f_name='$fname', m_name='$mname', l_name='$lname', de='$de'";
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>



