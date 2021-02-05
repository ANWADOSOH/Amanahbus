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
        <a class="nav-link <?php if ($menu == "index"){echo "active";} ?>"   href="index.php" ><i class="fas fa-home"></i>Home</a>
      </li>
          
          
          
         
          <li class="nav-item">
            <a href="homeSTD.php" class="nav-link <?php if($menu=="homestd"){echo "active";} ?> ">
              <i class="nav-icon fas fa-user"></i>
              <p>นักเรียน</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="home_TCH.php" class="nav-link <?php if ($menu == "hometch"){echo "active";} ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>ครุประจำรถ</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="homeDRV.php" class="nav-link <?php if ($menu == "homeDRV"){echo "active";} ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>คนขับรถ</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="home_PAPA.php" class="nav-link <?php if ($menu == "homePAPA"){echo "active";} ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>ผู้ปกครอง</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="homeADMIN.php" class="nav-link <?php if ($menu == "homeADMIN"){echo "active";} ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>แอดมิน</p>
            </a>
          </li>



          


     


         


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <!-- http://fordev22.com/ -->
    </div>
    <!-- /.sidebar -->
  </aside>