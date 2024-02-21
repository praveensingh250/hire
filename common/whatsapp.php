<?php

include "../config/config.php"; 
if (isset($_POST['send'])) {
	
	$emp_name = $_POST['emp_name'];
	$epm_sl_no = $_POST['epm_sl_no'];
	$emp_phone = $_POST['emp_phone'];
	$statin_name = $_POST['statin_name'];
	$shift_name = $_POST['shift_name'];


$shift = "SELECT * FROM  shift WHERE `shift_id` ='$shift_name'";
$shift_result = mysqli_query($conn,$shift);
$shift_row = mysqli_fetch_assoc($shift_result);

$shift_hours = $shift_row['hours'];
$shift_or = $shift_row['shift_name'];

	echo $emp_name. $epm_sl_no. $emp_phone. $statin_name. $shift_name;

	date_default_timezone_set('Asia/Kolkata'); 
// echo date("Y-m-d");

$date = date("Y-m-d");



$query = "INSERT INTO whatsapp (`emp_name`,`emp_station`,`emp_shift`,`emp_phone`,`whats_date`,`emp_sl_no`,`shif_id`) VALUES ('$emp_name','$statin_name','$shift_or','$emp_phone','$date','$epm_sl_no','$shift_name')";
$result = mysqli_query($conn,$query);

if ($result) {
	


	?>


<script>
	 window.location = 'https://api.whatsapp.com/send/?phone=<?php echo $emp_phone?>&text=Hello Mr. <?php echo $emp_name ?> your location is <?php echo $statin_name ?> and shift is  <?php echo $shift_name ?> please be on Time Thanks';
</script> 
	<?php


}; }


?>
