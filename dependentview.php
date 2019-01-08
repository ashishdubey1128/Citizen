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
<font size="5"><center><b><p style="border:3px inset skyblue;margin-left:25%;margin-right:25%;text-transform: uppercase;">Dependents details</p></b></center></font>
<br><br>
<font color=black size="5">
<p align="center">
<?php

$conn= mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($conn,"citizen_management"); // Selecting Database from Server

$ano=$_SESSION['adh'];

$sql = "SELECT * FROM dependents_details where aadhaar_number='$ano'";
$result = mysqli_query($conn, $sql);

$x=mysqli_num_rows($result);
while ($x) 
	{
		$row = mysqli_fetch_assoc($result);
        echo "Aadhaar number : " . $row["aadhaar_number"]. "<br>  Dependent Name: " . $row["dependent_name"]. "<br> Age :" . $row["age"]. "<br> Relation : " .$row["relation"];
        $x--;
        echo"<br><br>";
    } 

mysqli_close($conn);
?>
</p>
</font>
<br><br><br><br><br><br><br><br>
<a href="userview.html"><input type="submit" name="submit" value="Go Back" class="btn btn-primary btn large" style="margin-left: 45%;width: 100px;"></a></font></p>


</body>
</html>

