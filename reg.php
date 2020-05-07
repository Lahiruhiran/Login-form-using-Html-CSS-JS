<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"login");
if(isset($_POST['submit']))
{
	$name1 = mysqli_real_escape_string($con, $_POST['fname']);
	$name2 = mysqli_real_escape_string($con, $_POST['lname']);
	$msg = mysqli_real_escape_string($con, $_POST['msg']);
	$mail = mysqli_real_escape_string($con, $_POST['email']);
	$c_type = mysqli_real_escape_string($con, $_POST['country']);
	

	
		$query = "INSERT INTO reg (fname, lname, email, msg,country) values ('".$name1."','".$name2."','".$mail."','".$msg."','".$c_type."');";
		if(mysqli_query($con, $query))
			{
				echo ("<script> alert('Successfully Registered.'); </script>");
				
            }
			else {
				echo ("<script> alert('Admin will not notify.'); </script>");
			}
		
		}
		
		
		
else
{   
	// echo ("<script> location.href = '404.php'; </script>");
	echo "Unauthorized Access. Error Code : " . mysqli_connect_errno();
	header("Refresh:1, url=index-2.php");
}
?>