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
    <title>Society Registration Form</title>
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
                        <h3 class="text-themecolor">Society Registration Form</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Society Registration Form</li>
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
                    
                    <div class="card card-block">
                            <h3 class="card-title"><b><i>New Society Registration</b></i></h3></b></h3>
                            <form class="form-horizontal m-t-40">
                                <div class="form-group">
                                    <label>Registration Number <span class="text-danger">* </span></label>
                                    <input type="text" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>Name of Society <span class="text-danger">* </span></label>
                                    <input type="text" class="form-control">
                                </div>
                                 <div class="form-group">
                                     <label>PanCard of Society <span class="text-danger">* </span></label>
                                    <input class="form-control" type="text" name="" placeholder="AAABB9999A" pattern="[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}" title="Please enter valid PAN number. E.g. AAABB9999A" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email of Society<span class="text-danger">* </span></label>
                                    <input type="email" id="" name="" class="form-control" placeholder="example@abc.com">
                                </div>
                                 <div class="form-group">
                                    <label>Address of Society <span class="text-danger">* </span></label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                                </div>

<span>No. OF Members</span>
<select id="num_of_owners">
    <option value="0">Select One</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<br>
<div id="mem1" style="display: none">
    Passport Number:
    <input type="text" id="txtPassportNumber" />
</div>
<div id="mem2" style="display: none">
    Passport Number:
    <input type="text" id="txtPassportNumber" />
    <br>
    <input type="text" id="txtPassportNumber" />
</div>
<div id="mem3" style="display: none">
    Passport Number:
    <input type="text" id="txtPassportNumber" /><br>
    <input type="text" id="txtPassportNumber" /><br>
    <input type="text" id="txtPassportNumber" /><br>
</div>
<div id="mem4" style="display: none">
    Passport Number:
    <input type="text" id="txtPassportNumber" /><br>
    <input type="text" id="txtPassportNumber" /><br>
    <input type="text" id="txtPassportNumber" /><br>
    <input type="text" id="txtPassportNumber" /><br>
</div>
<div id="mem5" style="display: none">
    Passport Number:
    <input type="text" id="txtPassportNumber" /><br>
    <input type="text" id="txtPassportNumber" /><br>
    <input type="text" id="txtPassportNumber" /><br>
    <input type="text" id="txtPassportNumber" /><br>
    <input type="text" id="txtPassportNumber" /><br>
</div>



                            </form>
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#num_of_owners").change(function () 
        {
            if ($(this).val() == "1") 
            {
                $("#mem1").show();
            }
             else if ($(this).val() == "2") 
            {
                $("#mem2").show();
            }
            else if ($(this).val() == "3") 
            {
                $("#mem3").show();
            }
            else if ($(this).val() == "4") 
            {
                $("#mem4").show();
            }
            else if ($(this).val() == "5") 
            {
                $("#mem5").show();
            }
            
            else  
            {
                $("#mem1").hide();
            }
        });
    });
</script>

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>