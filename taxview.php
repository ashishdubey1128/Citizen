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
<body style="background-image: url(view.jpg);background-size: cover;background-repeat: no-repeat;">     
<font size="5"><center><b><p style="border:3px inset skyblue;margin-left:25%;margin-right:25%;">INCOME-TAX DETAILS</p></b></center></font>
<br><br>
<font color=black size="5">
<p align="center">
<?php

$conn= mysqli_connect("localhost", "root", "") or die("unable  to connect"); // Establishing Connection with Server
mysqli_select_db($conn,"citizen_management"); // Selecting Database from Server

$ano=$_SESSION['adh'];

$sql = "SELECT * FROM tax_details where aadhaar_number='$ano'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) 
	{
		$row = mysqli_fetch_assoc($result);
        echo "Aadhaar number : " . $row["aadhaar_number"]. "<br>  Total Income: " . $row["total_income"]. "<br> Total Expenditure :" . $row["total_exp"]. "<br> Assets : " .$row["assets"]."<br> Liabilities : " .$row["liabilities"];
        if($row["total_income"]>250000 && $row["total_income"]<500000)
        {
        	$tax=0.05*$row["total_income"];
        }
        elseif ($row["total_income"]>500000 && $row["total_income"]<1000000) {
        	$tax=0.2*$row["total_income"];
        }
        elseif ($row["total_income"]>1000000) {
        	$tax=0.2*$row["total_income"];
        }
        echo "<br>Payable Tax : ".$tax;
        $sql1="SELECT DATEDIFF('2019-04-01',CURDATE()) AS due";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        echo"<br>Days due for paying : ".$row1['due'];
    } 
else 
{
    echo "<script type='text/javascript'>alert('NO ENTRIES FOUND');</script>";
}

mysqli_close($conn);
?>
</p>
</font>
<br><br><br><br><br><br><br><br>
<a href="userview.html"><input type="submit" name="submit" value="Go Back" class="btn btn-primary btn large" style="margin-left: 45%;width: 100px;"></a></font></p>


</body>
</html>

