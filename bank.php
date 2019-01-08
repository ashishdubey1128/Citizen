<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bank Details</title>
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
		<h2 style="text-align: center;background-color: skyblue;">BANK INFORMATION</h2>
		<div class="container" style="background-color: skyblue;">
		<form method="post" action="">
			<table class="table table-hover" style="width: 100%;font-weight: 700">
				<tr> 
					<td>PAN Number</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="pno"></td>
				</tr>
				<tr>
					<td>Bank Name</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="bname" width="1000px"></td>
				</tr>
				<tr>
					<td>Account Number</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="accno" width="1000px"></td>
				</tr>
				<tr>
					<td>Nominee Name</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="nomname" width="1000px"></td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Next" class="btn btn-primary btn large" style="margin-left: 45%;margin-top: 50px;width: 100px;margin-bottom: 20px">
		</form>
	</div>
	<!-- <a href="bank.html"><input type="submit" name="submit" value="+ Add Bank" class="btn btn-default btn large" style="margin-left: 45%;margin-top: 50px;width: 100px;"></a> -->
	<div class="progress" style="margin-top: 30px;margin-bottom: 30px;">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
    40%
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
$x=0;

if(isset($_POST["submit"]))
{ 
	$query1 = ("CREATE TABLE bank_details(pan_no varchar(30) NOT NULL primary key,aadhaar_number varchar(30),bank_name varchar(20),acc_no varchar(10),nom_name varchar(10))");
	$run1=mysqli_query($connection,$query1);

	$pno = $_POST["pno"];
	$rno=$_SESSION['adh'];
	$bname = $_POST["bname"];
	$accno = $_POST["accno"];
	$nomname = $_POST["nomname"];
	
	if($pno !='' && $rno !='' && $bname !=''&&$accno !=''&&$nomname !=''){
				$x=5;
		$query2 = ("insert into bank_details(pan_no,aadhaar_number,bank_name,acc_no,nom_name) values ('$pno', '$rno', '$bname', '$accno' , '$nomname')");
		$run2=mysqli_query($connection,$query2);
		echo "<script type='text/javascript'>alert('Successfully added');</script>";

	}
	else
	{
		echo "<script type='text/javascript'>alert('Can not submit because some fields are blank');</script>";
	}
	if($x==5)
		header("Location: dependents.php");
	
}	
mysqli_close($connection); // Closing Connection with Server
?>