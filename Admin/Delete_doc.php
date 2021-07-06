<?php
include('../connect/db.php');
$upload_dir = 'uploads/';
if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$sql = "select * from doc_login where id = ".$id;
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		$sql = "delete from doc_login where id=".$id;
		if(mysqli_query($conn, $sql)){
			header('location:Doc_login_table.php');
		}
	}
}
?>