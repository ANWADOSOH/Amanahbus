<?php

$menu = "table";

?>


<?php include("header.php"); 
$DRV_ID = $_REQUEST['DRV_ID'];
$sql = "SELECT * FROM worktimedrv
WHERE DRV_ID ='$DRV_ID' ";
$result = $conn->query($sql);?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">


      <?php
                    $sever = "localhost";
                    $user = "root";
                    $pass = "";
                    $db = "amanahbus";
                    $con = new mysqli($sever, $user, $pass, $db);
                    if ($con->connect_error) {
                        die("Connection failed :" . $con->connect_error);
                    }
                    $con->set_charset("utf8");
                    $perpage = 50;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }

                    $start = ($page - 1) * $perpage;
                    ?>


      <!-- ------------------------ค้นหา-------------------------- -->
    <?php
	ini_set('display_errors', 1);
	error_reporting(~0);
    $ID = $_REQUEST['DRV_ID'];
	$strKeyword = null;
	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
    <!-- ----------------------ค้นหา--------------------------- -->
      <br>
      <br>


     
        <a  class="btn btn-info btn-sm" onclick="location.href ='table_work_drv.php?';">
        <i > <<-back
        </i></a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">

            <?php
            $sql = "SELECT * FROM driver 
            WHERE DRV_ID ='$DRV_ID' ";   // SELECT = ดึงข้อมูล

            $query = mysqli_query($conn,$sql);

            $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

        ?>   
           <h3 class="card-title"> 
                  
            <label for="F_name" class="b"><b style="color:black">ตารางเเสดงข้อมูลเงินเดือนของ :
                <?php echo $result["DRV_ID"];?>
           <?php echo $result["D_NAME"];?></b></label> 
           <label for="LNAME" class="b">
            <?php echo $result["D_LNAME"];?> </label> <br></td>
            </div></h3>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">

                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="">
                                    <thead>
                                        <tr role="row" class="info">
                                          
                                     
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">อัตราค่าตอบเเทนต่อวัน</th>
                                          
                                          
                                           
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        $sql = "SELECT * FROM  detail_monny
                                       
                                                  where level='D'
                                            ";

                                        $result = $con->query($sql);
                                        $monny;
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                                                                                  
                                                ?>
                                                         

                                                <tr>   
                                              
                                               
                                              
                                                <?php $monny =$row["DTS_monny"]; ?>
                                                    <td><?php echo $monny ?></td>

                                                   

                                                 
                                             
                                                    
                                                </tr>


                                                
                                        <?php
                                              
                                            }
                                        }
                                        ?>

                                                
                                               



                                            



                                           
                                        </tbody>
                  </table>




<!-- --------------------------ค้นหา -->
<form name="frmSearch" method="post"action="show_work_drv.php?DRV_ID=<?php echo $ID ?>">
                            <label>ค้นหาเงินเดือน<input name="txtKeyword" type="month" id="txtKeyword"
                                    style="font-size:1em;" class=" form-control"
                                    value="<?php echo $strKeyword;?>"></label>
                                    <td>
                                    <tr><button class="btn btn-success btn-lg active" type="submit" value="Search">ค้นหา</button></tr>
                                    
              
                                   </td>
                        </form>
                        <!-- -------------------------ค้นหา -->
                        <br>
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="">
                                    <thead>
                                        <tr role="row" class="info">
                                          
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รหัสคนขับรถ</th>
                                         
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">วันที่</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">จัดการ</th>
                                            
                                        </tr>    
                                        
                                    </thead>
                                    
                                    
                                    
                                    <tbody>
                                        
                                      
                                        <?php
                                        
                                       

                                         if(isset($_POST["txtKeyword"])){
                                        $sql = "SELECT * FROM  worktimedrv
                                        INNER JOIN driver
                                        ON worktimedrv.DRV_ID = driver.DRV_ID 
                                        WHERE  date LIKE '%".$strKeyword."%'
                                        AND  driver.DRV_ID = '$ID' ";


$result = $conn->query($sql);
$i=1;
$sum = 0;
$sumday=1;

$salary=0;

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) { 
                                                
                                                $sum = $sum +$sumday; 
                                                $salary= $monny*$sum;
                                                
                                                ?>


                                                <tr>

                                                    <td><?php echo $row["DRV_ID"]; ?></td>
                                                    <td><?php echo $row["date"]; ?></td>
                                                    <td> <a class="btn btn-danger btn-sm"   onclick="location.href ='delete_work_drv.php?W_ID=<?=$row['W_ID']?>';">
                                                  <i class="fas fa-trash"  >
                                                  </i>
                                                  Delete
                                                  </a></td>

                                                    <?php  $sumday; ?>
                                                    <?php   $time = new DateTime($row["date"]);
                                                     $date1 = $time->format('d-m-Y');
                                                    ?>
                                                    <?php  $row["DRV_ID"]; ?>
                                              
                                                    
                                                </tr>


                                                
                                        <?php
                                              
                                            }
                                        }
                                        ?>

                                                
