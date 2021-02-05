
<?php
$menu = "add";
 include("header.php"); 
 ?>



 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>ลงทะเบียนเจ้าหน้าที่</h1>
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------เพิ่มผู้ดูเเลระบบ-------</h3>
            <tr><button style='margin-left:70%' class="btn btn-success btn-lg active" 
                                    onclick="location.href ='table_admin.php?';">
                                    <span class='fas fa-user'>&nbsp;&nbsp;ดูที่ลงเเล้ว</span> </button></tr>&nbsp;

          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                  <form role="form" action="intoADMIN.php"  >
                  <div class="row">

<!-- text input -->


                    
                        
<div class="col-sm-6">
                    <div class="form-group">
                        <label>รหัสประจำตัว
                        <input type="text" class="form-control" id="inputstd_id" name="user" required="required" placeholder="Enter ..."></label>
                       


                      </div>
                    </div>
                    
                    <div class="col-sm-6">
                    <div class="form-group">
                         <label>ชื่อ
                        <input type="text" class="form-control" id="inputnumber" name="name" required="required" placeholder="Enter ..."></label>
                        <label>สกุล
                        <input type="text" class="form-control" id="inputstd_id" name="lname" required="required" placeholder="Enter ..."></label>
                        
                    
                        

                      </div>
                    </div>


                     <div class="col-sm-6">
                    <div class="form-group">
                        
                    
                        <label>รหัสเข้าระบบ
                        <input type="text" class="form-control" id="inputnumber" name="pass" required="required" placeholder="Enter ..."></label>


                      </div>
                    </div>
                    

                     
                  
                  
                   
                  
                 

                    


                    





                  <br>
                   <br>
                  
                 
                  <button type="submit"  class="btn btn-success form-control" onclick="return confirm('คุณต้องการบันทึกหรือไม')">บันทึก</button>
                   <br>
                   <br>




                  
              
              
             
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
