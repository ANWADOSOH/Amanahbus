
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
            <tr><button style='margin-left:80%' class="btn btn-success btn-lg active" 
                                    onclick="location.href ='table_N_router.php?';">
                                    <span class='fas fa-bus'>&nbsp;&nbsp;ดูที่ลงเเล้ว</span> </button></tr>&nbsp;
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                  <form role="form" action="into_detail_router.php"  >
                  <div class="row">
                   
                   
                    <div class="col-sm-6">
                  <div class="custom-file">

                  <label>หมายเลขรถ<label style="color: red;">*</label> <select autocomplete="off" type="text" id="inputIsValid " name="BUS_ID" autocomplete="off"
                        class="form-control" required>
                                            <option value="" selected disabled hidden>--------เลือก---------</option>
                                            <?php
                                         $sql = "SELECT * FROM bus
                                      
                                         ";

                                          $result = $conn->query($sql);
                                         if ($result->num_rows > 0) {
                                          while($row = $result->fetch_assoc()) {
                                 ?>
                                        <option value="<?php echo $row["BUS_ID"] ?>">รถเลขที่ <?php echo $row["BUS_ID"] ?> ทะเบียน <?php echo $row["RIGIS_NUMBER"] ?>    </option>
                                        <?php
                                        }
                                    } else {
                                    }
                                        ?>
                                        </select></label>
                                        <label>ชื่อเส้นทาง<label style="color: red;">*</label> <select autocomplete="off" type="text" id="inputIsValid " name="R_ID" autocomplete="off"
                        class="form-control" required>
                                            <option value="" selected disabled hidden>--------เลือก---------</option>
                                            <?php
                                         $sql = "SELECT * FROM router
                                      
                                         ";

                                          $result = $conn->query($sql);
                                         if ($result->num_rows > 0) {
                                          while($row = $result->fetch_assoc()) {
                                 ?>
                                        <option value="<?php echo $row["R_ID"] ?>"><?php echo $row["R_ID"] ?> ||  <?php echo $row["R_name"] ?>  </option>
                                        <?php
                                        }
                                    } else {
                                    }
                                        ?>
                                        </select></label>
                        
                </div>
              </div>

                     
             <br><br>

              <div class="col-sm-6"><label >= รายละเอียดการเดินรถ =</label>
                  <div class="custom-file">
                        <label >ต้นทาง</label>
                        <input type="text" class="form-control" id="inputname" name="txtp1"   required="required"placeholder="ระบุถนนหรือหมู่บ้าน">
                        <label >ปลายทาง</label>
                        <input type="text" class="form-control" id="inputname" name="txtp2"  required="required" placeholder="ระบุถนนหรือหมู่บ้าน">
                        <label >หมายเหตุ</label>
                        <input type="text" class="form-control" id="inputname" name="txtp3"   placeholder="เส้นทางเพิ่มเติ่ม">
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
