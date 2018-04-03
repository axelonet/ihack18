<?php
$img ="assets/img/level2.gif";
$question = "AN ANGRY PROFESSOR,THE MISGUIDED CONFESSOR";
$level = 2;
$comment = "<!-- Download_Image -->";
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
              <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">	<span class="notification">2</span>	<i class="material-icons">notifications_active</i></a>
              <ul class="dropdown-menu dropdown-menu-right notification_left">
                <li>
                  <div class="list-item" data-id="item-12">
                    <span class="w-40 avatar circle" data-color="green">
                                    <i class="material-icons">loyalty</i>
                                </span>
                    <div class="list-body"><a href="javascript:void(0)" class="item-title _500">Server Error
                                        Reports</a>
                      <div class="item-except text-sm text-muted h-1x f-s-12">
                        Lorem Ipsum is simply dummy text.
                      </div>
                    </div>
                    <div><span class="item-date text-xs text-muted f-s-13">11:30</span></div>
                  </div>
                </li>
                <li>
                  <div class="list-item" data-id="item-12">
                    <span class="w-40 avatar circle" data-color="red">
                                    <i class="material-icons">supervisor_account</i>
                                </span>
                    <div class="list-body"><a href="javascript:void(0)" class="item-title _500">John Smith</a>
                      <div class="item-except text-sm text-muted h-1x f-s-12">
                        Looking for some client-work
                      </div>
                    </div>
                    <div><span class="item-date text-xs text-muted f-s-13">01:15</span></div>
                  </div>
                </li>
                <li>
                  <div class="list-item" data-id="item-12">
                    <span class="w-40 avatar circle" data-color="orange">
                                    <i class="material-icons">group_add</i>
                                </span>
                    <div class="list-body"><a href="javascript:void(0)" class="item-title _500">Olivia</a>
                      <div class="item-except text-sm text-muted h-1x f-s-12">
                        Looking for some client-work
                      </div>
                    </div>
                    <div><span class="item-date text-xs text-muted f-s-13">03:03</span></div>
                  </div>
                </li>
                <li>
                  <div class="list-item" data-id="item-12">
                    <span class="w-40 avatar circle" data-color="purple">
                                    <i class="material-icons">person_add</i>
                                </span>
                    <div class="list-body"><a href="javascript:void(0)" class="item-title _500"> New User
                                        Registered</a>
                      <div class="item-except text-sm text-muted h-1x f-s-12">
                        Lorem Ipsum is simply dummy text.
                      </div>
                    </div>
                    <div><span class="item-date text-xs text-muted f-s-13">14:40</span></div>
                  </div>
                </li>
              </ul>

            </li>
            <li class="nav-item dropdown dropdown-slide">
              <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">account_box</i>
                        </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="javascript:void(0)">
                                <i class="material-icons align-middle">mail_outline</i> Messages
                            </a>
                <a class="dropdown-item" href="javascript:void(0)">
                                <i class="material-icons align-middle">account_circle</i> Profile
                            </a>
                <a class="dropdown-item" href="javascript:void(0)">
                                <i class="material-icons align-middle">settings</i> Settings
                            </a>
                <div class="divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                                <i class="material-icons align-middle">lock_outline</i> Lock Screen
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
                        <input class="form-control form-control-lg" type="text" placeholder=""><br>
                        <center><button type="button" class="btn btn-outline-success">Success</button></center>
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
