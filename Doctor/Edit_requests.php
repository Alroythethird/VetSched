<?php
require_once('../Connect/db.php');
$upload_dir = 'uploads/';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "select * from patient where id=".$id;
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
	}else {
		$errorMsg = 'Could not Find Any Record';
	}
}
if(isset($_POST['Submit'])){
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
	$Status = $_POST['Status'];
	
	if(!isset($errorMsg)){
		$sql = "update patient set Fname = '".$Fname."',Mname = '".$Mname."',Lname = '".$Lname."',ContactNo = '".$ContactNo."',Pname = '".$Pname."',Type = '".$Type."',Age = '".$Age."',Gender = '".$Gender."',Purpose = '".$Purpose."',Predate = '".$Predate."',Status = '".$Status."' where id=".$id;
		$result = mysqli_query($conn, $sql);
		if($result){
			$successMsg = 'New record updated successfully';
			header('Location:Requests.php');
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
    <link rel="stylesheet" type="text/css" href="/VetSched/others/css/fontawesome/fontawesome/css/all.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
</head>


<body>
<nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
    <a class="navbar-brand"><i class="fas fa-paw" style=" margin-left:10px;" >APets Veterinary Clinic</i></a>
    <ul class="navbar-nav ml-auto" style="margin-right: 10px;">
    	<li class="nav-item">
          <a class="nav-link" href="/VetSched/Doctor/Requests.php" style="font-size: 18px; padding-right: 15px;">Requests</a>
      	</li>
      	<li class="nav-item">
          <a class="nav-link" href="logout.php" style="font-size: 18px; padding-right: 15px;">Log Out</a>
      	</li>
    </ul>
  </nav>
<form action="" method="post" enctype="multipart/form-data" style="padding-top: 80px;background-color: #c5e6d1; padding-bottom: 50px">
        <div class="container">
            <div class="card" style="background: linear-gradient(to bottom, #a5d1af 0%, #387d60 100%) "><br>
                <div class="container bg-faded">
                    <h4 style="padding-bottom: 20px; margin-left: 395px">
                        <p><b>Owner's Information</b></p>
                    </h4>

                    <div class="form-row">
                        <div class="form-group col-md-3" style="margin-left: 120px">
                            <label for="inputEmail4">First Name:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                   				<input class="form-control" name="Fname" type="text" value="<?php echo $row['Fname'];?>" readonly>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div> 
                            </div>                        
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Middle Name:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Mname" type="text" value="<?php echo $row['Mname']; ?>" readonly>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Last Name:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Lname" type="text" value="<?php echo $row['Lname']; ?>" readonly>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="form-row">    
                        <div class="form-group col-md-3"  style="margin-left: 120px">
                            <label for="inputEmail4">Email:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Email" type="text" value="<?php echo $row['Email']; ?>" readonly>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Contact Number:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="ContactNo" type="text" value="<?php echo $row['ContactNo']; ?>" readonly>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-address-book"></i></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <h4 style="padding-bottom: 20px; margin-left: 420px">
                        <p><b>Pets Information</b></p>
                    </h4>
                    <div class="form-row"> 
                        <div class="form-group col-md-3" style="margin-left: 120px">
                            <label for="inputEmail4">Pet's Name:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Pname" type="text" value="<?php echo $row['Pname']; ?>" readonly>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-cat"></i></div>
                                </div> 
                            </div>
                        </div>    
                        <div class="form-group col-md-2">
                            <label for="inputEmail4">Type of Pet:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Type" type="text" value="<?php echo $row['Type']; ?>" readonly>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-dog"></i></div>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputEmail4">Age:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Age" type="text" value="<?php echo $row['Age']; ?>" readonly>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-cat"></i></div>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputEmail4">Gender:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <select class="form-control" name="Gender" disabled>
                                    <option><?php echo $row['Gender']; ?></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-dog"></i></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3" style="margin-left: 120px">
                            <label for="inputEmail4">Purpose</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <select class="form-control" name="Purpose" disabled>
                                    <option><?php echo $row['Purpose'];?></option>
                                    <option>Check Up</option>
                                    <option>Vaccination</option>
                                    <option>Grooming</option>
                                </select>          
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-bars"></i></div>
                                </div> 
                            </div>
                        </div>   
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Preffered Date</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Predate" type="Date" value="<?php echo $row['Predate']; ?>" readonly>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row" style="margin-left: 120px">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Status</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <select class="form-control" name="Status" required>
                                    <option> <?php echo $row['Status']; ?></option>
                                    <option>Approved</option>
                                    <option>Decline</option>
                                </select>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            <div class="card-footer" style="float: right;">
                <button class="btn btn-success" name="Submit" type="submit" style="margin-left: 430px; padding: 10px 50px 10px 50px;" ><i class="fas fa-save" style="margin-right: 5px"></i>Save</button> 
            </div>
        </div>
    </form>

</form>
</body>
</html>


