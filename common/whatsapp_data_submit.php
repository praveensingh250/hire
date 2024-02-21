<?php

include "../config/config.php"; 
if (isset($_POST['send'])) {
	
	// $emp_name = $_POST['emp_name'];
	// $epm_sl_no = $_POST['epm_sl_no'];
	// $emp_phone = $_POST['emp_phone'];
	// $statin_name = $_POST['statin_name'];
	$shift_name = $_POST['shift_name'];
	$whats_id = $_POST['whats_id'];


$shift = "SELECT * FROM  shift WHERE `shift_id` ='$shift_name'";
$shift_result = mysqli_query($conn,$shift);
$shift_row = mysqli_fetch_assoc($shift_result);

$shift_hours = $shift_row['hours'];
$shift_or = $shift_row['shift_name'];


// echo $shift_hours. $shift_or;

$whats_match = "SELECT * FROM whatsapp WHERE whats_id ='$whats_id'";
$whats_match_result = mysqli_query($conn,$whats_match);
$whats_match_row = mysqli_fetch_assoc($whats_match_result);
if ($whats_match_row['shift_hours']==0) {
	$query = "UPDATE `whatsapp` SET `shift_hours` = '$shift_hours' WHERE `whatsapp`.`whats_id` = '$whats_id'";
$result = mysqli_query($conn,$query);

if ($result) {
	

}
}
else{
echo "already Submit";
}; }


?>
