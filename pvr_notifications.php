
<?php
require 'functions/function.php';
no_login('header'); ?>
<!--Body Begins-->
<body>
<!--Begin Loading-->
<div class="preloader">
    <div class="loading">
        <h2>
            Loading...
        </h2>
        <span class="progress"></span>
    </div>
</div>
<!--End Loading-->
<!--Begin wrapper-->
<div class="wrapper">
    <?php login('sidebar'); ?>
    <!--Begin Main Panel-->
    <div class="main-panel">
        <!--Begin Content-->
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                            <h5 class="pvr-header">
                                Toastr Notifications
                                <div class="pvr-box-controls">
                                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                    <i class="material-icons" data-box="close">close</i>
                                </div>
                            </h5>
                            <div class="row">
                                <div class="col-md-4" id="tostrnoti">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input id="title" type="text" class="form-control"
                                               placeholder="Enter a title ...">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" id="message" rows="3"
                                                  placeholder="Enter a message ..."></textarea>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox" for="closeButton">
                                            <input id="closeButton" type="checkbox" value="checked"
                                                   class="input-mini"
                                                   checked="">Close Button
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox" for="addBehaviorOnToastClick">
                                            <input id="addBehaviorOnToastClick" type="checkbox" value="checked"
                                                   class="input-mini">Add behavior on toast click
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox" for="debugInfo">
                                            <input id="debugInfo" type="checkbox" value="checked"
                                                   class="input-mini">Debug
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox" for="progressBar">
                                            <input id="progressBar" type="checkbox" value="checked"
                                                   class="input-mini"
                                                   checked="">Progress Bar
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox" for="preventDuplicates">
                                            <input id="preventDuplicates" type="checkbox" value="checked"
                                                   class="input-mini">Prevent Duplicates
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group" id="toastTypeGroup">
                                        <label>Toast Type</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="toasts" value="success" checked="">Success
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="radio">
                                                <input type="radio" name="toasts" value="info">Info
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="radio">
                                                <input type="radio" name="toasts" value="warning">Warning
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="radio">
                                                <input type="radio" name="toasts" value="error">Error
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group" id="positionGroup">
                                        <label>Position</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="positions" value="toast-top-right"
                                                       checked="">Top
                                                Right
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="positions" value="toast-bottom-right">Bottom
                                                Right
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="positions" value="toast-bottom-left">Bottom
                                                Left
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="positions" value="toast-top-left">Top Left
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="positions" value="toast-top-full-width">Top
                                                Full
                                                Width
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="positions"
                                                       value="toast-bottom-full-width">Bottom
                                                Full Width
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="positions" value="toast-top-center">Top
                                                Center
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="positions" value="toast-bottom-center">Bottom
                                                Center
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="showEasing">Show Easing</label>
                                        <input id="showEasing" type="text" placeholder="swing, linear"
                                               class="form-control"
                                               value="swing">
                                    </div>
                                    <div class="form-group">

                                        <label for="hideEasing">Hide Easing</label>
                                        <input id="hideEasing" type="text" placeholder="swing, linear"
                                               class="form-control"
                                               value="linear">
                                    </div>
                                    <div class="form-group">

                                        <label for="showMethod">Show Method</label>
                                        <input id="showMethod" type="text" placeholder="show, fadeIn, slideDown"
                                               class="form-control" value="fadeIn">
                                    </div>
                                    <div class="form-group">

                                        <label for="hideMethod">Hide Method</label>
                                        <input id="hideMethod" type="text" placeholder="hide, fadeOut, slideUp"
                                               class="form-control" value="fadeOut">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="showDuration">Show Duration</label>
                                        <input id="showDuration" type="text" placeholder="ms" class="form-control"
                                               value="400">
                                    </div>
                                    <div class="form-group">
                                        <label for="hideDuration">Hide Duration</label>
                                        <input id="hideDuration" type="text" placeholder="ms" class="form-control"
                                               value="1000">
                                    </div>
                                    <div class="form-group">
                                        <label for="timeOut">Time out</label>
                                        <input id="timeOut" type="text" placeholder="ms" class="form-control"
                                               value="7000">
                                    </div>
                                    <div class="form-group">
                                        <label for="extendedTimeOut">Extended time out</label>
                                        <input id="extendedTimeOut" type="text" placeholder="ms"
                                               class="form-control"
                                               value="1000">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn" data-color="purple" id="showtoast">Show
                                        Toast
                                    </button>
                                    <button type="button" class="btn btn-white" data-color="red" id="cleartoasts">
                                        Clear Toasts
                                    </button>
                                    <button type="button" class="btn btn-white" data-color="orange"
                                            id="clearlasttoast">Clear Last Toast
                                    </button>
                                    <button type="button" class="btn btn-white" data-color="green" id="showsimple">
                                        Show simple
                                        options
                                    </button>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-lg-12">
                                    <small>Toastr Options in JSON</small>
                                    <pre id="toastrOptions" class="p-m"></pre>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                            <h5 class="pvr-header">
                                Bootstrap Notify
                                <div class="pvr-box-controls">
                                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                    <i class="material-icons" data-box="close">close</i>
                                </div>
                            </h5>
                            <div class="row">
                                <div class="col-md-6 offset-md-3 text-center">
                                    <h4 class="card-title m-0">Notifications Places
                                        <p class="card-category">
                                            <small>Click to view notifications</small>
                                        </p>
                                    </h4>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-3 col-lg-3">
                                    <button class="btn btn-default btn-block" data-color="purple"
                                            onclick="showNotification('top','left')">
                                        Top Left
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <button class="btn btn-default btn-block" data-color="red"
                                            onclick="showNotification('top','center')">
                                        Top Center
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <button class="btn btn-default btn-block" data-color="orange"
                                            onclick="showNotification('top','right')">
                                        Top Right
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-3 col-lg-3">
                                    <button class="btn btn-default btn-block" data-color="green"
                                            onclick="showNotification('bottom','left')">
                                        Bottom Left
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <button class="btn btn-default btn-block" data-color="blue"
                                            onclick="showNotification('bottom','center')">
                                        Bottom Center
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <button class="btn btn-default btn-block" data-color="azure"
                                            onclick="toastr.getMessage()">
                                        Bottom Right
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--End Content-->

        <!--Begin Footer-->
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul class="footer-menu d-none d-sm-block">
                        <li>
                            <a href="javascript:void(0)">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                T&C
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                Privacy policy
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                Website
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-center">
                        © <span id="writeCopyrights"></span>
                        <a href="http://www.pvrtechstudio.com/" target="_blank">PVR Tech Studio</a>, We Design your
                        Future!
                    </p>
                </nav>
            </div>
        </footer>
        <!--End Footer-->
    </div>
    <!--EndMain Panel-->
</div>
<!--End wrapper-->

<!-- begin scroll to top btn -->
<a href="javascript:void(0)" class="btn btn-icon btn-circle btn-scroll-to-top btn-sm animated invisible text-light"
   data-color="purple" data-click="scroll-top"><i
        class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</body>
<!--End Body-->
<!--   Core JS Files   -->
<!-- <script src="assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/plugins/waitMe/waitMe.min.js"></script>
<script src="assets/js/pvr_lite_app.js" id="appjs"></script>
<script src="assets/plugins/toastr/toastr.min.js"></script>
<script src="assets/plugins/bootstrap-notify/bootstrap-notify.js" type="text/javascript"></script>
<script src="assets/js/pvr_lite_toastr.js"></script> -->
<?php no_login('footer'); ?>
<!-- END PAGE LEVEL JS -->

<!-- Mirrored from preview.pvrtechstudio.com/demo/pvrlite/pvrlite/pvr_notifications.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2018 09:30:00 GMT -->
</html>
