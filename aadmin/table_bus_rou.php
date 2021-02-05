<?php

$menu = "bus";

?>


<?php include("header.php"); $sql = "SELECT * FROM bus";
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
        <h1>ข้อมูลการลงทะเบียน</h1>
        <a  class="btn btn-info btn-sm" onclick="location.href ='index4.php?';">
        <i > <<-back
        </i></a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางเเสดงข้อมูลรถ</h3>
             
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
                        
                          <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">รถหมายเลข</th>
                          <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">เลขทะเบียน</th>

                          <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">สี</th>
                          <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">คนขับ</th>
                          <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ครูประจำรถ</th>
                          <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">เส้นทาง</th>
                          <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวนที่นั่งเหลือ</th>
                          <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รูป</th>
                          
                          
                      </tr>    
                      
                  </thead>
                  
                  
                  
                  <tbody>
                      
                    
                      <?php
                      $sql = "SELECT * FROM bus
                      inner join driver on bus.BUS_ID=driver.BUS_ID
                      inner join teacher on driver.BUS_ID=teacher.BUS_ID
                      inner join detail_router on bus.BUS_ID=detail_router.BUS_ID
                      inner join router on detail_router.R_ID=router.R_ID
                      
                      
                      limit {$start} , {$perpage}";
                      $result = $con->query($sql);

                      if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) { ?>


                              <tr>
                                  <td><?php echo $row["BUS_ID"]; ?></td>
                                  <td><?php echo $row["RIGIS_NUMBER"]; ?></td>
                                  <td><?php echo $row["COLOR"]; ?></td>
                                  <td><?php echo $row["D_NAME"]; ?>
                                  <?php echo $row["D_LNAME"]; ?> (โทร <?php echo $row["PHONE"]; ?>)</td>
                                  <td><?php echo $row["T_NAME"]; ?>
                                  <?php echo $row["T_LNAME"]; ?> (โทร <?php echo $row["T_PHONE"]; ?>)</td>
                                  <td><?php echo $row["R_name"]; ?></td>
                                  <td><?php echo $row["B_num"]; ?></td>

                                  <td><img src=../p_img/<?php echo $row["P_BUS"] ?> width="50" height="50"/></td>
                                  
                                  
                          
                                  
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
