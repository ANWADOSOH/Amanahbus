<?php
$menu = "monny";
 include("header.php"); 
 





$O_ID=$_REQUEST['O_ID'];
$sql = "SELECT * FROM oil  WHERE $O_ID=O_ID";

 $result = $conn->query($sql);
 $rows = $result->fetch_assoc();
 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>ข้อมูลค่าน้ำมัน</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:#e1efeb" >
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">------เเก้ไขรายละเอียดค่าน้ำมัน-------</h3>
          </div> <!-- /.card-body -->
          <div class="card-body"style="background-color:#e1efeb">

          <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">
                
                <form method="post" action="update_oil.php?ID=<?php echo $O_ID; ?>" name="edit_oil.php"enctype="multipart/form-data">
      <input type="hidden" name="O_ID" value="<?=$rows['O_ID']?>">
                  <div class="row">

                 
                    <div class="col-sm-6">
                    <div class="form-group">

                    <label>หมายเลขรถ<label style="color: red;">*</label> <select autocomplete="off" type="text" id="inputIsValid " name="BUS_ID" autocomplete="off"
                        class="form-control" required>
                        <option selected><?=$rows['BUS_ID']?></option>
                                            <?php
                                         $sql = "SELECT * FROM bus
                                         
                                         ";

                                          $result = $conn->query($sql);
                                         if ($result->num_rows > 0) {
                                          while($row = $result->fetch_assoc()) {
                                 ?>
                                        <option value="<?php echo $row["BUS_ID"] ?>"><?php echo $row["BUS_ID"] ?> </option>
                                        <?php
                                        }
                                    } else {
                                    }
                                        ?>
                                        </select></label>
                      </div>
                     </div>

                     <div class="col-sm-6">
                      <div class="form-group">

                      <label>วันที่
                        <input type="date" class="form-control" id="inputstd_id" name="txt_date"  value="<?=$rows['O_date']?>" placeholder="Enter ..."></label>
                        
                        <label>จำนวนเงิน
                        <input type="text" class="form-control" id="inputstd_id" name="txt_monny" value="<?=$rows['O_monny']?>"  placeholder="Enter ..."></label>
                          </div>
                    </div>

                <div class="col-sm-6">
                  <div class="custom-file">

                      <label for="" >รูปภาพใบเสร็จ<label style="color: red;">*</label>
                  <br>       
                  <img src="../p_img/<?php echo $rows['P_oil'];?>" width="100px">
  
            
                  <br>
                   <input type="file" name="P_oil" id="P_oil" class="form-control" />
           
                   </div>
                </div>
        <div class="form-group">
          <div class="col-sm-6">
             <input type="hidden" name="O_ID" value="<?php echo $O_ID; ?>" />
             <input type="hidden" name="img2" value="<?=$rows['P_oil']?>" />
             <br>
                </div>
              </div>
                    
                

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
