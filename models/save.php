<?php

   $registraion = array(

      's_app_id' => "'" . $_POST ['inp_appid']. "'",
      's_award_num'=> "'" .  $_POST ['inp_award_num']. "'",
      's_sid'=>  "'" . $_POST ['inp_sid']. "'",
      's_firstName'=>  "'" . $_POST ['inp_first_name']. "'",
      's_lastName'=>  "'" . $_POST ['inp_last_name']. "'",
      's_extName' => "'" . $_POST ['inp_xt_name']. "'",
      's_midName'=>  "'" . $_POST ['inp_mid_name']. "'",
      's_gender' => "'" . $_POST ['inp_gender']. "'",
      's_contNum'=>  "'" . $_POST ['inp_contact']. "'", 
      's_status'=>  "'" . $_POST ['inp_status']. "'",
      's_batchNum'=>  "'" . $_POST ['inp_batch_num']. "'",     

   );

save($registraion);

function save($data){
     include('../config/database.php');
     
    $attributes = implode(",", array_keys($data));
    $values = implode(",", array_values($data));
    $query = "INSERT INTO s_students($attributes) VALUES ($values)";

    $result = $conn->query($query);

   if($conn->query($query) === TRUE){
       header('location: /registration.php?success');
    }else{       
        header('location: /registration.php?invalid');
   }

    $conn->close();
   
}