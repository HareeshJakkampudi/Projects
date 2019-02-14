<?php
    include("db.php");
     include("session.php");
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
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
       <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md " style="font-size: 10px;">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col  " style="position: fixed;">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                         <a href="index3.html" class="site_title"> <span>Fertile</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/user.png" alt="..." class="img-circle profile_img">

            </div>
            <div class="profile_info">
              <span>WELCOME</span>
                          <h2><?php echo $user; ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
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
            <div class="top_nav navbar-fixed-top ">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right ">
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
              <!--/top navigation-->
      <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
          <div class="page-title ">
            <div class="title_left">
              <h3>GRN Info</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title ">
                  <h2>View GRN</h2>
                  <ul class="nav pull-right ">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                 <div class="x_content">
                    <br />
                      

<form id="demo-form2" class="form-horizontal form-label-left" method="POST" action="View_GRN" name="f1">
                                   <div class=" item col-md-3 col-sm-3 col-xs-12 form-group form-label-top ">
                               <label class="control-label" for=""> From <span class="required">*</span>
                        </label>
                        <div class=' input-group date' id='myDatepicker'>
                          <input type='text' class="form-control" placeholder="DD.MM.YYYY" required="required" name="date" onblur="showHint(this.value)" id="a">
                          <span class="input-group-addon">
                             <span class=""><i class="fa fa-calendar" aria-hidden="true"></i></span>
                          </span>
                        </div>
                         </div>
                                     <div class=" item col-md-3 col-sm-3 col-xs-12 form-group form-label-top ">
                               <label class="control-label" for=""> To <span class="required">*</span>
                        </label>
                        <div class=' input-group date' id='myDatepicker1'>
                          <input type='text' class="form-control" placeholder="DD.MM.YYYY" required="required" name="date1" id="b" onblur="local()">
                          <span class="input-group-addon" >
                             <span class=""><i class="fa fa-calendar" aria-hidden="true"></i></span>
                          </span>
                        </div>
                         </div>
                                    <div class=" item col-md-3 col-sm-3 col-xs-12 form-group form-label-top">
                            <label class="control-label " for="">Farmer_ID <span class="required">*</span>
                        </label>
                        <input type="text" class="form-control "  placeholder="Enter Farmer_ID " required="required" name="vendor" onkeyup="fetch()" id="c" onblur="fetch()">
                      </div>

                      <div class=" item col-md-3 col-sm-3 col-xs-12 form-group form-label-top">
                              <label class="control-label " for="">PRODUCT_ID </label>
                        <input type="text" class="form-control " placeholder="Enter Product_ID "  name="product" onkeyup="fet()" id="g">
                      </div>

                                    
                                     <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-3">
             <div class="ln_solid"></div>
                          <button type="submit" class="btn btn-success pull-right" name="submit">Submit</button>
                        </div>

                                </form>

                    <!--  <form id="demo-form2" class="form-horizontal form-label-left" method="POST" action="View_GRN">
                                   <div class=" item col-md-4 col-sm-4 col-xs-12 form-group  ">
                               <label class="control-label" for=""> From   </label>
                        <div class=' input-group date' id='myDatepicker'>
                          <input type='text' class="form-control" placeholder="DD.MM.YYYY"  name="date">
                          <span class="input-group-addon">
                             <span class=""><i class="fa fa-calendar" aria-hidden="true"></i></span>
                          </span>
                        </div>
                         
                                <div class=" item col-md-6 col-sm-6 col-xs-12 form-group  ">     
                               <label class="control-label" for=""> To </label>
                        <div class=' input-group date' id='myDatepicker1'>
                          <input type='text' class="form-control" placeholder="DD.MM.YYYY"  name="date1" >
                          <span class="input-group-addon" >
                             <span class=""><i class="fa fa-calendar" aria-hidden="true"></i></span>
                          </span>
                        </div>
                         </div>
                         <div  class="col-md-4 col-sm-4 col-xs-12 form-group form-label-top">
                            <label class="control-label " for="">VENDOR_ID   </label>
                        <input type="text" class="form-control " id="inputSuccess2" placeholder="Enter Vendor_ID "  name="vendor">
                      </div>
					  <div class="col-md-4 col-sm-4 col-xs-12 form-group form-label-top">
                            <label class="control-label " for="">PRODUCT_ID </label>
                        <input type="text" class="form-control " id="inputSuccess2" placeholder="Enter Product_ID "  name="product">
                      </div>

                                     <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-3">
						 
                          <button type="submit" class="btn btn-success pull-right" name="submit">Submit</button>
                        </div>
