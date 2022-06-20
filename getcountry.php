<?php
include "./database/config.php";
// Fetch Country
$sql_country = "SELECT * FROM attendance.country";
$country_data = mysqli_query($con, $sql_country);
while ($row = mysqli_fetch_assoc($country_data)) {
 $countryid = $row['Country_code'];
 $country_name = $row['Country'];

 // Option
 echo "<option value='" . $countryid . "'>" . $country_name . "</option>";
}
