
<?php

$menu = "U1";

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

            session_start();
             include('user_header.php');
           
            $STD_ID1 = $_SESSION["STD_ID"];
    

            $sql = "SELECT * FROM  students
            INNER JOIN  registration on students.STD_ID=registration.STD_ID 
            inner join teacher on registration.BUS_ID=teacher.BUS_ID
            inner join driver on teacher.BUS_ID=driver.BUS_ID
            WHERE students.STD_ID ='$STD_ID1' ";   // SELECT = ดึงข้อมูล

            $query = mysqli_query($conn,$sql); 

           $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

        ?>   
                
            <div class="jumbotron" >
              <div class="p-3 mb-2 bg-white text-white">
              


                                    <tr><button style='margin-left:55%' class="btn btn-success btn-lg active" 
                                    onclick="location.href ='show_bus.php?BUS_ID=<?=$result['BUS_ID']?>';">
                                    <span class='fas fa-user'>&nbsp;&nbsp;ข้อมูลรถ</span> </button></tr>&nbsp;

                                    <tr><button formtarget="_blank"  class="btn btn-success btn-lg active"   
                                    onclick="location.href ='show_tch.php?BUS_ID=<?=$result['BUS_ID']?>';">
                                    <span class='fas fa-user'>&nbsp;&nbsp;ข้อมูลครูประจำรถ</span></button></tr>&nbsp;

                                    <tr><button  class="btn btn-success btn-lg active" 
                                    onclick="location.href ='show_drv.php?BUS_ID=<?=$result['BUS_ID']?>';">
                                    <span class='fas fa-user'>&nbsp;&nbsp;ข้อมูลคนขับรถ</span> </button></tr>&nbsp;
                                    
                                    <br><br><br>
        
       

<center>   <font size="3">
            <table style="background-color:darkgrey" border="2"  >
              
      
              
            <label><img src=../p_img/<?php echo $result["P_STD"];?> width="35" height="35" class="center"></label><br>




            <tr > <td style="width:30%;"align="center" ><br><label  for="STD_ID" class="b"><b style="color:black">รหัสนักเรียน : </b> 
           <?php echo $result["STD_ID"];?> </label> </tr>

           <tr > <td style="width:30%;"align="center" ><label  for="STD_ID" class="b"><b style="color:black">รหัสรถ : </b> 
           <?php echo $result["BUS_ID"];?> </label> </tr>
          
            

           <tr><td align="center"  ><label for="F_name" class="b"><b style="color:black">ชื่อ-สกุล : </b>
             <?php echo $result["F_name"];?></label> 
           <label for="LNAME" class="b">
            <?php echo $result["LNAME"];?> </label> <br></td></tr>
 
           <label for="LNAME" class="b">
            
            <td align="center"  ><label for="SEX" class="b"><b style="color:black" >เพศ : </b> 
            <?php echo $result["SEX"];?> </label> <br></td></tr>


            <tr><td align="center" ><label for="ID_NUMBER" class="b"><b style="color:black">เลขประชาชน : </b> 
            <?php echo $result["ID_NUMBER"];?> </label> <br></td></tr>
           <td align="center"  ><label for="AGE" class="b"><b style="color:black">อายุ : </b>
             <?php echo $result["AGE"];?> </label> <br></td></tr>

              <tr><td align="center"  ><label for="B_DAY" class="b"><b style="color:black" >วันเกิด : </b>
             <?php echo $result["B_DAY"];?> </label> <br></td></tr>
             <td align="center" ><label for="ADDRES" class="b"><b style="color:black" >ที่อยู่ : </b>
             <?php echo $result["ADDRES"];?> </label> <br></td></tr>

            <tr> <td align="center"  ><label for="DISEASE" class="b"><b style="color:black">โรคประจำตัว : </b> 
            <?php echo $result["DISEASE"];?> </label> <br></td></tr>
             <td align="center"  ><label for="PHONE" class="b"><b style="color:black">เบอร์ติดต่อ :</b>
             <?php echo $result["PHONE"];?> </label><br> <br></td></tr>
          
     
        
            </table>
         <br>
            
         <tr><button class="btn btn-success btn-lg active" onclick="location.href ='edit_student_user.php?';">
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