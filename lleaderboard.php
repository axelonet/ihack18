<?php
require 'includes/protected/config.php';
session_start();
$que = mysql_query("SELECT * FROM users ORDER BY score DESC LIMIT 10");
require 'functions/function.php';
no_login("header");
if (isset($_SESSION['email'])) {
  login('sidebar');
}
?>
<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-minimize">
          <button id="minimizeSidebar" data-color="purple" class="btn btn-fill btn-round btn-icon d-none d-lg-block">
                      <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                      <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                  </button>
        </div>
        <a class="navbar-brand" id="page_header_title" href="javascript:void(0)">
                  <i class="material-icons">restore_page</i>
                  Leaderboard
              </a>

      </div>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar burger-lines"></span>
              <span class="navbar-toggler-bar burger-lines"></span>
              <span class="navbar-toggler-bar burger-lines"></span>
          </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="dropdown dropdown-slide nav-item d-none d-lg-block">
          </li>
          <li class="nav-item dropdown dropdown-slide">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="material-icons">account_box</i>
                      </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="javascript:void(0)">
                              <i class="material-icons align-middle">account_circle</i> Profile
                          </a>
              <a href="./logout.php" class="dropdown-item">
                              <i class="material-icons align-middle">power_settings_new</i> Log out
                          </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="col-md-9 order-md-2">
      <div class="pvr-wrapper">
          <div class="pvr-box">
              <h5 class="pvr-header">
                  Leaderboard - ihack 2018
              </h5>
              <div class="table-responsive">
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Level</th>
                          <th>Score</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          while ($row = mysql_fetch_array($que)) {
                              ?>
                            <tr>
                              <td>&nbsp;<?php echo $row['name']; ?></td>
                              <td>&nbsp;<?php echo $row['level']; ?></td>
                              <td>&nbsp;<?php echo ($row['score'] + $row['bonus']); ?></td>
                            </tr>
                          <?php
                          } ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>


      <?php
        no_login("footer");?>
