<?php
$menu = "monny";
 include("header.php"); 
 





$MNY_ID=$_REQUEST['MNY_ID'];
$sql = "SELECT * FROM monny  WHERE $MNY_ID=MNY_ID";

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
            <h3 class="card-title">------ค่าบริการของรถ-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                <form method="post" action="update_monny.php?ID=<?php echo $MNY_ID; ?>" name="edit_monny.php">
      <input type="hidden" name="MNY_ID" value="<?=$rows['MNY_ID']?>">
                  <div class="row">

                  <div class="col-sm-6">

<div class="form-group">
  



                         <label for="inputlasname" >เดือน
  <input type="text" class="form-control" id="inputlname"value="<?=$rows['mon']?>" name="mon"  required="required"readonly placeholder="..."></label>
                      
                         <label for="inputlasname" >จำนวนวัน
  <input type="text" class="form-control" id="inputlname"value="<?=$rows['day']?>" name="day"  required="required" placeholder="..."></label>
                      </div>
                      
                    </div>
                      
                      <label for="inputlasname" >ปีการศึกษา
  <input type="text" class="form-control" id="inputlname"value="<?=$rows['STDY_YR']?>" name="STDY_YR"  readonly required="required" placeholder="..."></label>
                      </div>
                      
                    </div>

                





                  
                 
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
