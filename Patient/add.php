<?php
require_once('../connect/db.php');

if (isset($_POST['Submit'])) {
	$Fname = $_POST['Fname'];
	$Mname = $_POST['Mname'];
	$Lname = $_POST['Lname'];
	$ContactNo = $_POST['ContactNo'];
	$Email = $_POST['Email'];
	$Pname = $_POST['Pname'];
	$Type = $_POST['Type'];
	$Age = $_POST['Age'];
	$Gender = $_POST['Gender'];
	$Purpose = $_POST['Purpose'];
	$Predate = $_POST['Predate'];
	
	if(empty($Fname)){
		$errorMsg = 'Please input First Name';
	}elseif(empty($Mname)){
		$errorMsg = 'Please input Middle Name';
	}elseif(empty($Lname)){
		$errorMsg = 'Please input Last Name';
	}elseif(empty($Email)){
		$errorMsg = 'Please input Email';
	}elseif(empty($ContactNo)){
		$errorMsg = 'Please input Contact number';
	}elseif(empty($Pname)){
		$errorMsg = 'Please input Pets Name';
	}elseif(empty($Type)){
		$errorMsg = 'Please input Type of Pet';
	}elseif(empty($Age)){
		$errorMsg = 'Please input Age';
	}elseif(empty($Gender)){
		$errorMsg = 'Please input Gender';
	}elseif(empty($Purpose)){
		$errorMsg = 'Please input Purpose';
	}elseif(empty($Predate)){
		$errorMsg = 'Please input Preferred Date';
	}
	if(!isset($errorMsg)){
		$sql = "insert into patient (Fname, Mname, Lname, Email, ContactNo, Pname, Type, Age, Gender, Purpose, Predate) values('".$Fname."', '".$Mname."', '".$Lname."', '".$Email."', '".$ContactNo."', '".$Pname."', '".$Type."','".$Age."', '".$Gender."', '".$Purpose."', '".$Predate."')";
		$result = mysqli_query($conn, $sql);
		if($result){
			header('Location: Sched.php');
		}else{
			$errorMsg = 'Error '.mysqli_error($conn);
		}
	}
}
?>