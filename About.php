<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../others/css/VetSched.css">
  <link rel="stylesheet" type="text/css" href="../others/css/fontawesome/fontawesome/css/all.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  right: 305px;
}

/* Place the container to the right */
.right {
  left: 303px;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
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
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(to right, #b0b374 0%, #6ca390 100%); color: black; margin-bottom: 0px">
    <div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>2018</h2>
      <p>APets Veterinary Clinic (APVC) was founded in 2018, as a veterinary clinic geared towards providing premium health services to pets and their owners. its goals are promising. infact it was build because alroy really loves giving care for animals</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2019</h2>
      <p>It continued to grow and build a facility that became pet friendly for animals. it began adding more services to provide better satisfaction for your pet. it achieves popularity because of good feedbacks that it receives for the past year.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2020</h2>
      <p>It enhanced its own services and facilities and now you can visit us through online. Apets become more flexible in different kinds of services that a veterinary clinic could provide. it can assure that your pets are in good hands.</p>
    </div>
  </div>
</div>
</div>
</body>
</html>