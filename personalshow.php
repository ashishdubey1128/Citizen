<?php
	session_start();
?>
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
<font size="5"><center><b><p style="border:3px inset skyblue;margin-left:25%;margin-right:25%;">YOUR PERSONAL DETAILS</p></b></center></font>
<br><br>
<font color=black size="5">
<p align="center">
<?php

$conn= mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($conn,"citizen_management"); // Selecting Database from Server

$ano=$_SESSION['adh'];

$sql = "SELECT * FROM personal_details where aadhaar_number='$ano'";
$result = mysqli_query($conn, $sql);
$sql1 = "SELECT YEAR(CURDATE())-YEAR(date_of_birth) AS age FROM personal_details";
$result1 = mysqli_query($conn,$sql1);

if (mysqli_num_rows($result) > 0) 
	{
		$row = mysqli_fetch_assoc($result);
        echo "Aadhaar number : " . $row["aadhaar_number"]. "<br>  Name: " . $row["name"]. "<br> Date of birth :" . $row["date_of_birth"]. "<br> Address : " .$row["address"]. "<br> Mobile number : " . $row["mobile_number"]."<br> Marital status: ".$row["marital_status"]."<br> Gender : " . $row["gender"]. "<br> Education Qualification : " . $row["edu_qualification"]."<br>";
      $row1 = mysqli_fetch_assoc($result1);
      echo"Age : " . $row1["age"];
    } 
else 
{
    echo "<script type='text/javascript'>alert('username or aadhaar number already exist');</script>";
}

mysqli_close($conn);
?>
</p>
</font>
<br><br><br><br><br><br><br><br>
<a href="userview.html"><input type="submit" name="submit" value="Go Back" class="btn btn-primary btn large" style="margin-left: 45%;width: 100px;"></a></font></p>


</body>
</html>

