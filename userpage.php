<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<script type="text/javascript" >
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    background-color: #555
}
</style>
</head>
<body style="background: url(https://images.unsplash.com/photo-1505682634904-d7c8d95cdc50?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0d156f806a757123e569cbc0206d43fe&auto=format&fit=crop&w=1500&q=80);background-repeat: no-repeat;background-size: cover;">
<div>
    <a href="site.html"><img src="logo.png" height="100px"></a>
  </div>

<div id="mySidenav" class="sidenav">
	<form method="post" action="">
		  <a href="userview.html" id="view">View</a>
  <a href="modify.html" id="modify">Modify</a>
  <a href="addservice.php" id="delete">Service</a>
  <a href="site.html" id="logout">Log out</a>
	</form>

</div>

<div style="margin-left:80px;margin-left: 33%">
  <h1 style="color: white;font-family: 'Raleway', sans-serif;font-size: 45px;">WELCOME</h1>
</div>
<div style="margin-left: 5%;">
	<marquee style="color: white;"> Link Your Aadhaar to all the services by 01-March-2019.</marquee>
</div>

     
</body>
</html>