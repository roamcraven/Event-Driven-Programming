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
                        <a class="nav-link" href="./">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Event-driven-programming/postalCode.php">Registration</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <p class="h2 mt-3">Postal Code Registration</p>
        <p>You can add record for Addresses here.</p>
        <div class="card mt-3">
        <form action="/Event-driven-programming/models/save-postal-code.php" method="POST">
            <div class="card-header">Registration Form.</div>
            <div class="card-body">
                <?php
                if(isset($_GET['success'])){
                    ?>
                    <div class="alert alert-success">
                        <b>New Address added</b>. Congrats. Thank you!
                    </div>
                    <hr>
                <?php
                } elseif(isset($_GET['invalid'])){
                    ?>
                    <div class="alert alert-danger">
                        <b>Existing Postal Code!</b>. Please Try Another. Thank you.
                    </div>
                    <hr>
                <?php
                }
                ?>
             <?php
             include './config/database.php';
             ?>

            <div class="row mt-3">
            <div class="col-md-12">
            <hr>
               </div>
              <div class="col-md-3">
              <label> REGION : <b class="text-danger">*</b></label>
              <select name="inp_region" id="inp_region" onchange="display_Province(this.value)" required class="form-control mt-2">
                <option value="" disabled selected>---SELECT REGION---</option>
                <?php
                $sql = "SELECT * FROM ph_region";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?= $row['regCode'] ?>"><?= $row['regDesc'] ?></option>
                    <?php
                  }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
              </select>
              </div>
              <div class="col-md-3">
              <label> PROVINCE : <b class="text-danger">*</b></label>
              <select name="inp_province" id="inp_province" onchange="display_Citymun(this.value)" required class="form-control mt-2">
                <option value="" disabled selected>---SELECT PROVINCE---</option>
              </select>
          </div>
          <div class="col-md-3">
              <label> CITY / MUNICIPALITY : <b class="text-danger">*</b></label>
                    <select name="inp_citymun" id="inp_citymun" onchange="display_Barangay(this.value)" required class="form-control mt-2">
                    <option value="" disabled selected>---SELECT CITY / MUNICIPALITY---</option>
                  </select>
                 </div>
               <div class="col-md-3">
               <div class="col-md-12 mt-3">
                        <label>Postal Code : <b class="text-danger">*</b></label>
                        <input type="number" name="inp_postalCode" class="form-control" placeholder="Postal Code here..">
                   </div>
                 </div>        
                </div>
             <div class="card-footer">
                         <span style="float: right">
                         <button class="btn btn-success">
                         Add New Address
                      </button>
                   </span>
                  </div>
                 </form>
               </div>
              </div>
            </body>
         <script>
           function display_Province(regCode){
               $.ajax({
               url: '/Event-driven-programming/models/ph-address.php',
                type: 'POST',
                data: {
                 'type' : 'region',
                 'post_code' : regCode

                 },
                   success: function(response){
                   $('#inp_province').html(response);
                }
              });
             }

             function display_Citymun(provCode){
                 $.ajax({
                 url: '/Event-driven-programming/models/ph-address.php',
                 type: 'POST',
                 data: {
                 'type' : 'province',
                 'post_code' : provCode
              },
                   success: function(response){
                   $('#inp_citymun').html(response);
               }
              });
             }

                function display_Barangay(citymunCode){
                  $.ajax({
                  url: '/Event-driven-programming/models/ph-address.php',
                  type: 'POST',
                  data: {
                  'type' : 'citymun',
                  'post_code' : citymunCode
               },
                  success: function(response){
                  $('#inp_barangay').html(response);
             }
            });
          }
    </script>
    
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

</html>