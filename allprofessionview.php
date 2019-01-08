<html>
<head>
<script type="text/javascript" >
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
</head>
<body style="background-image: url(view.jpg);background-repeat: no-repeat;background-size: cover;">     
<font size="5"><center><b><p style="border:3px inset skyblue;margin-left:25%;margin-right:25%;">PROFESSIONAL DETAILS</p></b></center></font>
<br><br>
<font color=black size="5">
<p align="center">
<?php

$conn= mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($conn,"citizen_management"); // Selecting Database from Server


$sql = "SELECT * FROM profession_details ORDER BY sal";
$result = mysqli_query($conn, $sql);
$x=mysqli_num_rows($result);

while ($x) 
	{
		$row = mysqli_fetch_assoc($result);
        echo "aadhaar number : " . $row["aadhaar_number"]. "<br>  Company Name: " . $row["company_name"]. "<br> Designation :" . $row["designation"]. "<br> Salary : " .$row["sal"]. "<br> Employee number : " . $row["emp_number"]."<br> Company Address: ".$row["addr"];
        echo"<br><br>";
        $x--;
    } 

mysqli_close($conn);
?>
</p>
</font>
<br><br>
<a href="adminview.html"><input type="submit" name="submit" value="Go Back" class="btn btn-primary btn large" style="margin-left: 45%;width: 100px;"></a></font></p>


</body>
</html>

