
<?php
  include("db.php");
    if(isset($_POST['submit']))
    {
        $date   = $_POST['date'];
        $vendor = $_POST['vendor_id'];
        $pdname = $_POST['pdname'];
        $vno    = $_POST['vno'];
        $drname = $_POST['drivername'];
        $drno   = $_POST['driverno'];
        $wrno   = $_POST['waymentno'];
        $no_bags= $_POST['no-bags'];
        $gkgs   = $_POST['grasskgs'];
        $tkgs   = $_POST['tarekgs'];
        $nkgs   = $_POST['netkgs'];
         
        echo $date.$vendor.$pdname.$vno.$drname.$drno.$wrno.$no_bags.$gkgs.$tkgs.$nkgs; 

        $sql  ="INSERT INTO `raw_mp`(`date`,`product_name`,`vendor_id`,`vehicleno`,`driver_name`,`driver_no`,`wayment_no`,`no_bags`,`gross_kgs`,`tare_kgs`,`net_kgs`)VALUES('$date','$vendor','$pdname','$vno','$drname','$drno','$wrno','$no_bags','$gkgs','$tkgs','$nkgs')";
        if(mysqli_query($con,$sql))
        {
          echo "<script>alert('data Inserted')</script>";
        }
        else{
          echo "data not inserted".mysqli_error($con);;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="rw.php">
                       <div class="col-md-4 col-sm-4 col-xs-12 form-group form-label-top ">
                               <label class="control-label" for="">Date <span class="required">*</span>
                        </label>
                        <div class='input-group date' id='myDatepicker'>
                          <input type='text' class="form-control" placeholder="DD.MM.YYYY" required="required" name="date" >
                          <span class="input-group-addon  ">
                             <span class=""><i class="fa fa-calendar" aria-hidden="true"></i></span>
                          </span>
                        </div>
                         </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 form-group form-label-top">
                            <label class="control-label " for="">Vendor_ID <span class="required">*</span>
                        </label>
                        <input type="text" class="form-control " id="inputSuccess2" placeholder="Enter Vendor ID" required="required" name="vendor_id">
                      </div>
                         <div class="col-md-4 col-sm-4 col-xs-12 form-group form-label-top">
                            <label class="control-label " for="">Product Name <span class="required">*</span>
                        </label>
                        <input type="text" class="form-control" id="inputSuccess2" placeholder="Enter Product Name" required="required" name="pdname">
                        </div>&nbsp;
                        <div class="ln_solid"></div>
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Vehicle N.O <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="" required="required" class="form-control col-md-7 col-xs-12" placeholder="eg:xxxx" name="vno">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Driver Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="" name="drivername" required="required" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Driver N.O <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="" name="driverno" required="required" class="form-control col-md-7 col-xs-12" maxlength="10"  placeholder="Enter Phone Number"  >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Wayment receiptNo</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="" class="form-control col-md-7 col-xs-12" type="text" name="waymentno" required="required">
                        </div>
                      </div>
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">N.O of Bags<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="" name="no-bags" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Gross_kgs <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="" name="grasskgs" required="required" class="form-control col-md-7 col-xs-12" maxlength="5"  placeholder=""  >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Tare_kgs</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="" class="form-control col-md-7 col-xs-12" type="text" name="tarekgs" required="required">
                        </div>
                      </div>
                         <div class="form-group">
                        <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Net_kgs</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="" class="form-control col-md-7 col-xs-12" type="text" name="netkgs">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button class="btn btn-primary pull-left" type="reset">ClearForm</button>
                          <button type="submit" class="btn btn-success pull-right" name="submit">Submit</button>
                        </div>
                      </div>

                    </form>
</body>
</html>