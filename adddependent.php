<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>DEPENDENTS Details</title>
	<script type="text/javascript" >
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="nav1">
		<a href="site.html"><img src="logo.png" height="100px"></a>
	</div>
	<div class="container">
		<h2 style="text-align: center;background-color: skyblue;">DEPENDENTS DETAILS</h2>
		<div class="container" style="background-color: skyblue;">
		<form method="post" action="">
			<table class="table table-hover" style="width: 100%;font-weight: 700">
				<tr> 
					<td>Dependents Name</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="dname"></td>
				</tr>
				<tr>
					<td>Age</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="age" width="1000px"></td>
				</tr>
				<tr>
					<td>Relation</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="rel" width="1000px"></td>
				</tr>
			</table>
			<input type="submit" name="submit" value="OK" class="btn btn-primary btn large" style="margin-left: 45%;margin-top: 50px;width: 100px;">
		</form>
	</div>
	</div>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
</body>
</html>


<?php
$connection = mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($connection,"citizen_management"); // Selecting Database from Server
$x=0;

if(isset($_POST["submit"]))
{ 
	$query1 = ("CREATE TABLE dependents_details(dependent_name varchar(30) NOT NULL,aadhaar_number varchar(30),age varchar(20),relation varchar(10))");
	$run1=mysqli_query($connection,$query1);

	$dname = $_POST["dname"];
	$rno=$_SESSION['adh'];
	$age = $_POST["age"];
	$rel = $_POST["rel"];
	
	if($dname !='' && $rno !='' && $age !=''&&$rel !=''){
				$x=5;
		$query2 = ("insert into dependents_details(dependent_name,aadhaar_number,age,relation) values ('$dname', '$rno', '$age', '$rel')");
		$run2=mysqli_query($connection,$query2);
		echo "<script type='text/javascript'>alert('Successfully added');</script>";

	}
	else
	{
		echo "<script type='text/javascript'>alert('Can not submit because some fields are blank');</script>";
	}
	if($x==5)
		header("Location: modify.html");
	
}	
mysqli_close($connection); // Closing Connection with Server
?>