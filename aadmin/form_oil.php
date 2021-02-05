<?php
$menu = "oil";
 include("header.php"); 
 


 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>ค่าใช้จ่าย</h1>
      </div><!-- /.container-fluid -->
      <a  class="btn btn-info btn-sm" onclick="location.href ='index13.php?';">
        <i > <<-back
        </i></a>
    </section>
    

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------บันทึกค่าน้ำมัน-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                  <form role="form" action="into_oil.php" enctype="multipart/form-data"  >
                  <div class="row">
                 


 
                      
                   
                     <div class="col-sm-6">
                    <div class="form-group">

                    <label>หมายเลขรถ<label style="color: red;">*</label> <select autocomplete="off" type="text" id="inputIsValid " name="txtBUS_ID" autocomplete="off"
                        class="form-control" required>
                                            <option value="" selected disabled hidden>--------เลือก---------</option>
                                            <?php
                                         $sql = "SELECT * FROM bus
                                         
                                         ";

                                          $result = $conn->query($sql);
                                         if ($result->num_rows > 0) {
                                          while($row = $result->fetch_assoc()) {
                                 ?>
                                        <option value="<?php echo $row["BUS_ID"] ?>">รถหมายเลข<?php echo $row["BUS_ID"] ?> ทะเบียน <?php echo $row["RIGIS_NUMBER"] ?> </option>
                                        <?php
                                        }
                                    } else {
                                    }
                                        ?>
                                        </select></label>
                      </div>
                     </div>

                     <div class="col-sm-6">
                      <div class="form-group">

                      <label>วันที่
                        <input type="date" class="form-control" id="inputstd_id" name="txt_date"   placeholder="Enter ..."></label>
                        
                        <label>จำนวนเงิน
                        <input type="text" class="form-control" id="inputstd_id" name="txt_monny"   placeholder="Enter ..."></label>
                          </div>
                    </div>

                <div class="col-sm-6">
                  <div class="form-group">

                      <label  >รูปภาพใบเสร็จ<label style="color: red;">*</label>
                      
                      <input type="file" id="P_oil" name="P_oil" class="form-control" required="required" />
                </div>
              </div>
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
