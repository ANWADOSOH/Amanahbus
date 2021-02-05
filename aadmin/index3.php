<?php

$menu = "index3";

?>


<?php include("header.php"); $sql = "SELECT * FROM students";
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
            <a class='fas fa-address-card'href="fromstudent.php" >
              >>> ลงทะเบียนนักเรียน
            </a>
          </li>


          <li class="nav-item">
            <a class='fas fa-address-card' href="fromteacher.php" >
              >>> ลงทะเบียนครูประจำรถ
            </a>
          </li>

          <li class="nav-item">
            <a class='fas fa-address-card' href="fromdriver.php" >
              >>> ลงทะเบียนคนขับรถ
            </a>
          </li>

          <li class="nav-item">
            <a class='fas fa-bus'href="frombus.php" >
              >>> ลงทะเบียนรถ
            </a>
          </li>
          
          <li class="nav-item">
            <a class='fas fa-paper-plane'href="form_router.php" >
              >>> ลงทะเบียนชื่อเส้นทาง
            </a>
          </li>

 <li class="nav-item">
            <a class='fas fa-paper-plane'href="fromeroutetravel.php" >
              >>> ลงทะเบียนเส้นทางการเดินรถ
            </a>
          </li>

          <li class="nav-item">
           <a class='fas fa-address-card'  href="table_students.php" >
              >>> ลงทะเบียนใช้บริการรถ(นักเรียน)
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
