 
 
  <nav style="background-color:#28a745;" class="main-header  navbar navbar-expand navbar-primary navbar-dark">
    <ul class="navbar-nav" >
      
    <li class="nav-item" >
        <a class="nav-link <?php if ($menu == "index"){echo "active";} ?>"   href="index.php"><i class="fas fa-home"></i> <b>AMANAHSAK SCHOOL</b></a>
      </li>
      
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
      <a  <?php if ($menu == "index"){echo "active";} ?>   href="homeSTD.php"  >
        <i class="fa fa-power-off"  target="_bank"></i> Login
        </a>
        
      </li>
    </ul>
  </nav>
 <!--  http://fordev22.com/ -->
  <!-- /.navbar -->