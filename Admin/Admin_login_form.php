<?php
  include('Admin_login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/VetSched/others/css/Login.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background: linear-gradient(to bottom, #a5d1af 0%, #387d60 100%); margin-bottom: 178px;">
	<form method="POST" style="margin-top: 100px; background-color: #c5e6d1; border: 3px solid #c5e6d1;">
  		<div class="container">
    		<label for="uname"><b>Username</b></label>
          <i class="fa fa-user icon"></i>
    			<input type="text" placeholder="Enter Username" name="uname" required>
    		<br>
    		<label for="password"><b>Password</b></label>
          <i class="fa fa-key icon"></i>
    			<input type="password" placeholder="Enter Password" name="password" required>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error ?></div>
    		<button type="submit" name="Save">Login</button>
  		</div>
  		<div class="container" style="background-color: #c5e6d1;">
    		<a type="button" class="cancelbtn" href="/VetSched/VetSched.php/" style="background-color: #990000; color: white">Cancel</a>
  		</div>
	</form>
</body>
</html>