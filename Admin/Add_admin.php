<?php
require_once('../connect/db.php');

if (isset($_POST['Submit'])) {
  $Uname = $_POST['uname'];
  $Email = $_POST['email'];
  $Password = $_POST['password'];
  
  if(empty($Uname)){
    $errorMsg = 'Please input User Name';
  }elseif(empty($Email)){
    $errorMsg = 'Please input Email';
  }elseif(empty($Password)){
    $errorMsg = 'Please input Password';
  }
  if(!isset($errorMsg)){
    $sql = "insert into admin_login(uname, email, password) values('".$Uname."', '".$Email."', '".$Password."')";
    $result = mysqli_query($conn, $sql);
    if($result){
      header('Location: /VetSched/Admin/Admin_login_table.php');
    }else{
      $errorMsg = 'Error '.mysqli_error($conn);
    }
  }
}
?>