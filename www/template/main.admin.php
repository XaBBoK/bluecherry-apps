<?php defined('INDVR') or exit(); 

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo DVR_COMPANY_NAME; ?>">
    <meta name="author" content="<?php echo DVR_COMPANY_NAME; ?>">

	<title><?php echo DVR_COMPANY_NAME.' '.DVR_DVR.PAGE_HEADER_SEPARATOR.PAGE_HEADER_MAIN; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="/template/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/template/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/template/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/template/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/template/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/template/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/template/bower_components/animate.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/template/dist/css/main.css?v=<?php echo time(); ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img style="max-width: 80px; margin-top: -10px;" src="/img/logo.png">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/ajax/logout.php"><i class="fa fa-sign-out fa-fw"></i> <?php echo LOGOUT; ?></a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse" id="navbar-collapse">
                    <ul class="nav" id="side-menu">


                        <li>
                            <a href="javascript:void(0);" class='liveView'><i class="fa fa-image fa-fw"></i> <?php echo MMENU_LIVEVIEW; ?></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class='downloadClient'><i class="fa fa-download fa-fw"></i> <?php echo MMENU_CLIENT_DOWNLOAD; ?></a>
                        </li>

                        <li class="divider"></li>
                        <li class="divider"></li>

                        <li>
                            <a href="/ajax/news.php" class="ajax-content"><i class="fa fa-dashboard fa-fw"></i> <?php echo MMENU_NEWS; ?></a>
                        </li>

                        <li class="divider"></li>
                        <li class="divider"></li>

                        <li>
                            <a href="/ajax/general.php" class="ajax-content"><i class="fa fa-cog fa-fw"></i> <?php echo MMENU_GS; ?></a>
                        </li>
                        <li>
                            <a href="/ajax/storage.php" class="ajax-content"><i class="fa fa-hdd-o fa-fw"></i> <?php echo MMENU_STORAGE; ?></a>
                        </li>
                        <li>
                            <a href="/ajax/users.php" class="ajax-content"><i class="fa fa-users fa-fw"></i> <?php echo MMENU_USERS; ?></a>
                        </li>
                        <li>
                            <a href="/ajax/activeusers.php" class="ajax-content"><i class="fa fa-user-md fa-fw"></i> <?php echo MMENU_ACTIVE_USERS; ?></a>
                        </li>

                        <li class="divider"></li>
                        <li class="divider"></li>

                        <li>
                            <a href="/ajax/devices.php" class="ajax-content"><i class="fa fa-video-camera fa-fw"></i> <?php echo MMENU_DEVICES; ?></a>
                        </li>
                        <li>
                            <a href="/ajax/deviceschedule.php" class="ajax-content"><i class="fa fa-th fa-fw"></i> <?php echo MMENU_SCHED; ?></a>
                        </li>
                        <li>
                            <a href="/ajax/notifications.php" class="ajax-content"><i class="fa fa-envelope fa-fw"></i> <?php echo MMENU_NOTFICATIONS; ?></a>
                        </li>

                        <li class="divider"></li>
                        <li class="divider"></li>


                        <li>
                            <a href="/ajax/statistics.php" class="ajax-content"><i class="fa fa-bar-chart-o fa-fw"></i> <?php echo MMENU_STATISTICS; ?></a>
                        </li>
                        <li>
                            <a href="/ajax/backup.php" class="ajax-content"><i class="fa fa-database fa-fw"></i> <?php echo MMENU_BACKUP; ?></a>
                        </li>
                        <li>
                            <a href="/ajax/log.php" class="ajax-content"><i class="fa fa-file-o fa-fw"></i> <?php echo MMENU_LOG; ?></a>
                        </li>
                        <li>
                            <a href="/ajax/licensing.php" class="ajax-content"><i class="fa fa-lock fa-fw"></i> <?php echo MMENU_LICENSING; ?></a>
                        </li>
                    </ul>

                    <div class="panel-body">
                        <div id="sr" class="alert alert-success server-stat">
                            <?php echo SERVER_RUNNING; ?>
                        </div>

                        <div id="snr" class="alert alert-danger server-stat">
                            <?php echo SERVER_NOT_RUNNING; ?>
                        </div>

                        <div id="ncn" class="alert alert-danger">
                            <?php echo NO_CONNECTION; ?>
                        </div>

                        <div id="ftw" class="alert alert-danger server-stat">
                            <?php echo WRITE_FAILED; ?>
                        </div>



			            <?php
            				if ($global_settings->data['G_DISABLE_VERSION_CHECK']==0)
            				if (!$version->version['up_to_date']){
            					echo '<div class="alert alert-danger">'.NOT_UP_TO_DATE.'<br /><a id="lmNewVersion" href="#">'.WANT_TO_LEARN_MORE.'</a></div>';
            				} else {
            					echo '<div class="alert alert-success">'.UP_TO_DATE.': '.$version->version['installed'].'</div>';
            				};
            			?>
                    </div>


                    <div id="server-stats" class="panel panel-default server-stat">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> <?php echo STATS_HEARDER; ?>
                        </div>
                        <div class="panel-body">
                            <div id="stat-cpu">
                                <p>
                                    <strong><?php echo STATS_CPU; ?></strong>
                                    <span class="pull-right text-muted">0%</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>
                                </div>
                            </div>


                            <div id="stat-mem">
                                <p>
                                    <strong><?php echo STATS_MEM; ?></strong>
                                    <span class="pull-right text-muted">0%</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center"><p id="stat-meminfo">123</p></div>

                            <div>
                                <strong><?php echo STATS_UPT ?></strong>
                            </div>
                            <div id="server-uptime"></div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

        <?php  if (!empty($_GLOBALS['general_error'])){ ?>
            <div class="row general-error">
                <div class="col-lg-12">
                    <div class="alert alert-warning <?php echo $_GLOBALS['general_error']['type']; ?>">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <?php echo $_GLOBALS['general_error']['text']; ?>
                    </div>
                </div>
            </div>
		<?php } ?>

            <div id="page-container">
            </div>

        </div>

    </div>

    <!-- jQuery -->
    <script src="/template/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/template/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/template/bower_components/raphael/raphael-min.js"></script>
    <script src="/template/bower_components/morrisjs/morris.min.js"></script>

    <!-- Notify -->
    <script src="/template/bower_components/bootstrap-notify.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/template/dist/js/sb-admin-2.js"></script>

    <!-- Custom Theme JavaScript -->
	<script type="text/javascript" src="/lib/js/var.php"></script>
    <script src="/template/dist/js/main.js?v=<?php echo time(); ?>"></script>
    <script src="/template/dist/js/main_load.js?"></script>

    <script src="/template/dist/js/storage.js"></script>
    <script src="/template/dist/js/users.js"></script>
    <script src="/template/dist/js/devices.js"></script>
    <script src="/template/dist/js/addip.js"></script>
</body>
</html>
