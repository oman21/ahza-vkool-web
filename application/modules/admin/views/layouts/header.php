<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #4 | Admin Dashboard 2</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/backend/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/backend/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/backend/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/backend/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url()?>assets/backend/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/backend/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?=base_url()?>assets/backend/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="favicon.ico" />

        <link href="<?=base_url()?>assets/backend/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/backend/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

        <script src="<?=base_url()?>assets/backend/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/backend/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/backend/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/backend/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/backend/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>


        <script src="<?=base_url()?>assets/backend/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/backend/global/plugins/ckeditor/ckeditor.JS" type="text/javascript"></script>

    </head>

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <div class="page-logo">
                    <a href="index.html">
                        <img src="<?=base_url()?>assets/backend/layouts/layout4/img/logo-light.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                    </div>
                </div>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <div class="page-top">
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <img alt="" class="img-circle" src="<?=base_url()?>assets/backend/layouts/layout4/img/avatar9.jpg" /> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_login_1.html">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-globe"></i>
                                <span class="title">Konten Web</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">

                                <?php $dashboard    = $page=="dashboard"?"open":"";?>
                                <?php $otomotif     = $page=="otomotif"?"open":"";?>

                                <li class="nav-item start <?=$dashboard?>">
                                    <a href="<?=base_url()?>admin/dashboard" class="nav-link ">
                                        <i class="fa fa-home"></i>
                                        <span class="title">Dashboard</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li class="nav-item start <?=$otomotif?>">
                                    <a href="<?=base_url()?>admin/otomotif" class="nav-link ">
                                        <i class="fa fa-car"></i>
                                        <span class="title">Otomotif</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>