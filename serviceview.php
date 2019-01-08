<!DOCTYPE html>
<html>
<head>
	<title>services</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style type="text/css">
		.s
		{
				visibility: visible;
		}
		.p
		{
				visibility: visible;
		}
		.q
		{
			visibility: visible;
		}
	</style>
	<script type="text/javascript">
		function v() 
		{
			var x;
			x=document.getElementById("a");
			x.classList.toggle("s");
		}
		function u() 
		{
			var y;
			y=document.getElementById("a");
			y.classList.toggle("s");
			y=document.getElementById("b");
			y.classList.toggle("p");
		}
		function w() 
		{
			var y;
			y=document.getElementById("a");
			y.classList.toggle("s");
			y=document.getElementById("b");
			y.classList.toggle("p");
			y=document.getElementById("c");
			y.classList.toggle("q");
		}
	</script>
</head>
<body style="background-image: url(serview.jpg);background-repeat: no-repeat;background-size: cover;">
	<div class="container" style="text-align: center;margin-top: 10%;">
		<div><H1>VIEW DETAILS</H1></div>
	<form method="post" action="">
		<div style="margin-top: 4%;">
		<input type="submit" name="sal1" class="btn btn-primary large" value="Jan-Dhan Yojna" onclick="v()"><br><br>
		</div>
		<div id="a" style="font-weight: 500;font-size: 20px;">
			<?php
			$conn= mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
			mysqli_select_db($conn,"citizen_management"); // Selecting Database from Server
			if(isset($_POST["sal1"]))
			{ 

				$sql = "SELECT name AS nam FROM personal_details,profession_details,services where personal_details.aadhaar_number=profession_details.aadhaar_number AND personal_details.aadhaar_number=services.aadhaar_number AND sal<100000 AND YEAR(CURDATE())-YEAR(date_of_birth)>18 AND service='JAN DHAN YOJNA'";
				$result = mysqli_query($conn, $sql);
				$x=mysqli_num_rows($result);
				while ($x) 
				{
					$row = mysqli_fetch_assoc($result);
					echo "Conditions : Age>18  Salary< 1 lakh<br>";
        			echo "Name : " . $row["nam"];
        			echo "<br>";
    				$x--;
    			} 
			}
			mysqli_close($conn); // Closing Connection with Server
			?>
		</div>
		<div>
			<input type="submit" name="sal2" class="btn btn-primary large" value="Ujjwala Yojna" onclick="u()"><br><br>
		</div>
		<div id="b" style="font-weight: 500;font-size: 20px;">
			<?php
			$conn= mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
			mysqli_select_db($conn,"citizen_management"); // Selecting Database from Server
			if(isset($_POST["sal2"]))
			{ 

				$sql = "SELECT UCASE(name) AS nam FROM personal_details,services where personal_details.aadhaar_number=services.aadhaar_number AND gender='female' AND YEAR(CURDATE())-YEAR(date_of_birth)>18 AND service like 'UJJ%'";
				$result = mysqli_query($conn, $sql);
				$x=mysqli_num_rows($result);
				while ($x) 
				{
					$row = mysqli_fetch_assoc($result);
					echo "Conditions : Age>18  Gender - Female<br>";
        			echo "Name : " . $row["nam"];
        			echo "<br>";
    				$x--;
    			} 
			}
			mysqli_close($conn); // Closing Connection with Server
			?>
		</div>
		<div>
			<input type="submit" name="sal3" class="btn btn-primary large" value="Aawas Yojna" onclick="w()"><br><br>
		</div>
		<div id="c" style="font-weight: 500;font-size: 20px;">
			<?php
			$conn= mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
			mysqli_select_db($conn,"citizen_management"); // Selecting Database from Server
			if(isset($_POST["sal3"]))
			{ 

				$sql = "SELECT name AS nam FROM personal_details,services where personal_details.aadhaar_number=services.aadhaar_number  AND YEAR(CURDATE())-YEAR(date_of_birth)>18 AND service like 'AAW%'";
				$result = mysqli_query($conn, $sql);
				$x=mysqli_num_rows($result);
				while ($x) 
				{
					$row = mysqli_fetch_assoc($result);
					echo "Conditions : Age>18<br>";
        			echo "Name : " . $row["nam"];
        			echo "<br>";
    				$x--;
    			} 
			}
			mysqli_close($conn); // Closing Connection with Server
			?>
		</div>
		<a href="aggregate.html" style="font-size: 25px;border: 2px solid black;">Back</a>
	</form>
	</div>
	
</body>
</html>