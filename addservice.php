<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>addservice</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body style="background-image: url(service.jpg);background-repeat: no-repeat;background-size: cover;">
	<div class="container">
		<div class="jumbotron"><h1 style="text-transform: uppercase;">Register for Services</h1></div>
		<div style="text-align: center;">
			<form method="post" action="">
				<input type="submit" class="btn btn-primary lg" name="add" value="ADD SERVICES">
			</form>
		</div>
	</div>

</body>
</html>

<?php
$connection = mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($connection,"citizen_management");
if(isset($_POST["add"]))
{ 
	$query1 = ("CREATE TABLE services(service varchar(30) UNIQUE NOT NULL,aadhaar_number varchar(30))");
	$run1=mysqli_query($connection,$query1);
	header("location: service.php");
}