<?php

$menu = "U3";

?>


<?php
 session_start();
 include("user_header.php"); 
 $STD_ID1 = $_SESSION["STD_ID"];
 $sql = "SELECT * FROM registration  WHERE $STD_ID1=STD_ID";
 $result = $conn->query($sql);
 $rows = $result->fetch_assoc();

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
        <h1>ข้อมูลการลงทะเบียน</h1>

        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางเเสดงข้อมูลนักเรียน</h3>
            </div>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">


                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="" >
                                    <thead>
                                        <tr role="row" class="info">
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ลำดับที่</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รหัสนักเรียน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อ-สกุล</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ระดับชั้นเรียน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รหัสรถ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รายละเอียด</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">zone</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ปีการศึกษา</th>                                          
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จัดการ</th>
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT *
                                        
                                        FROM registration 
                                       INNER JOIN students 
                                        on registration.STD_ID=students.STD_ID
                                        inner join detail_router on registration.BUS_ID=detail_router.BUS_ID
                                        
                                        WHERE students.STD_ID=$STD_ID1
                                        ";

                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0) {
                                          $i=1;
                                            while ($row = $result->fetch_assoc()) { ?>


                                                <tr>
                                                    <td><?php echo $i ?></td>

                                                    <td><?php echo $row["STD_ID"]; ?></td>
                                                    <td><?php echo $row["F_name"]; ?>
                                                    <?php echo $row["LNAME"]; ?></td>
                                                    <td><?php echo $row["CLASS"]; ?> ห้อง
                                                    <?php echo $row["ROOM"]; ?>
                                                  </td>
                                                    <td><?php echo $row["BUS_ID"]; ?></td>
                                                    <td><?php echo $row["place1"]; ?>
                                                    <?php echo $row["place2"]; ?>
                                                    <?php echo $row["place3"]; ?>
                                                  </td>

                                                    <td><?php echo $row["zone"]; ?></td>
                                                    <td><?php echo $row["STDY_YR"]; ?></td>
                                                    
                                                    
                                              <td>
                                             

                                                  <a class="btn btn-info btn-sm"onclick="location.href ='edit_rigis_std.php?rigis_ID=<?=$row['rigis_ID']?>';">
                                                  <i class="fas fa-pencil-alt">
                                                  </i>
                                                  Edit
                                                   </a>


                                                  <a class="btn btn-danger btn-sm"   onclick="location.href ='user_delete_rigis_std.php?rigis_ID=<?=$row['rigis_ID']?>';">
                                                  <i class="fas fa-trash"  >
                                                  </i>
                                             
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
