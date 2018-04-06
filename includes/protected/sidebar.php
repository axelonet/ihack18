<?php
$name = $_SESSION['name'];
$i = strlen($name);
$j=0;
 ?>
<!--Begin Sidebar-->
<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-bg.jpg">
  <div class="sidebar-wrapper">
    <!--Begins Logo start-->
    <div class="logo">
      <a href="javascript:void(0)" class="simple-text logo-mini">
                CSI
            </a>
      <a href="javascript:void(0)" class="simple-text logo-normal">
        UPES
            </a>
    </div>
    <!--End Logo start-->

    <!--Begins User Section-->
    <div class="user">
      <div class="photo">
          <img src="assets/img/avatar.png"/>
      </div>
      <div class="info">
        <a data-toggle="collapse" href="#pvr_user_nav" class="collapsed">
                        <span> Hello <?php
                              while (substr($name, $j, 1) != " " && $j < $i) {
                                  echo substr($name, $j, 1);
                                  $j++;
                              }?>
                            <b class="caret"></b>
                        </span>
                </a>
        <div class="collapse m-t-10" id="pvr_user_nav">
          <ul class="nav">
            <li>
              <a class="profile-dropdown" href="javascript:void(0)">
                                <span class="sidebar-mini"><i class="icon-settings"></i></span>
                                <span class="sidebar-normal">Settings</span>
                            </a>
            </li>
            <li>
              <a class="profile-dropdown" href="javascript:void(0)">
                                <span class="sidebar-mini"><i class="icon-logout"></i></span>
                                <span class="sidebar-normal">Logout</span>
                            </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--End User Section-->

    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link sub_link" href="dashboard.php">
                  <i class="material-icons">home</i>
                  <p>Dashboard</p>
              </a>
      </li>
      <li class="nav-item">
        <a class="nav-link sub_link" href="leaderboard.php">
                    <i class="material-icons">pie_chart</i>
                    <p>Leaderboard</p>
                </a>
      </li>
      <li class="nav-item">
        <a class="nav-link sub_link" href="support.php">
                    <i class="material-icons">bug_report</i>
                    <p>Support</p>
                </a>
      </li>
      <li class="nav-item">
        <a class="nav-link sub_link" href="developer.php">
                    <i class="material-icons">code</i>
                    <p>Developers</p>
                </a>
      </li>
      <li class="nav-item">
        <a class="nav-link sub_link" href="aboutus.html">
                    <i class="material-icons">description</i>
                    <p>About Us</p>
                </a>
      </li>
    </ul>
  </div>
</div>
<!--End Sidebar-->
