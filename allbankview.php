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
<font size="5"><center><b><p style="border:3px inset skyblue;margin-left:25%;margin-right:25%;">BANK DETAILS</p></b></center></font>
<br><br>
<font color=black size="5">
<p align="center">
<?php

$conn= mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($conn,"citizen_management"); // Selecting Database from Server


$sql = "SELECT * FROM bank_details";
$result = mysqli_query($conn, $sql);
$x=mysqli_num_rows($result);

while ($x) 
	{
		$row = mysqli_fetch_assoc($result);
        echo "AADHAR NO. : " . $row["aadhaar_number"]. "<br>  PAN NO. : " . $row["pan_no"]. "<br> BANK NAME :" . $row["bank_name"]. "<br> ACCOUNT NO. : " .$row["acc_no"]. "<br> NOMINEE : " . $row["nom_name"];
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

