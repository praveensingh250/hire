<?php
include "../config/config.php";
if (isset($_POST['submit'])) {
	
	$statin_name = $_POST['emp_name'];
	$station_code = $_POST['station_code'];
	$hours = $_POST['hours'];
$date = date("l jS \of F Y h:i:s A");
$query = "INSERT INTO `shift` (`shift_name`,`station_id`,`create_date`,`hours`) VALUES ('$statin_name','$station_code','$date','$hours')";

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



?>