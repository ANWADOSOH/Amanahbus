<?php
$menu = "monny";
 include("header.php"); 
 





$STD_ID=$_REQUEST['STD_ID'];
$sql = "SELECT * FROM students  WHERE $STD_ID=STD_ID";

 $result = $conn->query($sql);
 $rows = $result->fetch_assoc();
 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>ข้อมูลทางการเงิน</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------ค่าตอบเเทนคนขับรถ-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                <form method="post" action="into_rigisSTD.php?ID=<?php echo $STD_ID; ?>" name="fromstudent.php">
      <input type="hidden" name="STD_ID" value="<?=$rows['STD_ID']?>">
                  <div class="row">

                  <div class="col-sm-6">

<div class="form-group">
  <label for="inputlasname" >ว/ด/ป</label>
  <input type="date" class="form-control" id="inputlname" name="DAT"  placeholder="...">
</div>
</div>
<div class="col-sm-6">

<div class="form-group">
  <label for="inputlasname" >รหัสนักเรียน</label>
  <input type="text" class="form-control" id="inputlname" name="ฆธฏ_ID" value="<?=$rows['STD_ID']?>" placeholder="...">
</div>
</div>
<div class="col-sm-6">






                     <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="inputlasname" >ปีการศึกษา</label>
                        <input type="text" class="form-control" id="inputslry" name="STDY_YR"  placeholder="ปีการศึกษา">
                      </div>
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
