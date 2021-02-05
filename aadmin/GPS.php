<?php

$menu = "GPS";

?>


<?php include("header.php"); ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">




        <br>
        <br>
        <center>
            <h1>ระบบติดตามรถ</h1>
        </center>
    </div><!-- /.container-fluid -->

</section>

<!-- Main content -->
<section class="content">

    <div class="card">
        <div class="card-body p-1">
            <div class="row">



            </div>

            <center>
                <img src="../p_img/GPS.png" width="700" height="600">
            </center>



        </div>
        <!-- /.col -->
    </div>



</section>
<!-- /.content -->


<?php include('footer.php'); ?>

<script>
    $(function() {
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