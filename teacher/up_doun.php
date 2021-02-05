<?php

$menu = "table";

?>


<?php include("user_header1.php"); 

$BUS_ID=$_REQUEST['BUS_ID'];
$sql = "SELECT * FROM bus  WHERE $BUS_ID=BUS_ID";
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
      <br>
        <h1>ข้อมูลการลงทะเบียน</h1>

        <a  class="btn btn-info btn-sm" onclick="location.href ='user_check.php?';">
        <i > <<-back
        </i></a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางเเสดงข้อมูลนักเรียน</h3> 
              <tr><button style='margin-left:80%' class="btn btn-primary btn-lg" onclick="location.href ='table_check.php?';">
               <span class='zmdi zmdi-plus'>&nbsp;&nbsp;ข้อมูลการเช็ค</span></button></tr>&nbsp;

                                    
            </div>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                <form role="form" action="into_updoun.php"  >

                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="" >
                                    <thead>
                                        <tr role="row" class="info">
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับที่</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ปีการศึกษา</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รหัสนักเรียน</th>
                                              <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">เลขรถ</th>
                                              <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">สกุล</th>
                                          
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">รูป</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">เชค</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">บันทึก</th>
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                    <?php
                                        $sql = "SELECT * FROM students
                                          INNER JOIN  registration
                                          on  students.STD_ID=registration.STD_ID
                                   
                                        WHERE BUS_ID ='$BUS_ID'   order by registration.STDY_YR desc
                                         limit {$start} , {$perpage}";
                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0) {
                                          $i=1;
                                            while ($row = $result->fetch_assoc()) { ?>



                                                <tr>
                                                <td><?php echo $i ?><input type="hidden" name="id" value="<?php echo $i ?>"></td>
                                                <td><?php echo $row["STDY_YR"]; ?>
                                                   <td><?php echo $row["STD_ID"]; ?><input type="hidden" name="STD_ID" value="<?php echo $row["STD_ID"]; ?>"></td>
                                                   <td ><?php echo $row["BUS_ID"]; ?></td>
                                                    <td ><?php echo $row["F_name"]; ?></td>
                                                    <td><?php echo $row["LNAME"]; ?></td>
                                                    <td><img src=../P_img/<?php echo $row["P_STD"] ?> width="30" height="30"/></td>
                                                 
                                                    <td  ><label style="color: green;"><input type="checkbox" value="รับ" name="status"   >  <รับ> </label>
                                                    <label style="color: red;"><input type="checkbox" value="ส่ง" name="status"  >  <ส่ง> </label>
                                                   
                                                  </td>
                                                  <td>
                                                    <button type="submit"  class="btn btn-success form-control" onclick="return confirm('คุณต้องการบันทึกหรือไม')">บันทึก</button>
                                                    
                                              </td>
                                                  
                                                    
                                              
                                                    
                                                </tr>


                                                
                                        <?php
                                              
                                              $i++;  }
                                        }
                                        ?>

                                                
                                               
                                            


                                            



                                           
                                        </tbody>
                  </table>




                  
                </div>



                
                </form>




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
