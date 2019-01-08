<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Existing User</title>
	<script type="text/javascript" >
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body style="background: url(https://images.unsplash.com/photo-1518600654093-2a24cddafa38?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=96238af4ac6e58d17d362d5b8b846eb4&auto=format&fit=crop&w=1417&q=80);background-size: cover;">
	<div>
		<a href="site.html"><img src="logo.png" height="100px"></a>
	</div>
	<form name="f1" method="post" action="">
	<table class="table table-hover" style="width: 50%;font-weight: 700;background-color: transparent;margin-top: 15%;margin-left: 25%;">
				<tr> 
					<td>User Name</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="password" name="password"></td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Login" class="btn btn-success btn large" style="margin-left: 40%;width: 100px;">
		</form>
</body>
</html>

<?php
$connection = mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($connection,"citizen_management"); // Selecting Database from Server

if(isset($_POST['submit']))
{ 
	$us=$_POST['username'];
	$pas=$_POST['password'];
	
	
	
	$check=	("SELECT * FROM login WHERE username='$us' and password='$pas'");
	$result = mysqli_query($connection,$check);
	if(mysqli_num_rows($result) > 0)
	{
		header("Location: userpage.php");
	}
	else
	{
			echo "<script type='text/javascript'>alert('invalid username or password');</script>";
	}
	
$Check = "SELECT aadhaar_number FROM login WHERE username='$us'";
$result1 = mysqli_query($connection,$Check);
$row2 = mysqli_fetch_assoc($result1);
$temp=$row2['aadhaar_number'];
$_SESSION['adh'] = $temp;
}	
mysqli_close($connection); // Closing Connection with Server
?>