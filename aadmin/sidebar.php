<!-- Main Sidebar Container -->
<!-- http://fordev22.com/ -->
<aside style="background-color:#30de7c" class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <br>
  <center>
    <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" width="90" height="90" style="opacity:.9" style="background-color:#51e5a5">

  </center>
  <br>
  <center>
    <h2>AMANAH BUS</h2>
  </center>

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

      <li class="nav-item">
        <a class="nav-link <?php if ($menu == "index0") {
                              echo "active";
                            } ?>" href="index0.php"><i class="fas fa-home"></i>Home</a>
      </li>

      <li class="nav-item">
        <a href="index3.php" class="nav-link <?php if ($menu == "index3") {
                                                echo "active";
                                              } ?> ">
          <i class="nav-icon fab fa-wpforms"></i>
          <p>งานทะเบียน</p>
        </a>
      </li>






      <li class="nav-item">
        <a href="index4.php" class="nav-link <?php if ($menu == "index4") {
                                                echo "active";
                                              } ?>">
          <i class="nav-icon fas fa-list-alt"></i>
          <p>ตารางเเสดงข้อมูล</p>
        </a>
      </li>


      <li class="nav-item">
        <a href="table_bus_rou.php" class="nav-link <?php if ($menu == "bus") {
                                                      echo "active";
                                                    } ?>">
          <i class="nav-icon fas fa-bus"></i>
          <p>รถที่ให้บริการ</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="index11.php" class="nav-link <?php if ($menu == "index11") {
                                                echo "active";
                                              } ?>">
          <i class="nav-icon fas fa-calendar-times"></i>
          <p>เข้างาน</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="form_d_monny.php" class="nav-link <?php if ($menu == "dmonny") {
                                                      echo "active";
                                                    } ?>">
          <i class="nav-icon fas fa-dollar-sign"></i>
          <p>จัดการค่าบริการเเละค่าตอบเเทน</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="index12.php" class="nav-link <?php if ($menu == "index12") {
                                                echo "active";
                                              } ?>">
          <i class="nav-icon fas fa-dollar-sign"></i>
          <p>ค่าตอบเเทน</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="index5.php" class="nav-link <?php if ($menu == "index5") {
                                                echo "active";
                                              } ?>">
          <i class="nav-icon fas fa-dollar-sign"></i>
          <p>ค่าบริการ</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="index13.php" class="nav-link <?php if ($menu == "oil") {
                                                echo "active";
                                              } ?>">
          <i class="nav-icon fas fa-dollar-sign"></i>
          <p>ค่าใช้จ่าย</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="GPS.php" class="nav-link <?php if ($menu == "GPS") {
                                            echo "active";
                                          } ?>">
          <i class="nav-icon fas fa-chart-line"></i>
          <p>ระบบติดตาม</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="index9.php" class="nav-link <?php if ($menu == "index9") {
                                                echo "active";
                                              } ?>">
          <i class="nav-icon fas fa-chart-line"></i>
          <p>การประเมิน</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="table_admin.php" class="nav-link <?php if ($menu == "add") {
                                                    echo "active";
                                                  } ?>">
          <i class="nav-icon fas fa-user "></i>
          <p>Addmin</p>
        </a>
      </li>



    </ul>
  </nav>
  <!-- /.sidebar-menu -->
  <!-- http://fordev22.com/ -->
  </div>
  <!-- /.sidebar -->
</aside>