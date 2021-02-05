<?php

$menu = "add";

?>


<?php include("header.php"); $sql = "SELECT * FROM userlogin";
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
        
        </i></a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางเเสดงข้อมูลรถ</h3> 
              <tr><button style='margin-left:70%' class="btn btn-success btn-lg active" 
                                    onclick="location.href ='formADMIN.php?';">
                                    <span class='fas fa-user'>&nbsp;&nbsp;+เพิ่ม</span> </button></tr>&nbsp;
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
                                          
                                           
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ชื่อ-สกุล</th>
                                       
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">username</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">password</th>

                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">จัดการ</th>
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT * FROM userlogin 
                                        
                                        
                                        limit {$start} , {$perpage}";
                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) { ?>


                                                <tr>
                                                      <td><?php echo $row["A_name"]; ?>
                                                      <?php echo $row["A_lname"]; ?></td>
                                                      <td><?php echo $row["usernames"]; ?></td>
                                                      <td><?php echo $row["password"]; ?></td>
                                                    
                                                    
                                                    
                                              <td>
                                             
                                                   <a class="btn btn-info btn-sm"onclick="location.href ='edit_admin.php?usernames=<?=$row['usernames']?>';">
                                                  <i class="fas fa-pencil-alt">
                                                  </i>
                                                  Edit
                                                   </a>

                                                  <a class="btn btn-danger btn-sm"   onclick=" location.href = 'delete_admin.php?usernames=<?=$row['usernames']?>';">
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
