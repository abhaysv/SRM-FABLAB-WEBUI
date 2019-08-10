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
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
       

           <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url()."assets/";?>css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url()."assets/";?>css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="<?php echo base_url()."assets/";?>css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?php echo base_url()."assets/";?>css/demo/nifty-demo.min.css" rel="stylesheet">


        
    <!--Morris.js [ OPTIONAL ]-->
    <link href="<?php echo base_url()."assets/";?>plugins/morris-js/morris.min.css" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="<?php echo base_url()."assets/";?>plugins/magic-check/css/magic-check.min.css" rel="stylesheet">






    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="<?php echo base_url()."assets/";?>plugins/pace/pace.min.css" rel="stylesheet">
    <script src="<?php echo base_url()."assets/";?>plugins/pace/pace.min.js"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="<?php echo base_url()."assets/";?>js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="<?php echo base_url()."assets/";?>js/nifty.min.js"></script>






    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="<?php echo base_url()."assets/";?>js/demo/nifty-demo.min.js"></script>


    <!--Morris.js [ OPTIONAL ]-->
    <script src="<?php echo base_url()."assets/";?>plugins/morris-js/morris.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/morris-js/raphael-js/raphael.min.js"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="<?php echo base_url()."assets/";?>plugins/sparkline/jquery.sparkline.min.js"></script>


    <!--Specify page [ SAMPLE ]-->
    
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

        
        
         
        