<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
#mySidenav a {
    position: absolute;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0;
}

#view {
    top: 140px;
    background-color: #4CAF50;
}

#modify {
    top: 200px;
    background-color: #2196F3;
}

#delete {
    top: 260px;
    background-color: #f44336;
}

#logout {
    top: 320px;
    background-color: #c1d112;
}
</style>
</head>
<body background="user.jpg" style="background-repeat: no-repeat;background-size: cover;">
<div>
    <a href="site.html"><img src="logo.png" height="100px"></a>
  </div>

<div id="mySidenav" class="sidenav">
  <a href="adminview.html" id="view">View</a>
  <a href="#" id="modify">Modify</a>
  <a href="#" id="delete">Delete</a>
  <a href="#" id="logout">Log out</a>
</div>
<div style="margin-left:80px;margin-left: 33%">
  <h1 style="color: black;font-family: 'Raleway', sans-serif;font-size: 75px;font-weight: 700;"></h1>
</div>
<div class="container">
<div class="row">
  <div class="col">  
 <a href="personalshow.php"> <input type="submit" name="submit" value="PERSONAL" class="btn btn-primary btn large" style="margin-left: 45%;width: 200px;"></a> <br><br>
  <a href="professionview.php"><input type="submit" name="submit" value="PROFESSIONAL" class="btn btn-primary btn large" style="margin-left: 45%;width: 200px;"></a><br><br> 
  <a href="bankview.php"><input type="submit" name="submit" value="BANK" class="btn btn-primary btn large" style="margin-left: 45%;width: 200px;"></a>  <br><br>
  <a href="dependentview.php"><input type="submit" name="submit" value="DEPENDENTS" class="btn btn-primary btn large" style="margin-left: 45%;width: 200px;"></a><br><br>
  <a href="taxview.php"><input type="submit" name="submit" value="INCOME-TAX" class="btn btn-primary btn large" style="margin-left: 45%;width: 200px;"></a>
  
</div>
     
</body>
</html> 
