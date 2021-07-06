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
		<div class="dropdown" >
      		<button class="dropbtn"><i class="fa fa-fw fa-user"></i></button>
      		<div class="dropdown-content" style="width: 100px">
        		<a href="../Doctor/Doc_login_form.php/"><i class="fa fa-fw fa-user-md"></i>Doctor</a>
            <a href="../Admin/Admin_login_form.php/"><i class="fa fa-fw fa-user-tie"></i>Admin</a>
      		</div>
    	</div>
    	<a class="navbar-brand" href="/VetSched/VetSched.php/"><i class="fas fa-paw" style=" margin-left:10px;" >APets Veterinary Clinic</i></a>
    	<ul class="navbar-nav ml-auto" style="margin-right: 10px;">    
      		<li class="nav-item">
        		<a class="nav-link" href="../Services.php/" style="font-size: 18px; padding-right: 15px;">Services</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="../Team.php/" style="font-size: 18px; padding-right: 15px;">Team</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="../About.php/" style="font-size: 18px; padding-right: 15px;">About</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="../Patient/Sched.php/" style="font-size: 18px">Schedule Appointment</a>
      		</li>
    	</ul>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">
  		<ul class="carousel-indicators">
    		<li data-target="#demo" data-slide-to="0" class="active"></li>
    		<li data-target="#demo" data-slide-to="1"></li>
    		<li data-target="#demo" data-slide-to="2"></li>
  		</ul>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img src="../others/img/cat11.jpg" alt="Los Angeles" width="1100" height="500">
    		</div>
    		<div class="carousel-item">
      			<img src="../others/img/Dog1.jpg" alt="Chicago" width="1100" height="500">
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
	<div id="section1" class="jumbotron" style="background-size: 100%; background-color: white">
    <div class="container">
      <h1 style="text-align: center; font-size: 40px; padding-bottom: 50px;">Visit Us!</h1>    
			<div class="column" style="background-color:transparent; text-align: left">
				<h5>CONTACT INFORMATION</h5>
				<p>Telephone +63 2 822.36.60</p>
				<p>Mobile +63 9669636190</p>
				<p>E-mail ApetsVetClinic@gmail.com</p>
				<p>Website www.ApetsVetClinic.com</p>
				<p>Facebook beterinaryosafort</p>
			</div>
			<div class="column" style="text-align: left; margin-left:40px;">
				<h5>CLINIC HOURS</h5>
				<p>Mondays to Saturdays 9 AM to 9 PM</p>
				<p>Sundays Closed</p>
				<p>Off-hours by appointment only</p>
			</div>  
			<div class="column" style="text-align: left; margin-left:850px; margin-bottom: 20px; margin-top: -250px ">
				<h5>ADDRESS</h5>
				<p>APets Veterinary Clinic</p>
				<p>Robinsons Homes Brgy. San Jose</p>
				<p>Antipolo City Rizal</p>
			</div>  
    </div>
  </div>
</body>
</html>