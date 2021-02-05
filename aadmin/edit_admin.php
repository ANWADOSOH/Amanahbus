
<?php

$menu = "table";

?>


<?php
 session_start();
 include("header.php"); 

 $usernames=$_REQUEST['usernames'];
 $sql = "SELECT * FROM userlogin WHERE $usernames=usernames";
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
            <h3 class="card-title">------แก้ไขข้อมูล admin-------</h3> <tr>
                <button style='margin-left:90%' class="btn btn-success btn-lg active" 
                                    onclick="location.href ='table_admin.php?';">
                                    <span class='fas fa-'>&nbsp;&nbsp; >>กลับ</span> </button></tr>&nbsp;
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>

               


                <div class="col-md-10"  >
                
                <form method="post" action="update_admin.php?ID=<?php echo $usernames; ?>" enctype="multipart/form-data" name="edit_admin.php">
      <input type="hidden" name="usernames" value="<?=$rows['usernames']?>">
                  
                    

      <div class="col-sm-6">
                    <div class="form-group">
                        <label>รหัสประจำตัว
                        <input type="text" class="form-control" id="inputstd_id"  value="<?=$rows['usernames']?>" name="user" readonly required="required" placeholder="Enter ..."></label>
                       


                      </div>
                    </div>
                    
                    <div class="col-sm-6">
                    <div class="form-group">
                         <label>ชื่อ
                        <input type="text" class="form-control" id="inputnumber" value="<?=$rows['A_name']?>"  name="name" required="required" placeholder="Enter ..."></label>
                        <label>สกุล
                        <input type="text" class="form-control" id="inputstd_id"  value="<?=$rows['A_lname']?>" name="lname" required="required" placeholder="Enter ..."></label>
                        
                    
                        

                      </div>
                    </div>


                     <div class="col-sm-6">
                    <div class="form-group">
                        
                    
                        <label>รหัสเข้าระบบ
                        <input type="text" class="form-control" id="inputnumber"  value="<?=$rows['password']?>" name="pass" required="required" placeholder="Enter ..."></label>


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
