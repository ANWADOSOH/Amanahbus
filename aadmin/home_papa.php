<?php
$menu = "homePAPA";
 include("hederSTD.php"); ?>

<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<!-- Main content -->
<section class="content">


    
          





<div class="card">
            <div class="card-header">
          <br>
          <br>
              <h3 class="card-title">Login</h3>
            </div>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-1">
                  
                </div>


            <div class="col-md-10">


            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">เข้าสู่ระบบผู้ปกครอง</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal"method="post" action="checkloginpapa.php">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">username</label>
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3"name="user" placeholder="รหัสประจำตัว">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" name="pass"placeholder="Password">
                    </div>
                  </div>
                  
                </div>
                 <!-- /.card-body -->
                 <div class="card-footer">
                  <button  class="btn btn-success">

                  <a >
              Sign in</button>
             
            </a>
                  
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
                  
                </div>


                <div class="col-md-1">
                  
                </div>

          </div>

            </div>
              
          </div>



          

          
        

          


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
