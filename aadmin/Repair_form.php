<?php session_start();

?>
<?php



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../../images/favicon.ico" type="image/ico" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <title>FATONI STADIUM! | </title>

    <!-- Bootstrap -->
    <link href="../../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!--- Custom Theme Style ------------------------------------------------------------------------------------------->
    <link href="../../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">

          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-leaf"></i> <span>Fatoni Stadium!</span></a>

            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../../images/foot.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>WELLCOME</span>
                <h2>ADMIN</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->


             <?php
include('../bar/sidebar.php');
include('../bar/menufooter.php')
             ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->

<?php
include('../bar/navbar.php')

?>


        <!-- /top navigation -->

        <!-- page content -->
                                                       <!-- ตารางที่มี เพิ่ม ลบ แก้ไข -->
        <div class="right_col" role="main">
          <!--"" alert alert-success" อยู่ในcustom.cssบรรทัดที่ 4074 -->
          <div class="alert alert-success" role="alert">
      เพิ่มข้อมูลการการซ่อมสนาม 1
   </div>

   <!-- //<form action="Order_Meterial_insert.php" method="post"> -->

                  <form method="post" id="insert_form">
<!-- **********************************************วนการซ่อม*********************************************************************************************************** -->
										<?php
									 				 $repair_id = 0 ;
									 				 $sql1 =  mysqli_query($conn, "SELECT * FROM repair ORDER BY repair_id DESC LIMIT 1");
									 				 while($row1 = mysqli_fetch_array($sql1)){
									 				 $repair_id = $row1['repair_id'];
									 				 }
									 				 $repair_id += 1 ;
									 				 ?>
									 <label> รหัสการซ่อม </label>
									 <input type="text" name="repair_id" class="btn btn-outline-secondary" class="form-control repair_id" required value="<?php echo $repair_id; ?>"/><br><br>
<!-- **********************************************วนการซ่อม*********************************************************************************************************** -->
                    <div class="alert alert-success2" role="alert">
                        <?php
                               include('../libs/config.php');

                               $result = $conn->query("SELECT * FROM employee");
                               ?>
                               <label for="employee_id" class="lb">รหัสพนักงาน</label>
                               <input autocomplete="off" type="text" id="inputIsValid "class="btn btn-outline-secondary"  name="employee_id" class="contact-form-text" list='list2' required>
                               <?php $sql = "SELECT * FROM employee"; $result = $conn->query($sql); // while($row = $result->fetch_assoc()){ ?>
                                   <datalist id='list2'>
                                       <?php while($row = mysqli_fetch_array($result)) {?>
                                       <option value="<?php echo $row["employee_id"]?>"> <?php echo $row["employee_name"] ?> </option><?php }?>
                                   </datalist>
                               </div>


                                   <div class="alert alert-success2" role="alert">
                                        <div class="form-group">
                                          <label for="" name="date">วันที่</label>
                                          <input type="date" class="btn btn-outline-secondary" name="date">
                                        </div>
                                   </div>



                   <div class="table-repsonsive">
                    <!-- <span id="error"></span> -->
                    <table class="table table-bordered" id="item_table">
                     <tr>
                      <th>ชื่อสนาม</th>
                      <th>รายละเอียดการซ่อม</th>

                      <th><button type="button" name="add" id="add" class="btn btn-success"> + </button></th>
                     </tr>
                    </table>
                    <div align="center">
                      <input type="button" name="submit" id="submit" value="Insert" class="btn btn-primary" />
                      <a href="" class="btn btn-danger"> ยกเลิก </a>
                    </div>
                   </div>
                  </form>
                 </div>
                </body>
               </html>

               <script>
$(document).ready(function(){
  var i = 1;
  $('#add').click(function(){
    i++;
    $('#item_table').append('<tr id="row'
    +i+'"><td><select name="field_id1[]" class="form-control field_id1"><option value=""> เลือกสนาม </option><?php echo fill_unit_select_box($conn); ?></select></td>'
    +i+'" /></td><td><input type="text" name="description[]" placeholder="0" step="0" min="0" max="1000" class="form-control description" id="description'
    +i+'" /></td><td><button type="button" name="remove" id="'+i+'"class="btn btn-danger btn_remove">x</button></td></tr>');
  });


 $(document).on('click','.btn_remove',function(){
    var button_id = $(this).attr("id");
    $('#row'+button_id+'').remove();
 });

$('#submit').click(function(){
            $.ajax({
                url:"Repair_insert.php",
                method:"POST",
                data:$('#insert_form').serialize(),
                success:function(data)
                {
                    alert(data);
                    $('#insert_form')[0].reset();
                }
            });
        });

    });
</script>

<button type="submit" class="btn btn-success "<a><i class="fa fa-floppy-o" ></i>  <span ></i>บันทึก</span></button>
<a href="Repair_show.php"><button type="submit" class="btn btn-warning"<a><i class="fa fa-reply"></i>  <span ></i>ยกเลิก</span></a></button>
</div>
</div>
</div>

<!-- แทบหมยเหตุ -->
<!-- custom.css ในบรรทัดที่ 4109 ----------------------------------------------------------------------------------------------------------->



          <!-- top tiles -->

          <!-- /top tiles -->

        <!-- /page content -->

        <!-- footer content -->
        <?php
        include('../bar/footer.php')
        ?>
        <!-- /footer content -->


    <!-- jQuery -->
    <script src="../../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../../../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../../../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../../../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../../../vendors/Flot/jquery.flot.js"></script>
    <script src="../../../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../../../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../../../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../../../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../../../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../../../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../../../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../../../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../../../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../../vendors/moment/min/moment.min.js"></script>
    <script src="../../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../../build/js/custom.min.js"></script>

</form>
  </body>
</html>
<?php ?>
