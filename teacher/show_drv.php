
<?php

$menu = "T1";

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
            include ('user_header1.php');
            $BUS_ID = $_REQUEST['BUS_ID'];

            $sql = "SELECT * 
            FROM  driver

            WHERE BUS_ID ='$BUS_ID' ";   // SELECT = ดึงข้อมูลINNER JOIN bus ON router.BUS_ID =bus.BUS_ID

            $query = mysqli_query($conn,$sql);

            $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

        ?>   
             
                
            <div class="jumbotron" >
              <div class="p-3 mb-2 bg-white text-white">
              
               
              <tr><button class="btn btn-success btn-lg active" onclick="location.href ='user_show1.php?';">
        <span class='fas fa-reply'>&nbsp;&nbsp;ย้อนกลับ</span></button></tr>
             
            <h5>  <p align="center"> : ข้อมูลส่วนตัว : </p> </h5> <br>

<center>   <font size="4">
            <table style="background-color:darkgrey" border="2"  >
              
      
              
            <label><img src=../p_img/<?php echo $result["P_DRV"]; ?> width="35" height="35" class="center"></label><br>


          <tr><br> <td align="center" style="width:25%;" ><br><label  for="DRV_ID" class="b"><b style="color:black">รหัสคนขับรถ : </b> 
           <?php echo $result["DRV_ID"];?> </label> <br></tr>
           <td align="center" style="width:20%;" ><label  for="BUS_ID" class="b"><b style="color:black">หมายเลขรถ : </b> 
           <?php echo $result["BUS_ID"];?> </label> <br></tr>

           <tr><td align="center" style="width:20%;" ><label for="F_name" class="b"><b style="color:black">ชื่อ-สกุล : </b>
             <?php echo $result["D_NAME"];?></label> 
           <label for="LNAME" class="b">
            <?php echo $result["D_LNAME"];?> </label> <br></td></tr>
            <td align="center" style="width:20%;" ><label for="SEX" class="b"><b style="color:black" >เพศ : </b> 
            <?php echo $result["SEX"];?> </label> <br></td></tr>

            
            <tr><td align="center" style="width:20%;" ><label for="LICEN_ID" class="b"><b style="color:black">เลขใบขับขี่ : </b> 
            <?php echo $result["LICEN_ID"];?> </label> <br></td></tr>
           <td align="center" style="width:20%;" ><label for="AGE" class="b"><b style="color:black">อายุ : </b>
             <?php echo $result["AGE"];?> </label> <br></td></tr>

              
            <tr><td align="center" style="width:20%;" ><label for="PHONE" class="b"><b style="color:black">เบอร์ติดต่อ :</b>
             <?php echo $result["PHONE"];?> </label> <br><br></td></tr>
             
      
            </table>
            <br>
            
            <tr><button class="btn btn-success btn-lg active" onclick="location.href ='edit_show_DRV.php?';">
           <span >&nbsp;&nbsp;แก้ไข</span></button></tr>
          </center>  
            
            

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