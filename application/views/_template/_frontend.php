<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>/plugins/images/favicon.ico">
    <title><?=ucwords($global->headline)?></title>
    <link href="<?=base_url()?>/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Wizard CSS -->
    <link href="<?=base_url()?>/plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/plugins/bower_components/datatables/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/plugins/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- jQuery -->
    <script src="<?=base_url()?>/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>/plugins/bootstrap/dist/js/tether.min.js"></script>
    <script src="<?=base_url()?>/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <script src="<?=base_url()?>/plugins/js/jquery.validate.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="<?=base_url()?>/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Datatables -->
    <script src="<?=base_url()?>/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/datatables/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/datatables/buttons.flash.min.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/datatables/jszip.min.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/datatables/pdfmake.min.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/datatables/vfs_fonts.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/datatables/buttons.colVis.min.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/datatables/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/datatables/buttons.print.min.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!-- Sweet-Alert  -->
    <script src="<?=base_url()?>/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?=base_url()?>/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/skycons/skycons.js"></script>
    <!--Counter js -->
    <script src="<?=base_url()?>/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- Chart JS -->
    <script src="<?=base_url()?>/plugins/bower_components/Chart.js/Chart.min.js"></script>
    <!-- Form Wizard JavaScript -->
    <script src="<?=base_url()?>/plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
    <!-- FormValidation -->
    <link rel="stylesheet" href="<?=base_url()?>/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css">
    <!-- FormValidation plugin and the class supports validating Bootstrap form -->
    <script src="<?=base_url()?>/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- Toggle icon for mobile view -->
                <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <!-- Logo -->
                <div class="top-left-part">
                    <a class="logo" href="<?=site_url()?>">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b><img src="<?=base_url()?>/plugins/images/logohead.png" alt="home" style="width: 40px;height: 40px"/></b>
                        <!-- Logo text image you can use text also 
                        <span class="hidden-xs"><img src="<?=base_url()?>/plugins/images/eliteadmin-text.png" alt="home" /></span>
                        -->
                        <span class="hidden-xs">Dashboard</span>                        
                    </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <!-- This is the message dropdown -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a href="<?=site_url('login')?>">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <?php foreach ($menu as $menu):?>
                      <?php if($menu->submenu!=0):?>

                        <li>
                            <a href="index.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> <?= ucwords(str_replace('_', ' ', $menu->menu_nama))?> <span class="fa arrow"></span> </span></a>
                            <ul class="nav nav-second-level">
                              <?php foreach($menu->submenu AS $submenu):?>
                                <li> <a href="<?= site_url($submenu->menu_link)?>"><?= ucwords(str_replace('_', ' ',$submenu->menu_nama))?></a> </li>
                              <?php endforeach;?>                                 
                            </ul>
                        </li>                                                   
                      <?php else:?>
                        <li> 
                            <a href="<?= site_url($menu->menu_link)?>" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu"><?= ucwords(str_replace('_', ' ',$menu->menu_nama))?></span></a> 
                        </li>                                       
                      <?php endif;?>
                    <?php endforeach;?>                     
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?=ucwords($global->headline)?></h4>
                    </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li class="active" ><a href="JavaScript:loaddata()" ><?=ucwords($global->headline)?></a></li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
                <!-- KONTEN -->
                <?php
                  if(file_exists(APPPATH.$global->view)){
                     include(APPPATH.$global->view);
                  }else{
                    echo "halaman view tidak ditemukan";
                  }
                ?>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> <?=date('Y')?> &copy; <a href="mailto:haryanto.duwi@gmail.com">haryanto.duwi@gmail.com</a> </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Sidebar menu plugin JavaScript -->
    <script src="<?=base_url()?>/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--Slimscroll JavaScript For custom scroll-->
    <script src="<?=base_url()?>/plugins/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?=base_url()?>/plugins/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url()?>/plugins/js/custom.min.js"></script>
</body>
</html>
<script type="text/javascript">
    $('#loadingajax').ajaxStart(function(){
        $(this).fadeIn();
    }).ajaxStop(function(){
        $(this).fadeOut();
    });
</script>
