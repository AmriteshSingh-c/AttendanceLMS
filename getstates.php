<?php
include "./database/config.php";

$stateid = 0;

if (isset($_POST['Country_code'])) {
 $stateid = mysqli_real_escape_string($con, $_POST['Country_code']); // department id
}

$states_arr = array();

if ($stateid > 0) {
 $sql = "SELECT Country_code,state_name FROM attendance.state  WHERE Country_code=" . $stateid;

 $result = mysqli_query($con, $sql);

 while ($row = mysqli_fetch_array($result)) {
  $stateid = $row['Country_code'];
  $name = $row['state_name'];

  $states_arr[] = array("id" => $stateid, "name" => $name);
 }
}
// encoding array to json format
echo json_encode($states_arr);
