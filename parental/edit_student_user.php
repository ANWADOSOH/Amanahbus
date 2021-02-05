<?php

$menu = "table";

?>
<?php
 session_start();
 include("user_header.php"); 

 $STD_ID=$_SESSION["STD_ID"];
 $sql = "SELECT * FROM students  WHERE $STD_ID=STD_ID";
 $result = $conn->query($sql);
 $rows = $result->fetch_assoc();
 ?>




 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>แก้ไขข้อมูลส่วนตัว</h1>
        <tr><button class="btn btn-success btn-lg active" onclick="location.href ='user_show.php?';">
        <span class='fas fa-reply'>&nbsp;&nbsp;ย้อนกลับ</span></button></tr>
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
                
                <form method="post" action="update_student_user.php?ID=<?php echo $STD_ID; ?>" enctype="multipart/form-data" name="edit_student_user.php">
      <input type="hidden" name="STD_ID" value="<?=$rows['STD_ID']?>">
     
      <div class="row">
                    <div class="col-sm-6"><!-- text input -->
                      <div class="form-group">
                        <label>รหัสนักเรียน
                        <input type="text" class="form-control" id="inputstd_id" name="STD_ID" value="<?=$rows['STD_ID']?>" readonly placeholder="Enter ..."></label>
                     
                      </div>
                      
                    </div> 
                    
                    
                     
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label >ชื่อ
                        <input type="text" class="form-control" id="inputname" name="F_name"  value="<?=$rows['F_name']?>" placeholder="Enter ..."></label>
                      <label for="inputlasname" >สกุล
                        <input type="text" class="form-control" id="inputlname" name="LNAME" value="<?=$rows['LNAME']?>" placeholder="Enter ..."></label>
                      </div>
                    </div>
                   
                   
                  
  
                     
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>เลขประจำตัวประชาชน</label>
                        <input type="text" class="form-control" id="inputnumber" name="ID_NUMBER" value="<?=$rows['ID_NUMBER']?>" placeholder="Enter ...">
                      </div>
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
                        <label>โรคประจำตัว</label>
                        <input type="text" class="form-control" id="inputsex" name="DISEASE" value="<?=$rows['DISEASE']?>" placeholder="...ถ้ามี...">
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
            <img src="../p_img/<?php echo $rows['P_STD'];?>" width="100px">
  
            <br>
            <br>
            <input type="file" name="P_STD" id="P_STD" class="form-control" />
           
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
             <input type="hidden" name="STD_ID" value="<?php echo $STD_ID; ?>" />
             <input type="hidden" name="img2" value="<?=$rows['P_STD']?>" />
                      
                      
                     
                </div>
              </div>
                 
              
                  
                 
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
