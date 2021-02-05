
<?php
$menu = "from";
 include("user_header.php"); 
 ?>



 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>ความคิดเห็นและข้อเสนอเเนะ</h1>
        <tr><button class="btn btn-success btn-lg active" onclick="location.href ='index10.php?';"><span class='fas fa-reply'>&nbsp;&nbsp;ย้อนกลับ</span></button></tr>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------ความคิดเห็นและข้อเสนอเเนะ-------</h3>
            
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                  <form role="form" action="into_feedback_user.php"  >


                  <div class="col-sm-6">
                  <div class="custom-file">

                 
           
                 
       
                   
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
                                        </select>
                         <label>ปีการศึกษา<label style="color: red;">*</label>
                        <input type="text" class="form-control" id="inputaddress"   name="STDY_YR"required="required" 
                        placeholder="ปีการศึกษาที่ต้องการลงทะเบียน"></label>
              </div> </div>
<br>
<br>                
              

              <div class="col-sm-6">
                  <div class="custom-file">
                    <label>ระดับความพึ่งใจ
                        <select type="text"class="form-control" id="inputname" required="required" name="level"  >
                        <option value="" selected>--------- เลือก ---------</option>
                        <option value="มากที่สุด" >มากที่สุด</option>
                         <option value="มาก" >มาก</option> 
                         <option value="ปากลาง" >ปานกลาง</option>
                         <option value="น้อย" >น้อย</option>
                         <option value="น้อยมาก" >น้อยมาก</option>
                        
                         </select></label>

                 
                         <br>

                         <label> ข้อเสนอแนะหรือความคิดเห็นเพิ่มเติม </label>
           <textarea  cols="80" rows="3" id="es_complain" name="txtfeedback" class="form-control"></textarea>
                <br />
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
