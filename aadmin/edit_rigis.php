<?php

$menu = "table";

?>
<?php
 session_start();
 include("header.php"); 
 $rigis_ID=$_REQUEST['rigis_ID'];
 $sql = "SELECT * FROM registration 
 INNER JOIN students
 on registration.STD_ID=students.STD_ID
 WHERE $rigis_ID=rigis_ID
 ";

 $result = $conn->query($sql);
 $rows = $result->fetch_assoc();

 ?>




 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>การลงทะเบียนใช้บริการรถรับ-ส่ง นักเรียน</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------แก้ไขข้อมูลการลงทะเบียนของนักเรียน-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                <form method="post" action="update_rigis.php?ID=<?php echo $rigis_ID; ?>" name="edit_rigis.php">
      <input type="hidden" name="rigis_ID" value="<?=$rows['rigis_ID']?>">
     
      <div class="row">

                   <div class="col-sm-6"><!-- text input -->
                      <div class="form-group">
                        <label>รหัสนักเรียน
                        <input type="text" class="form-control" id="inputstd_id" name="txtstd_id" value="<?=$rows['STD_ID']?>" readonly placeholder="Enter ..."></label>
                        <label>เลขประจำตัวประชาชน
                        <input type="text" class="form-control" id="inputnumber" name="ID_NUMBER" value="<?=$rows['ID_NUMBER']?>" readonly placeholder="Enter ..."></label>
                          </div>
                    </div>


                     <div class="col-sm-6">
                    <div class="form-group">
                        <label >ชื่อ
                        <input type="text" class="form-control" id="inputname" name="F_name"  value="<?=$rows['F_name']?>" readonly placeholder="Enter ..."></label>
                      <label  >สกุล
                        <input type="text" class="form-control" id="inputlname" name="LNAME" value="<?=$rows['LNAME']?>"readonly  placeholder="Enter ..."></label>
                   
                    </div>
                    
                    </div> 

                   
                    <br>
                   <br>
                    
                    
                    <div class="col-sm-6">
                    <div class="form-group">
                         <label>ปีการศึกษาที่จะลงทะเบียนใช้บริการ<label style="color: red;">*</label>
                        <input type="text" class="form-control" id="inputaddress"   name="STDY_YR"  value="<?=$rows['STDY_YR']?>" required="required" placeholder="ปีการศึกษาที่ต้องการลงทะเบียน"></label>
                        </div>
                    
                    </div>

                    <div class="col-sm-6">
                    <div class="form-group"> 
                        
                    <label>ระดับการศึกษา<label style="color: red;">*</label>
                 
                        <select type="text"class="form-control" id="inputname"required="required" name="CLASS"  >
                        <option selected><?=$rows['CLASS']?></option>
                         <option value="อนุบาล1" >อนุบาล1</option>
                         <option value="อนุบาล2" >อนุบาล2</option> 
                         <option value="อนุบาล3" >อนุบาล3</option>
                         <option value="ป.1" >ป.1</option> 
                         <option value="ป.2" >ป.2</option>
                         <option value="ป.3" >ป.3</option> 
                         <option value="ป.4" >ป.4</option>
                         <option value="ป.5" >ป.5</option> 
                         <option value="ป.6" >ป.6</option>
                         <option value="ม.1" >ม.1</option> 
                         <option value="ม.2" >ม.2</option>
                         <option value="ม.3" >ม.3</option> 
                         <option value="ม.4" >ม.4</option>
                         <option value="ม.5" >ม.5</option> 
                         <option value="ม.6" >ม.6</option>
                         </select></label>

                         <label>ห้องที่
                         <select type="text"class="form-control" id="inputname" required="required"name="ROOM"  >
                         <option selected><?=$rows['ROOM']?></option>
                         <option value="1" >1</option>
                         <option value="2" >2</option> 
                         <option value="3" >3</option>
                         <option value="4" >4</option> 
                         <option value="5" >5</option>
                         <option value="6" >6</option> 
                         <option value="7" >7</option>
                         <option value="8" >8</option> 
                         <option value="9" >9</option>
                         <option value="10" >10</option> 
                         <option value="11" >11</option>
                         <option value="12" >12</option> 
                         <option value="13" >13</option>
                         <option value="14" >14</option> 
                         <option value="15" >15</option>
                         </select></label>

                        
                    </div>
                     </div>


                     <div class="col-sm-6">
                    <div class="form-group">

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
                                        <option value="<?php echo $row["BUS_ID"] ?>"><?php echo $row["BUS_ID"] ?>เส้นทาง <?php echo $row["R_name"] ?> || <?php echo $row["place1"] ?> >> <?php echo $row["place2"] ?> >> <?php echo $row["place3"] ?>  </option>
                                        <?php
                                        }
                                    } else {
                                    }
                                        ?>
                                        </select></label>
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
