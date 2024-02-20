<?php
include "../config/config.php";
if (isset($_POST['submit'])) {
	
	$statin_name = $_POST['emp_name'];
	
$date = date("l jS \of F Y h:i:s A");

echo $date;

$unique_name_check = "SELECT * FROM `station` where `statin_name`='$statin_name'";
$unique_name_check_result = mysqli_query($conn,$unique_name_check );
$uniqness = mysqli_num_rows($unique_name_check_result);
if ($uniqness>0) {

	?>

<script>
    window.location = '../add-station.php?id=2';
</script>

	<?php
	// code...
}

else{
$query = "INSERT INTO `station` (`statin_name`,`create_date`) VALUES ('$statin_name','$date')";

$result = mysqli_query($conn,$query);
if($result){
	echo "station Add Successfuly";
	?>

<script>
    window.location = '../add-station.php?id=1';
</script>

	<?php
}


}
}


?>