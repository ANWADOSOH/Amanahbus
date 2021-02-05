<?php
$menu = "monny";
 include("header.php"); 
 





$DM_ID=$_REQUEST['DM_ID'];
$sql = "SELECT * FROM detail_monny  WHERE $DM_ID=DM_ID";

 $result = $conn->query($sql);
 $rows = $result->fetch_assoc();



 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>ข้อมูลทางการเงิน</h1>
        <tr><button style='margin-left:80%' class="btn btn-success btn-lg active" 
                                     onclick="location.href ='table_d_monny.php?level=<?=$rows['level']?>';">
                                    <span class='fas fa-'>&nbsp;&nbsp;ยกเลิก</span> </button>&nbsp;

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
                
                <form method="post" action="update_d_monny.php?ID=<?php echo $DM_ID; ?>" name="edit_d_monny.php">
      <input type="hidden" name="DM_ID" value="<?=$rows['DM_ID']?>">
                  <div class="row">

                  <div class="col-sm-6">

<div class="form-group">
  




<label for="inputlasname" >ประเภท
  <input type="text" class="form-control" id="inputlname"value= "<?php echo $rows["level"]; ?>" name="level"  required="required" placeholder="..."></label>
                      
                         <label for="inputlasname" >จำนวนเงิน
  <input type="text" class="form-control" id="inputlname" value="<?php echo $rows["DTS_monny"];?>" name="monny"  required="required" placeholder="..."></label>
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
