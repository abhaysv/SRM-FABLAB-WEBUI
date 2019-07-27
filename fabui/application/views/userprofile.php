<?php
defined('BASEPATH') OR exit('No direct path allowed')
?>
    <div id="container" class="effect aside-float aside-bright mainnav-lg page-fixedbar page-fixedbar-right">
        
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img src="<?php echo base_url()."assets/";?>img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">FABALAB</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-view-list"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->



                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="demo-pli-bell"></i>
                                <span class="badge badge-header badge-danger"></span>
                            </a>

                            <!--Notification dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md">
                                <div class="pad-all bord-btm">
                                    <p class="text-semibold text-main mar-no">You have 9 notifications.</p>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#">
                                                    <div class="clearfix">
                                                        <h5 class="pull-left text-main">Database Repair</h5>
                                                        <p class="pull-right">70%</p>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div style="width: 70%;" class="progress-bar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#">
                                                    <div class="clearfix">
                                                        <h5 class="pull-left text-main">Upgrade Progress</h5>
                                                        <p class="pull-right">10%</p>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div style="width: 10%;" class="progress-bar progress-bar-warning">
                                                            <span class="sr-only">10% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a class="media" href="#">
                                            <span class="badge badge-success pull-right">90%</span>
                                                    <div class="media-left">
                                                        <i class="demo-pli-data-settings icon-2x text-main"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mar-no text-nowrap text-main text-semibold">HDD is full</h5>
                                                        <small>50 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <i class="demo-pli-file-edit icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mar-no text-nowrap">Write a news article</h5>
                                                        <small>Last Update 8 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a class="media" href="#">
                                            <span class="label label-danger pull-right">New</span>
                                                    <div class="media-left">
                                                        <i class="demo-pli-speech-bubble-7 icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mar-no text-nowrap">Comment Sorting</h5>
                                                        <small>Last Update 8 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <i class="demo-pli-add-user-plus-star icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mar-no text-nowrap">New User Registered</h5>
                                                        <small>4 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li class="bg-gray">
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url()."assets/";?>img/profile-photos/9.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mar-no text-nowrap">Lucy sent you a message</h5>
                                                        <small>30 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li class="bg-gray">
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url()."assets/";?>img/profile-photos/3.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mar-no text-nowrap">Jackson sent you a message</h5>
                                                        <small>40 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-dark box-block">
                                        <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End notifications dropdown-->



                        <!--Mega dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="mega-dropdown">
                            <a href="#" class="mega-dropdown-toggle">
                                <i class="demo-pli-layout-grid"></i>
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu">
                                <div class="row">
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header"><i class="demo-pli-file icon-lg icon-fw"></i> Pages</li>
									        <li><a href="#">Profile</a></li>
									        <li><a href="#">Search Result</a></li>
									        <li><a href="#">FAQ</a></li>
									        <li><a href="#">Sreen Lock</a></li>
									        <li><a href="#">Maintenance</a></li>
									        <li><a href="#">Invoice</a></li>
									        <li><a href="#" class="disabled">Disabled</a></li>                                        </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header"><i class="demo-pli-mail icon-lg icon-fw"></i> Mailbox</li>
									        <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
									        <li><a href="#">Read Message</a></li>
									        <li><a href="#">Compose</a></li>
									        <li><a href="#">Template</a></li>
                                        </ul>
                                        <p class="pad-top text-main text-sm text-uppercase text-bold"><i class="icon-lg demo-pli-calendar-4 icon-fw"></i>News</p>
                                        <p class="pad-top mar-top bord-top text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <span class="badge badge-success pull-right">90%</span>
                                                    <div class="media-left">
                                                        <i class="demo-pli-data-settings icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Data Backup</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-support icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Support</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-computer-secure icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Security</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-map-2 icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Location</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <p class="dropdown-header"><i class="demo-pli-file-jpg icon-lg icon-fw"></i> Gallery</p>
                                        <div class="row img-gallery">
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/thumbs/img-1.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/thumbs/img-3.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/thumbs/img-2.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/thumbs/img-4.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/thumbs/img-6.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/thumbs/img-5.jpg" alt="thumbs">
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-block btn-primary">Browse Gallery</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End mega dropdown-->

                    </ul>
                    <ul class="nav navbar-top-links pull-right">

                        <!--Language selector-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a id="demo-lang-switch" class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
                                <span class="lang-selected">
                                    <img class="lang-flag" src="<?php echo base_url()."assets/";?>img/flags/united-kingdom.png" alt="English">
                                </span>
                            </a>

                            <!--Language selector menu-->
                            <ul class="head-list dropdown-menu">
						        <li>
						            <!--English-->
						            <a href="#" class="active">
						                <img class="lang-flag" src="<?php echo base_url()."assets/";?>img/flags/united-kingdom.png" alt="English">
						                <span class="lang-id">EN</span>
						                <span class="lang-name">English</span>
						            </a>
						        </li>
						        <li>
						            <!--France-->
						            <a href="#">
						                <img class="lang-flag" src="<?php echo base_url()."assets/";?>img/flags/france.png" alt="France">
						                <span class="lang-id">FR</span>
						                <span class="lang-name">Fran&ccedil;ais</span>
						            </a>
						        </li>
						        <li>
						            <!--Germany-->
						            <a href="#">
						                <img class="lang-flag" src="<?php echo base_url()."assets/";?>img/flags/germany.png" alt="Germany">
						                <span class="lang-id">DE</span>
						                <span class="lang-name">Deutsch</span>
						            </a>
						        </li>
						        <li>
						            <!--Italy-->
						            <a href="#">
						                <img class="lang-flag" src="<?php echo base_url()."assets/";?>img/flags/italy.png" alt="Italy">
						                <span class="lang-id">IT</span>
						                <span class="lang-name">Italiano</span>
						            </a>
						        </li>
						        <li>
						            <!--Spain-->
						            <a href="#">
						                <img class="lang-flag" src="<?php echo base_url()."assets/";?>img/flags/spain.png" alt="Spain">
						                <span class="lang-id">ES</span>
						                <span class="lang-name">Espa&ntilde;ol</span>
						            </a>
						        </li>
                            </ul>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End language selector-->



                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <!--<img class="img-circle img-user media-object" src="<?php echo base_url()."assets/";?>img/profile-photos/1.png" alt="Profile Picture">-->
                                    <i class="demo-pli-male"></i>
                                </span>
                                <div class="username hidden-xs"><?php echo $this->session->userdata('Student_Name'); ?></div>
                            </a>


                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                                <!-- Dropdown heading  -->
                                <div class="pad-all bord-btm">
                                    <p class="text-main mar-btm"><span class="text-bold">750GB</span> of 1,000GB Used</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" style="width: 70%;">
                                            <span class="sr-only">70%</span>
                                        </div>
                                    </div>
                                </div>


                                <!-- User dropdown menu -->
                                <ul class="head-list">
                                    <li>
                                        <a href="#"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="badge badge-danger pull-right">9</span><i class="demo-pli-mail icon-lg icon-fw"></i> Messages</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="label label-success pull-right">New</span><i class="demo-pli-gear icon-lg icon-fw"></i> Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="demo-pli-information icon-lg icon-fw"></i> Help</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="demo-pli-computer-secure icon-lg icon-fw"></i> Lock screen</a>
                                    </li>
                                </ul>

                                <!-- Dropdown footer -->
                                <div class="pad-all text-right">
                                    <a href="logout" class="btn btn-primary">
                                        <i class="demo-pli-unlock"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->

                        <li>
                            <a href="#" class="aside-toggle navbar-aside-icon">
                                <i class="pci-ver-dots"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">
                    
                </div>

                                
                <!--Fixedbar-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="page-fixedbar-container">
                    <div class="page-fixedbar-content">
                        <div class="nano">
                            <div class="nano-content">
                                <p class="pad-all text-main text-sm text-uppercase text-bold">
                                    Who to Follow
                                </p>

                                <!--Family-->
                                <div class="list-group bg-trans bord-btm">
                                    <div class="list-group-item list-item-sm">
                                        <div class="media-left pos-rel">
                                            <a href="#"><img class="img-circle img-xs" src="<?php echo base_url()."assets/";?>img/profile-photos/2.png" alt="Profile Picture"></a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="text-main">
                                                <p>Stephen Tran</p>
                                            </a>
                                            <button class="btn btn-xs btn-default"><i class="demo-pli-add-user"></i> Follow</button>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <a href="#"><img class="img-circle img-xs" src="<?php echo base_url()."assets/";?>img/profile-photos/8.png" alt="Profile Picture"></a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="text-main">
                                                <p>Brittany Meyer</p>
                                            </a>
                                            <button class="btn btn-xs btn-default"><i class="demo-pli-add-user"></i> Follow</button>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <a href="#"><img class="img-circle img-xs" src="<?php echo base_url()."assets/";?>img/profile-photos/4.png" alt="Profile Picture"></a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="text-main">
                                                <p>Donald Brown</p>
                                            </a>
                                            <button class="btn btn-xs btn-default"><i class="demo-pli-add-user"></i> Follow</button>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <a href="#"><img class="img-circle img-xs" src="<?php echo base_url()."assets/";?>img/profile-photos/9.png" alt="Profile Picture"></a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="text-main">
                                                <p>Betty Murphy</p>
                                            </a>
                                            <button class="btn btn-xs btn-default"><i class="demo-pli-add-user"></i> Follow</button>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <a href="#"><img class="img-circle img-xs" src="<?php echo base_url()."assets/";?>img/profile-photos/7.png" alt="Profile Picture"></a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="text-main">
                                                <p>Samantha Reid</p>
                                            </a>
                                            <button class="btn btn-xs btn-default"><i class="demo-pli-add-user"></i> Follow</button>
                                        </div>
                                    </div>
                                </div>

                                <!--Monthly billing-->
                                <div class="pad-all">
                                    <p class="text-main text-sm text-uppercase text-bold">Billing &amp; reports</p>
                                    <p>Get <strong class="text-main">$5.00</strong> off your next bill by making sure your full payment reaches us before August 5, 2018.</p>
                                </div>
                                <hr class="new-section-xs">
                                <div class="pad-all">
                                    <span class="text-bold text-main">Amount Due On</span>
                                    <p class="text-sm">August 17, 2018</p>
                                    <p class="text-2x text-thin text-main">$83.09</p>
                                    <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Fixedbar-->

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                        <div class="panel">
					        <div class="panel-body">
					            <div class="fixed-fluid">
					                <div class="fixed-md-200 pull-sm-left fixed-right-border">
					
					                    <!-- Simple profile -->
					                    <div class="text-center">
					                        <div class="pad-ver">
					                            <img src="<?php echo base_url()."assets/";?>img/profile-photos/1.png" class="img-lg img-circle" alt="Profile Picture">
					                        </div>
					                        <h4 class="text-lg text-overflow mar-no"><?php echo $this->session->userdata('Student_Name'); ?></h4>
					                        <p class="text-sm text-muted"><?php echo $this->session->userdata('Department'); ?></p>
					
					                        <div class="pad-ver btn-groups">
					                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
					                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
					                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
					                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
					                        </div>
					                        <button class="btn btn-block btn-success btn-lg">Follow</button>
					                    </div>
					                    <hr>
					
					                    <!-- Profile Details -->
					                    <p class="pad-ver text-main text-sm text-uppercase text-bold">About Me</p>
					                    <p><i class="demo-pli-map-marker-2 icon-lg icon-fw"></i> <?php echo $this->session->userdata('Communication_Address'); ?></p>
					                    <p><a href="#" class="btn-link"><i class="demo-pli-internet icon-lg icon-fw"></i> <?php echo $this->session->userdata('Registration_Number'); ?></a></p>
					                    <p><i class="demo-pli-old-telephone icon-lg icon-fw"></i><?php echo $this->session->userdata('Mobile_Number'); ?></p>
					                    <p class="text-sm text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					
					
					                    <hr>
					                    <p class="pad-ver text-main text-sm text-uppercase text-bold">Skills</p>
					                    <ul class="list-inline">
					                        <li class="tag tag-sm">PHP Programming</li>
					                        <li class="tag tag-sm">Marketing</li>
					                        <li class="tag tag-sm">Graphic Design</li>
					                        <li class="tag tag-sm">Sketch</li>
					                        <li class="tag tag-sm">Photography</li>
					                    </ul>
					
					                    <hr>
					                    <p class="pad-ver text-main text-sm text-uppercase text-bold">Gallery</p>
					                    <div class="row img-gallery">
					                        <div class="col-xs-6">
					                            <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/thumbs/img-3.jpg" alt="thumbs">
					                        </div>
					                        <div class="col-xs-6">
					                            <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/thumbs/img-6.jpg" alt="thumbs">
					                        </div>
					                        <div class="col-xs-6">
					                            <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/thumbs/img-4.jpg" alt="thumbs">
					                        </div>
					                        <div class="col-xs-6">
					                            <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/thumbs/img-2.jpg" alt="thumbs">
					                        </div>
					                        <div class="col-xs-6">
					                            <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/thumbs/img-5.jpg" alt="thumbs">
					                        </div>
					                        <div class="col-xs-6">
					                            <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/thumbs/img-1.jpg" alt="thumbs">
					                        </div>
					                    </div>
					                </div>
					                <div class="fluid">
					                    <div class="text-right">
					                        <button class="btn btn-sm btn-primary">Edit Profile</button>
					                        <button class="btn btn-sm btn-primary">Send Message</button>
					                        <button class="btn btn-sm btn-success">Download CV</button>
					                    </div>
					
					                    <hr class="new-section-md bord-no">
					
					                    <div class="pad-btm">
					                        <textarea class="form-control" rows="4" placeholder="What are you thinking?"></textarea>
					                        <div class="mar-top clearfix">
					                            <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="demo-psi-right-4 icon-fw"></i> Share</button>
					                            <a class="btn btn-icon demo-pli-video icon-lg add-tooltip" href="#" data-original-title="Add Video" data-toggle="tooltip"></a>
					                            <a class="btn btn-icon demo-pli-camera-2 icon-lg add-tooltip" href="#" data-original-title="Add Photo" data-toggle="tooltip"></a>
					                            <a class="btn btn-icon demo-pli-file icon-lg add-tooltip" href="#" data-original-title="Add File" data-toggle="tooltip"></a>
					                        </div>
					                    </div>
					
					                    <hr>
					
					
					                    <!-- Newsfeed Content -->
					                    <!--===================================================-->
					                    <div class="comments media-block">
					                        <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url()."assets/";?>img/profile-photos/2.png"></a>
					                        <div class="media-body">
					                            <div class="comment-header">
					                                <a href="#" class="media-heading box-inline text-main text-semibold">John Doe</a> Share a status of <a href="#" class="media-heading box-inline text-main text-semibold">Lucy Doe</a>
					                                <p class="text-muted text-sm"><i class="demo-pli-smartphone-3 icon-lg"></i> - From Mobile - 26 min ago</p>
					                            </div>
					                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt </p>
					                            <a class="btn btn-sm btn-default"><i class="icon-lg demo-pli-like"></i> Like </a>
					                            <a class="btn btn-sm btn-default"><i class="icon-lg demo-pli-heart-2"></i> Love</a>
					                        </div>
					                    </div>
					                    <!--===================================================-->
					                    <!-- End Newsfeed Content -->
					
					
					
					                    <!-- Newsfeed Content -->
					                    <!--===================================================-->
					                    <div class="comments media-block">
					                        <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url()."assets/";?>img/profile-photos/3.png"></a>
					                        <div class="media-body">
					                            <div class="comment-header">
					                                <a href="#" class="media-heading box-inline text-main text-semibold">Stephen Tran</a> started following <a href="#" class="media-heading box-inline text-main text-semibold">Kathryn Obrien</a>
					                                <p class="text-muted text-sm"><i class="demo-pli-laptop icon-lg"></i> - From Notebook - 34 min ago</p>
					                            </div>
					                        </div>
					                    </div>
					                    <!--===================================================-->
					                    <!-- End Newsfeed Content -->
					
					
					                    <!-- Newsfeed Content -->
					                    <!--===================================================-->
					                    <div class="comments media-block">
					                        <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url()."assets/";?>img/profile-photos/6.png"></a>
					                        <div class="media-body">
					                            <div class="comment-header">
					                                <a href="#" class="media-heading box-inline text-main text-semibold">Karen Murray</a> posted message on <a href="#" class="media-heading box-inline text-main text-semibold">Howard Rios</a> site.
					                                <p class="text-muted text-sm"><i class="demo-pli-monitor-2 icon-lg"></i> - From Desktop - 55 min ago</p>
					                            </div>
					                            <blockquote class="text-muted text-sm">
					                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					                            </blockquote>
					                        </div>
					                    </div>
					                    <!--===================================================-->
					                    <!-- End Newsfeed Content -->
					
					
					
					                    <!-- Newsfeed Content -->
					                    <!--===================================================-->
					                    <div class="comments media-block">
					                        <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url()."assets/";?>img/profile-photos/10.png"></a>
					                        <div class="media-body">
					                            <div class="comment-header">
					                                <div><a href="#" class="media-heading box-inline text-main text-semibold">Lisa D</a> added new photo to <span class="text-semibold text-main">General photos</span></div>
					                                <p class="text-muted text-sm"><i class="demo-pli-smartphone-3 icon-lg"></i> Mobile - 11 min ago</p>
					                            </div>
					                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
					
					                            <div class="comment-content comment-photos row">
					                                <div class="col-sm-6">
					                                    <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/shared-img-3.jpg" alt="Image">
					                                </div>
					                                <div class="col-sm-6">
					                                    <img class="img-responsive" src="<?php echo base_url()."assets/";?>img/shared-img-2.jpg" alt="Image">
					                                </div>
					                            </div>
					
					                            <ul class="comment-content list-inline">
					                                <li><a href="#"><i class="demo-pli-heart-2 icon-lg "></i>87</a></li>
					                                <li><a href="#"><i class="demo-pli-speech-bubble-4 icon-lg "></i>107</a></li>
					                                <li><a href="#"><i class="demo-pli-right-4 icon-lg"></i>95</a></li>
					                            </ul>
					
					                            <!-- Comments -->
					                            <div class="comment-body">
					                                <div class="comment-content media">
					                                    <a class="media-left" href="#"><img class="img-circle img-xs" alt="Profile Picture" src="<?php echo base_url()."assets/";?>img/profile-photos/5.png"></a>
					                                    <div class="media-body">
					                                        <div class="comment-header">
					                                            <a href="#" class="text-main text-semibold">Bobby Marz</a>
					                                            <small class="text-muted">7 min ago</small>
					                                        </div>
					                                        Sed diam nonummy nibh euismod.
					                                    </div>
					                                </div>
					
					                                <div class="comment-content media">
					                                    <a class="media-left" href="#"><img class="img-circle img-xs" alt="Profile Picture" src="<?php echo base_url()."assets/";?>img/profile-photos/7.png"></a>
					                                    <div class="media-body">
					                                        <div class="comment-header">
					                                            <a href="#" class="text-main text-semibold">Lucy Moon</a>
					                                            <small class="text-muted">2 Hours ago</small>
					                                        </div>
					                                        Duis autem vel eum iriure dolor in vulputate ?
					                                    </div>
					                                </div>
					
					                                <div class="comment-content media">
					                                    <a class="media-left" href="#"><img class="img-circle img-xs" alt="Profile Picture" src="<?php echo base_url()."assets/";?>img/profile-photos/4.png"></a>
					                                    <div class="media-body">
					                                        <div class="comment-header">
					                                            <a href="#" class="text-main text-semibold">Jacky Lore</a>
					                                            <small class="text-muted">1 Days ago</small>
					                                        </div>
					                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.
					                                    </div>
					                                </div>
					                                <button class="btn btn-default btn-block mar-ver"><span class="text-semibold">36</span> Load More</button>
					                            </div>
					                        </div>
					                    </div>
					                    <!--===================================================-->
					                    <!-- End Newsfeed Content -->
					
					
					
					                    <!-- Newsfeed Content -->
					                    <!--===================================================-->
					                    <div class="comments media-block">
					                        <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url()."assets/";?>img/profile-photos/5.png"></a>
					                        <div class="media-body">
					                            <div class="comment-header">
					                                <a href="#" class="media-heading box-inline text-main text-semibold">Donald Brown</a> commented on your post.
					                                <p class="text-muted text-sm"><i class="demo-pli-laptop icon-lg"></i> - From Notebook - 34 min ago</p>
					                            </div>
					                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt </p>
					                            <!--<form class="publisher bt-1 border-fade bg-white">
					                                <img class="avatar avatar-sm" src="<?php echo base_url()."assets/";?>img/profile-photos/6.png">
					                                <input class="publisher-input" type="text" placeholder="Add Your Comment">
					                                <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
					                                <span class="publisher-btn file-group">
					                                    <i class="demo-pli-camera-2"></i>
					                                    <input type="file">
					                                </span>
					                            </form>-->
					                        </div>
					                    </div>
					                    <!--===================================================-->
					                    <!-- End Newsfeed Content -->
					
					
					                    <!-- Newsfeed Content -->
					                    <!--===================================================-->
					                    <div class="comments media-block">
					                        <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url()."assets/";?>img/profile-photos/8.png"></a>
					                        <div class="media-body">
					                            <div class="comment-header">
					                                <a href="#" class="media-heading box-inline text-main text-semibold">Kathryn Obrien</a> Share a status of <a href="#" class="media-heading box-inline text-main text-semibold">Lucy Doe</a>
					                                <p class="text-muted text-sm"><i class="demo-pli-smartphone-3 icon-lg"></i> - From Mobile - 26 min ago</p>
					                            </div>
					                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt </p>
					                            <div class="text-right">
					                                <a class="btn btn-sm btn-default"><i class="icon-lg demo-pli-like"></i> Like </a>
					                                <a class="btn btn-sm btn-default"><i class="icon-lg demo-pli-heart-2"></i> Love</a>
					                                <a class="btn btn-sm btn-purple"><i class="icon-lg demo-pli-speech-bubble-5"></i> Message</a>
					                            </div>
					                        </div>
					                    </div>
					                    <!--===================================================-->
					                    <!-- End Newsfeed Content -->
					
					
					                    <button class="btn btn-primary btn-block mar-ver">Load More</button>
					                </div>
					            </div>
					        </div>
					    </div>
					    
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--ASIDE-->
            <!--===================================================-->
            <aside id="aside-container">
                <div id="aside">
                    <div class="nano">
                        <div class="nano-content">
                            
                            <!--Nav tabs-->
                            <!--================================-->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#demo-asd-tab-1" data-toggle="tab">
                                        <i class="demo-pli-speech-bubble-7 icon-lg"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-2" data-toggle="tab">
                                        <i class="demo-pli-information icon-lg icon-fw"></i> Report
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-3" data-toggle="tab">
                                        <i class="demo-pli-wrench icon-lg icon-fw"></i> Settings
                                    </a>
                                </li>
                            </ul>
                            <!--================================-->
                            <!--End nav tabs-->



                            <!-- Tabs Content -->
                            <!--================================-->
                            <div class="tab-content">

                                <!--First tab (Contact list)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">
                                        <span class="pull-right badge badge-warning">3</span> Family
                                    </p>

                                    <!--Family-->
                                    <div class="list-group bg-trans">
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="<?php echo base_url()."assets/";?>img/profile-photos/2.png" alt="Profile Picture">
												<i class="badge badge-success badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Stephen Tran</p>
							                    <small class="text-muteds">Availabe</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="<?php echo base_url()."assets/";?>img/profile-photos/7.png" alt="Profile Picture">
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Brittany Meyer</p>
							                    <small class="text-muteds">I think so</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="<?php echo base_url()."assets/";?>img/profile-photos/1.png" alt="Profile Picture">
												<i class="badge badge-info badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Jack George</p>
							                    <small class="text-muteds">Last Seen 2 hours ago</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="<?php echo base_url()."assets/";?>img/profile-photos/4.png" alt="Profile Picture">
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Donald Brown</p>
							                    <small class="text-muteds">Lorem ipsum dolor sit amet.</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="<?php echo base_url()."assets/";?>img/profile-photos/8.png" alt="Profile Picture">
												<i class="badge badge-warning badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Betty Murphy</p>
							                    <small class="text-muteds">Idle</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="<?php echo base_url()."assets/";?>img/profile-photos/9.png" alt="Profile Picture">
												<i class="badge badge-danger badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Samantha Reid</p>
							                    <small class="text-muteds">Offline</small>
							                </div>
							            </a>
                                    </div>

                                    <hr>
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">
                                        <span class="pull-right badge badge-success">Offline</span> Friends
                                    </p>

                                    <!--Works-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
                                        </a>
                                    </div>


                                    <hr>
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">News</p>

                                    <div class="pad-hor">
                                        <p>Lorem ipsum dolor sit amet, consectetuer
                                            <a data-title="45%" class="add-tooltip text-semibold text-main" href="#">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor sit amet.
                                        </p>
                                        <small><em>Last Update : Des 12, 2014</em></small>
                                    </div>


                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--End first tab (Contact list)-->


                                <!--Second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-2">

                                    <!--Monthly billing-->
                                    <div class="pad-all">
                                        <p class="pad-ver text-main text-sm text-uppercase text-bold">Billing &amp; reports</p>
                                        <p>Get <strong class="text-main">$5.00</strong> off your next bill by making sure your full payment reaches us before August 5, 2018.</p>
                                    </div>
                                    <hr class="new-section-xs">
                                    <div class="pad-all">
                                        <span class="pad-ver text-main text-sm text-uppercase text-bold">Amount Due On</span>
                                        <p class="text-sm">August 17, 2018</p>
                                        <p class="text-2x text-thin text-main">$83.09</p>
                                        <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                    </div>


                                    <hr>

                                    <p class="pad-all text-main text-sm text-uppercase text-bold">Additional Actions</p>

                                    <!--Simple Menu-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item"><i class="demo-pli-information icon-lg icon-fw"></i> Service Information</a>
                                        <a href="#" class="list-group-item"><i class="demo-pli-mine icon-lg icon-fw"></i> Usage Profile</a>
                                        <a href="#" class="list-group-item"><span class="label label-info pull-right">New</span><i class="demo-pli-credit-card-2 icon-lg icon-fw"></i> Payment Options</a>
                                        <a href="#" class="list-group-item"><i class="demo-pli-support icon-lg icon-fw"></i> Message Center</a>
                                    </div>


                                    <hr>

                                    <div class="text-center">
                                        <div><i class="demo-pli-old-telephone icon-3x"></i></div>
                                        Questions?
                                        <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                        <small><em>We are here 24/7</em></small>
                                    </div>
                                </div>
                                <!--End second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                                <!--Third tab (Settings)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-3">
                                    <ul class="list-group bg-trans">
                                        <li class="pad-top list-header">
                                            <p class="text-main text-sm text-uppercase text-bold mar-no">Account Settings</p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-1" type="checkbox" checked>
                                                <label for="demo-switch-1"></label>
                                            </div>
                                            <p class="mar-no text-main">Show my personal status</p>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-2" type="checkbox" checked>
                                                <label for="demo-switch-2"></label>
                                            </div>
                                            <p class="mar-no text-main">Show offline contact</p>
                                            <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-3" type="checkbox">
                                                <label for="demo-switch-3"></label>
                                            </div>
                                            <p class="mar-no text-main">Invisible mode </p>
                                            <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </small>
                                        </li>
                                    </ul>


                                    <hr>

                                    <ul class="list-group pad-btm bg-trans">
                                        <li class="list-header"><p class="text-main text-sm text-uppercase text-bold mar-no">Public Settings</p></li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-4" type="checkbox" checked>
                                                <label for="demo-switch-4"></label>
                                            </div>
                                            Online status
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-5" type="checkbox" checked>
                                                <label for="demo-switch-5"></label>
                                            </div>
                                            Show offline contact
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-6" type="checkbox" checked>
                                                <label for="demo-switch-6"></label>
                                            </div>
                                            Show my device icon
                                        </li>
                                    </ul>



                                    <hr>

                                    <p class="pad-hor text-main text-sm text-uppercase text-bold mar-no">Task Progress</p>
                                    <div class="pad-all">
                                        <p class="text-main">Upgrade Progress</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                        </div>
                                        <small>15% Completed</small>
                                    </div>
                                    <div class="pad-hor">
                                        <p class="text-main">Database</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                        </div>
                                        <small>17/23 Database</small>
                                    </div>

                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--Third tab (Settings)-->

                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!--===================================================-->
            <!--END ASIDE-->

            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <img class="img-circle img-md" src="<?php echo base_url()."assets/";?>img/profile-photos/1.png" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name"><?php echo $this->session->userdata('Student_Name'); ?></p>
                                            <span class="mnp-desc"><?php echo $this->session->userdata('email'); ?></span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-information icon-lg icon-fw"></i> Help
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                                        </a>
                                    </div>
                                </div>


                                <!--Shortcut buttons-->
                                <!--================================-->
                                <div id="mainnav-shortcut">
                                    <ul class="list-unstyled shortcut-wrap">
                                        <li class="col-xs-3" data-content="My Profile">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-trans-dark">
                                                <i class="demo-psi-male"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Messages">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-trans-dark">
                                                <i class="demo-psi-speech-bubble-3"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Activity">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-trans-dark">
                                                <i class="demo-psi-thunder"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Lock Screen">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-trans-dark">
                                                <i class="demo-psi-lock-2"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--================================-->
                                <!--End shortcut buttons-->


                                <ul id="mainnav-menu" class="list-group">
						
						            <!--Category name-->
						            <li class="list-header">Navigation</li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-home"></i>
						                    <span class="menu-title">Dashboard</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="index.html">Dashboard 1</a></li>
											<li><a href="dashboard-2.html">Dashboard 2</a></li>
											<li><a href="dashboard-3.html">Dashboard 3</a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-split-vertical-2"></i>
						                    <span class="menu-title">Layouts</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="layouts-collapsed-navigation.html">Collapsed Navigation</a></li>
											<li><a href="layouts-offcanvas-navigation.html">Off-Canvas Navigation</a></li>
											<li><a href="layouts-offcanvas-slide-in-navigation.html">Slide-in Navigation</a></li>
											<li><a href="layouts-offcanvas-revealing-navigation.html">Revealing Navigation</a></li>
											<li class="list-divider"></li>
											<li><a href="layouts-aside-right-side.html">Aside on the right side</a></li>
											<li><a href="layouts-aside-left-side.html">Aside on the left side</a></li>
											<li><a href="layouts-aside-dark-theme.html">Dark version of aside</a></li>
											<li class="list-divider"></li>
											<li><a href="layouts-fixed-navbar.html">Fixed Navbar</a></li>
											<li><a href="layouts-fixed-footer.html">Fixed Footer</a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="widgets.html">
						                    <i class="demo-psi-gear-2"></i>
						                    <span class="menu-title">
												Widgets
												<span class="pull-right badge badge-warning">24</span>
											</span>
						                </a>
						            </li>
						
						            <li class="list-divider"></li>
						
						            <!--Category name-->
						            <li class="list-header">Components</li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-boot-2"></i>
						                    <span class="menu-title">UI Elements</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="ui-buttons.html">Buttons</a></li>
											<li><a href="ui-panels.html">Panels</a></li>
											<li><a href="ui-modals.html">Modals</a></li>
											<li><a href="ui-progress-bars.html">Progress bars</a></li>
											<li><a href="ui-components.html">Components</a></li>
											<li><a href="ui-typography.html">Typography</a></li>
											<li><a href="ui-list-group.html">List Group</a></li>
											<li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
											<li><a href="ui-alerts-tooltips.html">Alerts &amp; Tooltips</a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-pen-5"></i>
						                    <span class="menu-title">Forms</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="forms-general.html">General</a></li>
											<li><a href="forms-components.html">Advanced Components</a></li>
											<li><a href="forms-validation.html">Validation</a></li>
											<li><a href="forms-wizard.html">Wizard</a></li>
											<li><a href="forms-file-upload.html">File Upload</a></li>
											<li><a href="forms-text-editor.html">Text Editor</a></li>
											<li><a href="forms-markdown.html">Markdown</a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-receipt-4"></i>
						                    <span class="menu-title">Tables</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="tables-static.html">Static Tables</a></li>
											<li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>
											<li><a href="tables-datatable.html">Data Tables</a></li>
											<li><a href="tables-footable.html">Foo Tables</a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-bar-chart"></i>
						                    <span class="menu-title">Charts</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="charts-morris-js.html">Morris JS</a></li>
											<li><a href="charts-flot-charts.html">Flot Charts</a></li>
											<li><a href="charts-easy-pie-charts.html">Easy Pie Charts</a></li>
											<li><a href="charts-sparklines.html">Sparklines</a></li>
											
						                </ul>
						            </li>
						
						            <li class="list-divider"></li>
						
						            <!--Category name-->
						            <li class="list-header">More</li>
						
						            <!--Menu list item-->
						            <li class="active-sub">
						                <a href="#">
						                    <i class="demo-psi-computer-secure"></i>
						                    <span class="menu-title">App Views</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse in">
						                    <li><a href="app-file-manager.html">File Manager</a></li>
											<li><a href="app-users.html">Users</a></li>
											<li><a href="app-users-2.html">Users 2</a></li>
											<li class="active-link"><a href="app-profile.html">Profile</a></li>
											<li><a href="app-calendar.html">Calendar</a></li>
											<li><a href="app-taskboard.html">Taskboard</a></li>
											<li><a href="app-contact-us.html">Contact Us</a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-repair"></i>
						                    <span class="menu-title">Miscellaneous</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="misc-timeline.html">Timeline</a></li>
											<li><a href="misc-maps.html">Google Maps</a></li>
											<li><a href="xplugins-notifications.html">Notifications<span class="label label-purple pull-right">Improved</span></a></li>
											<li><a href="misc-nestable-list.html">Nestable List</a></li>
											<li><a href="misc-animate-css.html">CSS Animations</a></li>
											<li><a href="misc-css-loaders.html">CSS Loaders</a></li>
											<li><a href="misc-spinkit.html">Spinkit</a></li>
											<li><a href="misc-tree-view.html">Tree View</a></li>
											<li><a href="misc-clipboard.html">Clipboard</a></li>
											<li><a href="misc-x-editable.html">X-Editable</a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-file-html"></i>
						                    <span class="menu-title">Pages</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="pages-blank.html">Blank Page</a></li>
											<li><a href="pages-invoice.html">Invoice</a></li>
											<li><a href="pages-search-results.html">Search Results</a></li>
											<li><a href="pages-faq.html">FAQ</a></li>
											<li class="list-divider"></li>
											<li><a href="pages-404.html">Error 404 </a></li>
											<li><a href="pages-500.html">Error 500</a></li>
											<li><a href="pages-maintenance.html">Maintenance</a></li>
											<li class="list-divider"></li>
											<li><a href="pages-login.html">Login</a></li>
											<li><a href="pages-register.html">Register</a></li>
											<li><a href="pages-password-reminder.html">Password Reminder</a></li>
											<li><a href="pages-lock-screen.html">Lock Screen</a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-warning-window"></i>
						                    <span class="menu-title">Grid System</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="grid-bootstrap.html">Bootstrap Grid</a></li>
											<li><a href="grid-liquid-fixed.html">Liquid Fixed</a></li>
											<li><a href="grid-match-height.html">Match Height</a></li>
											<li><a href="grid-masonry.html">Masonry</a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-mail"></i>
						                    <span class="menu-title">Email</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="mailbox.html">Inbox</a></li>
											<li><a href="mailbox-message.html">View Message</a></li>
											<li><a href="mailbox-compose.html">Compose Message</a></li>
											<li><a href="mailbox-templates.html">Email Templates</a></li>
											
						                </ul>
						            </li>


                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="demo-psi-tactic"></i>
                                            <span class="menu-title">Menu Level</span>
                                            <i class="arrow"></i>
                                        </a>

                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li><a href="#">Second Level Item</a></li>
                                            <li><a href="#">Second Level Item</a></li>
                                            <li><a href="#">Second Level Item</a></li>
                                            <li class="list-divider"></li>
                                            <li>
                                                <a href="#">Third Level<i class="arrow"></i></a>

                                                <!--Submenu-->
                                                <ul class="collapse">
                                                    <li><a href="#">Third Level Item</a></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Third Level<i class="arrow"></i></a>

                                                <!--Submenu-->
                                                <ul class="collapse">
                                                    <li><a href="page-blank2.html">Third Level Item 3</a></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                    <li class="list-divider"></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

						
						            <li class="list-divider"></li>
						
						            <!--Category name-->
						            <li class="list-header">Extras</li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-happy"></i>
						                    <span class="menu-title">Icons Pack</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="icons-ionicons.html">Ion Icons</a></li>
											<li><a href="icons-themify.html">Themify</a></li>
											<li><a href="icons-font-awesome.html">Font Awesome</a></li>
											<li><a href="icons-flagicons.html">Flag Icon CSS<span class="label label-info pull-right">New</span></a></li>
											<li><a href="icons-weather-icons.html">Weather Icons<span class="label label-info pull-right">New</span></a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-medal-2"></i>
						                    <span class="menu-title">
												PREMIUM ICONS
												<span class="label label-danger pull-right">BEST</span>
											</span>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="premium-line-icons.html">Line Icons Pack</a></li>
											<li><a href="premium-solid-icons.html">Solid Icons Pack</a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="helper-classes.html">
						                    <i class="demo-psi-inbox-full"></i>
						                    <span class="menu-title">Helper Classes</span>
						                </a>
						            </li>                                </ul>


                                <!--Widget-->
                                <!--================================-->
                                <div class="mainnav-widget">

                                    <!-- Show the button on collapsed navigation -->
                                    <div class="show-small">
                                        <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                            <i class="demo-pli-monitor-2"></i>
                                        </a>
                                    </div>

                                    <!-- Hide the content on collapsed navigation -->
                                    <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                                        <ul class="list-group">
                                            <li class="list-header pad-no pad-ver">Server Status</li>
                                            <li class="mar-btm">
                                                <span class="label label-primary pull-right">15%</span>
                                                <p>CPU Usage</p>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-primary" style="width: 15%;">
                                                        <span class="sr-only">15%</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mar-btm">
                                                <span class="label label-purple pull-right">75%</span>
                                                <p>Bandwidth</p>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-purple" style="width: 75%;">
                                                        <span class="sr-only">75%</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pad-ver"><a href="#" class="btn btn-success btn-bock">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--================================-->
                                <!--End widget-->

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>