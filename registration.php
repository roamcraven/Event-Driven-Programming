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
            background-color: #ADD8E6;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="/Event-driven-programming/assets/img/logo.png" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/Event-driven-programming/index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Event-driven-programming/registration.php">Registration</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <p class="h2 mt-3">Registration</p>
        <p>You can add record for student here.</p>
        <div class="card mt-3">
        <form action="/models/save.php" method="POST">
            <div class="card-header">Registration Form.</div>
            <div class="card-body">
                <?php
                if(isset($_GET['success'])){
                    ?>
                  <div class="alert alert-danger">
                    <b>New student added</b>. Congrats. Thank you!
                </div>
                <hr>
                <?php
                }elseif(isset($_GET['invalid'])){
                    ?>
                    <div class="alert alert-danger">
                    <b>Existed Application ID</b>. Please Try Another. Thank you.
                </div>
                <hr>
                <?php
                }               
                ?>
                <div class="row">
                <div class="col-md-3">
                        <label>Application ID : <b class="text-danger">*</b></label>
                        <input name="in_appid" required type="text" placeholder="Enter application id here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-4">
                        <label>TES award number : <b class="text-danger">*</b></label>
                        <input name="in_award_num" required type="text" placeholder="Enter TES award number here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-5">
                        <label>Student ID : <b class="text-danger">*</b></label>
                        <input name="in_sid" required type="text" placeholder="Enter student id here.." class="form-control mt-2">   
                       </div>               
                    <div class="row mt-3">
                    <div class="col-md-3">
                        <label>First name : <b class="text-danger">*</b></label>
                        <input name="in_first_name" required type="text" placeholder="Enter first name here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-4">
                        <label>Last name : <b class="text-danger">*</b></label>
                        <input name="in_last_name" required type="text" placeholder="Enter last name here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-2">
                        <label>Ext. name : <small>(Optional)</small></label>
                        <input name="in_xt_name" type="text" placeholder="Enter Ext. name here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-3">
                        <label>Middle name : <small>(Optional)</small></label>
                        <input name="in_mid_name" type="text" placeholder="Enter middle name here.." class="form-control mt-2">
                    </div> 
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label>Gender : <b class="text-danger">*</b></label>
                        <select name="in_gender" required id="" class="form-control mt-2">
                            <option value="" disabled selected>--SELECT GENDER--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                      </div>
                    <div class="col-md-4">
                        <label>Contact number : <b class="text-danger">*</b></label>
                        <input name="in_contact" required type="text" placeholder="09 XXXX XXXX" class="form-control mt-2">
                    </div>
                    <div class="col-md-2">
                        <label>Status : <small>(Optional)</small></label>
                        <input name="in_status" type="text" placeholder="Enter status here.." class="form-control mt-2">
                    </div>
                    <div class="col-md-3">
                        <label>Award Batch : <b class="text-danger">*</b></label>
                        <input name="in_batch_num" required type="text" placeholder="Batch X" class="form-control mt-2">
                    </div>
                 </div>
             </div>
            <div class="card-footer">
                <span style="float: right">
                <button class="btn btn-success">
                  Add New Student
                </button>
              </span>
            </div>
          </form>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

</html>