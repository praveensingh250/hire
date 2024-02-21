
 
 <?php 
                      include "config/config.php";
                      // date_default_timezone_set('Asia/Kolkata'); 
                      // $date = date("Y-m-d");
                      
$date = $_GET['dateva'];

echo $date;

                      ?>

                       <div class="table-responsive">

                  <table class="table table-striped table-bordered first">
                    <thead>
                      <tr>
                       
                        <th>Station</th>
                        <th>Shift</th>
                         <th>Name</th>
                        <th>Phone Number</th>
                        <th>Date</th>
                        
                        <th>Submit</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      
                      <?php 
                      include "config/config.php";
                      // date_default_timezone_set('Asia/Kolkata'); 
                      // $date = date("Y-m-d");
                      $query = "SELECT * FROM whatsapp where whats_date='$date'";
                      $result = mysqli_query($conn, $query);
                      while($row = mysqli_fetch_assoc($result)){

                        $station = "SELECT * FROM station";
                        $station_result = mysqli_query($conn, $station);

                        $shift = "SELECT * FROM shift";
                        $shift_result = mysqli_query($conn,$shift);


                      ?>
                      <tr>

                       
                       
                        <td><?php echo $row["emp_station"] ?>
                         
                        </td>
                        <td><?php echo $row["emp_shift"] ?>
                          
                        </td>
                         <td><?php echo $row["emp_name"]; ?>
                         
                        </td>
                        <td>
                          <?php echo $row["emp_phone"] ?>
                          
                        </td>
                        <td>
                          <?php echo $row["whats_date"] ?>
                          
                        </td>
                        <td>
 <form method="POST" action="common/whatsapp_data_submit.php">
  <input type="hidden" name="whats_id" value="<?php echo $row['whats_id']; ?>">
   <input type="hidden" name="emp_name" value="<?php echo $row['emp_name']; ?>">
   <input type="hidden" name="epm_sl_no" value="<?php echo $row['emp_sl_no']; ?>">
  
  <input type="hidden" name="shift_name" value="<?php echo $row['shif_id']; ?>">
  <input type="hidden" name="emp_phone" value="<?php echo $row['emp_phone']; ?>">
  <input type="hidden" name="statin_name" value="<?php echo $row['emp_station']; ?>">
                          <button type="submit" name="send"> Submit</button>

</form>
                        </td>
                       
                       

                      </tr>
                     <?php }; ?>
                    </tbody>
                    <tfoot>
                      <!-- <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr> -->
                    </tfoot>
                  </table>
                   
                </div>


            