<?php 

include "config.php";

$stateid= 0;

if(isset($_POST['st'])){
   $stateid = mysqli_real_escape_string($con,$_POST['st']); // department id
}

$users_arr = array();

if($stateid > 0){
   $sql = "SELECT Country_code,state_name FROM states WHERE country=".$stateid;

   $result = mysqli_query($con,$sql);

   while( $row = mysqli_fetch_array($result) ){
      $stid = $row['Country_code'];
      $name = $row['state_name'];

      $state_arr[] = array("Country_code" => $stid, "state_name" => $name);
   }
}
// encoding array to json format
echo json_encode($state_arr);