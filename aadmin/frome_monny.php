<?php
$menu = "monny";
 include("header.php"); 
 


 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>ข้อมูลทางการเงิน</h1>
      </div><!-- /.container-fluid -->
      <a  class="btn btn-info btn-sm" onclick="location.href ='index8.php?';">
        <i > <<-back
        </i></a>
    </section>
    

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------จัดการค่าบริการเเต่ละเดือน-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                  <form role="form" action="into_monny.php"  >
                  <div class="row">
                  <div class="col-sm-6">

<div class="form-group">
  



                        
                        <label>ประจำเดือน
                        <select type="text"class="form-control" id="inputname" required="required"name="mon"  >
                        <option value="" selected>--------- เลือก ---------</option>
                        <option value="มกราคม" >มกราคม</option>
                         <option value="กุมภาพันธ์" >กุมภาพันธ์</option> 
                         <option value="มีนาคม" >มีนาคม</option>
                         <option value="เมษายน" >เมษายน</option>
                         <option value="พฤษภาคม">พฤษภาคม</option>
                         <option value="มิถุนายน" >มิถุนายน</option>
                         <option value="กรกฎาคม" >กรกฎาคม</option>
                         <option value="สิงหาคม" >สิงหาคม</option>
                         <option value="กันยายน" >กันยายน</option>
                         <option value="ตุลาคม " >ตุลาคม</option>
                         <option value="พฤศจิกายน" >พฤศจิกายน</option>
                         <option value="ธันวาคม" >ธันวาคม</option>
                         </select></label>


                      
                      
                         <label for="inputlasname" >จำนวนวัน
  <input type="text" class="form-control" id="inputlname" name="day"  required="required" placeholder="..."></label>
                      </div>
                      
                    </div>
                      
                      <label for="inputlasname" >ปีการศึกษา
  <input type="text" class="form-control" id="inputlname" name="STDY_YR"  required="required" placeholder="..."></label>
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
