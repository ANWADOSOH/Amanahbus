<?php

$menu = "table";

?>


<?php include("header.php"); $sql = "SELECT * FROM students";
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
                                          
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รหัสนักเรียน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">สกุล</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">รูป</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 25%;">จัดการ</th>
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT * FROM students limit {$start} , {$perpage}";
                                        $result = $con->query($sql);

                                        if ($result->num_rows > -1) {
                                            while ($row = $result->fetch_assoc()) { ?>


                                                <tr>
                                                    <td><?php echo $row["STD_ID"]; ?></td>
                                                    <td><?php echo $row["F_name"]; ?></td>
                                                    <td><?php echo $row["LNAME"]; ?></td>
                                                    <td><img src="<?php echo $row["P_STD"] ?>" width="30" height="30"/></td>
                                                    
                                                    
                                              <td>
                                              <a class="btn btn-info btn-sm"onclick="location.href ='form_rigister_std.php?STD_ID=<?=$row['STD_ID']?>';">
                                                  <i class="fas fa-pencil-alt">
                                                  </i>
                                                  ลงทะเบียนใช้บริการ
                                                   </a>

                                                  <a class="btn btn-primary btn-sm" onclick="location.href ='show_student.php?STD_ID=<?=$row['STD_ID']?>';">
                                                  <i class="fas fa-folder">
                                                  </i>
                                                  View
                                                   </a>

                                                  <a class="btn btn-info btn-sm"onclick="location.href ='edit_student.php?STD_ID=<?=$row['STD_ID']?>';">
                                                  <i class="fas fa-pencil-alt">
                                                  </i>
                                                  Edit
                                                   </a>


                                                  <a class="btn btn-danger btn-sm"   onclick="location.href ='delete_student.php?STD_ID=<?=$row['STD_ID']?>';">
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
