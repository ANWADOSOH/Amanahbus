<?php

$menu = "index4";

?>


<?php include("header.php"); $sql = "SELECT * FROM students";
$result = $conn->query($sql);?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">



      
      <br>
      <br>
      <center>  <h1>ตารางเเสดงข้อมูล</h1></center>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-body p-1">
             <div class="row">
                
                  
                
</div>
                                                                                                              
                                            
<li class="nav-header">MENU</li>    
<font color="#F8F8FF" size="5">  

         <li class="nav-item">
            <a class='fas fa-address-book' href="table_students.php" >
              >>> เเสดงข้อมูลนักเรียน
            </a>
          </li>

          <li class="nav-item">
            <a class='fas fa-address-book' href="table_tch.php" >
              >>> เเสดงข้อมูลครูประจำรถ
            </a>
          </li>

          <li class="nav-item">
            <a class='fas fa-address-book' href="table_driver.php" >
              >>> เเสดงข้อมูลคนขับรถ
            </a>
          </li>

          <li class="nav-item">
            <a class='fas fa-bus'href="table_bus.php" >
              >>> เเสดงข้อมูลรถ
            </a>
          </li>
          <li class="nav-item">
            <a class='fas fa-bus'href="table_router.php" >
              >>> เเสดงข้อมูลรถบริการ
            </a>
          </li>

          <li class="nav-item">
            <a class='fas fa-bus' href="table_N_router.php" >
              >>> เเสดงเส้นทางการเดินรถ
            </a>
          </li>
         
          
          <li class="nav-item">
            <a class='fas fa-address-book' href="table_bus_STCD.php" >
              >>> เเสดงผู้ใช้บริการของรถแต่ละคัน
            </a>
          </li>
         
          <li class="nav-item">
            <a class='fas fa-address-book' href="table_rigis_std.php" >
              >>> เเสดงข้อมูลนักเรียนที่ลงทะเบียน
            </a>
          </li>
          </font>
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
