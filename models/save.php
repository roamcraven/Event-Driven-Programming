<?php

   $registraion = array(

      's_app_id' => "'" . $_POST ['inp_appid'] . "'",
      's_award_num' => "'" . $_POST ['inp_awardnum'] . "'",
      's_sid' => "'" . $_POST ['inp_sid'] . "'"
      's_firstName' => "'" . $_POST ['inp_fname'] . "'",
      's_lastName' => "'" . $_POST ['inp_lname'] . "'",
      's_extName' => "'" . $_POST ['np_xtname']. "'",
      's_midName' => "'" . $_POST ['inp_midname'] . "'",
      's_gender' => "'" . $_POST ['inp_gender'] . "'",
      's_contNum' => "'" . $_POST ['inp_contact'] . "'",
      's_status' => "'" . $_POST ['inp_status'] . "'",
      's_batchNum' => "'" . $_POST ['inp_batch'] . "'",      

   );

save($registraion);

function save($data){
    include('../config/database.php');
     
    $attributes = implode(",", array_keys($data));
    $values = implode(",", array_values($data));
    $query = "INSERT INTO s_students($attributes) VALUES ($values)";

    if($conn->query($query) === TRUE){
        echo "New Student Added";
    }else{
        echo "Error: " . $conn->error(); 
    }
    $conn->close();
   
}