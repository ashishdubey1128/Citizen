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
<body style="background-image: url(modify.jfif);background-repeat: no-repeat;background-size: cover;margin-top: 10%;">
	<div style="margin-top: 10%;text-align: center;">
	<form method="post" >
		<input type="text" name="edu" placeholder="Enter new Edu. qualification">
		<input type="submit" name="sub" value="Change">
	</form>
</div>

<?php
$connection = mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($connection,"citizen_management");
if(isset($_POST["sub"]))
{
$ano=$_SESSION['adh'];
$e=$_POST['edu'];
$sql = "UPDATE personal_details SET edu_qualification='$e' WHERE aadhaar_number='$ano'";
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
