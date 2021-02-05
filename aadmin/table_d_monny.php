<?php

$menu = "table";

?>


<?php
            include ('header.php');
            $level = $_REQUEST['level'];

            $sql = "SELECT * FROM detail_monny
            WHERE level ='$level' ";   // SELECT = ดึงข้อมูล

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
        <h1>ข้อมูลการลงทะเบียน</h1>
        <a  class="btn btn-info btn-sm" onclick="location.href ='form_d_monny.php?';">
        <i > <<-back
        </i></a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ค่าตอบเเทนคนขับรถ</h3>
              
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">


                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="">
                                    <thead>
                                        <tr role="row" class="info">
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ลำดับที่</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">วันที่</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">อัตราเงิน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">จัดการ</th>
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT * FROM detail_monny
                                        where level='$level'
                                         ";
                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0) {
                                          $i=1;
                                            while ($row = $result->fetch_assoc()) { ?>


                                                <tr>
                                                <td><?php echo $i ?></td>
                                                    <td><?php echo $row["dm_date"]; ?></td>
                                                    <td><?php echo $row["DTS_monny"]; ?>
                                                   
                                                  



                                                 
                                                    
                                                    
                                              <td>
                                             

                                                  <a class="btn btn-info btn-sm"onclick="location.href ='edit_d_monny.php?DM_ID=<?=$row['DM_ID']?>';">
                                                  <i class="fas fa-pencil-alt">
                                                  </i>
                                                  Edit
                                                   </a>

                                                   <a class="btn btn-danger btn-sm" onclick="location.href ='delete_d_monny.php?DM_ID=<?=$row['DM_ID']?>';">
                                                  <i class="fas fa-trash"  >
                                                  </i>
                                                  Delete
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
