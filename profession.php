<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Professional Details</title>
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
		<a href="site.html"><img src="logo dbms1.jpg" height="100px"></a>
	</div>
	<div class="container">
		<h2 style="text-align: center;background-color: skyblue;">PROFESSIONAL INFORMATION</h2>
		<div class="container" style="background-color: skyblue;">
		<form method="post" action="">
			<table class="table table-hover" style="width: 100%;font-weight: 700">
				<tr> 
					<td>Company Name</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="cname"></td>
				</tr>
				<tr>
					<td>Designation</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="desig"></td>
				</tr>
				<tr>
					<td>Salary</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="sal" width="1000px"></td>
				</tr>
				<tr>
					<td>Employee ID Number</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="eid" width="1000px"></td>
				</tr>
				<tr>
					<td>Office Address</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><textarea rows="2" cols="22" name="add"></textarea></td>
				</tr>


			</table>

		<input type="submit" name="submit" value="Next" class="btn btn-primary btn large" style="margin-left: 45%;margin-top: 50px;width: 100px;">		</form>
	</div>
	<div class="progress" style="margin-top: 30px;margin-bottom: 30px;">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
    20%
  </div>
</div>
</body>
</html>


<?php
$connection = mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($connection,"citizen_management"); // Selecting Database from Server
$x=0;

if(isset($_POST["submit"]))
{ 
	$query1 = ("CREATE TABLE profession_details(company_name varchar(30) NOT NULL,aadhaar_number varchar(30),designation varchar(20),sal int,emp_number varchar(10),addr varchar(100))");
	$run1=mysqli_query($connection,$query1);
	

	$cname = $_POST["cname"];
	$rno=$_SESSION['adh'];
	$desig = $_POST["desig"];
	$sal = $_POST["sal"];
	$add = $_POST["add"];
	$ed = $_POST["eid"];
	
	if($cname !='' && $rno !='' && $desig !=''&&$sal !=''&&$add !=''&&$ed !=''){
				$x=5;
		$query2 = ("insert into profession_details(company_name,aadhaar_number,designation,sal,emp_number,addr) values ('$cname', '$rno', '$desig', '$sal' , '$ed','$add')");
		$run2=mysqli_query($connection,$query2);
		echo "<script type='text/javascript'>alert('Successfully added');</script>";

	}
	else
	{
		echo "<script type='text/javascript'>alert('Can not submit because some fields are blank');</script>";
	}
	if($x==5)
		header("Location: bank.php");
	
}	
mysqli_close($connection); // Closing Connection with Server
?>