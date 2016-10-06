<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>



    <?= $this->fetch('../meta') ?>
    <?= $this->fetch('../css') ?>
    <?= $this->fetch('../script') ?>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page of Theme #3 for "
          name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <?= $this->Html->css('../assets/global/plugins/font-awesome/css/font-awesome.min.css') ?>
    <?= $this->Html->css('../assets/global/plugins/simple-line-icons/simple-line-icons.min.css') ?>
    <?= $this->Html->css('../assets/global/plugins/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') ?>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <?= $this->Html->css('../assets/global/css/components.min.css') ?>
    <?= $this->Html->css('../assets/global/css/plugins.min.css') ?>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <?= $this->Html->css('../assets/layouts/layout3/css/layout.min.css') ?>
    <?= $this->Html->css('../assets/layouts/layout3/css/themes/default.min.css') ?>
    <?= $this->Html->css('../assets/layouts/layout3/css/custom.min.css') ?>
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<body>


<body class="page-container-bg-solid">
<div class="page-wrapper">
    <?php echo $this->cell('Menu');?>
    <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <div class="container">
                            <!-- BEGIN PAGE TITLE -->

                            <!-- END PAGE TITLE -->
                            <!-- BEGIN PAGE TOOLBAR --><!-- END PAGE TOOLBAR -->
                        </div>
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE CONTENT BODY -->
                    <div class="page-content">
                        <div class="container">
                            <!-- BEGIN PAGE BREADCRUMBS -->
                            <!-- END PAGE BREADCRUMBS -->
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class="page-content-inner">
                                <?= $this->fetch('content') ?>
                            </div>
                            <!-- END PAGE CONTENT INNER -->
                        </div>
                    </div>
                    <!-- END PAGE CONTENT BODY -->
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
<!--                <a href="javascript:;" class="page-quick-sidebar-toggler">-->
<!--                    <i class="icon-login"></i>-->
<!--                </a>-->
<!--                <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">-->
<!--                    <div class="page-quick-sidebar">-->
<!--                        <ul class="nav nav-tabs">-->
<!--                            <li class="active">-->
<!--                                <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users-->
<!--                                    <span class="badge badge-danger">2</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts-->
<!--                                    <span class="badge badge-success">7</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="dropdown">-->
<!--                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More-->
<!--                                    <i class="fa fa-angle-down"></i>-->
<!--                                </a>-->
<!--                                <ul class="dropdown-menu pull-right">-->
<!--                                    <li>-->
<!--                                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">-->
<!--                                            <i class="icon-bell"></i> Alerts </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">-->
<!--                                            <i class="icon-info"></i> Notifications </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">-->
<!--                                            <i class="icon-speech"></i> Activities </a>-->
<!--                                    </li>-->
<!--                                    <li class="divider"></li>-->
<!--                                    <li>-->
<!--                                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">-->
<!--                                            <i class="icon-settings"></i> Settings </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                        <div class="tab-content">-->
<!--                            <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">-->
<!--                                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">-->
<!--                                    <h3 class="list-heading">Staff</h3>-->
<!--                                    <ul class="media-list list-items">-->
<!--                                        <li class="media">-->
<!--                                            <div class="media-status">-->
<!--                                                <span class="badge badge-success">8</span>-->
<!--                                            </div>-->
<!--                                            <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">-->
<!--                                            <div class="media-body">-->
<!--                                                <h4 class="media-heading">Bob Nilson</h4>-->
<!--                                                <div class="media-heading-sub"> Project Manager </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="media">-->
<!--                                            <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">-->
<!--                                            <div class="media-body">-->
<!--                                                <h4 class="media-heading">Nick Larson</h4>-->
<!--                                                <div class="media-heading-sub"> Art Director </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="media">-->
<!--                                            <div class="media-status">-->
<!--                                                <span class="badge badge-danger">3</span>-->
<!--                                            </div>-->
<!--                                            <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">-->
<!--                                            <div class="media-body">-->
<!--                                                <h4 class="media-heading">Deon Hubert</h4>-->
<!--                                                <div class="media-heading-sub"> CTO </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="media">-->
<!--                                            <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">-->
<!--                                            <div class="media-body">-->
<!--                                                <h4 class="media-heading">Ella Wong</h4>-->
<!--                                                <div class="media-heading-sub"> CEO </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                    <h3 class="list-heading">Customers</h3>-->
<!--                                    <ul class="media-list list-items">-->
<!--                                        <li class="media">-->
<!--                                            <div class="media-status">-->
<!--                                                <span class="badge badge-warning">2</span>-->
<!--                                            </div>-->
<!--                                            <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">-->
<!--                                            <div class="media-body">-->
<!--                                                <h4 class="media-heading">Lara Kunis</h4>-->
<!--                                                <div class="media-heading-sub"> CEO, Loop Inc </div>-->
<!--                                                <div class="media-heading-small"> Last seen 03:10 AM </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="media">-->
<!--                                            <div class="media-status">-->
<!--                                                <span class="label label-sm label-success">new</span>-->
<!--                                            </div>-->
<!--                                            <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">-->
<!--                                            <div class="media-body">-->
<!--                                                <h4 class="media-heading">Ernie Kyllonen</h4>-->
<!--                                                <div class="media-heading-sub"> Project Manager,-->
<!--                                                    <br> SmartBizz PTL </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="media">-->
<!--                                            <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">-->
<!--                                            <div class="media-body">-->
<!--                                                <h4 class="media-heading">Lisa Stone</h4>-->
<!--                                                <div class="media-heading-sub"> CTO, Keort Inc </div>-->
<!--                                                <div class="media-heading-small"> Last seen 13:10 PM </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="media">-->
<!--                                            <div class="media-status">-->
<!--                                                <span class="badge badge-success">7</span>-->
<!--                                            </div>-->
<!--                                            <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">-->
<!--                                            <div class="media-body">-->
<!--                                                <h4 class="media-heading">Deon Portalatin</h4>-->
<!--                                                <div class="media-heading-sub"> CFO, H&D LTD </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="media">-->
<!--                                            <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">-->
<!--                                            <div class="media-body">-->
<!--                                                <h4 class="media-heading">Irina Savikova</h4>-->
<!--                                                <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="media">-->
<!--                                            <div class="media-status">-->
<!--                                                <span class="badge badge-danger">4</span>-->
<!--                                            </div>-->
<!--                                            <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">-->
<!--                                            <div class="media-body">-->
<!--                                                <h4 class="media-heading">Maria Gomez</h4>-->
<!--                                                <div class="media-heading-sub"> Manager, Infomatic Inc </div>-->
<!--                                                <div class="media-heading-small"> Last seen 03:10 AM </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                                <div class="page-quick-sidebar-item">-->
<!--                                    <div class="page-quick-sidebar-chat-user">-->
<!--                                        <div class="page-quick-sidebar-nav">-->
<!--                                            <a href="javascript:;" class="page-quick-sidebar-back-to-list">-->
<!--                                                <i class="icon-arrow-left"></i>Back</a>-->
<!--                                        </div>-->
<!--                                        <div class="page-quick-sidebar-chat-user-messages">-->
<!--                                            <div class="post out">-->
<!--                                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />-->
<!--                                                <div class="message">-->
<!--                                                    <span class="arrow"></span>-->
<!--                                                    <a href="javascript:;" class="name">Bob Nilson</a>-->
<!--                                                    <span class="datetime">20:15</span>-->
<!--                                                    <span class="body"> When could you send me the report ? </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="post in">-->
<!--                                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />-->
<!--                                                <div class="message">-->
<!--                                                    <span class="arrow"></span>-->
<!--                                                    <a href="javascript:;" class="name">Ella Wong</a>-->
<!--                                                    <span class="datetime">20:15</span>-->
<!--                                                    <span class="body"> Its almost done. I will be sending it shortly </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="post out">-->
<!--                                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />-->
<!--                                                <div class="message">-->
<!--                                                    <span class="arrow"></span>-->
<!--                                                    <a href="javascript:;" class="name">Bob Nilson</a>-->
<!--                                                    <span class="datetime">20:15</span>-->
<!--                                                    <span class="body"> Alright. Thanks! :) </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="post in">-->
<!--                                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />-->
<!--                                                <div class="message">-->
<!--                                                    <span class="arrow"></span>-->
<!--                                                    <a href="javascript:;" class="name">Ella Wong</a>-->
<!--                                                    <span class="datetime">20:16</span>-->
<!--                                                    <span class="body"> You are most welcome. Sorry for the delay. </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="post out">-->
<!--                                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />-->
<!--                                                <div class="message">-->
<!--                                                    <span class="arrow"></span>-->
<!--                                                    <a href="javascript:;" class="name">Bob Nilson</a>-->
<!--                                                    <span class="datetime">20:17</span>-->
<!--                                                    <span class="body"> No probs. Just take your time :) </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="post in">-->
<!--                                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />-->
<!--                                                <div class="message">-->
<!--                                                    <span class="arrow"></span>-->
<!--                                                    <a href="javascript:;" class="name">Ella Wong</a>-->
<!--                                                    <span class="datetime">20:40</span>-->
<!--                                                    <span class="body"> Alright. I just emailed it to you. </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="post out">-->
<!--                                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />-->
<!--                                                <div class="message">-->
<!--                                                    <span class="arrow"></span>-->
<!--                                                    <a href="javascript:;" class="name">Bob Nilson</a>-->
<!--                                                    <span class="datetime">20:17</span>-->
<!--                                                    <span class="body"> Great! Thanks. Will check it right away. </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="post in">-->
<!--                                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />-->
<!--                                                <div class="message">-->
<!--                                                    <span class="arrow"></span>-->
<!--                                                    <a href="javascript:;" class="name">Ella Wong</a>-->
<!--                                                    <span class="datetime">20:40</span>-->
<!--                                                    <span class="body"> Please let me know if you have any comment. </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="post out">-->
<!--                                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />-->
<!--                                                <div class="message">-->
<!--                                                    <span class="arrow"></span>-->
<!--                                                    <a href="javascript:;" class="name">Bob Nilson</a>-->
<!--                                                    <span class="datetime">20:17</span>-->
<!--                                                    <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="page-quick-sidebar-chat-user-form">-->
<!--                                            <div class="input-group">-->
<!--                                                <input type="text" class="form-control" placeholder="Type a message here...">-->
<!--                                                <div class="input-group-btn">-->
<!--                                                    <button type="button" class="btn green">-->
<!--                                                        <i class="icon-paper-clip"></i>-->
<!--                                                    </button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">-->
<!--                                <div class="page-quick-sidebar-alerts-list">-->
<!--                                    <h3 class="list-heading">General</h3>-->
<!--                                    <ul class="feeds list-items">-->
<!--                                        <li>-->
<!--                                            <div class="col1">-->
<!--                                                <div class="cont">-->
<!--                                                    <div class="cont-col1">-->
<!--                                                        <div class="label label-sm label-info">-->
<!--                                                            <i class="fa fa-check"></i>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="cont-col2">-->
<!--                                                        <div class="desc"> You have 4 pending tasks.-->
<!--                                                            <span class="label label-sm label-warning "> Take action-->
<!--                                                                        <i class="fa fa-share"></i>-->
<!--                                                                    </span>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col2">-->
<!--                                                <div class="date"> Just now </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="javascript:;">-->
<!--                                                <div class="col1">-->
<!--                                                    <div class="cont">-->
<!--                                                        <div class="cont-col1">-->
<!--                                                            <div class="label label-sm label-success">-->
<!--                                                                <i class="fa fa-bar-chart-o"></i>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="cont-col2">-->
<!--                                                            <div class="desc"> Finance Report for year 2013 has been released. </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col2">-->
<!--                                                    <div class="date"> 20 mins </div>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <div class="col1">-->
<!--                                                <div class="cont">-->
<!--                                                    <div class="cont-col1">-->
<!--                                                        <div class="label label-sm label-danger">-->
<!--                                                            <i class="fa fa-user"></i>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="cont-col2">-->
<!--                                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col2">-->
<!--                                                <div class="date"> 24 mins </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <div class="col1">-->
<!--                                                <div class="cont">-->
<!--                                                    <div class="cont-col1">-->
<!--                                                        <div class="label label-sm label-info">-->
<!--                                                            <i class="fa fa-shopping-cart"></i>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="cont-col2">-->
<!--                                                        <div class="desc"> New order received with-->
<!--                                                            <span class="label label-sm label-success"> Reference Number: DR23923 </span>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col2">-->
<!--                                                <div class="date"> 30 mins </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <div class="col1">-->
<!--                                                <div class="cont">-->
<!--                                                    <div class="cont-col1">-->
<!--                                                        <div class="label label-sm label-success">-->
<!--                                                            <i class="fa fa-user"></i>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="cont-col2">-->
<!--                                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col2">-->
<!--                                                <div class="date"> 24 mins </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <div class="col1">-->
<!--                                                <div class="cont">-->
<!--                                                    <div class="cont-col1">-->
<!--                                                        <div class="label label-sm label-info">-->
<!--                                                            <i class="fa fa-bell-o"></i>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="cont-col2">-->
<!--                                                        <div class="desc"> Web server hardware needs to be upgraded.-->
<!--                                                            <span class="label label-sm label-warning"> Overdue </span>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col2">-->
<!--                                                <div class="date"> 2 hours </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="javascript:;">-->
<!--                                                <div class="col1">-->
<!--                                                    <div class="cont">-->
<!--                                                        <div class="cont-col1">-->
<!--                                                            <div class="label label-sm label-default">-->
<!--                                                                <i class="fa fa-briefcase"></i>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="cont-col2">-->
<!--                                                            <div class="desc"> IPO Report for year 2013 has been released. </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col2">-->
<!--                                                    <div class="date"> 20 mins </div>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                    <h3 class="list-heading">System</h3>-->
<!--                                    <ul class="feeds list-items">-->
<!--                                        <li>-->
<!--                                            <div class="col1">-->
<!--                                                <div class="cont">-->
<!--                                                    <div class="cont-col1">-->
<!--                                                        <div class="label label-sm label-info">-->
<!--                                                            <i class="fa fa-check"></i>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="cont-col2">-->
<!--                                                        <div class="desc"> You have 4 pending tasks.-->
<!--                                                            <span class="label label-sm label-warning "> Take action-->
<!--                                                                        <i class="fa fa-share"></i>-->
<!--                                                                    </span>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col2">-->
<!--                                                <div class="date"> Just now </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="javascript:;">-->
<!--                                                <div class="col1">-->
<!--                                                    <div class="cont">-->
<!--                                                        <div class="cont-col1">-->
<!--                                                            <div class="label label-sm label-danger">-->
<!--                                                                <i class="fa fa-bar-chart-o"></i>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="cont-col2">-->
<!--                                                            <div class="desc"> Finance Report for year 2013 has been released. </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col2">-->
<!--                                                    <div class="date"> 20 mins </div>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <div class="col1">-->
<!--                                                <div class="cont">-->
<!--                                                    <div class="cont-col1">-->
<!--                                                        <div class="label label-sm label-default">-->
<!--                                                            <i class="fa fa-user"></i>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="cont-col2">-->
<!--                                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col2">-->
<!--                                                <div class="date"> 24 mins </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <div class="col1">-->
<!--                                                <div class="cont">-->
<!--                                                    <div class="cont-col1">-->
<!--                                                        <div class="label label-sm label-info">-->
<!--                                                            <i class="fa fa-shopping-cart"></i>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="cont-col2">-->
<!--                                                        <div class="desc"> New order received with-->
<!--                                                            <span class="label label-sm label-success"> Reference Number: DR23923 </span>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col2">-->
<!--                                                <div class="date"> 30 mins </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <div class="col1">-->
<!--                                                <div class="cont">-->
<!--                                                    <div class="cont-col1">-->
<!--                                                        <div class="label label-sm label-success">-->
<!--                                                            <i class="fa fa-user"></i>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="cont-col2">-->
<!--                                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col2">-->
<!--                                                <div class="date"> 24 mins </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <div class="col1">-->
<!--                                                <div class="cont">-->
<!--                                                    <div class="cont-col1">-->
<!--                                                        <div class="label label-sm label-warning">-->
<!--                                                            <i class="fa fa-bell-o"></i>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="cont-col2">-->
<!--                                                        <div class="desc"> Web server hardware needs to be upgraded.-->
<!--                                                            <span class="label label-sm label-default "> Overdue </span>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col2">-->
<!--                                                <div class="date"> 2 hours </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="javascript:;">-->
<!--                                                <div class="col1">-->
<!--                                                    <div class="cont">-->
<!--                                                        <div class="cont-col1">-->
<!--                                                            <div class="label label-sm label-info">-->
<!--                                                                <i class="fa fa-briefcase"></i>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="cont-col2">-->
<!--                                                            <div class="desc"> IPO Report for year 2013 has been released. </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col2">-->
<!--                                                    <div class="date"> 20 mins </div>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">-->
<!--                                <div class="page-quick-sidebar-settings-list">-->
<!--                                    <h3 class="list-heading">General Settings</h3>-->
<!--                                    <ul class="list-items borderless">-->
<!--                                        <li> Enable Notifications-->
<!--                                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
<!--                                        <li> Allow Tracking-->
<!--                                            <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
<!--                                        <li> Log Errors-->
<!--                                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
<!--                                        <li> Auto Sumbit Issues-->
<!--                                            <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
<!--                                        <li> Enable SMS Alerts-->
<!--                                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
<!--                                    </ul>-->
<!--                                    <h3 class="list-heading">System Settings</h3>-->
<!--                                    <ul class="list-items borderless">-->
<!--                                        <li> Security Level-->
<!--                                            <select class="form-control input-inline input-sm input-small">-->
<!--                                                <option value="1">Normal</option>-->
<!--                                                <option value="2" selected>Medium</option>-->
<!--                                                <option value="e">High</option>-->
<!--                                            </select>-->
<!--                                        </li>-->
<!--                                        <li> Failed Email Attempts-->
<!--                                            <input class="form-control input-inline input-sm input-small" value="5" /> </li>-->
<!--                                        <li> Secondary SMTP Port-->
<!--                                            <input class="form-control input-inline input-sm input-small" value="3560" /> </li>-->
<!--                                        <li> Notify On System Error-->
<!--                                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
<!--                                        <li> Notify On SMTP Error-->
<!--                                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
<!--                                    </ul>-->
<!--                                    <div class="inner-content">-->
<!--                                        <button class="btn btn-success">-->
<!--                                            <i class="icon-settings"></i> Save Changes</button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
        </div>
    </div>

