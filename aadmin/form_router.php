
<?php
$menu = "from";
 include("header.php"); 
 ?>



 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>เส้นทางการเดินรถ</h1>

        <a  class="btn btn-info btn-sm" onclick="location.href ='index3.php?';">
        <i > <<-back
        </i></a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------รายละเอียดเส้นทางการเดินรถ-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>

                </div>
                <form role="form" action="into_router.php"  >
                 
                <div class="col-sm-6">
              
                  <div class="custom-file">
                       
                        <label >ชื่อเส้นทาง
                        <input type="text" class="form-control" id="inputname" name="router"   placeholder="ชื่อเส้นทาง"></label>
                </div>
              </div>


                
                 
       
                  <br>
                   <br>
                   <div class="col-sm-6">
                   <div class="custom-file">
                 
                  <button type="submit"  class="btn btn-success form-control" onclick="return confirm('คุณต้องการบันทึกหรือไม')">บันทึก</button>
                   <br>
                   <br>
                   </div>
                   </div>



                  
              
              
             
                <!-- /.card-footer -->
              </form>
                </div>


                <div class="col-md-1">
                  
                </div>

              </div>

            </div>
              
          </div>

          
        

          


        </div>
        <!-- /.col -->
      </div>

      

    
    <!-- /.content -->

    
<?php include('footer.php'); ?>

<script>
  $(function () {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // http://fordev22.com/
    // });
  });
</script>
  
</body>
</html>
<!-- http://fordev22.com/ -->
