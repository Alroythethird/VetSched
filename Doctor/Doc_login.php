<?php
   session_start();
	include('../connect/db.php');
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $uname = mysqli_real_escape_string($conn,$_POST['uname']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM doc_login WHERE uname = '$uname' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_start();
         $_SESSION['ID']=$row['id'];
         $_SESSION['name']=$uname;
         header("location:/VetSched/Doctor/Requests.php");
          exit(); 
      }else{
         $error = "*Your Login Name or Password is invalid";
      }
   }
?>