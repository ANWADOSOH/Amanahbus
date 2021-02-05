
<?php

$menu = "table";

?>


<?php
 session_start();
 include("header.php"); 

 $BUS_ID=$_REQUEST['BUS_ID'];
 $sql = "SELECT * FROM bus  WHERE $BUS_ID=BUS_ID";
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
            <h3 class="card-title">------แก้ไขข้อมูลรถ-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>

               


                <div class="col-md-10"  >
                
                <form method="post" action="update_bus.php?ID=<?php echo $BUS_ID; ?>" enctype="multipart/form-data" name="edit_bus.php">
      <input type="hidden" name="BUS_ID" value="<?=$rows['BUS_ID']?>">
                  
                    

                      <!-- text input -->
                      <div class="col-sm-6">
                    <div class="form-group">

                        <label>หมายเลขรถ
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

                        <label >ยี่ห้อรถ
                        <input type="text" class="form-control" id="inputname" name="BRAND"  value="<?=$rows['BRAND']?>" placeholder="Enter ..."></label>

                        <label>หมายเลขทะเบียนรถ
                        <input type="text" class="form-control" id="inputstd_id" name="RIGIS_NUMBER" value="<?=$rows['RIGIS_NUMBER']?>" placeholder="Enter ..."></label>
                       <label>สีรถ
                        <input type="text" class="form-control" id="inputnumber" name="COLOR" value="<?=$rows['COLOR']?>" placeholder="Enter ..."></label>


                        <label>จำนวนที่นั่ง
                        <input type="text" class="form-control" id="inputnumber" name="B_num" value="<?=$rows['B_num']?>" placeholder="Enter ..."></label>
                    
                      </div>  </div>
              

                      <br>
<div class="form-group">
          <div class="col-sm-12">
            <p> รูปภาพ </p>
            <img src="../p_img/<?php echo $rows['P_BUS'];?>" width="100px">
  
            <br>
            <br>
            <input type="file" name="P_BUS" id="P_BUS" class="form-control" />
           
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
             <input type="hidden" name="BUS_ID" value="<?php echo $BUS_ID; ?>" />
             <input type="hidden" name="img2" value="<?=$rows['P_BUS']?>" />
                      
                      
                     
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
