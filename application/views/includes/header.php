<?php
$avatar = $this->session->userdata('avatar_path');
$full_name = $this->session->userdata('full_name');
$first_name = $this->session->userdata('first_name');
$middle_name = $this->session->userdata('middle_name');
$last_name = $this->session->userdata('last_name');
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Property Master</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="<?= base_url('assets/img/metis-tile.png') ?>" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/lib/bootstrap/css/bootstrap.css') ?> ">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/lib/font-awesome/css/font-awesome.css') ?>">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/lib/metismenu/metisMenu.css') ?>">

    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/lib/onoffcanvas/onoffcanvas.css') ?>">

    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/lib/animate.css/animate.css') ?>">

	<!-- Datatables -->
    <link href="<?= base_url('assets/lib/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/lib/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/lib/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/lib/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/lib/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')?>" rel="stylesheet">

    <!--jquery-confirm-->
    <link href="<?= base_url('assets/lib/jquery_confirm/jquery-confirm.min.css') ?>" rel="stylesheet">

    <!-- iziToast -->
    <link href="<?= base_url('assets/lib/iziToast/css/iziToast.min.css') ?>" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>-->
<!--    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
<!--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--[endif]-->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="<?= base_url('assets/css/style-switcher.css') ?> ">
    <link rel="stylesheet/less" type="text/css" href="<?= base_url('assets/less/theme.less') ?> ">
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>-->

</head>

<body class="  menu-affix">
<div class="bg-dark dk" id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">


                <!-- Brand and toggle get grouped for better mobile display -->
                <header class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   </header>

                <div class="topnav">
                    <div class="btn-group">
                        <a data-placement="bottom" data-original-title="Full screen" data-toggle="tooltip"
                           class="btn btn-default btn-sm" id="toggleFullScreen">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                           class="btn btn-default btn-sm">
                            <i class="glyphicon glyphicon-envelope"></i>
                            <span class="label label-warning">5</span>
                        </a>
                        <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                           class="btn btn-default btn-sm">
                            <i class="glyphicon glyphicon-comment "></i>
                            <span class="label label-danger">4</span>
                        </a>
                        <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                           class="btn btn-default btn-sm"
                           href="#helpModal">
                            <i class="glyphicon glyphicon-question-sign"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a href="<?= base_url('app/logout') ?> " data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                           class="btn btn-metis-1 btn-sm">
                            <i class="glyphicon glyphicon-off"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                           class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                        </a>
                        <a href="#right" data-toggle="onoffcanvas" class="btn btn-default btn-sm" aria-expanded="false">
                            <span class="glyphicon glyphicon-menu-down"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <header class="head">

        </header>
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div id="left">
        <div class="media user-media bg-dark dker">
            <div class="user-media-toggleHover">
                <span class="fa fa-user"></span>
            </div>
            <div class="user-wrapper bg-dark">
                <a class="user-link" href="">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?= base_url($avatar) ?>" style="height: 74px;width: 66px">
                    <span class="label label-danger user-label">16</span>
                </a>

                <div class="media-body">
                    <h5 class="media-heading"><?= $first_name.' '.$middle_name.'. '.$last_name?></h5>
                    <ul class="list-unstyled user-info">

                    </ul>
                </div>
            </div>
        </div>
        <!-- #menu -->
        <ul id="menu" class="bg-blue dker">
            <li class="">
                <a href="<?= base_url('app') ?> ">
                    <i class="glyphicon glyphicon-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="glyphicon glyphicon-user"></i>
                    <span class="link-title">&nbsp;Clients</span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="<?= base_url('clients/clients_list') ?> ">
                            <i class="glyphicon glyphicon-arrow-right"></i>&nbsp; Clients List </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="">
                    <i class="glyphicon glyphicon-home"></i>
                    <span class="link-title">&nbsp;Properties</span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="<?= base_url('properties/properties_list') ?> ">
                            <i class="glyphicon glyphicon-arrow-right"></i>&nbsp; Properties List </a>
                    </li>
                    <li>
                        <a href="<?= base_url('properties/properties_type_list') ?> ">
                            <i class="glyphicon glyphicon-arrow-right"></i>&nbsp; Property Types </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="">
                    <i class="glyphicon glyphicon-briefcase"></i>
                    <span class="link-title">&nbsp;Contracts</span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="<?= base_url('contracts/contracts_list') ?> ">
                            <i class="glyphicon glyphicon-arrow-right"></i>&nbsp; Contracts List </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="">
                    <i class="glyphicon glyphicon-euro"></i>
                       <span class="link-title">Finances</span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="javascript:;"><i class="glyphicon glyphicon-arrow-right"></i>&nbsp; Accounts </a>
                        <ul class="collapse">
                            <li> <a href="javascript:;">ACCOUNT PAYABLE</a></li>
                            <li> <a href="<?=base_url('finances/account_receivable')?>">ACCOUNT RECEIVABLE</a></li>
                            <li> <a href="javascript:;">BANK</a>  </li>
                            <li> <a href="javascript:;">CASH IN HAND</a>  </li>
                            <li> <a href="javascript:;">DIRECT EXPENSES</a>  </li>
                            <li> <a href="javascript:;">FIXED ASSET</a>  </li>
                            <li> <a href="javascript:;">INDIRECT EXPENSES</a>  </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /#menu -->
    </div>
    <!-- /#left -->
    <div id="right" class="onoffcanvas is-right is-fixed bg-light" aria-expanded=false>
        <a class="onoffcanvas-toggler" href="#right" data-toggle=onoffcanvas aria-expanded=false></a>
        <br>
        <br>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Warning!</strong> Best check yo self, you're not looking too good.
        </div>
        <!-- .well well-small -->
        <div class="well well-small dark">
            <ul class="list-unstyled">
                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
            </ul>
        </div>
        <!-- /.well well-small -->
        <!-- .well well-small -->
        <div class="well well-small dark">
            <button class="btn btn-block">Default</button>
            <button class="btn btn-primary btn-block">Primary</button>
            <button class="btn btn-info btn-block">Info</button>
            <button class="btn btn-success btn-block">Success</button>
            <button class="btn btn-danger btn-block">Danger</button>
            <button class="btn btn-warning btn-block">Warning</button>
            <button class="btn btn-inverse btn-block">Inverse</button>
            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div>
        <!-- /.well well-small -->
        <!-- .well well-small -->
        <div class="well well-small dark">
            <span>Default</span><span class="pull-right"><small>20%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
            </div>
            <span>Success</span><span class="pull-right"><small>40%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
            </div>
            <span>warning</span><span class="pull-right"><small>60%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
            </div>
            <span>Danger</span><span class="pull-right"><small>80%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
            </div>
        </div>
    </div>
    <!-- /#right -->
    <div id="content">
