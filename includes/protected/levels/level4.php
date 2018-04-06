<?php
$img ="assets/img/level4.jpg";
$question = "For role models never fail to aim....It's time for model number to ";
$level = 4;
$comment = "assets/mp3/l4.mp3";
?>
<!--Begin Main Panel-->
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
                  Level <?php echo $level ?>
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
              <a href="javascript:void(0)" class="dropdown-item">
                              <i class="material-icons align-middle">power_settings_new</i> Log out
                          </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!--Begin Content-->
  <div class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="pvr-wrapper">
          <div class="pvr-box">
            <h1 style="text-allign:center;">
                            UPES-CSI
                        </h1>
            <h6 class="pvr-header">
                          we create. we share. we innovate.
                        </h6>
            <div class="row">
              <div class="col-6">
                <div class="box p-3"> <img src=<?php echo $img; ?> alt="Devices"></div>
              </div>
              <div class="col-6">
                <div class="p-3">
                  <br><br><br>
                  <center><p><?php echo $question;?></p></center>
                  <div class="form-group">
                    <form id="level" action="response.php" method="post">
                      <input class="form-control form-control-lg" type="text" name="solution" placeholder=""><br>
                      <center><button form="level" type="submit" class="btn btn-outline-success">Success</button></center>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>
<!--End Content-->

<script src="levels/levels.js"></script>
