<!-- Main Sidebar Container -->
<!-- http://fordev22.com/ -->
<aside style="background-color:#30de7c"  class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
   <br> <center>
      <img src="assets/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           width="90" height="90"
           style="opacity:.9" style="background-color:#51e5a5">
            
        </center>
<br>
       <center> <h2>AMANAH BUS</h2> </center>

    <!-- Sidebar -->
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <!-- nav-compact -->
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          
          <li class="nav-item" >
        <a class="nav-link <?php if ($menu == "index"){echo "active";} ?>"   href="user_home.php"  ><i class="fas fa-home"></i>Home</a>
      </li>
          
          
          <li class="nav-item">
            <a href="user_show.php" class="nav-link   <?php if($menu=="U1"){echo "active";} ?> ">
              <i class="nav-icon fas fa-user"></i>
              <p>ข้อมูลส่วนตัว</p>  <!-- target="_bank" class="d-block" newlink -->
            </a>
          </li>
         
          <li class="nav-item">
            <a href="form_rigis_std_user.php" class="nav-link <?php if($menu=="U2"){echo "active";} ?> ">
              <i class="nav-icon fas fa-address-card"></i>
              <p>ลงทะเบียนใช้บริการ</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user_table_rigis_std.php" class="nav-link <?php if($menu=="U3"){echo "active";} ?> ">
              <i class="nav-icon fas fa-address-card"></i>
              <p>ผลการลงทะเบียนใช้บริการ</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="table_bus.php" class="nav-link <?php if ($menu == "U8"){echo "active";} ?>">
              <i class="nav-icon fas fa-bus"></i>
              <p>รถ-รับส่ง</p>
            </a>
          </li>

        
          <li class="nav-item">
            <a href="table_N_router.php" class="nav-link <?php if ($menu == "U9"){echo "active";} ?>">
              <i class="nav-icon fas fa-bus"></i>
              <p>เส้นทางเดินรถ</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="monny_std_user.php" class="nav-link <?php if ($menu == "U6"){echo "active";} ?>">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>ค่าบริการ</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="index10.php" class="nav-link <?php if ($menu == "U7"){echo "active";} ?>">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>ความคิดเห็น</p>
            </a>
          </li>

  

          


     


         


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <!-- http://fordev22.com/ -->
    </div>
    <!-- /.sidebar -->
  </aside>