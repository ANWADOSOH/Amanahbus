
<?php

$menu = "table";

?>


<?php
 session_start();
 include("header.php"); 

 $R_ID=$_REQUEST['R_ID'];
 $sql = "SELECT * FROM router 
  WHERE $R_ID=R_ID";
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
                
                <form method="post" action="update_router.php?ID=<?php echo $R_ID; ?>" name="edit_router.php">
      <input type="hidden" name="R_ID" value="<?=$rows['R_ID']?>">
                  
                    


                  <div class="col-sm-6">
              
              <div class="custom-file">
              <label >รหัสเส้นทาง
                    <input type="text" class="form-control" id="inputname"value="<?=$rows['R_ID']?>" name="R_ID" readonly placeholder=""  ></label>
                   
                    <label >ชื่อเส้นทาง
                    <input type="text" class="form-control" id="inputname" value="<?=$rows['R_name']?>" name="R_name"   placeholder="ชื่อเส้นทาง"></label>
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
