

<?php

$menu = "table";

?>

<?php
 session_start();
 include("user_header1.php"); 

 $TCH_ID=$_SESSION["TCH_ID"];
 $sql = "SELECT * FROM teacher  WHERE $TCH_ID=TCH_ID";
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
            <h3 class="card-title">------แก้ไขข้อมูลการลงทะเบียนของครูประจำรถ-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                <form method="post" action="update_show_tch.php?ID=<?php echo $TCH_ID; ?>" enctype="multipart/form-data"name="edit_show_tch.php">
      <input type="hidden" name="TCH_ID" value="<?=$rows['TCH_ID']?>">
                  
      
      
                   <div class="row">
                    <div class="col-sm-6"><!-- text input -->
                      <div class="form-group">
                        <label >ชื่อ
                        <input type="text" class="form-control" id="inputname" name="F_NAME"  value="<?=$rows['F_NAME']?>" placeholder="Enter ..."></label>
                      <label for="inputlasname" >สกุล
                        <input type="text" class="form-control" id="inputlname" name="LNAME" value="<?=$rows['LNAME']?>" placeholder="Enter ..."></label>
                    </div>
                    </div>

                   
                   
   
                   
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>รหัสครูประจำรถ
                        <input type="text" class="form-control" id="inputstd_id" name="TCH_ID" value="<?=$rows['TCH_ID']?>" placeholder="Enter ..."></label>
                      
                        <label>ประจำรถหมายเลข
                        <select type="text"class="form-control" id="inputname" name="BUS_ID"  >
                        <option selected><?=$rows['BUS_ID']?></option>
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
                        <input type="date" class="form-control" id="inputbday" value="<?=$rows['B_DAY']?>" name="B_DAY" placeholder="...(ว/ด/ป) ...">
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
                  <div class="col-sm-6">
                  <div class="custom-file">

                  <p> รูปภาพ </p>
            <img src="../p_img/<?php echo $rows['P_TCH'];?>" width="100px">
  
            <br>
            <br>
            <input type="file" name="P_TCH" id="P_TCH" class="form-control" />
           
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
             <input type="hidden" name="TCH_ID" value="<?php echo $TCH_ID; ?>" />
             <input type="hidden" name="img2" value="<?=$rows['P_TCH']?>" />
                      
                     
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
