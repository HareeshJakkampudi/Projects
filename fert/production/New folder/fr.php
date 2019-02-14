<?php
    include("db.php");
    

if (isset($_POST['submit'])){
   
    $fetch =mysqli_query($con,"SELECT * FROM `farmer_db`ORDER BY `code` DESC LIMIT 1");
    $grn_id =mysqli_fetch_row($fetch);
    list($g,$g1)=explode("-",$grn_id[2]);
     $f=$g1+1;
     echo $f;
   $fname=$_POST['fname'];
   $code = $_POST['select']."-".$f;//$_POST['code'];
   $cno=$_POST['fpno'];
   $ext=$_POST['ExtAcs'];
   $village=$_POST['village'];
    $mandal=$_POST['mandal'];
    $district=$_POST['district'];
    echo $fname;
    echo $code;
   $sql="INSERT INTO `farmer_db`(`name`,`code`,`phno`, `ext`, `village`, `mandal`, `district`) VALUES ('$fname','$code','$cno','$ext','$village','$mandal','$district')";
    
    if(mysqli_query($con,$sql))
    {
        echo 'ho';
    }
    else{die('Could not enter data: ' . mysqli_error($con));}
}
mysqli_close($con);
?>


<html>
    <body>
<form id="demo-form2" class="form-horizontal form-label-left " data-parsley-validate  method="POST" action="fr.php">

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Name<span class="required">*</span>
                        </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="" name="fname" required="required" class="form-control col-md-7 col-xs-12" placeholder="eg:xxxx">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="">Code <span class="required">*</span>
                        </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12 input-group ">
                                                <select class="select2_single form-control " name="select">
                                                    <option></option>
                                                   <option>FGS</option>
                                                      <option>FGH</option>
                                                    <option>FGO</option>
                                                      <option>FGM</option>
                                                 </select>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                                                <input type="number" id="" name="code" required="required" class="form-control col-md-7 col-xs-12" maxlength="3">
                                            </div>
                                        </div>
                                        <div class=" item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cell N.O <span class="required">*</span>
                        </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="tel" id="" name="fpno" required="required" class="form-control col-md-7 col-xs-12" maxlength="10" placeholder="Enter Phone Number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Extent In Acres</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="" class="form-control col-md-7 col-xs-12" type="text" name="ExtAcs">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Village<span class="required">*</span>
                        </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="" name="village" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mandal <span class="required">*</span>
                        </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="" name="mandal" required="required" class="form-control col-md-7 col-xs-12" maxlength="5" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">District</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="" class="form-control col-md-7 col-xs-12" type="text" name="district">
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
                                                <button class="btn btn-primary pull-left" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-success pull-right" name="submit">Submit</button>
                                            </div>
                                        </div>

                                    </form>
</body>
</html>
