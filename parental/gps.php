<?php

$menu = "gps";

?>


<?php include("header.php"); $sql = "SELECT * FROM students";
$result = $conn->query($sql);?>


  <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>การติดตามรถโรงเรียน</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------ตำเเหน่งร๔โรงเรียน-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

                  
                
</div>
                                                                                                                        
                                            
                
<center>     <img src="map-icon02.jpg" >   </center>

               
<center>   <h> GPS </h>   </center>      
         

          
        

          


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
