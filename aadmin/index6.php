<?php

$menu = "index6";

?>


<?php include("hederSTD.php"); 


$sql = "SELECT * FROM students";
$result = $conn->query($sql);?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">



      
      <br>
      <br>
      <center>  <h1>การลงทะเบียน</h1></center>
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
            <a href="user_fromstudent.php" >
              >>> นักเรียน
            </a>
          </li>

          <li class="nav-item">
            <a href="user_fromteacher.php" >
              >>> ครุประจำรถ
            </a>
          </li>


          <li class="nav-item">
            <a href="user_fromdriver.php" >
              >>> คนขับรถ
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