<!-- END QUICK NAV -->
<!--[if lt IE 9]>






    <footer>
        <div class="page-wrapper-row">
        <div class="page-wrapper-bottom">
            <!-- BEGIN FOOTER -->
    <!-- BEGIN PRE-FOOTER -->
    <div class="page-prefooter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                    <h2>About</h2>
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                    <h2>Subscribe Email</h2>
                    <div class="subscribe-form">
                        <form action="javascript:;">
                            <div class="input-group">
                                <input type="text" placeholder="mail@email.com" class="form-control">
                                <span class="input-group-btn">
                                                    <button class="btn" type="submit">Submit</button>
                                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                    <h2>Follow Us On</h2>
                    <ul class="social-icons">
                        <li>
                            <a href="javascript:;" data-original-title="rss" class="rss"></a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                    <h2>Contacts</h2>
                    <address class="margin-bottom-40"> Phone: 800 123 3456
                        <br> Email:
                        <a href="mailto:info@metronic.com">info@metronic.com</a>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRE-FOOTER -->
    <!-- BEGIN INNER FOOTER -->

    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
    <!-- END INNER FOOTER -->
    <!-- END FOOTER -->
</div>
</div>
</div>
<!-- BEGIN QUICK NAV -->
<!--<nav class="quick-nav">-->
<!--    <a class="quick-nav-trigger" href="#0">-->
<!--        <span aria-hidden="true"></span>-->
<!--    </a>-->
<!--    <ul>-->
<!--        <li>-->
<!--            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">-->
<!--                <span>Purchase Metronic</span>-->
<!--                <i class="icon-basket"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">-->
<!--                <span>Customer Reviews</span>-->
<!--                <i class="icon-users"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="http://keenthemes.com/showcast/" target="_blank">-->
<!--                <span>Showcase</span>-->
<!--                <i class="icon-user"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">-->
<!--                <span>Changelog</span>-->
<!--                <i class="icon-graph"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <span aria-hidden="true" class="quick-nav-bg"></span>-->
<!--</nav>-->
<div class="quick-nav-overlay"></div>
    </footer>
