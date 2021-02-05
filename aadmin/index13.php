<?php

$menu = "oil";

?>


<?php include("header.php"); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">



      
      <br>
      <br>
      <center>  <h1>ข้อมูลทางการประเมิน</h1></center>
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
            <a class='fab fa-wpforms'href="form_oil.php" >
              >>> บันทึกค่าใช้จ่าย
            </a>
            </li>
            <li class="nav-item">
            <a class='fab fa-wpforms'href="table_oil.php" >
              >>> เเสดงค่าใช้จ่าย
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
