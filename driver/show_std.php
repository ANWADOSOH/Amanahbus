
<?php

$menu = "table";

?>


<!DOCTYPE html>
<html lang="en">
<head>

  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
 
    </head>
    
    <style>

    .b{color:darkgreen;}

    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100px;
    height: 100px;
    }   
    .text-center {
    text-align: center;
    }
    </style>

    <body>
        




    <?php
            include ('user_header2.php');
            $BUS_ID = $_REQUEST['BUS_ID'];

            $sql = "SELECT * 
            FROM  bus

            WHERE BUS_ID ='$BUS_ID' ";   // SELECT = ดึงข้อมูลINNER JOIN bus ON router.BUS_ID =bus.BUS_ID

            $query = mysqli_query($conn,$sql);

            $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

        ?>   
        
                 
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








       
            <div class="jumbotron" >
              <div class="p-3 mb-2 bg-white text-white">
              <tr><button class="btn btn-success btn-lg active" onclick="location.href ='user_show2.php?';">
        <span class='fas fa-reply'>&nbsp;&nbsp;ย้อนกลับ</span></button></tr>
             
           





          
       <br>
       <br>
       <h4>== นักเรียนที่ลงทะเบียนใช้บริการ ==</h4>
          <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="">
                                 
          <thead><?php echo $BUS_ID ?>
                                        <tr role="row" class="info">
                                          
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รหัสนักเรียน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">เลขรถ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อ-สกุล</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">เพศ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">กำลังศึกษา</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ปีการศึกษา</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ที่อยู่</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">เบอร์โทร</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 1%;">รูป</th>
                                         
                                        </tr>    
                                        
                                    </thead>
 
                                    <tbody>
                                        
                                      
                                    <?php
                                        $sql = "SELECT * FROM students
                                          INNER JOIN  registration
                                          on  students.STD_ID=registration.STD_ID
                                      
                                        WHERE BUS_ID ='$BUS_ID'
                                         limit {$start} , {$perpage}";
                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) { ?>


                                                <tr>
                                                    <td><?php echo $row["STD_ID"]; ?></td>
                                                    <td><?php echo $row["BUS_ID"]; ?></td>
                                                    <td><?php echo $row["F_name"]; ?> 
                                                    <?php echo $row["LNAME"]; ?> </td>
                                                    <td><?php echo $row["SEX"]; ?></td>
                                                    <td><?php echo $row["CLASS"]; ?> ห้อง 
                                                    <?php echo$row["ROOM"]; ?></td>
                                                    <td><?php echo $row["STDY_YR"]; ?></td>
                                                    <td><?php echo $row["ADDRES"]; ?></td>
                                                    <td><?php echo $row["PHONE"]; ?></td>
                                                    <td><img src=../p_img/<?php echo $row["P_STD"] ?> width="25" height="25"/></td>

                                                    
                                             
                                                    
                                                </tr>


                                                
                                        <?php
                                              
                                            }
                                        }
                                        ?>

                                                
                                               
                                            


                                            



                                           
                                        </tbody>
                  </table>

            </div>
        </div>  
   






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