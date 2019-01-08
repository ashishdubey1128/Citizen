<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
	<script type="text/javascript" >
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body  style="background-image: url(backdrop1.jpg);background-size: cover;">

		<div class="nav1">
		<a href="site.html"><img src="logo.png" height="100px"></a>
	</div>
	<div class="container">
		<form name="f1" action="" method="post">
			<table class="table table-hover" style="width: 50%;font-weight: 700;background-color: skyblue;margin-top: 15%;margin-left: 25%;">
				<tr> 
					<td>AADHAR NUMBER</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="ano"></td>
				</tr>
				<tr> 
					<td>User Name</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td>Create Password</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="password" name="cpass"></td>
				</tr>
			</table>
		<input type="submit" name="submit" value="Submit" class="btn btn-primary btn large" style="margin-left: 45%;width: 100px;">
		</form>
	</div>

</body>
</html>


<?php
$connection = mysqli_connect("localhost", "root", "") or die("unable  to connect");
mysqli_select_db($connection,"citizen_management");

if(isset($_POST['submit']))
{ 
	$ano=$_POST['ano'];
	$uname=$_POST['uname'];
	$pas=$_POST['pass'];
	$pas1=$_POST['cpass'];
	if($ano!='' && $uname!='' && $pas!='')
	{
	if($pas==$pas1)
	{
		$_SESSION['adh']=$ano;
		$query1 = "CREATE TABLE login(aadhaar_number VARCHAR(30),username varchar(10) unique,password varchar(30))";
		$run1=mysqli_query($connection,$query1);
	
	$check=	("SELECT * FROM login WHERE aadhaar_number='$ano' or username='$uname'");
	$result = mysqli_query($connection,$check);
	
	if(mysqli_num_rows($result) == 0)
	{
			$query2 = ("insert into login(aadhaar_number,username,password) values('$ano','$uname','$pas')");
			$run2=mysqli_query($connection,$query2);
			$flag=1;
	}
	else
	{
			echo "<script type='text/javascript'>alert('username or aadhaar number already exist');</script>";
	}
if($flag==1)
		header("Location: personal.php");
	
}

	else
	echo "<script type='text/javascript'>alert('password did not match');</script>";
}
else
{
	echo"<script>alert('Fields are Empty');</script>";
}

}	
mysqli_close($connection); 
?>

