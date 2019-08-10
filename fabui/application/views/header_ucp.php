<?php
defined('BASEPATH') OR exit('No direct path allowed')
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    


    <meta name="theme-color" content="#ffffff">
    

    <meta name="csrf-token" content="M3Onzn5URwhsILuaHc9wEgVUl6vaQCwhoBiP90T1">

    <!-- Bootstrap Core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/fitsigma/";?>/fitsigma_customer/bootstrap/dist/css/bootstrap.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/fitsigma/";?>/fitsigma_customer/bower_components/bootstrap-extension/css/bootstrap-extension.css">

    <!-- Menu CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/fitsigma/";?>/fitsigma_customer/bower_components/sidebar-nav/dist/sidebar-nav.min.css">

    <!-- toast CSS -->
    
    <!-- animation CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/fitsigma/";?>/fitsigma_customer/css/animate.css">

    <!-- Custom CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/fitsigma/";?>/fitsigma_customer/css/style.css">

    <!-- color CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/fitsigma/";?>/fitsigma_customer/css/colors/default.css">

    <!--helper CSS-->
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/fitsigma/";?>/admin/global/plugins/froiden-helper/helper.css">

    <link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/fitsigma/";?>/fitsigma_customer/css/custom.css">

    <style>
        .sidebar #side-menu .user-pro {
            background: url(<?php echo base_url()."assets/fitsigma/";?>/fitsigma_customer/images/profile-menu.png) center center/cover no-repeat;
        }
    </style>
        <link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/fitsigma/";?>/fitsigma_customer/bower_components/morrisjs/morris.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    </head>
    <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    
    <?php
            $arr = $this->session->flashdata(); 
            if(!empty($arr['flash_message'])){
                $html = '<div class="bg-warning container flash-message">';
                $html .= $arr['flash_message']; 
                $html .= '</div>';
                echo $html;
            }
        ?>

        
        
         
        