<?php

$menu = "U6";

?>


<?php  session_start();
 include("user_header.php"); 
 $STD_ID1 = $_SESSION["STD_ID"];
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
         
             
              
                                   
<br>
      </div><!-- /.container-fluid -->
      
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางเเสดงข้อมูลค่าบริการ</h3>
               <tr><button style='margin-left:80%' class="btn btn-primary btn-lg" onclick="location.href ='table_cost_user.php?';">
               <span class='zmdi zmdi-plus'>&nbsp;&nbsp;ที่ชำระเเล้ว</span></button></tr>&nbsp;
              
             
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
                                    
                                   
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="">
                                    <thead>
                                        <tr role="row" class="info">
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ลำดับที่</th>
                                              <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ปีการศึกษา</th>
                                              <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ประจำเดือน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รหัสนักเรียน</th>
                                           <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อ-สกุล</th>
                                           <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">รถหมายเลข</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">zone</th>
                                           
                                            
                                             
                                             <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">จำนวนวัน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">จำนวนเงิน(บาท)</th>
                                         
                                   
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT *
                                        FROM registration
                                        INNER JOIN monny ON registration.STDY_YR=monny.STDY_YR 
                                        INNER JOIN students ON registration.STD_ID=students.STD_ID 
                                        
                                        WHERE registration.STD_ID=$STD_ID1
                                        ORDER BY monny.STDY_YR desc
                                        ";
                                        $result = $con->query($sql);


                                       
                               
                                   
                                        if ($result->num_rows > 0) {
                                          $i=1;
                                            while ($row = $result->fetch_assoc()) { 

 
                  
                                              
                                              ?>


                                                <tr>
                                                <td><?php echo $i ?></td>
                                                 <td><?php echo $row["STDY_YR"]; ?></td>
                                                 <td><?php echo $row["mon"]; ?></td>
                                                   <td><?php echo $row["STD_ID"]; ?></td>
                                             
                                                   <td><?php echo $row["F_name"]; ?>
                                                    <?php echo $row["LNAME"]; ?></td>
                                                    <td> <?php echo $row["BUS_ID"]; ?></td>
                                                          <td><?php echo $row["zone"]; ?></td>
                                                          
                                                       
                                                      
                                                         <td><?php echo $row["day"]; ?></td>
                                                      <td><?php echo $monny*$row["day"]*$row["zone"];?></td>
                                                   
                                                    
                                                    
                                                    
                                                    
                                                </tr>


                                                
                                        <?php
                                              
                                          $i++;  }
                                        }
                                        ?>

                                                
                                               
                                            


                                            



                                           
                                        </tbody>
                  </table>




                  
                </div>


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
