<?php

$menu = "table";

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
        <h1>ข้อมูลค่าบริการที่ชำระเเล้ว</h1>
      </div><!-- /.container-fluid -->
      <tr><button class="btn btn-success btn-lg active" onclick="location.href ='monny_std_user.php?';"><span class='fas fa-reply'>&nbsp;&nbsp;ย้อนกลับ</span></button></tr>
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางเเสดงข้อมูลค่าบริการที่ชำระเเล้ว</h3>
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
                                              <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ปีการศึกษา</th>
                                              <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ประจำเดือน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รหัสนักเรียน</th>
                                           <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อ-สกุล</th>
                                           <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">รถหมายเลข</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">zone</th>
                                            
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">จำนวนเงิน(บาท)</th>
                                             <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">วันที่ชำระ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะ</th>
                                   
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT *
                                        FROM cost      
                                                                                                                                          
                                        INNER JOIN students ON cost.STD_ID=students.STD_ID 
                                       INNER JOIN registration ON students.STD_ID=registration.STD_ID and cost.STDY_YR=registration.STDY_YR 
                                        WHERE students.STD_ID=$STD_ID1";
                                        $result = $con->query($sql);


                                       
                               
                                   
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) { 

 
                  
                                              
                                              ?>


                                                <tr>
                                                    <td><?php echo $row["STDY_YR"]; ?></td>
                                                   
                                                    <td><?php echo $row["mon"]; ?></td>
                                                   
                                                    <td><?php echo $row["STD_ID"]; ?></td>
                                                    
                                                    <td><?php echo $row["F_name"]; ?>
                                                    <?php echo $row["LNAME"]; ?></td>

                                                    <td> <?php echo $row["BUS_ID"]; ?></td>

                                                    <td><?php echo $row["zone"]; ?></td>
                                                                                                                                                    
                                                   

                                                    <td><?php echo $row["MONNY"]?></td>
                                                    
                                                    <td><?php echo $row["C_date"]; ?></td>
                                                    
                                                    
                                                    <td>
                                                    <button>ชำระเเล้ว</button>
                                                    
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