<?php
                                  } ?>    
                                            
               </tbody>
                  </table>

                  <div class="main-content" style="margin-top:2%;width:900px;margin-left:0%;">
                <div class="section__content section__content--p30">
                    <div class="col-lg-12">
                    <div class="card" style="background-color :#28a745">
                            <div class="card-header" style="background-color :#64696d">
                                <br>
                            </div>
                            <div class="card-body card-block">

                                <center>
                                    <div class="has-success form-group">
                                        <?php 
                                        if($strKeyword==""){
                                            ?>
                                            <font color="#F8F8FF" size="5"> <?php echo 0 ?></font>
                                        <br><strong>
                                            <font color="#F8F8FF">จำนวนวันทำงาน
                                        </strong></font>
                                            <?php
                                        }else {
                                         ?>
                                        <font color="#F8F8FF" size="5"> <?php echo $sum ?></font>
                                        <br><strong>
                                            <font color="#F8F8FF">จำนวนวันทำงาน
                                        </strong></font>
                                        <?php 
                                        }
                                        ?>
                                    </div>
                                </center>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content" style="margin-top:2%;width:900px;margin-left:0%;">
                <div class="section__content section__content--p30">
                    <div class="col-lg-12">
                        <div class="card" style="background-color :#28a745">
                            <div class="card-header" style="background-color :#64696d">
                                <br>
                            </div>
                            <div class="card-body card-block">
                                <center>

                                    <div class="has-success form-group">
                                        <?php 
                                        if($strKeyword==""){
                                            ?>
                                            <font color="#F8F8FF" size="5"> <?php echo 0 ?></font>
                                        <br><strong>
                                            <font color="#F8F8FF">ค่าตอบเเทนต่อวัน
                                        </strong></font>
                                            <?php
                                        }else {
                                         ?>
                                        <font color="#F8F8FF" size="5"> <?php echo $monny ?></font>
                                        <br><strong>
                                            <font color="#F8F8FF">ค่าตอบเเทนต่อวัน
                                        </strong></font>
                                        <?php 
                                        }
                                        ?>
                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content" style="margin-top:2%;width:900px;margin-left:0%;">
                <div class="section__content section__content--p30">
                    <div class="col-lg-12">
                    <div class="card" style="background-color :#28a745">
                            <div class="card-header" style="background-color :#64696d">
                                <br>
                            </div>
                            <div class="card-body card-block">

                                <center>
                                    <!-- <div class="has-success form-group">
                                        <font color="#F8F8FF" size="7"><?php// echo $salary ?></font>
                                        <br><strong>
                                            <font color="#F8F8FF">ยอดที่ได้รับ
                                        </strong></font>
                                    </div> -->
                                    <div class="has-success form-group">
                                        <?php 
                                        if($strKeyword==""){
                                            ?>
                                            <font color="#F8F8FF" size="5"> <?php echo 0 ?></font>
                                        <br><strong>
                                            <font color="#F8F8FF">ยอดรวมที่ได้รับ
                                        </strong></font>
                                            <?php
                                        }else {
                                         ?>
                                        <font color="#F8F8FF" size="5"> <?php echo $salary ?></font>
                                        <br><strong>
                                            <font color="#F8F8FF">ยอดรวมที่ได้รับ
                                        </strong></font>
                                        <?php 
                                        }
                                        ?>
                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
            </div><br>


                  
                </div>


                <div class="col-md-1">


                
                  
                </div>

              </div>

            </div>
              
          </div>

          
        

          
          <form role="form" action="intosalary_drv.php">
 



 <input type="text" class="form-control" id="inputstd_id" name="DRV_ID" value="<?php echo $DRV_ID?>" readonly placeholder="Enter ..."></label>

 <input type="text" class="form-control" id="inputstd_id" name="SALARY_NUM" value="<?php echo $salary?>" readonly placeholder="Enter ..."></label>

 <input type="month" class="form-control" id="inputstd_id" name="mon" value="<?php echo $strKeyword?>" readonly placeholder="Enter ..."></label>

 <button type="submit"  class="btn btn-success form-control" onclick="return confirm('คุณต้องการบันทึกรายการนี้หรือไม่')">จ่ายค่าตอบเเทน</button>

 
 </form>


        </div>
        <!-- /.col -->
      </div>

      

    </section>
    <!-- /.content -->

    
<?php include('footer.php'); ?>

<script>
  $(function () {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    // http://fordev22.com/
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // });
  });
</script>
  
</body>
</html>
