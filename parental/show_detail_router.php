<?php

$menu = "";

?>


<?php 
include ('user_header.php');
$R_ID = $_REQUEST['R_ID'];

$sql = "SELECT * FROM router
WHERE R_ID ='$R_ID' ";   // SELECT = ดึงข้อมูล

$query = mysqli_query($conn,$sql);

$result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>   


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
       
        <a  class="btn btn-info btn-sm" onclick="location.href ='table_N_router.php?';">
        <i > <<-back
        </i></a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 >เส้นทางหมายเลขที่ <?php echo $result["R_ID"]; ?> <?php echo $result["R_name"]; ?></h3>
             
              
              
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
                          <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายละเอียด</th>

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
                      WHERE router.R_ID ='$R_ID' 
                      
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
                                  <td> <?php echo $row["place1"]; ?> ,<?php echo $row["place2"]; ?> ,<?php echo $row["place3"]; ?> 
                                
                                </td>



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
