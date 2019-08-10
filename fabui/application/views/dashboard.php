<?php
defined('BASEPATH') OR exit('No direct path allowed')
?>
<!-- Preloader -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        <div class="top-left-part">
            <a class="logo" href="<?php echo base_url()."assets/fitsigma/";?>customer-app/dashboard">
                <span class="hidden-xs">
                                                                        <img src="<?php echo base_url()."assets/fitsigma/";?>fitsigma/images/logo.png" class="logo-style" alt="Logo">
                                                            </span>
            </a>
        </div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-bell"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu mailbox scale-up">
                    <li>
                        <div class="drop-title">You have 2 new notifications</div>
                    </li>
                    <li>
                        <div class="message-center">
                                                            <a href="javascript:;">
                                    <div class="user-img"> <img src="<?php echo base_url()."assets/fitsigma/";?>fitsigma/images/user.svg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Payment Added</h5>
                                        <span class="mail-desc">Payment recorded successfully.</span> </div>
                                </a>
                                                            <a href="javascript:;">
                                    <div class="user-img"> <img src="<?php echo base_url()."assets/fitsigma/";?>fitsigma/images/user.svg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Subscription Added</h5>
                                        <span class="mail-desc">Subscription added successfully.</span> </div>
                                </a>
                                                    </div>
                    </li>
                    <li>
                        <a class="text-center mark-read"> <strong>Mark as Read</strong> <i class="fa fa-angle-right"></i> </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                                            <img src="<?php echo base_url()."assets/fitsigma/";?>fitsigma/images/user.svg" width="36" class="img-circle img-change" />
                    <b class="hidden-xs"><?php echo $this->session->userdata('Student_Name'); ?></b>
                </a>
                <ul class="dropdown-menu dropdown-user scale-up">
                    <!-- <li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/profile"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/message"><i class="ti-email"></i> Inbox</a></li> -->
                    <li role="separator" class="divider"></li>
                    <li><a href="logout"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span></div>
                <!-- /input-group -->
            </li>
            <li class="user-pro">
                <a href="javascript:;" class="waves-effect">
                                            <img src="<?php echo base_url()."assets/fitsigma/";?>fitsigma/images/user.svg" class="img-circle img-change"/>
                    <span class="hide-menu"><?php echo $this->session->userdata('Student_Name'); ?><span
                                class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/profile"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/message"><i class="ti-email"></i> Inbox</a></li>
                    <li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li><a href="dashboard" class="waves-effect active"><i
                            class="zmdi zmdi-view-dashboard zmdi-hc-fw fa-fw"></i> <span
                            class="hide-menu"> Dashboard </span></a></li>
            <li><a href="subscriptions"class="waves-effect ">
            <i class="zmdi zmdi-account zmdi-hc-fw fa-fw"></i>
                    <span class="hide-menu"> Subscriptions </span></a></li>
            <!-- <li><a href="javascript:;" class="waves-effect "><i
                            class="fa fa-usd"></i> <span class="hide-menu gap-payments"> Payments <span
                                class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/payments" class="">Payments</a>
                    </li>
                    <li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/payments/due-payments" class="">Due
                            Payments</a></li>
                </ul>
            </li> -->
            <!-- <li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/attendance" class="waves-effect "><i
                            class="zmdi zmdi-calendar-check zmdi-hc-fw fa-fw"></i> <span
                            class="hide-menu"> Attendance </span></a></li>
            <li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/message" class="waves-effect "><i
                            class="zmdi zmdi-email zmdi-hc-fw fa-fw"></i> <span class="hide-menu"> Message </span></a>
            </li> -->
        </ul>
    </div>
