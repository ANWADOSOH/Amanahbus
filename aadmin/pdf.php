


<?php 

$menu = "pdf";

include("header.php"); 
?>
  

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      <br>
      <br>
        <h1>Report</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

     
              
          





          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Report</h3>
            </div>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-1">

                 
                  
                </div>


                <div class="col-md-10">

                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row" class="info">

                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">ลำดับ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รหัสนักเรียน</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รูป</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">Print</th>
                                            
                                            
                                           
                                        </tbody>
                  </table>

                      
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
    // http://fordev22.com/
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // });
  });
</script>
  
</body>
</html>
