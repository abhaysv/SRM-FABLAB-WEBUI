<?php
defined('BASEPATH') OR exit('No direct path allowed');
// $myJSON = json_encode($this->session->userdata());

// echo $myJSON;
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



                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="fixed-fluid">
                                     <div class="fluid">
                                        <div class="text-right">
                                            <button class="btn btn-sm btn-primary">Edit Profile</button>
                                        </div>
                    
                                    </div>
                                    <div class="fixed-md-200 pull-sm-left fixed-right-border">
                    
                                        <!-- Simple profile -->
                                        <div class="text-center" style="padding: 6%;">
                                            <div class="pad-ver">
                                                <img src="<?php echo base_url()."assets/";?>img/profile-photos/1.png" class="img-lg img-circle" alt="Profile Picture">
                                            </div>
                                            <h4 class="text-lg text-overflow mar-no"><?php echo $this->session->userdata('Student_Name'); ?></h4>
                                            <p class="text-sm text-sm-2 text-muted"><?php echo $this->session->userdata('Registration_Number'); ?> | Batch <?php echo $this->session->userdata('Batch'); ?></p>
                                            <p class="text-sm text-sm-2 text-muted"><?php echo ucwords($this->session->userdata('role')); ?></p>
                    
                                          
                                        </div>
                                        <hr>
                                                                            <!-- Profile Details -->
                                        <p class="pad-ver text-main text-sm text-uppercase text-bold">About</p>
                                        <p class="text-sm ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                        <p class="pad-ver text-main text-sm text-uppercase text-bold">Address</p>
                                        <p class="text-sm "><?php echo $this->session->userdata('Communication_Address'); ?></p>

                                     
                                    </div>


                                    <div class="fixed-md-200 pull-sm-left fixed-right-border">
                    
                                        <!-- Simple profile -->
                                       <!-- Donut Chart -->
                                <!---------------------------------->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h1 class="panel-title">Credits: </h1>
                                    </div>
                                    <div class="panel-body">
                                        <div id="demo-morris-donut" class="morris-donut" style="height: 250px"></div>
                                    </div>
                                </div>
                                        <hr>
                    
                                        <p class="pad-ver text-main text-sm text-uppercase text-bold">Skills</p>
                                        <ul class="list-inline">
                                            <li class="tag tag-sm">PHP Programming</li>
                                            <li class="tag tag-sm">Marketing</li>
                                            <li class="tag tag-sm">Graphic Design</li>
                                            <li class="tag tag-sm">Sketch</li>
                                            <li class="tag tag-sm">Photography</li>
                                            <li class="tag tag-sm">PHP Programming</li>
                                            <li class="tag tag-sm">Marketing</li>
                                            <li class="tag tag-sm">Graphic Design</li>
                                            <li class="tag tag-sm">Sketch</li>
                                            <li class="tag tag-sm">Photography</li>
                                        </ul>
                    
                    
                                        
                    
                                     
                                    </div>

                                   


                                    <div class="fixed-md-250 pull-sm-left">
                                    
                                        <!-- Simple profile -->
                                        <div class="text-center" style="padding: 7%;">
                                            <h4 class="text-lg text-lg-3 text-overflow mar-no">Department</h4>
                                            <p class="text-sm text-sm-2 text-muted"><?php echo $this->session->userdata('Department'); ?></p>
                                            <br>
                                            <h4 class="text-lg text-lg-2 text-overflow mar-no">Academic Advisor</h4>
                                            <p class="text-sm text-sm-2 text-muted"><?php echo $this->session->userdata('Academic_Advsior');?></p>
                                            <br>
                                            <h4 class="text-lg text-lg-2 text-overflow mar-no">Faculty Advisor</h4>
                                            <p class="text-sm text-sm-2 text-muted"><?php echo $this->session->userdata('Faculty_Advisor');?></p>
                                           
                                        </div>
                                        <hr>
                    
                                        <!-- Profile Details -->
                                        <div class="row" style="text-align: center;">
                                            <div class="col-xs-6">
                                                <p class="pad-ver text-main text-sm text-uppercase text-bold">Subject</p>
                                                <p>A Subject1</p>
                                                <p>A Subject1</p>
                                                <p>A Subject1</p>
                                                <p>A Subject1</p>
                                                <p>A Subject1</p>
                                                <p>A Subject1</p>
                                                <p>A Subject1</p>
                             
                                        
                                            </div>

                                            <div class="col-xs-6">
                                                <p class="pad-ver text-main text-sm text-uppercase text-bold">Attendance</p>
                                                <p>90%</p>
                                                <p>90%</p>
                                                <p>90%</p>
                                                <p>90%</p>
                                                <p>90%</p>
                                                <p>90%</p>
                                                <p>90%</p>
                             
                                        
                                            </div>
                                        </div>
                                        
                    
                    
                                        
                    
                                     
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

 <!--Start of about-->
                                <!--================================-->
                                

                                <ul id="mainnav-menu" class="list-group">
                        
                                    <!--Category name-->
                                    <!-- <li class="list-header">Navigation</li> -->
                        
                                    <!--Menu list item-->
                                    <li>
                                        <a href="#" class="about-info">
                                            <i class="demo-psi-home"></i>
                                            <span class="menu-title">Male</span>
                                            <!-- <i class="arrow"></i> -->
                                            &emsp;&emsp;
                                            <i class="demo-psi-home"></i>
                                            <span class="menu-title">03/03/1998</span>
                                           <!--   <i c -->
                                        </a>
                        
                                        <!--Submenu
                                         <ul class="collapse">
                                            <li><a href="index.html">Dashboard 1</a></li>
                                            <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                            <li><a href="dashboard-3.html">Dashboard 3</a></li>
                                            
                                        </ul> -->
                                    </li>

                                      <li>
                                        <a href="#" class="about-info">
                                            <i class="demo-psi-home"></i>
                                            <span class="menu-title">9876543210</span>
                                            <!-- <i class="arrow"></i> -->
                                        </a>
                        
                                        <!--Submenu-->
                                        <!-- <ul class="collapse">
                                            <li><a href="index.html">Dashboard 1</a></li>
                                            <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                            <li><a href="dashboard-3.html">Dashboard 3</a></li>
                                            
                                        </ul> -->
                                    </li>

                                      <li>
                                        <a href="#" class="about-info">
                                            <i class="demo-psi-home"></i>
                                            <span class="menu-title">example@example.com</span>
                                            <!-- <i class="arrow"></i> -->
                                        </a>
                        
                                        <!--Submenu-->
                                        <!-- <ul class="collapse">
                                            <li><a href="index.html">Dashboard 1</a></li>
                                            <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                            <li><a href="dashboard-3.html">Dashboard 3</a></li>
                                            
                                        </ul> -->
                                    </li>

                                      <li>
                                        <a href="#" class="about-info">
                                            <i class="demo-psi-home"></i>
                                            <span class="menu-title">Chennai,TN</span>
                                            <!-- <i class="arrow"></i> -->
                                        </a>
                        
                                        <!--Submenu-->
                                        <!-- <ul class="collapse">
                                            <li><a href="index.html">Dashboard 1</a></li>
                                            <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                            <li><a href="dashboard-3.html">Dashboard 3</a></li>
                                            
                                        </ul> -->
                                    </li>
                        
                                    <!--Menu list item-->
                                    <!-- <li>
                                        <a href="#">
                                            <i class="demo-psi-split-vertical-2"></i>
                                            <span class="menu-title">Layouts</span>
                                            <i class="arrow"></i>
                                        </a>
                         -->
                                        <!--Submenu-->
                                        <!-- <ul class="collapse">
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
                         -->
                                    <!--Menu list item-->
                                    <!-- <li>
                                        <a href="widgets.html">
                                            <i class="demo-psi-gear-2"></i>
                                            <span class="menu-title">
                                                Widgets
                                                <span class="pull-right badge badge-warning">24</span>
                                            </span>
                                        </a>
                                    </li> -->
                        
                                    <li class="list-divider"></li>
                         
                                    <!--Category name-->
                                   <!-- 
                            </div>
                        </div> -->
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>

      <script type="text/javascript">
    
    $(document).on('nifty.ready', function () {



    // MORRIS DONUT CHART
    // =================================================================
    // Require MorrisJS Chart
    // -----------------------------------------------------------------
    // http://morrisjs.github.io/morris.js/
    // =================================================================
    var morrisDonut = Morris.Donut({
        element: 'demo-morris-donut',
        data: [
            {label: 'Total Credits', value: 50},
            {label: 'Used Credits', value: 20}
        ],
        colors: [
            '#ec407a',
            '#03a9f4',
            '#d8dfe2'
        ],
        resize:true
    });

    morrisDonut.select(1);
});


</script>