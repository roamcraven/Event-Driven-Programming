<?php

   $registration = array(

      's_app_id' => "'" . $_POST ['inp_app_id']. "'",
      's_tes_num'=> "'" .  $_POST ['inp_award_num']. "'",
      's_student_id'=>  "'" . $_POST ['inp_sid']. "'",
      's_first_name'=>  "'" . $_POST ['inp_firstName']. "'",
      's_last_name'=>  "'" . $_POST ['inp_lastName']. "'",
      's_ext_name' => "'" . $_POST ['inp_extName']. "'",
      's_middle_name'=>  "'" . $_POST ['inp_midName']. "'",
      's_gender' => "'" . $_POST ['inp_gender']. "'",
      's_phone'=>  "'" . $_POST ['inp_contNum']. "'", 
      's_status'=>  "'" . $_POST ['inp_status']. "'",
      's_award_batch'=>  "'" . $_POST ['inp_batchNum']. "'",     

   );
    
   save($registration);

         function save($data)
{
          include('../config/database.php');

          $attributes = implode(", ", array_keys($data));
          $values = implode(", ", array_values($data));

          $app_id = $_POST['inp_app_id'];
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
  
  