</div>
                                </form>-->

  
                  </div>
            </div>
          </div>
        </div><br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title ">
                  <h2>View GRN</h2>
                  <ul class="nav pull-right ">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                 <div class="x_content">
                    <br>
                    <div class="table-responsive">
                      <span id="txtHint"></span></p>

                     <!--<table class="table table-striped " >
                        <thead class="thead bg-primary">
                             <tr>
                              <th scope="col">Sno</th>
                              <th scope="col">Date</th>
                              <th scope="col">GRN_No</th>
                              <th scope="col">Product_ID</th>
                              <th scope="col">Vendor_ID</th>
                              <th scope="col">Netkgs</th>
							                <th scope="col"> Approval Status </th>
                    
                             </tr>
                          </thead>
                        <tbody>
                          <?php

                             if(isset($_POST['submit']))
                            {
                              $d = $_POST['date'];
                              $date   = date('Y-m-d',strtotime($d));
                              $d1  =$_POST['date1'];
                              $date1  =date('Y-m-d',strtotime($d1));
							                $product = $_POST['product'];
                              $farmer =$_POST['vendor'];
                              $sql ="SELECT * FROM `create_grn` WHERE farmer_id ='$farm
                              er' AND product_id ='$product' AND date1 BETWEEN '$date' AND '$date1'";
                              $result=mysqli_query($con,$sql);
       

    

                          if($result)
                          {
                          $count=1;
                          while( $row =mysqli_fetch_assoc($result))
                                {
                            ?>    
                                  <tr>
                                      <td><?php echo $count++ ; ?></td>
                                      <td><?php echo $row['date1'] ; ?></td>
                                      <td><?php echo "GRN".$row['grn_id'] ; ?></td>
                                      <td><?php echo $row['product_id'] ; ?></td>
                                      <td><?php echo $row['farmer_id'] ; ?></td>
                                      <td><?php echo $row['net_kgs'] ; ?></td>
                                      <?php if($row['status']=="InComplete"){?>
                                      <td><a href="#" class="badge badge-pill bg-red"  ><?php echo $row['status'];  ?></a></td>
                                        <?php } else  {?>
                                            <td><a href="#" class="badge badge-pill bg-green"  ><?php echo $row['status'];  ?></a></td>
                                        <?php } ?>


                                  </tr>




                               <!--   echo "<tr>";
                                        echo "<th scope='row'>1</th>";
                                        echo"<td>";echo $row['farmer_id'];echo"</td>";
                                 echo"</tr>";
                            <?php
                                }
                                  
                                }
                                echo "<script type='text/javascript'>alert('check message: $farmer :- $date''); window.location.href='View_GRN.php';</script>";
                              }
                            ?>
                          </tbody>

                        </table>-->
                        </div>

  
                  </div>
            </div>
          </div>
        </div><br><br><br><br>&nbsp;<br><br>&nbsp;<br>&nbsp;<br>&nbsp;&nbsp;<br>&nbsp
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
  <!-- Parsley
  <script src="../vendors/parsleyjs/dist/parsley.min.js"></script> -->
  <!-- Autosize -->
  <script src="../vendors/autosize/dist/autosize.min.js"></script>
  <!-- jQuery autocomplete -->
  <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
  <!-- starrr -->
  <script src="../vendors/starrr/dist/starrr.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
  <!-- bootstrap-datetimepicker -->
  <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <script>
    $('#myDatepicker').datetimepicker({
        format: 'DD.MM.YYYY'
    });
  </script>
   <script>
    $('#myDatepicker1').datetimepicker({
        format: 'DD.MM.YYYY'
    });
  </script>
  <script>
    function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "test2.php?q=" + str, true);
        xmlhttp.send();
    }
}
function local()
{
              var a=document.f1.a.value; 
               var b=document.f1.b.value;
               var url="test3.php?a="+a+"&b="+b+"";
            var u;
            if(window.XMLHttpRequest)
            {
                u=new XMLHttpRequest();
            }
             else
             {
                 u=new ActiveXObject("Microsoft.XMLHTTP")
        
             }
                u.onreadystatechange=function ()
                {
                    if(u.readyState==4 && u.status==200)
                    {
                        document.getElementById("txtHint").innerHTML=u.responseText;
                    }

                }
                u.open("GET",url,true);
                u.send();
}
function fetch()
{
              var a=document.f1.a.value; 
               var b=document.f1.b.value;
               var c=document.f1.c.value;
               var g=document.f1.g.value;
               var url="test4.php?a="+a+"&b="+b+"&c="+c+"&g="+g+"";
            var u;
            if(window.XMLHttpRequest)
            {
                u=new XMLHttpRequest();
            }
             else
             {
                 u=new ActiveXObject("Microsoft.XMLHTTP")
        
             }
                u.onreadystatechange=function ()
                {
                    if(u.readyState==4 && u.status==200)
                    {
                        document.getElementById("txtHint").innerHTML=u.responseText;
                    }

                }
                u.open("GET",url,true);
                u.send();
}

  </script>
  <script>
    function fet()
   {
            var a=document.f1.a.value; 
               var b=document.f1.b.value;
               var c=document.f1.c.value;
               var g=document.f1.g.value;
               var url="test1.php?a="+a+"&b="+b+"&c="+c+"&g="+g+"";
            var u;
            if(window.XMLHttpRequest)
            {
                u=new XMLHttpRequest();
            }
             else
             {
                 u=new ActiveXObject("Microsoft.XMLHTTP")
        
             }
                u.onreadystatechange=function ()
                {
                    if(u.readyState==4 && u.status==200)
                    {
                        document.getElementById("txtHint").innerHTML=u.responseText;
                    }

                }
                u.open("GET",url,true);
                u.send();
}
  </script>
</body>

</html>