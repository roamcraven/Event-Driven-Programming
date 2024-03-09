<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="./assets/js/search.js"></script>

    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #ecf0f1;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="/assets/img/logo.png" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/registration.php">Registration</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <p class="h2 mt-3">Registration</p>
        <p>You can add record for student here.</p>
        <div class="card mt-3">
            <div class="card-header">Registration Form.</div>
            <div class="card-body">
               <form action="">
                <div class="row">
                <div class="col-md-3">
                        <label>Application ID : <b class="text-danger">*</b></label>
                        <input type=" " placeholder="Enter application id here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-4">
                        <label>TES award number : <b class="text-danger">*</b></label>
                        <input type=" " placeholder="Enter TES award number here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-5">
                        <label>Student ID : <b class="text-danger">*</b></label>
                        <input type=" " placeholder="Enter student id here.." class="form-control mt-2">   
                       </div>               
                    </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label>First name : <b class="text-danger">*</b></label>
                        <input type=" " placeholder="Enter first name here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-4">
                        <label>Last name : <b class="text-danger">*</b></label>
                        <input type=" " placeholder="Enter last name here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-2">
                        <label>Ext. name : <small>(Optional)</small></label>
                        <input type=" " placeholder="Enter Ext. name here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-3">
                        <label>Middle name : <small>(Optional)</small></label>
                        <input type=" " placeholder="Enter middle name here.." class="form-control mt-2">
                    </div>
                  </div>  
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label>Gender : <b class="text-danger">*</b></label>
                        <select name="" id="" class="form-control mt-2">
                            <option value="" disabled selected>--SELECT GENDER--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                      </div>
                    <div class="col-md-4">
                        <label>Contact number : <b class="text-danger">*</b></label>
                        <input type=" " placeholder="Enter contact number here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-2">
                        <label>Status : <small>(Optional)</small></label>
                        <input type=" " placeholder="Enter status here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-3">
                        <label>Award Batch : <b class="text-danger">*</b></label>
                        <input type=" " placeholder="Batch X" class="form-control mt-2">
                    </div>
                 </div>
               </form>
             </div>
            <div class="card-footer">
                <span style="float: right">
                <button class="btn btn-succes">
                   Add New Student
                </button>
              </span>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

</html>