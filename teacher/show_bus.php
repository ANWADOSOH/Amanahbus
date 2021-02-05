
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
            include ('user_header1.php');
            $BUS_ID = $_REQUEST['BUS_ID'];

            $sql = "SELECT * 
            FROM  bus

            WHERE BUS_ID ='$BUS_ID' ";   // SELECT = ดึงข้อมูลINNER JOIN bus ON router.BUS_ID =bus.BUS_ID

            $query = mysqli_query($conn,$sql);

            $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

        ?>   
        
                  
       
            <div class="jumbotron" >
              <div class="p-3 mb-2 bg-white text-white">
              <a  class="btn btn-info btn-sm" onclick="location.href ='user_show1.php?';">
        <i > <<-back
        </i></a>
             
            <h5>  <p align="center"> : ข้อมูลรถ : </p> </h5> <br>

<center> 
            <table border="2" >
              
              
            <label><img src=../p_img/<?php echo $result["P_BUS"]; ?> width="35" height="35" class="center"></label><br>
           <label  for="BUS_ID" class="b"><b style="color:black">หมายเลขรถ : </b> 
           <?php echo $result["BUS_ID"];?> </label> <br>

           <tr><td align="center" style="width:20%;" ><label for="BRAND" class="b"><b style="color:black">ยี่ห้อ : </b>
             <?php echo $result["BRAND"];?></label> 
      
            <td align="center" style="width:20%;" ><label for="COLOR" class="b"><b style="color:black" >สี : </b> 
            <?php echo $result["COLOR"];?> </label> <br></td></tr>

            <tr><td align="center" style="width:20%;" ><label for="RIGIS_NUMBER" class="b"><b style="color:black">เลขทะเบียนรถ : </b> 
            <?php echo $result["RIGIS_NUMBER"];?> </label> <br></td>
            <td align="center" style="width:20%;" ><label for="RIGIS_NUMBER" class="b"><b style="color:black">เลขทะเบียนรถ : </b> 
            <?php echo $result["RIGIS_NUMBER"];?> </label> <br></td>
            
      
            </table></tr>

            <?php
         
            $BUS_ID = $_REQUEST['BUS_ID'];

            $sql = "SELECT * 
            FROM  router
            inner join detail_router on router.R_ID=detail_router.R_ID

            WHERE BUS_ID ='$BUS_ID' ";   // SELECT = ดึงข้อมูลINNER JOIN bus ON router.BUS_ID =bus.BUS_ID

            $query = mysqli_query($conn,$sql);

            $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

        ?>   

            <br>
           <table border="2">
           <tr><td align="center" style="width:20%;" ><br><label  class="b"><b style="color:black">เส้นทางการเดินรถ </b>  <br>
           <br><label for="place1" class="b"> <b style="color:black">ชื่อเส้นทาง : </b> 
            <?php echo $result["R_name"];?> </label> 
           <br><label for="place1" class="b"> <b style="color:black">ต้นทาง : </b> 
            <?php echo $result["place1"];?> </label> 
            <br> <label for="place2" class="b"><b style="color:black">ปลายทาง : </b> 
            <?php echo $result["place2"];?> </label> 
            <br> <label for="place3" class="b"><b style="color:black">หมายเหตุ : </b>
            <?php echo $result["place3"];?> </label> 
          
          
          </td> </tr>
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