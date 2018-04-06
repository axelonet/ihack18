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
                  Profile
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
        <!--Begin Content-->
        <div class="content p-0 profile_v2">
            <div class="row">
                <div class="col-sm-12">
                    <div class="user-profile compact">
                        <div class="up-head-w" style="background-image:url('assets/img/cover_v1.jpg')">
                            <div class="up-social">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Google Plus" aria-describedby="tooltip788232"></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook" aria-describedby="tooltip341720"></a>
                            </div>
                            <div class="up-main-info">
                                <div class="avatar">
                                    <img alt="" class="avatar" src="assets/img/avatar.png">
                                </div>
                                <h2 class="up-header">
                                  <?php
                                  $name = $_SESSION['name'];
                                  echo $name; ?>
                                </h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row p-15">
                <div class="col-sm-7">
                    <div class="pvr-wrapper">

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                            <h6 class="element-header">
                                My Activity
                            </h6>
                            <div class="timed-activities compact">
                                <div class="timed-activity">
                                    <div class="ta-date">
                                        <span>Today</span>
                                    </div>
                                    <div class="ta-record-w">
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>4:49</strong> pm
                                            </div>
                                            <div class="ta-activity">
                                                Visited Welcome to <a href="javascript:void(0)">My Activity</a>
                                            </div>
                                        </div>
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>4:49</strong> pm
                                            </div>
                                            <div class="ta-activity">
                                                <a href="javascript:void(0)">Viewed area around Chennai</a>
                                            </div>
                                        </div>
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>10:43</strong> pm
                                            </div>
                                            <div class="ta-activity">
                                                Visited <a href="javascript:void(0)">PVR - Coming Soon Plugin by PVR_TECH_STUDIO |
                                                CodeCanyon</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timed-activity">
                                    <div class="ta-date">
                                        <span>Yesterday</span>
                                    </div>
                                    <div class="ta-record-w">
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>9:32</strong> pm
                                            </div>
                                            <div class="ta-activity">
                                                Visited <a href="https://play.google.com/store/apps/details?id=in.amazon.mShop.android.shopping">Amazon
                                                India Online Shopping</a>
                                            </div>
                                        </div>
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>5:14</strong> pm
                                            </div>
                                            <div class="ta-activity">
                                                Visited <a href="https://play.google.com/store/apps/details?id=com.flipkart.android">Flipkart
                                                Online Shopping App</a>
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

        <!--Begin Footer-->

        <!--End Footer-->
    </div>
    <!--EndMain Panel-->
</div>
<!--End wrapper-->

<!-- begin scroll to top btn -->
<a href="javascript:void(0)" class="btn btn-icon btn-circle btn-scroll-to-top btn-sm animated text-light fadeOutRight" data-color="purple" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
