
<?php
$menu = "from";
 include("header.php"); 
 ?>



 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>การลงทะเบียนใช้บริการรถรับ-ส่ง นักเรียน</h1>
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
                        <input type="text" class="form-control" id="inputname" name="txtfname"  required="required"
                             placeholder="Enter ..."></label>
                      <label for="inputlasname" >สกุล
                        <input type="text" class="form-control" id="inputlname" name="txtlname" required="required" placeholder="Enter ..."></label>
                      
                      </div>
                      
                    </div>
                    

                     
                    <div class="col-sm-6">
                    <div class="form-group">
                       <label>รหัสนักเรียน
                        <input type="text" class="form-control" id="inputstd_id" name="txtstd_id" required="required" placeholder="Enter ..."></label>
                        <label>เลขประจำตัวประชาชน
                        <input type="text" class="form-control" id="inputnumber" name="txtid_number" required="required" placeholder="Enter ..."></label>
                      </div>
                    </div>
                    
                    
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>อายุ
                        <input type="text" class="form-control" id="inputname" name="txtage" required="required" placeholder="...อายุ(ปี)..."></label>
                      <label>เพศ
                        <select type="text"class="form-control" id="inputname" required="required"name="txtsex"  >
                      
                        <option required="required" value="" selected>--------- เลือก ---------</option>
                         <option value="ชาย" >ชาย</option>
                        <option value="หญิง" >หญิง</option>
                        
                      </select></label>
                    </div>
                       </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>วันเกิด</label>
                        <input type="date" class="form-control" id="inputname" name="txtb_day" required="required" placeholder="...(ว/ด/ป) ...">
                      </div>
                    </div>

                   
                    

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>เบอร์โทรตัวเอง</label>
                        <input type="text" class="form-control"  id="inputphone" name="txtphone" required="required" placeholder="...ถ้ามี...">
                      </div>
                    </div>

                   


                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>โรคประจำตัว</label>
                        <input type="text" class="form-control" id="inputsex" name="txtdisease"  placeholder="...ถ้ามี...">
                      </div>
                    </div>

                    
                    

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>ที่อยู่</label>
                        <input type="text" class="form-control" id="inputaddress" name="txtaddres" required="required" placeholder="...ที่อยู่ปัจจุบัน...">
                      </div>
                    </div>

                   
                  <div class="col-sm-6">
                  <div class="custom-file">

                      <label for="" >รูปภาพ</label><label style="color: red;">*</label>
                      
                      <input type="file" name="p_img" id="p_img" class="form-control" />
                      
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
