<?php

   $registration = array(

      's_app_id' => "'" . $_POST ['inp_app_id']. "'",
      's_award_num'=> "'" .  $_POST ['inp_award_num']. "'",
      's_sid'=>  "'" . $_POST ['inp_sid']. "'",
      's_firstName'=>  "'" . $_POST ['inp_firstName']. "'",
      's_lastName'=>  "'" . $_POST ['inp_lastName']. "'",
      's_extName' => "'" . $_POST ['inp_extName']. "'",
      's_midName'=>  "'" . $_POST ['inp_midName']. "'",
      's_gender' => "'" . $_POST ['inp_gender']. "'",
      's_contNum'=>  "'" . $_POST ['inp_contNum']. "'", 
      's_status'=>  "'" . $_POST ['inp_status']. "'",
      's_batchNum'=>  "'" . $_POST ['inp_batchNum']. "'",     

   );
    
   save($registration);

         function save($data)
{
          include('../config/database.php');

          $attributes = implode(", ", array_keys($data));
          $values = implode(", ", array_values($data));

          $app_id = $_POST['inp_appid'];
          $validate = "SELECT COUNT(*) AS i FROM t_students WHERE s_app_id LIKE '$app_id'";

          $rs = $conn->query($validate);
          $count = $rs->fetch_assoc();

          if($count['i'] == 0){
      
           $query = "INSERT INTO t_students ($attributes) VALUES ($values)";
           $conn->query($query);
           header('location: ../registration.php?success');
          }else{
      
           header('location: ../registration.php?invalid');
         }

         $conn->close();
}
  
  