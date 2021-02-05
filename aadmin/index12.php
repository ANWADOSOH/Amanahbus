<?php

$menu = "index12";

?>


<?php include("header.php"); $sql = "SELECT * FROM bus";
$result = $conn->query($sql);?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">



      
      <br>
      <br>
      <center>  <h1>ตรวจสอบการเข้างานเเละเงินเดือน</h1></center>
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
            <a class='fas fa-address-book' href="table_work_tch.php" >
              >>> ครูประจำรถ
            </a>
            </li>
            <li class="nav-item">
            <a class='fas fa-address-book'href="table_work_drv.php" >
              >>> คนขับรถ
            </a>

            <li class="nav-item">
            <a class='fas fa-address-book'href="table_slr_tch.php" >
              >>> ดูการชำระของครู
            </a>
            <li class="nav-item">
            <a class='fas fa-address-book'href="table_slr_drv.php" >
              >>> ดูการชำระของคนขับรถ
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
