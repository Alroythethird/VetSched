<?php
require_once('../Connect/db.php');
$upload_dir = 'uploads/';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "select * from doc_login where id=".$id;
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
	}else {
		$errorMsg = 'Could not Find Any Record';
	}
}
if(isset($_POST['Submit'])){
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if(!isset($errorMsg)){
		$sql = "update doc_login set uname = '".$uname."',email = '".$email."',password = '".$password."' where id=".$id;
		$result = mysqli_query($conn, $sql);
		if($result){
			$successMsg = 'New record updated successfully';
			header('Location:Doc_login_table.php');
		}else{
			$errorMsg = 'Error '.mysqli_error($conn);
		}
	}
}
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
	<form method="POST">
  		<h2 style="margin-bottom: 40px; margin-top: 20px; text-align: center;">Edit Info Here</h2>
  		<div class="input-container">
    		<i class="fa fa-user icon"></i>
    		<input class="input-field" type="text" placeholder="Username" name="uname" value="<?php echo $row['uname']; ?>" editable>
  		</div>
  		<div class="input-container">
    		<i class="fa fa-envelope icon"></i>
    		<input class="input-field" type="text" placeholder="Email" name="email" value="<?php echo $row['email']; ?>" editable>
  		</div>
  
  		<div class="input-container">
    		<i class="fa fa-key icon"></i>
    		<input class="input-field" type="text" placeholder="Password" name="password" value="<?php echo $row['password']; ?>" editable>
  		</div>
  		<button type="submit" class="btn" name="Submit">Save</button>
  		<a type="button" class="cancel" href="/VetSched/Admin/Doc_login_table.php">Cancel</a>
	</form>

</body>
</html>
</body>
</html>