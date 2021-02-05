
<?php
$menu = "from";
 include("header.php"); 
 ?>



 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>การลงทะเบียนรถ</h1>
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
            <h3 class="card-title">------การลงทะเบียนรถ-------</h3>

            <tr><button style='margin-left:80%' class="btn btn-success btn-lg active" 
                                    onclick="location.href ='table_bus.php?';">
                                    <span class='fas fa-bus'>&nbsp;&nbsp;ที่ลงเเล้ว</span> </button></tr>&nbsp;

          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                  <form role="form" action="intobus.php" enctype="multipart/form-data"  >
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label >ยี่ห้อรถ
                        <input type="text" class="form-control" id="inputname" name="txtbrname" required="required"  placeholder="Enter ..."></label>
                      </div>
                    </div>
                   
                    <div class="col-sm-6">
                  <div class="custom-file">

                  <label>หมายเลขรถ
                        <select type="text"class="form-control" id="inputname"required="required" name="txtBUS_ID"  >
                        <option value="" selected>--------- เลือก ---------</option>
                        <option value="01" >01</option>
                         <option value="02" >02</option> 
                         <option value="03" >03</option>
                         <option value="04" >04</option>
                         <option value="05" >05</option>
                         <option value="06" >06</option>
                         <option value="07" >07</option>
                         <option value="08" >08</option>
                         <option value="09" >09</option>
                         <option value="10" >10</option>
                         <option value="11" >11</option>
                         <option value="12" >12</option>
                         <option value="13" >13</option>
                         <option value="14" >14</option>
                         <option value="15" >15</option>
                         <option value="16" >16</option>
                         <option value="17" >17</option>
                         <option value="18" >18</option>
                         <option value="19" >19</option>
                         <option value="20" >20</option>
                         </select></label>
                         <label >หมายเลขทะเบียนรถ
                        <input type="text" class="form-control" id="inputname" name="txtrgisid" required="required"  placeholder="เลขทะเบียนเเละจังหวัด"></label>
               

                     
              <br><br>

            

                  <label >สีรถ
                        <input type="text" class="form-control" id="inputname" name="txtfclr"  required="required" placeholder="Enter ..."></label>
              

                  <label >จำนวนที่นั่ง
                        <input type="number" class="form-control" id="inputname" name="B_num"  required="required" placeholder="Enter ..."></label>
                </div>
              </div>


             
                  

                      <label for="" >รูปภาพ</label><label style="color: red;">*</label>
                      
                      <input type="file" name="P_BUS" id="p_img" class="form-control" required="required" />
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
