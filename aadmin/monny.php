<?php

$menu = "table";

?>


<?php include("header.php"); $sql = "SELECT * FROM monny";
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
      <a  class="btn btn-info btn-sm" onclick="location.href ='index8.php?';">
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
                                                    <td>   <h4> (( อัตราค่าบริการต่อวัน <?php echo $monny ?> บาท))</h4> </td>
  
                                                     
  
                                                   
                                               
                                                      
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
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ลำดับ</th>
                                           <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ว/ด/ป</th>
                                           <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ปีการศึกษา</th>
                                           <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ประจำเดือน</th>
                                           
                                           
                                            
                                            
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">จำนวนวัน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวนเงิน zone 1</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวนเงิน zone 2</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวนเงิน zone 3</th>
                                       
                                          
                                             <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">จัดการ</th>
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                    <?php
                                        $sql = "SELECT *
                                        FROM monny
                                        order by date desc
                                        
                                         limit {$start} , {$perpage}";
                                        $result = $con->query($sql);

                                        if ($result->num_rows > -1) {
                                        $i=1;
                                            while ($row = $result->fetch_assoc()) { ?>

                                                <tr>
                                                    
                                                <td><?php echo $i ?></td>
                                                    <td><?php echo $row["date"]; ?></td>
                                                    <td><?php echo $row["STDY_YR"]; ?></td>
                                                    
                                                    <td><?php echo $row["mon"]; ?></td>
                                                    <td><?php echo $row["day"]; ?></td>
                                                    <td><?php echo $monny*$row["day"]*1; ?></td>
                                                    <td><?php echo $monny*$row["day"]*2;?></td>
                                                    <td><?php echo $monny*$row["day"]*3; ?></td>
                                                 
                                                
                                                    
                                                  
                                                  
                                                    
                                                    
                                              <td>
                                                  <a class="btn btn-primary btn-sm" onclick="location.href ='edit_monny.php?MNY_ID=<?=$row['MNY_ID']?>';">
                                                  <i class="fas fa-pen">
                                                  </i>
                                                  แก้ไข
                                                   </a>
                                             
                                                    
                                           
                                                  <a class="btn btn-danger btn-sm" onclick="location.href ='delete_monny.php?MNY_ID=<?=$row['MNY_ID']?>';">
                                                  <i class="fas fa-folder">
                                                  </i>
                                                  ลบ
                                                   </a>
                                              </td>
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
