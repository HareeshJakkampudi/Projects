<?php 
  include("db.php");
    include("session.php");
  if(isset($_POST['submit']))
  {
    $vid=$_POST['Vendor_ID'];
    $pname=$_POST['Product_name'];
    $units=$_POST['Units'];
    $qty=$_POST['qty'];

   $sql  ="INSERT INTO `m_purchase`(`productname`,`vendorname`,`units`,`quantity`)VALUES('$pname','$vid','$units','$qty')";
        if(mysqli_query($con,$sql))
        {
          echo "<script>alert('data Inserted');</script>";
              
        }
        else{
          echo "<script>alert('check your input details')</script>";

        }
        mysqli_close($con);
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fertile </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
       <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                         <a href="index3" class="site_title text-center"> <span style="font-size: 1.5em;">Fertile</span><i class="fa fa-feather-alt "></i></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/user.png" alt="..." class="img-circle profile_img">

            </div>
            <div class="profile_info">
              <span>WELCOME</span>
                          <h2><b><?php echo strtoupper($user); ?></b></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index3">Dashboard</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> GRN Info <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="View_GRN">View_GRN</a></li>
                    <li><a href="creategrn">Create_GRN</a></li>
                    <li><a href="approve_GRN">Approve_GRN</a></li>
                   <!-- <li><a href="enterinputs.html">Enter Inputs</a></li>
                      <li><a href="paymentauthorization.html">Payment Authorization</a></li>-->
                  </ul>
                </li>
               
                <li><a href="miscellaneous"><i class="fa fa-table"></i> Miscellaneous Item Purchase <span class="fa fa-chevron-down"></span></a>
                </li>
                <li><a href="vieworder"><i class="fa fa-bar-chart-o"></i> View_Order <span class="fa fa-chevron-down"></span></a>
                </li>
               
              </ul>
                        </div>
                        <div class="menu_section">
                            <h3>DATABASE</h3>
                            <ul class="nav side-menu">
                                <li><a href="farmer"><i class="fa fa-bug"></i> Vendor_DB <span class="fa fa-chevron-down"></span></a>
                                </li>
                                <li><a href="product"><i class="fa fa-windows"></i> Product_DB <span class="fa fa-chevron-down"></span></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                    
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="...">
                    <?php echo $user; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                
                                    <li><a href="logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <!--<li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                                    </li>
                                    <li>
                                        <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                                    </li>
                                    <li>
                                        <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                                    </li>
                                    <li>
                                        <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>-->
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

      <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
          <div class="page-title ">
            <div class="title_left">
              <h3>Miscellaneous</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title ">
                  <h2>Miscellaneous Item Purchase</h2>
                  <ul class="nav pull-right ">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                 <div class="x_content">
                    <br />
                 <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="miscellaneous.php">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group form-label-top">
                                        <label class="control-label " for="">Vendor_ID <span class="required">*</span>
                        </label>
                                        <input type="text" class="form-control "  name="Vendor_ID" placeholder="Enter Vendor ID" required="required">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group form-label-top">
                                        <label class="control-label " for="">Product Name <span class="required">*</span>
                        </label>
                                        <input type="text" class="form-control" name="Product_name" placeholder="Enter Product Name" required="required">
                                    </div>&nbsp;
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Units<span class="required">*</span>
                                       </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                           <select class="select2_single form-control" name="Units">
                                                   <option> Select Units </option>
                                                   <option>Number</option>
                                                   <option>Bags</option>
                                                   <option>kgs</option>
                                                   <option>Tons</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Quantity<span class="required">*</span>
                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="" name="qty" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary pull-left" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success pull-right" name="submit">Submit</button>
                                        </div>
                                    </div>

                                </form>

                  </div>
            </div>
          </div>
        </div><br><br><br><br><br>&nbsp;<br><br>&nbsp;<br>&nbsp;
      <!-- /page content -->

      <!-- footer content -->
          <footer class="navbar-default navbar-fixed-bottom">
  <div class="container-fluid">
    <span>Fertile</span>
  </div>
              
</footer>
            <!-- /footer content -->
    </div>
  </div>
      <!-- /page content -->

      <!-- footer content -->
            <footer class="navbar-default navbar-fixed-bottom">
  <div class="container-fluid">
    <span>Fertile</span>
  </div>
              
</footer>
      <!-- /footer content -->
    </div>
  </div>
 <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="../vendors/moment/min/moment.min.js"></script>
  <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap-wysiwyg -->
  <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
  <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
  <script src="../vendors/google-code-prettify/src/prettify.js"></script>
  <!-- jQuery Tags Input -->
  <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
  <!-- Switchery -->
  <script src="../vendors/switchery/dist/switchery.min.js"></script>
  <!-- Select2 -->
  <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
  <!-- Parsley -->
  <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
  <!-- Autosize -->
  <script src="../vendors/autosize/dist/autosize.min.js"></script>
  <!-- jQuery autocomplete -->
  <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
  <!-- starrr -->
  <script src="../vendors/starrr/dist/starrr.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
  <!-- bootstrap-datetimepicker -->
</body>

</html>