<?php
include "../config/config.php";
if (isset($_POST['submit'])) {
	
	$imp_name = $_POST['emp_name'];
	$unique_name = $_POST['unique_name'];
	$email_address = $_POST['email_address'];
	$phone_number = $_POST['phone_number'];
	$emp_id = $_POST['emp_id'];
$date = date("l jS \of F Y h:i:s A");

echo $date;

$unique_name_check = "SELECT * FROM `employee` where `emp_unique_name`='$unique_name'";
$unique_name_check_result = mysqli_query($conn,$unique_name_check );
$uniqness = mysqli_num_rows($unique_name_check_result);
if ($uniqness>0) {

	?>

<script>
    window.location = '../add-employee.php?id=2';
</script>

	<?php
	// code...
}

else{
$query = "INSERT INTO `employee` (`epm_sl_no`,`emp_name`,`emp_unique_name`,`emp_email`,`emp_phone`,`create_date`) VALUES ('$emp_id','$imp_name','$unique_name','$email_address','$phone_number','$date')";

$result = mysqli_query($conn,$query);
if($result){
	echo "Employee Add Successfuly";
	?>

<script>
    window.location = '../add-employee.php?id=1';
</script>

	<?php
}


}
}


?>