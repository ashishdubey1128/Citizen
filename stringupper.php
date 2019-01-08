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


 
$sql    = 'SELECT upper(name) as nam FROM personal_details;';

$result1 = mysqli_query($connection,$sql);
$x=mysqli_num_rows($result1);

while ($x)

	{
		$row = mysqli_fetch_assoc($result1);
        echo "Name : " . $row["nam"];
        $x--;
        echo"<br>";
    } 

	
mysqli_close($connection); // Closing Connection with Server
?>
</div>
<a href="aggregate.html" style="text-align: center;margin-top: 22%;margin-left: 47%;"><input type="submit" name="sub" value="BACK" class="btn btn-primary btn large"></a>
</body>
</html>
