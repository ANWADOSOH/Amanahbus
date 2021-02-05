<?php
$menu = "monny";
 include("header.php"); 
 


 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>คนขับรถ</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------ลงชื่อเข้าทำงาน-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                  <form role="form" action="into_work_drv.php"  >
                  <div class="row">

                  

                    <div class="col-sm-6">
                    <div class="form-group">
                        
                        <label>รหัส/ชื่อ-สกุล</label>
                      

                        <select autocomplete="off" type="text" id="inputIsValid " name="txtdrvid" autocomplete="off"
                        class="form-control" required>
                                            <option value="" selected disabled hidden>--------เลือก---------</option>
                                            <?php
                                         $sql = "SELECT * FROM driver";
                                          $result = $conn->query($sql);
                                         if ($result->num_rows > 0) {
                                          while($row = $result->fetch_assoc()) {
                                 ?>
                                        <option value="<?php echo $row["DRV_ID"] ?>"><?php echo $row["DRV_ID"] ?>|<?php echo $row["D_NAME"] ?> 
                                            <?php echo $row["D_LNAME"] ?> </option>
                                        <?php
                                        }
                                    } else {
                                    }
                                        ?>
                                        </select>
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
 
                                                  

                    
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
