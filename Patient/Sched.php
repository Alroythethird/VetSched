<?php
include('add.php')
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
        <a class="navbar-brand" href="/VetSched/VetSched.php/"><i class="fas fa-paw" style=" margin-left:10px;" >APets Veterinary Clinic</i></a>
        <ul class="navbar-nav ml-auto" style="margin-right: 10px;">    
            <li class="nav-item">
                <a class="nav-link" href="/VetSched/Services.php/" style="font-size: 18px; padding-right: 15px;">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/VetSched/Team.php/" style="font-size: 18px; padding-right: 15px;">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/VetSched/About.php/" style="font-size: 18px; padding-right: 15px;">About</a>
            </li>
        </ul>
    </nav>
    
    <form method="post" style="padding-top: 80px;background-color: #c5e6d1; padding-bottom: 50px">
        <div class="container">
            <div class="card-header" style="background-color: #387d60; color: white; font-family: Georgia; word-spacing: 2px"><i class="fas fa-edit"></i><b style="font-size: 30px; font-family: Gloucester MT Extra Condensed">Schedule Appointment</b><br>
            This is only a form to request an appointment, not to book an appointment. A member of out staff will contact you to confirm your pets scheduled appointment. If there is an urgent health concern, do not request an appointment online and call our practice at (857) 362-4567.
            </div>
            <div class="card" style="background: linear-gradient(to bottom, #a5d1af 0%, #387d60 100%) "><br>
                <div class="container bg-faded">
                    <h4 style="padding-bottom: 20px; margin-left: 10px">
                        <p><b>Owner's Information</b></p>
                        <p style="margin-top: -45px; margin-left: 520px"><b>Pet's Information</b></p>
                    </h4>
                    <div class="form-row" style="margin-bottom: -20px; margin-left: 80px">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">First Name:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Fname" type="text" value="" required>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group col-md-4" style="margin-left: 210px">
                            <label for="inputEmail4">Pet's Name:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Pname" type="text" value="" required>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-paw"></i></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row" style="margin-bottom: -20px; margin-left: 80px">    
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Middle Name:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Mname" type="text" value="" required>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group col-md-2" style="margin-left: 210px">
                            <label for="inputEmail4">Type of Pet:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Type" type="text" value="" required>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-paw"></i></div>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputEmail4">Age:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Age" type="text" value="" required>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-paw"></i></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row" style="margin-bottom: -20px; margin-left: 80px">    
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Last Name:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Lname" type="text" value="" required>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="form-group col-md-2" style="margin-left: 210px">
                            <label for="inputEmail4">Gender:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <select class="form-control" name="Gender" required>
                                    <option></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-paw"></i></div>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputEmail4">Purpose:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <select class="form-control" name="Purpose" required>
                                    <option></option>
                                    <option>Check Up</option>
                                    <option>Vaccination</option>
                                    <option>Grooming</option>
                                </select>          
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-bars"></i></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row" style="margin-bottom: -20px; margin-left: 80px">    
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Email:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Email" type="text" required>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group col-md-4" style="margin-left: 210px">
                            <label for="inputEmail4">Preffered Date:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="Predate" type="Date" value="none" required>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row" style="margin-bottom: -20px; margin-left: 80px">    
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Contact Number:</label>  
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" name="ContactNo" type="text" required>     
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-address-book"></i></div>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div>
            <div class="card-footer" style="float: right;">
                <button type="reset" class="btn btn-danger" style="margin-left: 880px"><i class="fas fa-undo"></i> Reset</button>
                <button class="btn btn-success" name="Submit" type="submit" style="margin-left: 10px"><i class="fas fa-save" style="margin-right: 5px"></i>Save</button> 
            </div>
        </div>
    </form>
</body>
<script>
date = new Date();
var month = date.getMonth()+1;
var day = date.getDate();
var year = date.getFullYear();
document.getElementById("date").value = month + '/' + day + '/' + year;
</script>
</html>