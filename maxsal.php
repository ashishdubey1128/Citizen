<!DOCTYPE html>
<html>
<head>
	<title>averagesalary</title>
	<script type="text/javascript" >
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body style="background-image: url(maxsal.jpg);background-size: cover;background-repeat: no-repeat;">
<div style="text-align: center;margin-top: 20%;font-weight: 800;">
	<?php
$connection = mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($connection,"citizen_management"); // Selecting Database from Server


 
$sql    = 'SELECT MAX(sal) AS maxsal,name as nam FROM profession_details pr,personal_details pe where pr.aadhaar_number=pe.aadhaar_number;';
$query  = mysqli_query($connection,$sql);
$result = mysqli_fetch_assoc($query);
echo"MAXIMUM SALARY AMONG ALL: Rs ";
print($result['maxsal']);
echo"<br>";
echo"PERSON WITH MAXIMUM SALARY : ";
print($result['nam']);
	
mysqli_close($connection); // Closing Connection with Server
?>
</div>
<a href="aggregate.html" style="text-align: center;margin-top: 22%;margin-left: 47%;"><input type="submit" name="sub" value="BACK" class="btn btn-primary btn large"></a>
</body>
</html>
