<?php

$menu = "table";

?>


<?php include("header.php"); $sql = "SELECT * FROM salary";
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
        <h1>ค่าตอบเเทนครูประจำรถ</h1>
        
       <a  class="btn btn-info btn-sm" onclick="location.href ='index12.php?';">
        <i > <<-back
        </i></a>
                                               
                                                   

                                                   
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3  class="card-title">ข้อมูลค่าตอบเเทนที่ชำระเเล้ว</h3>
              
            </div>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">


                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="">
                                    <thead>
                                        <tr role="row" class="info">
                                          
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ลำดับ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รหัสการชำระ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รหัสประตัว</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ชื่อ-สกุล</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ประจำเดือน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">วันที่ชำระ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวนเงิน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">จัดการ</th>
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT * FROM salary
                                        inner join teacher on salary.TCH_ID=teacher.TCH_ID
                                      
                                        limit {$start} , {$perpage}";
                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0) {
                                          $i=1;
                                            while ($row = $result->fetch_assoc()) { ?>


                                                <tr>
                                                  <td><?php echo $i; ?></td>
                                                  <td><?php echo $row["SLR_ID"]; ?></td>
                                                    <td><?php echo $row["TCH_ID"]; ?></td>
                                                    <td><?php echo $row["T_NAME"]; ?>
                                                    <?php echo $row["T_LNAME"]; ?></td>
                                                    <td><?php echo $row["mon"]; ?></td>
                                                    <td><?php echo $row["S_date"]; ?></td>
                                                    <td><?php echo $row["SALARY_NUM"]; ?></td>
                                      
                                                    
                                                    
                                              <td>
            
                                              <a class="btn btn-danger btn-sm" onclick="location.href ='delete_slr_tch.php?SLR_ID=<?=$row['SLR_ID']?>';">
                                                  <i class="fas fa-trash"  >
                                                  </i>
                                                  
                                                  </a>
                                                
                                                  
                                              </td>
                                                    
                                                </tr>


                                                
                                        <?php
                                              
                                         $i++;   }
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
