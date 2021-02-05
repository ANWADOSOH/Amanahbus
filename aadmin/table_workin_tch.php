<?php

$menu = "table";

?>


<?php include("header.php"); $sql = "SELECT * FROM worktimedrv";
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
        <h1>ข้อมูลการเข้างาน</h1>

        <a  class="btn btn-info btn-sm" onclick="location.href ='index11.php?';">
        <i > <<-back
        </i></a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางเเสดงข้อมูลการเข้างานครูประจำรถ</h3>
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
                                             <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">วันที่</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รหัสประจำตัว</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ชื่อ-สกุล</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">รถหมายเลข</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">จัดการ</th>
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT * FROM worktimedrv 
                                         INNER JOIN teacher
                                         on worktimedrv.TCH_ID=teacher.TCH_ID
                                        -- INNER JOIN driver
                                        -- on worktimedrv.DRV_ID=driver.DRV_ID
                                        
                                        
                                        limit {$start} , {$perpage}";
                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) { ?>


                                                <tr>
                                                <td><?php echo $row["date"]; ?></td>
                                                    <td><?php echo $row["TCH_ID"]; ?></td>
                                                    <td><?php echo $row["T_NAME"]; ?>
                                                    <?php echo $row["T_LNAME"]; ?></td>
                                                    <td><?php echo $row["BUS_ID"]; ?></td>
                                                    
                                                    
                                                    
                                              <td>

                                                  <a class="btn btn-danger btn-sm" onclick="location.href ='delete_tch.php?TCH_ID=<?=$row['TCH_ID']?>';">
                                                  <i class="fas fa-trash"  >
                                                  </i>
                                                  Delete
                                                  </a>
                                                   
                                              </td>
                                                    
                                                </tr>


                                                
                                        <?php
                                              
                                            }
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
