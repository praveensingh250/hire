
<?php
$sucess = ""; 
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  if ($id==1) {
    $sucess = "<p style='text-align:center;color:green'>Station Added Successfuly</p>";
  }
 else
if ($id==2) {
 $sucess = "<p style='text-align:center;color:red'>This Station Is Added Allready</p>";

}
}
?>
<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">


  <!-- Libs CSS -->
  <link rel="stylesheet" href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/libs/fullcalendar/main.min.css">
  <link rel="stylesheet" href="assets/libs/quill/dist/quill.snow.css">




  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.min.css">
  <title>Add Employee
   </title>


</head>

<body>
  <!-- ============================================================== -->
  <!-- main wrapper -->
  <!-- ============================================================== -->
  <div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- Top header default -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
      <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <a class="navbar-brand" href="../index-2.html"><img src="assets/images/logo.png" alt=""></a>
        <div class="ml-auto" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto navbar-right-top flex-row ">
            <li class="nav-item d-none d-lg-block">
              <div id="custom-search" class="top-search-bar">
                <input class="form-control" type="text" placeholder="Search..">
              </div>
            </li>
            
            <li class="nav-item dropdown nav-user order-lg-4 ">
              <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt=""
                  class="avatar-xs rounded-circle"></a>
              <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                <div class="nav-user-info">
                  <h5 class="mb-0 text-white nav-user-name">John Deo</h5>
                  <span class="status"></span><span>Available</span>
                </div>
                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    
    <?php
   include "common/sidebar.php"; 
   ?>

    <div class="dashboard-wrapper">
      <div class="container-fluid dashboard-content">
        <div class="row">
          <div class="col-xl-10">

            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header" id="top">
                  <h2 class="pageheader-title">Add Station </h2>
                  
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Add Station</a></li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Form Elements</li> -->
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- basic form  -->
            <!-- ============================================================== -->
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-block" id="basicform">
                  
                </div>
                <div class="card mb-5 shadow-sm">
                 
                  <div class="card-body">
                    <form method="POST" action="common/add_station.php">
                      <div class="form-group">
                        <label for="inputText3" class="col-form-label">Station Name</label>
                        <input id="inputText3" name="emp_name" type="text" class="form-control">
                      </div>
                     
                      <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" >Add Station</button>
                    </form>
                  </div>
                  <?php echo $sucess ?>
                </div>
              </div>
            </div>
           
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <div class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              2020 © Influence - Designed and Developed by<a href="https://themeforest.net/user/jitu/portfolio"
                target="_blank" class="ml-1">Digital vaypaar Seva</a>.
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="text-md-right footer-links d-none d-sm-block">
                <a href="javascript: void(0);">About</a>
                <a href="javascript: void(0);">Support</a>
                <a href="javascript: void(0);">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- end footer -->
      <!-- ============================================================== -->
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- end main wrapper -->
  <!-- ============================================================== -->
  <!-- Libs JS -->
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="assets/libs/chartist/dist/chartist.min.js"></script>
  <script src="assets/libs/chartist-plugin-threshold/dist/chartist-plugin-threshold.min.js"></script>
  <script src="assets/libs/raphael/raphael.min.js"></script>
  <script src="assets/libs/morris.js/morris.min.js"></script>
  <script src="assets/libs/gaugeJS/dist/gauge.min.js"></script>
  <script src="assets/libs/chart.js/dist/Chart.bundle.min.js"></script>
  <script src="assets/libs/c3/c3.min.js"></script>
  <script src="assets/libs/d3/dist/d3.min.js"></script>
  <script src="assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
  <script src="assets/libs/parsleyjs/dist/parsley.min.js"></script>
  <script src="assets/libs/select2/dist/js/select2.min.js"></script>
  <script src="assets/libs/multiselect/js/jquery.multi-select.js"></script>
  <script src="assets/libs/fullcalendar/main.min.js"></script>
  <script src="assets/libs/cropperjs/dist/cropper.min.js"></script>
  <script src="assets/libs/sortablejs/Sortable.min.js"></script>
  <script src="assets/libs/jquery-nestable/jquery.nestable.js"></script>
  <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
  <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.min.js"></script>
  <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
  <script src="assets/libs/%40claviska/jquery-minicolors/jquery.minicolors.min.js"></script>
  <script src="assets/libs/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
  <script src="assets/libs/datatables.net-rowgroup/js/dataTables.rowGroup.min.js"></script>
  <script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
  <script src="assets/libs/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="assets/libs/daterangepicker/moment.min.js"></script>
  <script src="assets/libs/daterangepicker/daterangepicker.js"></script>
  <script src="assets/libs/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
  <script src="assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  <script src="assets/libs/jvectormap-next/jquery-jvectormap.min.js"></script>
  <script src="assets/libs/ika.jvectormap/jquery-jvectormap-us-aea-en.js"></script>
  <script src="assets/libs/cd-jvectormap/world-mill.js"></script>
  <script src="assets/libs/gmaps/gmaps.min.js"></script>
  <script src="assets/libs/quill/dist/quill.min.js"></script>


  <!-- clipboard -->
  <script src="../../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>







  <!-- Theme JS -->
  <script src="assets/js/theme.min.js"></script>


</body>
</html>