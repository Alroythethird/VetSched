<?php
  include('Add_doc.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/VetSched/others/css/Register.css">
    <link rel="stylesheet" type="text/css" href="../others/css/fontawesome/fontawesome/css/all.css">
</head>
<body>
	<form method="post">
  		<h2 style="margin-bottom: 40px; margin-top: 20px; text-align: center;">Register Here!</h2>
  		<div class="input-container">
    		<i class="fa fa-user icon"></i>
    		<input class="input-field" type="text" placeholder="Username" name="uname" required>
  		</div>
  		<div class="input-container">
    		<i class="fa fa-envelope icon"></i>
    		<input class="input-field" type="text" placeholder="Email" name="email" required>
  		</div>
  
  		<div class="input-container">
    		<i class="fa fa-key icon"></i>
    		<input class="input-field" type="password" placeholder="Password" name="password" required>
  		</div>
  		<button type="submit" class="btn" name="Submit">Register</button>
  		<a type="button" class="cancel" href="/VetSched/Admin/Admin_login_table.php">Cancel</a>
	</form>

</body>
</html>
</body>
</html>