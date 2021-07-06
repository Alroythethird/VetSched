<!DOCTYPE html>
<html>
<head>
	<title>Apets Vet Scheduling</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../others/css/VetSched.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../others/css/fontawesome/fontawesome/css/all.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
    <a class="navbar-brand"><i class="fas fa-paw" style=" margin-left:10px;" >APets Veterinary Clinic</i></a>
    <ul class="navbar-nav ml-auto" style="margin-right: 10px;">    
      <li class="nav-item">
        <a class="nav-link" href="/VetSched/Admin/Request_Table.php" style="font-size: 18px; padding-right: 15px;">Requests</a>
      </li>
      	<li class="nav-item">
        <a class="nav-link" href="/VetSched/Admin/Admin_login_table.php" style="font-size: 18px; padding-right: 15px;">Admin Table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/VetSched/Admin/Doc_login_table.php" style="font-size: 18px; padding-right: 15px;">Doc Table</a>
      </li>
    </ul>
    <div class="dropdown" style="margin-right: 20px" >
          <button class="dropbtn"><i class="fa fa-fw fa-user"></i></button>
          <div class="dropdown-content" style="width: 100px">
            <a href="/VetSched/Doctor/Logout.php/">Log Out</a>
          </div>
      </div>
  </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">
  		<ul class="carousel-indicators">
    		<li data-target="#demo" data-slide-to="0" class="active"></li>
    		<li data-target="#demo" data-slide-to="1"></li>
    		<li data-target="#demo" data-slide-to="2"></li>
  		</ul>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img src="../others/img/Dog1.jpg" alt="Los Angeles" width="1100" height="500">
    		</div>
    		<div class="carousel-item">
      			<img src="../others/img/cat11.jpg" alt="Chicago" width="1100" height="500">
    		</div>
    		<div class="carousel-item">
      			<img src="../others/img/cd.jpg" alt="New York" width="1100" height="500">
    		</div>
  		</div>
  		<a class="carousel-control-prev" href="#demo" data-slide="prev">
    		<span class="carousel-control-prev-icon"></span>
  		</a>
  		<a class="carousel-control-next" href="#demo" data-slide="next">
    		<span class="carousel-control-next-icon"></span>
  		</a>
	</div>
</body>
</html>