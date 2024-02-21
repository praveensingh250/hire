<?php 
 
// Load the database configuration file 
include_once '../config/config.php'; 
 
// Fetch records from database 
$query = $conn->query("SELECT * FROM employee ORDER BY emp_id ASC"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "members-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Sl No', 'Name', 'Unique Name', 'EMAIL', 'Phone', 'Joining Date'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        // $status = ($row['status'] == 1)?'Active':'Inactive'; 
        $lineData = array($row['epm_sl_no'], $row['emp_name'], $row['emp_unique_name'], $row['emp_email'], $row['emp_phone'], $row['create_date']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>