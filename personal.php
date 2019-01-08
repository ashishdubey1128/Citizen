<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Personal Details</title>
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
		<h2 style="text-align: center;background-color: skyblue;">PERSONAL INFORMATION</h2>
		<div class="container" style="background-color: skyblue;">
		<form method="post" action="">
			<table class="table table-hover" style="width: 100%;font-weight: 700">
				<tr> 
					<td>Name</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="Date" name="date"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><textarea rows="2" cols="22" name="add"></textarea></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="contact" width="1000px"></td>
				</tr>
				<tr>
					<td>Marital Status</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em;font-weight: 400;"><input type="radio" name="mstatus" value="married">Married &nbsp;<input type="radio" name="mstatus" value="Un-Married">Un-Married</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em;width=1000px;font-weight: 400;"><input type="radio" name="gen" value="male">Male &nbsp;<input type="radio" name="gen" value="female">Female</td>
				</tr>
				<tr>
					<td>Educational Qualification</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em;width="1000px";><select name="ed"><option>Select</option><option>Matriculation</option><option>Intermediate</option><option>Bachelors</option><option>Masters</option><option>Others</option></select></td>
				</tr>
			</table>
		<input type="submit" name="submit" value="Next" class="btn btn-primary btn large" style="margin-left: 45%;margin-top: 50px;width: 100px;">
				</form>
	</div>
	<div class="progress" style="margin-top: 30px;margin-bottom: 30px;">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width:0%">
    00%
  </div>
</div>
	</div>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
</body>
</html>


<?php
$connection = mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($connection,"citizen_management"); // Selecting Database from Server


if(isset($_POST["submit"]))
{ 
	$query1 = ("CREATE TABLE personal_details(name VARCHAR(30) NOT NULL,aadhaar_number varchar(30) primary key,date_of_birth date,address varchar(100),mobile_number varchar(10),marital_status varchar(10),gender varchar(10),edu_qualification varchar(20))");
	$run1=mysqli_query($connection,$query1);

	$name = $_POST["name"];
	$rno=$_SESSION['adh'];
	$mar = $_POST["mstatus"];
	$dob = $_POST["date"];
	$mno = $_POST["contact"];
	$add = $_POST["add"];
	$gen = $_POST["gen"];
	$ed = $_POST["ed"];
	
	if($name !='' && $rno !='' && $mar !=''&& $dob !=''&& $mno !=''&& $add !='')
	{
				$x=5;
		$query2 = ("insert into personal_details(name,aadhaar_number,date_of_birth,address,mobile_number,marital_status,gender,edu_qualification) values ('$name', '$rno', '$dob', '$add' , '$mno','$mar','$gen','$ed')");
		$run2=mysqli_query($connection,$query2);
		echo "<script type='text/javascript'>alert('Successfuly added');</script>";

	}
	else
	{
		echo "<script type='text/javascript'>alert('Can not submit because some fields are blank');</script>";
	}
	if($x==5)
		header("Location: profession.php");
	
}	
mysqli_close($connection); // Closing Connection with Server
?>