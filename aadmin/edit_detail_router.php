
<?php

$menu = "table";

?>


<?php
 session_start();
 include("header.php"); 

 $ROU_ID=$_REQUEST['ROU_ID'];
 $sql = "SELECT * FROM detail_router 
 inner join router on detail_router.R_ID=router.R_ID
 inner join bus on detail_router.BUS_ID=bus.BUS_ID
  WHERE $ROU_ID=ROU_ID";
 $result = $conn->query($sql);
 $rows = $result->fetch_assoc();
 ?>



 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>เส้นทางการเดินรถ</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------แก้ไขข้อมูลเส้นทางรถ-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>

               


                <div class="col-md-10"  >
                
                <form method="post" action="update_detail_router.php?ID=<?php echo $ROU_ID; ?>" name="edit_detail_router.php">
      <input type="hidden" name="ROU_ID" value="<?=$rows['ROU_ID']?>">
                  
                    

      <div class="col-sm-6">
                  <div class="custom-file">

                  <label>หมายเลขรถ
                        <input type="text" class="form-control" id="inputstd_id"value="<?=$rows['BUS_ID']?>" name="BUS_ID"  readonly placeholder="Enter ..."></label>
                  <label>ทะเบียนรถ
                        <input type="text" class="form-control" id="inputstd_id"value="<?=$rows['RIGIS_NUMBER']?>"   readonly placeholder="Enter ..."></label>       
                                       
                        <label>ชื่อเส้นทาง<label style="color: red;">*</label> <select autocomplete="off" type="text" id="inputIsValid " name="R_ID" autocomplete="off"
                        class="form-control" required>
                        <option selected><?=$rows['R_ID']?> || <?=$rows['R_name']?></option>
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
                        <input type="text" class="form-control" id="inputname" value="<?=$rows['place1']?>"name="txtp1"   required="required"placeholder="ระบุถนนหรือหมู่บ้าน">
                        <label >ปลายทาง</label>
                        <input type="text" class="form-control" id="inputname" value="<?=$rows['place2']?>"name="txtp2"  required="required" placeholder="ระบุถนนหรือหมู่บ้าน">
                        <label >หมายเหตุ</label>
                        <input type="text" class="form-control" id="inputname" value="<?=$rows['place3']?>"name="txtp3"   placeholder="เส้นทางเพิ่มเติ่ม">
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
