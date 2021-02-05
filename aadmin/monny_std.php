<?php

$menu = "table";

?>


<?php include("header.php");
 $sql = "SELECT * FROM registration ";
$result = $conn->query($sql);?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">


      <?php
                    $sever = "localhost";
                    $user = "root";
                    $pass = "";
                    $db = "amanahbus";
                    $con = new mysqli($sever, $user, $pass, $db);
                    if ($con->connect_error) {
                        die("Connection failed :" . $con->connect_error);
                    }
                    $con->set_charset("utf8");
                    $perpage = 50;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }

                    $start = ($page - 1) * $perpage;
                    ?>


      
      <br>
      <br>
        <h1>ข้อมูลค่าบริการ</h1>
      </div><!-- /.container-fluid -->
      <a  class="btn btn-info btn-sm" onclick="location.href ='index5.php?';">
        <i > <<-back
        </i></a>
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางเเสดงข้อมูลค่าบริการ</h3>
            </div>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">


              
                                        <tr role="row" class="info">
                                          
                                     
                                        
                                          
                                          
                                           
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT * FROM  detail_monny
                                       
                                                  where level='S'
                                            ";

                                        $result = $con->query($sql);
                                        $monny;
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                                                                                  
                                                ?>
                                                         

                                                <tr>   
                                              
                                               
                                              
                                                <?php $monny =$row["DTS_monny"]; ?>
                                                

                                                   

                                                 
                                             
                                                    
                                                </tr>


                                                
                                        <?php
                                              
                                            }
                                        }
                                        ?>

                                                
                                               



                                            



                                           
                                        </tbody>
                  </table>




                <form role="form" action="into_cost.php" >

                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="">
                                    <thead>
                                        <tr role="row" class="info">
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ลำดับที่</th>
                                              <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ปีการศึกษา</th>
                                              <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ประจำเดือน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รหัสนักเรียน</th>
                                           <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อ-สกุล</th>
                                           <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">รถหมายเลข</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">zone</th>
                                           
                                            
                                             
                                             <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">จำนวนวัน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">จำนวนเงิน(บาท)</th>

                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จัดการ</th>
                                            
                                   
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT *
                                        FROM registration
                                        INNER JOIN monny ON registration.STDY_YR=monny.STDY_YR 
                                        INNER JOIN students ON registration.STD_ID=students.STD_ID                                       
                                         INNER JOIN cost ON registration.STDY_YR=cost.STDY_YR 
                                         

                                        ORDER BY monny.STDY_YR desc
                                         limit {$start} , {$perpage}";
                                        $result = $con->query($sql);

                                      //  $sql2 = "SELECT *
                                      //   FROM  cost
                                      //   // INNER JOIN monny ON registration.STDY_YR=monny.STDY_YR 
                                      //   // INNER JOIN students ON registration.STD_ID=students.STD_ID                                       
                                      //   // INNER JOIN registration ON cost.STD_ID=registration.STD_ID 
                                      //   //  limit {$start} , {$perpage}";
                                      //   // $result = $con->query($sql);



                                       
                                        // $b=$row2["cost.STD_ID"];
                                        // $c=$row1["monny.mon"];
                                        // $d=$row2["cost.mon"];
                                        // $e=$row1["monny.STDY_YR"];
                                        // $f=$row2["cost.STDY_YR"];
                                       
                              //  if($a=$b and $c=$d and $e=$f   )
                                     
                              //        {
                              //                 $status = 0;}
                              //                  else {$status=1;}

                                   
                                        if ($result->num_rows > 0) {
                                          $i=1;
                                            while ($row = $result->fetch_assoc()) { 

                                         

                                             
                                              ?>


                                                <tr>
                                                <td><?php echo $i ?></td>
                                                    <td><?php echo $row["STDY_YR"]; ?></td>
                                                    <input type="hidden" name="STDY_YR" value="<?php echo $row["STDY_YR"]; ?>">
                                                    <td><?php echo $row["mon"]; ?></td>
                                                    <input type="hidden" name="mon" value="<?php echo $row["mon"]; ?>">
                                                    <td><?php echo $row["STD_ID"]; ?></td>
                                                    <input type="hidden" name="STD_ID" value="<?php echo $row["STD_ID"]; ?>">
                                                    <td><?php echo $row["F_name"]; ?>
                                                    <?php echo $row["LNAME"]; ?></td>

                                                    <td> <?php echo $row["BUS_ID"]; ?></td>

                                                    <td><?php echo $row["zone"]; ?></td>
                                                                                                                                                    
                                                    <td><?php echo $row["day"]; ?></td>

                                                    <td><?php echo $monny*$row["day"]*$row["zone"];?></td>
                                                    <input type="hidden" name="C_monny" value="<?php echo $monny*$row["day"]*$row["zone"]; ?>">
                                                   
                                                    
                                                    
                                                    <td>
                                                    <button type="submit"  class="btn btn-success form-control" onclick="return confirm('คุณต้องการบันทึกหรือไม')">ชำระ</button>
                                                    
                                              </td>

                                             
 

                                                </tr>


                                                
                                        <?php
                                              
                                              $i++;  }
                                        }
                                        ?>

                                                
                                               
                                            


                                            



                                           
                                        </tbody>
                  </table>




                  
                </div>
                </form>

                <div class="col-md-1">
                  
                </div>

              </div>

            </div>
              
          </div>

          
        

          


        </div>
        <!-- /.col -->
      </div>

      

    </section>
    <!-- /.content -->

    
<?php include('footer.php'); ?>

<script>
  $(function () {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    // http://fordev22.com/
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // });
  });
</script>
  
</body>
</html>
