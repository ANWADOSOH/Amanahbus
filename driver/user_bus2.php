<?php

$menu = "T3";

?>


<?php include("user_header2.php"); $sql = "SELECT * FROM bus";
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
        <h1>ข้อมูลการลงทะเบียนใช้บริการ</h1>
        <a  class="btn btn-info btn-sm" onclick="location.href ='user_home2.php?';">
        <i > <<-back
        </i></a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางเเสดงข้อมูลผู้ใช้บริการของรถแต่ละคัน</h3>
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
                                          
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รถหมายเลข</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">หมายเลขทะเบียน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">สี</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">คนขับ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ครุประจำรถ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รูป</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ผู้ใช้บริการ</th>
                                           
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT * FROM bus 
                                        inner join driver on bus.BUS_ID=driver.BUS_ID
                                        inner join teacher on bus.BUS_ID=teacher.BUS_ID
                                       
                                       ";
                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) { ?>


                                                <tr>
                                                    <td><?php echo $row["BUS_ID"]; ?></td>
                                                    <td><?php echo $row["RIGIS_NUMBER"]; ?></td>
                                                    <td><?php echo $row["COLOR"]; ?></td>
                                                    <td><?php echo $row["D_NAME"]; ?>
                                                    <?php echo $row["D_LNAME"]; ?></td>
                                                    <td><?php echo $row["F_NAME"]; ?>
                                                    <?php echo $row["LNAME"]; ?></td>
                                                    <td><img src=../p_img/<?php echo $row["P_BUS"] ?> width="35" height="35"/></td>
                                                    
                                                    <td><a class="btn btn-primary btn-sm" onclick="location.href ='show_BSTCD2.php?BUS_ID=<?=$row['BUS_ID']?>';">
                                                  <i class="fas fa-folder">
                                                  </i>
                                                  View

                                                  
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