</div>    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
                <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li>Main Menu</li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Credits Remaining</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="text-success"></i> <span class="counter text-purple"><?php echo $this->session->userdata('Credits'); ?></span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Amount Paid</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="fa fa-inr text-success"></i> <span class="counter text-success">999</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Subscription Type</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="fa fa-trophy text-success"></i> <span class="text-success"><?php echo $this->session->userdata('sub_type'); ?></span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="box-title">
                    <div class="caption ">
                        <span class="caption-subject font-dark bold uppercase">Due Payments</span>
                        <span class="caption-helper"></span>
                    </div>
                </div>
                <div class="box-body flip-scroll">

                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr class="uppercase">
                            <th> # </th>
                            <th> Name </th>
                            <th> Due Amount </th>
                            <th> Due Date </th>
                        </tr>
                        </thead>
                        <tbody>

                                                    <tr>
                                <td colspan="5">No due payments.</td>
                            </tr>
                                                </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="box-title">
                    <div class="caption ">
                        <span class="caption-subject font-dark bold uppercase">Subscriptions Expiring in next 45 days</span>
                        <span class="caption-helper"></span>
                    </div>
                </div>
                <div class="box-body flip-scroll">

                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr class="uppercase">
                            <th> # </th>
                            <th> Student Name </th>
                            <th> Expiring on </th>
                        </tr>
                        </thead>
                        <tbody>

                                                    <tr>
                                <td> 1 </td>
                                <td>
                                <?php echo $this->session->userdata('Student_Name'); ?> </td>
                                <td>
                                <?php echo $this->session->userdata('fabmem_exp'); ?>
                                </td>
                            </tr>
                                                </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Payments Chart</h3>
                <div id="morris-bar-chart"></div>
            </div>
        </div>
    </div>
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2019 &copy; Fablab SRMIIC Powered By ExDiN </footer>
    </div>
    <!-- /#page-wrapper -->
</div>



<div id="customerShowModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myLargeModalLabel">Modal</h4>
            </div>
            <div class="modal-body">
                Loading ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>




<div id="customerDeleteModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
            </div>
            <div class="modal-body">
                ....
            </div>
            <div class="modal-footer">
                <button type="button" id="deleteModalBtn" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Delete</button>
                <button type="button" class="btn btn-default waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- /#wrapper -->
<!-- jQuery -->
<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bootstrap/dist/js/tether.min.js"></script>

<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>

<!-- Menu Plugin JavaScript -->
<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/js/jquery.slimscroll.js"></script>

<!--Wave Effects -->
<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/js/waves.js"></script>

<!--Counter js -->
<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/waypoints/lib/jquery.waypoints.js"></script>

<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/counterup/jquery.counterup.min.js"></script>


<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/js/custom.min.js"></script>


<!-- Sparkline chart JavaScript -->



<!--Helper Script-->
<script src="<?php echo base_url()."assets/fitsigma/";?>admin/global/plugins/froiden-helper/helper.js"></script>

    <script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/raphael/raphael-min.js"></script>

    <script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/morrisjs/morris.js"></script>


    <script>
        var months = [];
        months['1'] = 'Jan';
        months['2'] = 'Feb';
        months['3'] = 'Mar';
        months['4'] = 'Apr';
        months['5'] = 'May';
        months['6'] = 'Jun';
        months['7'] = 'Jul';
        months['8'] = 'Aug';
        months['9'] = 'Sep';
        months['10'] = 'Oct';
        months['11'] = 'Nov';
        months['12'] = 'Dec';
        Morris.Bar({
            element: 'morris-bar-chart',
            data: [
                                {
                    "Month": months['7'],
                    "Income": '500'
                },
                            ],
            xkey: 'Month',
            ykeys: ['Income'],
            labels: ['Income'],
            barColors:['#b8edf0', '#b4c1d7'],
            hideHover: 'auto',
            gridLineColor: '#eef0f2',
            resize: true
        });
    </script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".counter").counterUp({
        delay: 100,
        time: 1200
    });

    $('.mark-read').click(function () {
        var url = '<?php echo base_url()."assets/fitsigma/";?>customer-app/markRead';

        $.easyAjax({
            url: url,
            type: 'POST',
            success: function (response) {
                $('.notify').hide();
            }
        })

    });
</script>