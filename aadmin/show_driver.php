
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
            include ('header.php');
            $DRV_ID = $_REQUEST['DRV_ID'];

            $sql = "SELECT * FROM driver
            WHERE DRV_ID ='$DRV_ID' ";   // SELECT = ดึงข้อมูล

            $query = mysqli_query($conn,$sql);

            $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

        ?>   
                
                  
                




        
       
            <div class="jumbotron" >
              <div class="p-3 mb-2 bg-white text-white">
              <a  class="btn btn-info btn-sm" onclick="location.href ='table_driver.php?';">
        <i > <<-back
        </i></a>
             
            <h5>  <p align="center"> : ข้อมูลคนขับรถ : </p> </h5> <br>

<center> 
            <table border="2" >
              
              
            <label><img src=../p_img/<?php echo $result["P_DRV"]; ?> width="35" height="35" class="center"></label><br>
           <label  for="DRV_ID" class="b"><b style="color:black">รหัสคนขับรถ : </b> 
           <?php echo $result["DRV_ID"];?> </label> <br>
           <label  for="BUS_ID"  class="b"><b style="color:black" >หมายเลขรถ : </b> 
           <?php echo $result["BUS_ID"];?> </label> <br>

           <tr><td align="center" style="width:20%;" ><label for="F_name" class="b"><b style="color:black">ชื่อ-สกุล : </b>
             <?php echo $result["D_NAME"];?></label> 
           <label for="LNAME" class="b">
            <?php echo $result["D_LNAME"];?> </label> <br></td>
            <td align="center" style="width:20%;" ><label for="SEX" class="b"><b style="color:black" >เพศ : </b> 
            <?php echo $result["SEX"];?> </label> <br></td></tr>

            <tr><td align="center" style="width:20%;" ><label for="ID_NUMBER" class="b"><b style="color:black">เลขประชาชน : </b> 
            <?php echo $result["ID_NUMBER"];?> </label> <br></td>
            <td align="center" style="width:20%;" ><label for="LICEN_ID" class="b"><b style="color:black">เลขใบขับขี่ : </b> 
            <?php echo $result["LICEN_ID"];?> </label> <br></td>
           </tr>

              <tr><td align="center" style="width:20%;" ><label for="AGE" class="b"><b style="color:black">อายุ : </b>
             <?php echo $result["AGE"];?> </label> <br></td>
             <td align="center" style="width:20%;" ><label for="B_DAY" class="b"><b style="color:black" >วันเกิด : </b>
             <?php echo $result["B_DAY"];?> </label> <br></td>
            </tr>

            <tr>  <td align="center" style="width:20%;" ><label for="ADDRES" class="b"><b style="color:black" >ที่อยู่ : </b>
             <?php echo $result["ADDRES"];?> </label> <br></td>
             <td align="center" style="width:20%;" ><label for="PHONE" class="b"><b style="color:black">เบอร์ติดต่อ :</b>
             <?php echo $result["PHONE"];?> </label> <br></td></tr>
          
     
      
            </table>
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