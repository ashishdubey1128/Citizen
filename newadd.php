<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>moddob</title>
	<script type="text/javascript" >
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
</head>
<body style="background-image: url(modify.jfif);background-size: cover;background-repeat: no-repeat;">
	<div style="margin-top: 10%;text-align: center;">
		<form method="post" action="">
			<textarea name="add" cols="25" rows="5" placeholder="Enter new address"></textarea>
			<input type="submit" name="sub" value="Change">
		</form>
	</div>

<?php
$connection = mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($connection,"citizen_management");
if(isset($_POST["sub"]))
{
$ano=$_SESSION['adh'];
$n=$_POST['add'];
$sql = "UPDATE personal_details SET address='$n' WHERE aadhaar_number='$ano'";
$run2=mysqli_query($connection,$sql);
		echo "<script type='text/javascript'>alert('Successfuly Modified');</script>";
		header("location: modify.html");
}
mysqli_close($connection);
?>
</p>
</font>
</body>
</html>
