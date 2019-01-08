<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tax Details</title>
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
		<h2 style="text-align: center;background-color: skyblue;">INCOME TAX INFORMATION</h2>
		<div class="container" style="background-color: skyblue;">
		<form method="post" action="">
			<table class="table table-hover" style="width: 100%;font-weight: 700">
				<tr> 
					<td>Total Income</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="tinc"></td>
				</tr>
				<tr>
					<td>Total Expenditure</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="texp" width="1000px"></td>
				</tr>
				<tr>
					<td>Assets</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><textarea rows="2" cols="22" name="asset"></textarea></td>
				</tr>
				<tr>
					<td>Liabilities</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><textarea rows="2" cols="22" name="liab"></textarea></td>
				</tr>
			</table>

			<input type="submit" name="submit" value="Next" class="btn btn-primary btn large" style="margin-left: 45%;margin-top: 50px;width: 100px;">		
		</form>
	</div>
	<div class="progress" style="margin-top: 30px;margin-bottom: 30px;">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
    80%
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
	$query1 = ("CREATE TABLE tax_details(total_income varchar(30) NOT NULL,aadhaar_number varchar(30),total_exp varchar(20),assets varchar(10),liabilities varchar(10))");
	$run1=mysqli_query($connection,$query1);

	$tinc = $_POST["tinc"];
	$rno=$_SESSION['adh'];
	$texp = $_POST["texp"];
	$asset = $_POST["asset"];
	$liab = $_POST["liab"];

	$query3 = ("ALTER TABLE tax_details RENAME COLUMN assets TO asset");
	$run3=mysqli_query($connection,$query3);
	
	if($tinc !='' && $rno !='' && $texp !=''&&$asset !=''&&$liab!=''){
				$x=5;
		$query2 = ("insert into tax_details(total_income,aadhaar_number,total_exp,assets,liabilities) values ('$tinc', '$rno', '$texp', '$asset' , '$liab')");
		$run2=mysqli_query($connection,$query2);
		echo "<script type='text/javascript'>alert('Successfully added');</script>";

	}
	else
	{
		echo "<script type='text/javascript'>alert('Can not submit because some fields are blank');</script>";
	}
	if($x==5)
		header("Location: userpage.php");
	
}	
mysqli_close($connection); // Closing Connection with Server
?>