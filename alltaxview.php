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
<font size="5"><center><b><p style="border:3px inset skyblue;margin-left:25%;margin-right:25%;">INCOME TAX DETAILS</p></b></center></font>
<br><br>
<font color=black size="5">
<p align="center">
<?php

$conn= mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($conn,"citizen_management"); // Selecting Database from Server


$sql = "SELECT * FROM tax_details";
$result = mysqli_query($conn, $sql);
$x=mysqli_num_rows($result);

while ($x) 
	{
		$row = mysqli_fetch_assoc($result);
        echo "Aadhaar number : " . $row["aadhaar_number"]. "<br>  TOTAL INCOME : " . $row["total_income"]. "<br> TOTAL EXPENDITURE :" . $row["total_exp"]. "<br> ASSETS : " .$row["assets"]. "<br> LIABILITIES : " . $row["liabilities"];
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

