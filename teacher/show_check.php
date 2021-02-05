
<?php

$menu = "T2";

?>


<?php  session_start();

include("user_header1.php"); 
$TCH_ID1 = $_SESSION["TCH_ID"];
$DAY=$_REQUEST['DAY'];
$sql = "SELECT * FROM   updown 
-- where updown.DAY=$DAY ";


$result = $conn->query($sql);
$rows = $result->fetch_assoc();?>


   


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
      <br><?php echo $DAY ?>
        <h1>เชคการรับส่งนักเรียน</h1>
        <a  class="btn btn-info btn-sm" onclick="location.href ='table_check.php?';">
        <i > <<-back
        </i></a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางเช็คการรับส่งนักเรียน</h3>
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
                                          
                                     
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รหัสนักเรียน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รหัสนักเรียน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รหัสนักเรียน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รหัสนักเรียน</th>
                                           
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT * FROM  updown

                                        inner join students
                                        on updown.STD_ID=students.STD_ID
                                         Inner join  registration
                                         on students.STD_ID= registration.STD_ID
                                         Inner join teacher 
                                         on registration.BUS_ID=teacher.BUS_ID
                                         
                                         where DAY='$DAY' and TCH_ID='$TCH_ID1' and teacher.BUS_ID=registration.BUS_ID
                                       
                                    
                                            ";

                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                                                                                  
                                                ?>
                                                         

                                                <tr>   
                                              
                                                <td><?php echo $row["DAY"]; ?></td>
                                                    <td><?php echo $row["STD_ID"]; ?></td>
                                                    <td><?php echo $row["F_name"]; ?>
                                                    <?php echo $row["LNAME"]; ?></td>
                                                    <td><?php echo $row["STATUS"]; ?></td>

                                                   

                                                 
                                             
                                                    
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
