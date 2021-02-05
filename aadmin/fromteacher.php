
<?php
$menu = "from";
 include("header.php"); 
 ?>



 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>การลงทะเบียนครูประจำรถ</h1>

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
            <h3 class="card-title">------การลงทะเบียนครูประ0eรถ-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                  <form role="form" action="intoteacher.php" enctype="multipart/form-data"  >
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label >ชื่อ
                        <input type="text" class="form-control" id="inputname" name="txtfname" required="required"  placeholder="Enter ..."></label>
                      <label for="inputlasname" >สกุล
                        <input type="text" class="form-control" id="inputlname" name="txtlname" required="required" placeholder="Enter ..."></label>
                    </div>
                    </div>
   
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>รหัสครูประรถ
                        <input type="text" class="form-control" id="inputstd_id" name="txttch_id" required="required" placeholder="Enter ..."></label>
                        <label>หมายเลขรถ<label style="color: red;">*</label> <select autocomplete="off" type="text" id="inputIsValid " name="txtBUS_ID" autocomplete="off"
                        class="form-control" required>
                                            <option value="" selected disabled hidden>--------เลือก---------</option>
                                            <?php
                                         $sql = "SELECT * FROM bus
                                         inner join detail_router on bus.BUS_ID= detail_router.BUS_ID
                                         inner join router on detail_router.R_ID=router.R_ID
                                         ";

                                          $result = $conn->query($sql);
                                         if ($result->num_rows > 0) {
                                          while($row = $result->fetch_assoc()) {
                                 ?>
                                        <option value="<?php echo $row["BUS_ID"] ?>"><?php echo $row["BUS_ID"] ?>|| <?php echo $row["R_name"] ?> || <?php echo $row["place1"] ?> >> <?php echo $row["place2"] ?> >> <?php echo $row["place3"] ?>  </option>
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
                        <label>อายุ
                        <input type="text" class="form-control" id="inputname" name="txtage" required="required" placeholder=".อายุ(ปี)."></label>
                      <label>เพศ
                        <select type="text"class="form-control" id="inputname" required="required" name="txtsex"  >
                      
                        <option value="" selected>--------- เลือก ---------</option>
                         <option value="ชาย" >              ชาย          </option>
                        <option value="หญิง" >              หญิง          </option>
                        
                      </select></label>
                    </div>
                       </div>

                    
                     
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>เลขประจำตัวประชาชน</label>
                        <input type="text" class="form-control" id="inputnumber" name="txtid_number" required="required" placeholder="Enter ...">
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
                        <label>เบอร์โทร</label>
                        <input type="text" class="form-control"  id="inputphone" name="txtphone" required="required" placeholder="...ถ้ามี...">
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
                      <input type="file" name="P_CTH" id="p_img" class="form-control" required="required" />
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
