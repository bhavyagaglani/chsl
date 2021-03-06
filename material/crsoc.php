<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>title</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       <?php
       include 'header.php';
       ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
       include 'sidebar.php';
       ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title">Society Creation</h4>
                                  <!--  <h6 class="card-subtitle">Just add <code>form-material</code> class to the form that's it.</h6>-->
                                    <form class="form-material m-t-40">
                                        <div class="form-group">
                                            <label>Name of the Society</label>
                                            <input type="text" class="form-control form-control-line" value="Society.."> </div>
                                        <div class="form-group">
                                            <label>Registration Number of the Society</label>
                                            <input type="text" class="form-control form-control-line" value="Number.."> </div>
                                        <div class="form-group">
                                            <label>Address of the Society</label>
                                            <input type="text" class="form-control form-control-line" value="Address.."> </div>

                                        <div class="form-group">
                                            <label>Number of the Members</label>
                                            <input type="text" class="form-control form-control-line" value="Number"> </div>

                                        <div class="form-group">
                                            <label>Name of the Chairman</label>
                                            <input type="text" class="form-control form-control-line" value="Name"> </div>
                                        <div class="form-group">
                                            <label>Name of the Secretary</label>
                                            <input type="text" class="form-control form-control-line" value="Name"> </div>
                                        <div class="form-group">
                                            <label>Treasurer alongwith Telephone Number</label>
                                            <input type="text" class="form-control form-control-line" value="Number"> </div>
                                        <div class="form-group">
                                            <label for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                                            <input type="email" id="example-email2" name="example-email" class="form-control" placeholder="Email"> </div>
                                        <div class="form-group">
                                            <label>Name of the Last Auditor</label>
                                            <input type="text" class="form-control form-control-line" value="Name"> </div>
                                        <div class="form-group">
                                            <label>Audit Fees & Accounting Charges Details</label>
                                            <input type="text" class="form-control form-control-line" value="Details"> </div>
                                        <div class="form-group">
                                            <label>Rate of Simple Interest on Outstanding Dues Monthly/Quarterly/Half Yearly</label>
                                            <input type="text" class="form-control form-control-line" value="Society.."> </div>
                                        <div class="form-group">
                                            <label>Late Fees on Qutstanding Dues for 30days or 60 days.</label>
                                            <input type="text" class="form-control form-control-line" value="Society.."> </div>
                                        <div class="form-group">
                                            <label>Society Pan Card Number.</label>
                                            <input type="text" class="form-control form-control-line" value="Number"> </div>
                                        <div class="form-group">
                                          <label for="example-email">Email ID of Society</label>
                                          <input type="email" id="example-email2" name="example-email" class="form-control" placeholder="Email"> </div>
                                        <div class="form-group">
                                            <label>Name of the Bank</label>
                                            <input type="text" class="form-control form-control-line" value="Name"> </div>
                                        <div class="form-group">
                                            <label>Note in General to all the Members</label>
                                            <textarea class="form-control" rows="5"></textarea>

                                        <div class="form-group">
                                            <button type='button'>ADD</button>

                                    </form>
                                </div>
                            </div>

                          </div>
                    </div>


                    </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
            include'footer.php';
            ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