<?= $this->html->script('../assets/global/plugins/respond.min.js') ?>
<?= $this->html->script('../assets/global/plugins/excanvas.min.js') ?>
<?= $this->html->script('../assets/global/plugins/ie8.fix.min.js') ?>
<!--[endif]-->
<!-- BEGIN CORE PLUGINS -->
<?= $this->html->script('../assets/global/plugins/jquery.min.js') ?>
<?= $this->html->script('../assets/global/plugins/bootstrap/js/bootstrap.min.js') ?>
<?= $this->html->script('../assets/global/plugins/js.cookie.min.js') ?>
<?= $this->html->script('../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>
<?= $this->html->script('../assets/global/plugins/jquery.blockui.min.js') ?>
<?= $this->html->script('../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<?= $this->html->script('../assets/global/scripts/app.min.js') ?>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<?= $this->html->script('../assets/layouts/layout3/scripts/layout.min.js') ?>
<?= $this->html->script('../assets/layouts/layout3/scripts/demo.min.js') ?>
<?= $this->html->script('../assets/layouts/global/scripts/quick-sidebar.min.js') ?>
<?= $this->html->script('../assets/layouts/global/scripts/quick-nav.min.js') ?>
<?= $this->Html->script('../js/jquery.js') ?>
<?= $this->Html->script('../build/jquery.datetimepicker.full.min.js') ?>
<?= $this->Html->css('../css/jquery.datetimepicker.css') ?>
<script>

    //datetimepicker on date field
    $('#datepicker').datetimepicker({
        timepicker:false,
        format: "Y-m-d"
    });
</script>
</body>

<!-- END THEME LAYOUT SCRIPTS -->
</html>
