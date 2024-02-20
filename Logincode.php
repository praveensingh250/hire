<?php 
   

    include "config.php";
//include "../config/config.php";

    
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
       $sql = "select *from adminpanel where username = '$username' and password = '$password'";
        

   


       
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>"; 
            
            header("Location:dashboard.php");
            die();
        }  
        else{  
           header("Location:index.php?status=1");
        }     
?>
