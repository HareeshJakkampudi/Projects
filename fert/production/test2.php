

<?php
$q = date('Y-m-d',strtotime($_REQUEST['q']));
$con = mysqli_connect('localhost','root','','erp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

 $sql="SELECT * FROM `create_grn` WHERE date1= '$q'";
$result = mysqli_query($con,$sql);   

?>
<table class="table table-striped " >
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
                                 echo"</tr>";-->
                            <?php
                                }
                                  
                                }
                                
                            ?>
                          </tbody>

 <?php
 mysqli_close($con);
?>