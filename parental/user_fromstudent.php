
<?php
$menu = "from";
 include("hederSTD.php"); 
 ?>



 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>นักเรียน</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------การลงทะเบียนของนักเรียน-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                  <form role="form" action="intostudent.php"  >
                  <div class="row">

<!-- text input -->


                    

                    
                        

                    <div class="col-sm-6">
                    <div class="form-group">
                       
                      <label >ชื่อ
                        <input type="text" class="form-control" id="inputname" name="txtfname"   placeholder="Enter ..."></label>
                      <label for="inputlasname" >สกุล
                        <input type="text" class="form-control" id="inputlname" name="txtlname"  placeholder="Enter ..."></label>
                      
                      </div>
                      
                    </div>
                    

                     
                    <div class="col-sm-6">
                    <div class="form-group">
                       <label>รหัสนักเรียน
                        <input type="text" class="form-control" id="inputstd_id" name="txtstd_id"  placeholder="Enter ..."></label>
                        <label>เลขประจำตัวประชาชน
                        <input type="text" class="form-control" id="inputnumber" name="txtid_number"  placeholder="Enter ..."></label>
                      </div>
                    </div>
                    
                    
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>อายุ
                        <input type="text" class="form-control" id="inputname" name="txtage"  placeholder="...อายุ(ปี)..."></label>
                      <label>เพศ
                        <select type="text"class="form-control" id="inputname" name="txtsex"  >
                      
                        <option value="" selected>--------- เลือก ---------</option>
                         <option value="ชาย" >ชาย</option>
                        <option value="หญิง" >หญิง</option>
                        
                      </select></label>
                    </div>
                       </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>วันเกิด</label>
                        <input type="date" class="form-control" id="inputname" name="txtb_day"  placeholder="...(ว/ด/ป) ...">
                      </div>
                    </div>

                   
                    

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>เบอร์โทรตัวเอง</label>
                        <input type="text" class="form-control"  id="inputphone" name="txtphone"  placeholder="...ถ้ามี...">
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
