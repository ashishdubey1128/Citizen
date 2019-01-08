<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body style="background-image: url(delete.jpg);">

	<div style="margin-top:15%;">
		<form method="POST" action="">
			<table border="2px solid white" style="background-color: grey;" class="table">
				<tr>
					<td style="font-size: 20px;color: white;font-weight: 500;">
						Enter the Aadhaar Number to delete details :
					</td>
					<td>
						<input type="text" name="ano" placeholder="Aadhaar number">
					</td>
				</tr>
			</table>
			<input type="submit" value="Delete" name="sub" class="btn btn-primary large" style="margin-left:45%; ">
		</form>
	</div>

</body>
</html>


<?php
$connection = mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($connection,"citizen_management");

if(isset($_POST["sub"]))
{ 
	$rno=$_POST['ano'];
	echo "<script type='text/javascript'>alert('hello');</script>";
	$query1 = ("DELETE FROM login WHERE aadhaar_number=$rno");
	$run1=mysqli_query($connection,$query1);
	$query2 = ("DELETE FROM personal_details WHERE aadhaar_number=$rno");
	$run2=mysqli_query($connection,$query2);
	$query3 = ("DELETE FROM profession_details WHERE aadhaar_number=$rno");
	$run3=mysqli_query($connection,$query3);
	$query4 = ("DELETE FROM services WHERE aadhaar_number=$rno");
	$run4=mysqli_query($connection,$query4);
	$query5 = ("DELETE FROM bank_details WHERE aadhaar_number=$rno");
	$run5=mysqli_query($connection,$query5);
	$query6 = ("DELETE FROM tax_details WHERE aadhaar_number=$rno");
	$run6=mysqli_query($connection,$query6);
	$query7 = ("DELETE FROM dependents_details WHERE aadhaar_number=$rno");
	$run7=mysqli_query($connection,$query7);
	header("location: adminpage.html");
}
?>