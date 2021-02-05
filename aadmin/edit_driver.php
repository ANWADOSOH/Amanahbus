
<?php

$menu = "table";

?>
<?php

 session_start();
 include("header.php"); 

 $DRV_ID=$_REQUEST['DRV_ID'];
 $sql = "SELECT * FROM driver  WHERE $DRV_ID=DRV_ID";
 $result = $conn->query($sql);
 $rows = $result->fetch_assoc();
 ?>




 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>งานทะเบียน</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------แก้ไขข้อมูลการลงทะเบียนของคนขับรถ-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                <form method="post" action="update_driver.php?ID=<?php echo $DRV_ID; ?>"enctype="multipart/form-data" name="edit_driver.php">
      <input type="hidden" name="DRV_ID" value="<?=$rows['DRV_ID']?>">
                  <div class="row">
                    
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>รหัสคนขับรถ
                        <input type="text" class="form-control" id="inputstd_id" name="DRV_ID" value="<?=$rows['DRV_ID']?>" placeholder="Enter ..."></label>

                        <label>หมายเลขรถ<label style="color: red;">*</label> <select autocomplete="off" type="text" id="inputIsValid " name="BUS_ID" autocomplete="off"
                        class="form-control" required>
                        <option selected><?=$rows['BUS_ID']?></option>
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
                        <label >ชื่อ
                        <input type="text" class="form-control" id="inputname" name="F_NAME"  value="<?=$rows['D_NAME']?>" placeholder="Enter ..."></label>
                      <label for="inputlasname" >สกุล
                        <input type="text" class="form-control" id="inputlname" name="LNAME" value="<?=$rows['D_LNAME']?>" placeholder="Enter ..."></label>
                    </div>
                    
                    </div>

                   

                    

                  
  
                     
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>เลขประจำตัวประชาชน
                        <input type="text" class="form-control" id="inputnumber" name="ID_NUMBER" value="<?=$rows['ID_NUMBER']?>" placeholder="Enter ..."></label>
                      <label>เลขใบขับขี่
                        <input type="text" class="form-control" id="inputnumber" name="LICEN_ID" value="<?=$rows['LICEN_ID']?>" placeholder="Enter ..."></div></label>
                    </div>

                   
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>วันเกิด</label>
                        <input type="date" class="form-control" id="inputbday" value="<?=$rows['B_DAY']?>"name="B_DAY"  placeholder="...(ว/ด/ป) ...">
                      </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>อายุ</label>
                        <input type="text" class="form-control" id="inputage" name="AGE" value="<?=$rows['AGE']?>" placeholder="...อายุ(ปี)...">
                      </div>
                       </div>

                       <div class="col-sm-6">
                    <div class="form-group">
                        <label>เพศ</label>
                        <select type="text" class="form-control " id="inputsex" name="SEX"  >
                        <option selected><?=$rows['SEX']?></option>
                        <option value="ชาย">ชาย</option>
                        <option value="หญิง" >หญิง</option>
                        
                      </select>
                      </div>
                    </div>


         

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>เบอร์โทรตัวเอง</label>
                        <input type="text" class="form-control"  id="inputphone" name="PHONE" value="<?=$rows['PHONE']?>" placeholder="...ถ้ามี...">
                      </div>
                    </div>

                   

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>ที่อยู่</label>
                        <input type="text" class="form-control" id="inputaddress"  name="ADDRES" value="<?=$rows['ADDRES']?>" placeholder="...ที่อยู่ปัจจุบัน...">
                      </div>
                    </div>

                    
                    <br>
<div class="form-group">
          <div class="col-sm-12">
            <p> รูปภาพ </p>
            <img src="../p_img/<?php echo $rows['P_DRV'];?>" width="100px">
  
            <br>
            <br>
            <input type="file" name="P_DRV" id="P_DRV" class="form-control" />
           
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
             <input type="hidden" name="DRV_ID" value="<?php echo $DRV_ID; ?>" />
             <input type="hidden" name="img2" value="<?=$rows['P_DRV']?>" />
                      
                      
                     
                </div>
              </div>
                 
              </div>
                  <br>
                   <br>
                  
                 
                  <button type="submit"  class="btn btn-success form-control" onclick="return confirm('คุณต้องการบันทึกการเเก้ไขนี้หรือไม')">บันทึก</button>
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
