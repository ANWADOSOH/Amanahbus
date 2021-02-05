<?php

$menu = "table";

?>


<?php include("header.php"); $sql = "SELECT * FROM oil";
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
        <h1>ข้อมูลค่าใช้จ่าย</h1>
        <a  class="btn btn-info btn-sm" onclick="location.href ='index13.php?';">
        <i > <<-back
        </i></a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางเเสดงค่าน้ำมัน</h3>
              <tr><button style='margin-left:70%' class="btn btn-success btn-lg active" 
                                    onclick="location.href ='form_oil.php?';">
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

                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ลำดับ</th>
                                          <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">วันที่</th>
                                          <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รถ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">จำนวนเงิน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">บิล</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">จัดการ</th>
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT * FROM  oil 
                                        inner join bus on oil.BUS_ID=bus.BUS_ID
                                        
                                        limit {$start} , {$perpage}";
                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0) {
                                          $i=1;
                                            while ($row = $result->fetch_assoc()) { ?>


                                                <tr>
                                                <td><?php echo $i; ?></td>
                                                    <td><?php echo $row["O_date"]; ?></td>
                                                    <td>หมายเลข <?php echo $row["BUS_ID"]; ?>
                                                    ทะเบียน <?php echo $row["RIGIS_NUMBER"]; ?></td>
                                                    <td><?php echo $row["O_monny"]; ?></td>
                                                    <td><img src=../p_img/<?php echo $row["P_oil"] ?> width="50" height="50"/></td>
                                                    
                                                    
                                              <td>
                                              

                                                   <a class="btn btn-info btn-sm"onclick="location.href ='edit_oil.php?O_ID=<?=$row['O_ID']?>';">
                                                  <i class="fas fa-pencil-alt">
                                                  </i>
                                                  Edit
                                                   </a>

                                                  <a class="btn btn-danger btn-sm" onclick="location.href ='delete_oil.php?O_ID=<?=$row['O_ID']?>';">
                                                  <i class="fas fa-trash"  >
                                                  </i>
                                            
                                                  </a>
                                                   
                                              </td>
                                                    
                                                </tr>


                                                
                                        <?php
                                              
                                           $i++; }
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
