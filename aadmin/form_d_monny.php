<?php
$menu = "dmonny";
 include("header.php"); 
 
 

            $T='T';
            $D='D';
            $S='S';

 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>ข้อมูลทางการเงิน</h1>
      </div><!-- /.container-fluid -->
      <tr><button style='margin-left:80%' class="btn btn-success btn-lg active" 
                                     onclick="location.href ='table_d_monny.php?level=<?=$D?>';">
                                    <span class='fas fa-user'>&nbsp;&nbsp;คนขับรถ</span> </button>&nbsp;
                                    <button style='margin-left:80%' class="btn btn-success btn-lg active" 
                                    onclick="location.href ='table_d_monny.php?level=<?=$T?>';">
                                    <span class='fas fa-user'>&nbsp;&nbsp;ครู</span> </button>&nbsp;
                                    <button style='margin-left:80%' class="btn btn-success btn-lg active" 
                                    onclick="location.href ='table_d_monny.php?level=<?=$S?>';">
                                    <span class='fas fa-user'>&nbsp;&nbsp;นักเรียน</span> </button>&nbsp;</tr>
    </section>
    

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------จัดการค่าบริการเเละค่าตอบเเทน-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                  <form role="form" action="into_d_monny.php"  >
                  <div class="row">
                  <div class="col-sm-6">

<div class="form-group">
  



                        
                        <label>ประเภท
                        <select type="text"class="form-control" id="inputname" required="required" name="level"  >
                        <option value="" selected>--------- เลือก ---------</option>
                        <option value="T" >ค่าตอบเเทนครูประจำรถ</option>
                         <option value="D" >ค่าตอบเเทนคนขับรถ</option> 
                         <option value="S" >ค่าบริการการใช้บริการรถ</option>
                        
                         </select></label>


                      
                      
                         <label for="inputlasname" >จำนวนเงิน
  <input type="text" class="form-control" id="inputlname" name="monny"  required="required" placeholder="..."></label>
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
