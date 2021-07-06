<?php
include('../connect/db.php');
?>

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `patient` WHERE CONCAT(`Status`,`Purpose`,`id`,`Lname`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `patient`";
    $search_result = filterTable($query);
}
// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "vetsched");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
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
    <link rel="stylesheet" type="text/css" href="/VetSched/others/css/fontawesome/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="/VetSched/others/css/Request.css">
    <div class="jumbotron" >
      <h1>REQUEST TABLE INFORMATION</h1>
    </div>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
    <a class="navbar-brand" href="/VetSched/Admin/Admin_page.php"><i class="fas fa-paw" style=" margin-left:10px;">APets Veterinary Clinic</i></a>
    <ul class="navbar-nav ml-auto" style="margin-right: 10px;">
      <li class="nav-item">
        <a class="nav-link" href="/VetSched/Admin/Request_Table.php" style="font-size: 18px; padding-right: 15px;">Requests</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="/VetSched/Admin/Admin_login_table.php" style="font-size: 18px; padding-right: 15px;">Admin Table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/VetSched/Admin/Doc_login_table.php" style="font-size: 18px; padding-right: 15px;">Doc Table</a>
      </li>
    </ul>
  </nav>
    <br>
  <form method="POST" enctype="multipart/form-data">
    <div class="card-header" style="width: 100%; margin-left: 0%;">
      <i class="fas fa-edit"></i> PATIENT REQUESTS 
      <button type="submit" class="btn btn-success "  name="search" style="float:right; margin-left: 0.3%; padding: 5px 10px; margin-top:-0.3%; "><i class="fas fa-search"></i> Search</button>
      <input type="text"    name="valueToSearch" placeholder="Search Patients"  style="float:right; border: 1px solid #ccc;   padding: 5px 20px; border-radius: 4px; margin-top:-0.3%;">
    </div>
    <div class="card" style="width: 100%;  margin-left: 0%;">
      <table id="example" class="table table-striped table-bordered"  >
        <thead>
          <tr>
            <th style="text-align: center; font-size: 12px">ID</th>
            <th style="text-align: center; font-size: 12px">First Name</th>
            <th style="text-align: center; font-size: 12px">Middle Name</th>
            <th style="text-align: center; font-size: 12px">Last Name</th>
            <th style="text-align: center; font-size: 12px">Email</th>
            <th style="text-align: center; font-size: 12px">Contact Number</th>
            <th style="text-align: center; font-size: 12px">Pet's Name</th>
            <th style="text-align: center; font-size: 12px">Type of Pet</th>
            <th style="text-align: center; font-size: 12px">Age</th>
            <th style="text-align: center; font-size: 12px">Gender</th>
            <th style="text-align: center; font-size: 12px">Purpose</th>
            <th style="text-align: center; font-size: 12px">Preferred Date</th>
            <th style="text-align: center; font-size: 12px">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $sql = "select * from patient";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)){
              while($row = mysqli_fetch_assoc($result)){
            ?>
            <?php while($row = mysqli_fetch_array($search_result)):?>
          <tr>
            <td style="text-align: center; font-size: 13px"><?php echo $row['id'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['Fname'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['Mname'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['Lname'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['Email'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['ContactNo'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['Pname'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['Type'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['Age'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['Gender'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['Purpose'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['Predate'] ?></td>
            <td style="text-align: center; font-size: 13px;"><?php echo $row['Status'] ?></td>   
            <td class="text-center">
              <a href="Edit_req.php?id=<?php echo $row['id'] ?>" class="btn btn-info" style=" padding: 2%;"><i class="fa fa-xs fa-user-edit"></i></a>
              <a href="Delete_req.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger"  style=" padding: 2%;" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i></a>
              
            </td>
          </tr>
          <?php endwhile;?>
          <?php
          }
          }
          ?>
        </tbody>
      </table>
    </div>
  </form>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
    } );
  </script>
</body>
</html>