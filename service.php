<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#mySidenav a {
    position: absolute;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0;
}

#view {
    top: 140px;
    background-color: #4CAF50;
}

#modify {
    top: 200px;
    background-color: #2196F3;
}

#delete {
    top: 260px;
    background-color: #f44336;
}

#logout {
    top: 320px;
    background-color: #555
}
</style>
</head>
<body background="user.jpg" style="background-repeat: no-repeat;background-size: cover;">
<div>
    <a href="site.html"><img src="logo.png" height="100px"></a>
  </div>
<div id="mySidenav" class="sidenav">
  <a href="userview.html" id="view">View</a>
  <a href="modify.html" id="modify">Modify</a>
  <a href="service.php" id="delete">Service</a>
  <a href="site.html" id="logout">Log out</a>
</div>
<div style="margin-left:80px;margin-left: 33%">
  <h1 style="color: black;font-family: 'Raleway', sans-serif;font-size: 40px;font-weight: 700;">REGISTER FOR SERVICES</h1><br>
</div>
<div class="container">
<div class="row">
  <div class="col">  
  	<form method="post" action="">
  		<input type="submit" name="submit1" value="JAN DHAN YOJNA" class="btn btn-primary btn large" style="margin-left: 45%;width: 200px;"><br><br>
  		<input type="submit" name="submit2" value="UJJWALA YOJNA" class="btn btn-primary btn large" style="margin-left: 45%;width: 200px;"><br><br> 
  		<input type="submit" name="submit3" value="AAWAAS YOJNA" class="btn btn-primary btn large" style="margin-left: 45%;width: 200px;"><br><br>
  		<input type="submit" name="submit4" value="OPERATION GREENS" class="btn btn-primary btn large" style="margin-left: 45%;width: 200px;"><br><br>
  		<input type="submit" name="submit5" value="SWATCH-BHARAT" class="btn btn-primary btn large" style="margin-left: 45%;width: 200px;">
  	</form>
 
  
</div>
     
</body>
</html> 

<?php
$connection = mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($connection,"citizen_management"); // Selecting Database from Server


if(isset($_POST["submit1"]))
{ 
	$sname = $_POST["submit1"];
	$rno=$_SESSION['adh'];

	
	if($sname !='' && $rno !='')
	{
				$x=5;
		$query2 = ("insert into services(service,aadhaar_number) values ('$sname', '$rno')");
		$run2=mysqli_query($connection,$query2);
		echo '<script type="text/javascript">';
		echo'alert("Successfully added")';
		echo '</script>';

	}
	else
	{
		echo "<script type='text/javascript'>alert('Can not submit because some fields are blank');</script>";
	}
	if($x==5)
		header("Location: service.php");
	
}
elseif(isset($_POST["submit2"]))
{ 
	$sname = $_POST["submit2"];
	$rno=$_SESSION['adh'];

	
	if($sname !='' && $rno !='')
	{
				$x=5;
		$query2 = ("insert into services(service,aadhaar_number) values ('$sname', '$rno')");
		$run2=mysqli_query($connection,$query2);
		echo "<script type='text/javascript'>alert('Successfuly added');</script>";

	}
	else
	{
		echo "<script type='text/javascript'>alert('Can not submit because some fields are blank');</script>";
	}
	if($x==5)
		header("Location: service.php");
	
}	
elseif(isset($_POST["submit3"]))
{ 
	$sname = $_POST["submit3"];
	$rno=$_SESSION['adh'];

	
	if($sname !='' && $rno !='')
	{
				$x=5;
		$query2 = ("insert into services(service,aadhaar_number) values ('$sname', '$rno')");
		$run2=mysqli_query($connection,$query2);
		echo "<script type='text/javascript'>alert('Successfuly added');</script>";

	}
	else
	{
		echo "<script type='text/javascript'>alert('Can not submit because some fields are blank');</script>";
	}
	if($x==5)
		header("Location: service.php");
	
}	
elseif(isset($_POST["submit4"]))
{ 
	$sname = $_POST["submit4"];
	$rno=$_SESSION['adh'];

	
	if($sname !='' && $rno !='')
	{
				$x=5;
		$query2 = ("insert into services(service,aadhaar_number) values ('$sname', '$rno')");
		$run2=mysqli_query($connection,$query2);
		echo "<script type='text/javascript'>alert('Successfuly added');</script>";

	}
	else
	{
		echo "<script type='text/javascript'>alert('Can not submit because some fields are blank');</script>";
	}
	if($x==5)
		header("Location: service.php");
	
}	
elseif(isset($_POST["submit5"]))
{ 
	$sname = $_POST["submit5"];
	$rno=$_SESSION['adh'];

	
	if($sname !='' && $rno !='')
	{
				$x=5;
		$query2 = ("insert into services(service,aadhaar_number) values ('$sname', '$rno')");
		$run2=mysqli_query($connection,$query2);
		echo "<script type='text/javascript'>alert('Successfuly added');</script>";

	}
	else
	{
		echo "<script type='text/javascript'>alert('Can not submit because some fields are blank');</script>";
	}
	if($x==5)
		header("Location: service.php");
	
}	
	
mysqli_close($connection); // Closing Connection with Server
?>