<?php

session_start();
if (!isset($_SESSION['session_clicked'])) {
   header("Location:index.php");
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
  <title>Submit Employee Attendence</title>


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
        <a class="navbar-brand" href="../index-2.html"><img src="../assets/images/logo.png" alt=""></a>
        <div class="ml-auto" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto navbar-right-top flex-row ">
            <li class="nav-item d-none d-lg-block">
              <div id="custom-search" class="top-search-bar">
                <input class="form-control" type="text" placeholder="Search..">
              </div>
            </li>
            <li class="nav-item dropdown notification order-4 ">
              <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span
                  class="indicator"></span></a>
              <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                <li>
                  <div class="notification-title"> Notification</div>
                  <div class="notification-list">
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action active">
                        <div class="notification-info">
                          <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt=""
                              class="avatar-xs rounded-circle"></div>
                          <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy
                              Rakestraw</span>accepted your invitation to join the team.
                            <div class="notification-date">2 min ago</div>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="notification-info">
                          <div class="notification-list-user-img"><img src="../assets/images/avatar-3.jpg" alt=""
                              class="avatar-xs rounded-circle"></div>
                          <div class="notification-list-user-block"><span class="notification-list-user-name">John
                              Deo</span>is now following you
                            <div class="notification-date">2 days ago</div>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="notification-info">
                          <div class="notification-list-user-img"><img src="../assets/images/avatar-4.jpg" alt=""
                              class="avatar-xs rounded-circle"></div>
                          <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan
                              Pechi</span> is watching your main repository
                            <div class="notification-date">2 min ago</div>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="notification-info">
                          <div class="notification-list-user-img"><img src="../assets/images/avatar-5.jpg" alt=""
                              class="avatar-xs rounded-circle"></div>
                          <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica
                              Caruso</span>accepted your invitation to join the team.
                            <div class="notification-date">2 min ago</div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="list-footer"> <a href="#">View all notifications</a></div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown connection d-none d-md-block">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
              <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                <li class="connection-list">
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                      <a href="#" class="connection-item"><img src="../assets/images/github.png" alt="">
                        <span>Github</span></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                      <a href="#" class="connection-item"><img src="../assets/images/dribbble.png" alt="">
                        <span>Dribbble</span></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                      <a href="#" class="connection-item"><img src="../assets/images/dropbox.png" alt="">
                        <span>Dropbox</span></a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                      <a href="#" class="connection-item"><img src="../assets/images/bitbucket.png" alt="">
                        <span>Bitbucket</span></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                      <a href="#" class="connection-item"><img src="../assets/images/mail_chimp.png"
                          alt=""><span>Mail chimp</span></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                      <a href="#" class="connection-item"><img src="../assets/images/slack.png" alt="">
                        <span>Slack</span></a>
                    </div>
                  </div>
                </li>
                <li class="connection-footer">
                  <div><a href="#">More</a></div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown nav-user order-lg-4 ">
              <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt=""
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
    <!-- ============================================================== -->
    <!-- Top header default -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <?php
   include "common/sidebar.php"; 
   ?>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
      <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <h2 class="pageheader-title">Data Tables</h2>
              <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                vestibulum mi. Morbi lobortis pulvinar quam.</p>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- ============================================================== -->
          <!-- basic table  -->
          <!-- ============================================================== -->
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card shadow-sm mb-5">
            	<div class="row">
            	<div class="col-sm-6">
              <h5 class="card-header">Submit Attendence</h5>
          </div>
          <div class="col-sm-6 card-header" style="margin: -10px 0px 0px -13px;padding: 12px;">
          	 <input type="date" name="gdate" id="gdate" onchange="<?php echo $_SERVER['PHP_SELF'] ?>" style="float: right;"/>
          </div>
      </div>
       <div id="showresult">

    </div>
              <div class="card-body">
               
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- end basic table  -->
          <!-- ============================================================== -->
        </div>
        
      </div>
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <div class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              2024 © Influence - Designed and Developed by<a href="https://themeforest.net/user/jitu/portfolio"
                target="_blank" class="ml-1">Jituchuahan</a>.
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
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
        function makeAjaxRequest(dateval) {
            $.ajax({
                type: "GET",
                data: {dateva: dateval},
                url: "fetchbills.php",
                success: function (data) {
                    $('#showresult').html(data);
                    $('#det').on("click", function () {
                        var no = $(this).val();
                        makeAjaxRequest2(no);
                    });
                }
            });
        }
        
        $("#gdate").on("change", function () {
            var id = $(this).val();
            makeAjaxRequest(id);

        });
    </script>
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
  <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>







  <!-- Theme JS -->
  <script src="assets/js/theme.min.js"></script>


</body>
</html>