<?php

$menu = "D3";

?>


<?php include("user_header2.php"); $sql = "SELECT * FROM router";
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
        <h1>ข้อมูลเส้นทางเดินรถ</h1>
       
     
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางเเสดงข้อมูลเส้นทางการเดินรถ</h3>
            
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
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">รหัสเส้นทาง</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ชื่อเส้นทาง</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ดูข้อมูลรถ</th>
                                            
                                         
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT * FROM router
                                       
                                       
                                       
                                         limit {$start} , {$perpage}";
                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0) {

                                          $i=1;
                                            while ($row = $result->fetch_assoc()) { ?>


                                                <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $row["R_ID"]; ?></td>
                                                <td><?php echo $row["R_name"]; ?></td>
                                                    
                                                    
                                                <td>
                                             

                                             <a class="btn btn-info btn-sm"onclick="location.href ='show_detail_router.php?R_ID=<?=$row['R_ID']?>';">
                                            <i class="fas fa-bus">
                                            </i>
                                        ดู
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
