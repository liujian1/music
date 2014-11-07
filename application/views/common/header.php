<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic styles -->
        <title>
            LJ音乐站
        </title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
        <!--[if IE 7]>
        <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
        <![endif]-->
        <!-- page specific plugin styles -->
        <!-- fonts -->
        <link rel="stylesheet" href="assets/css/ace-fonts.css" />
        <!-- ace styles -->
        <link rel="stylesheet" href="assets/css/ace.min.css" />
        <link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->
        <!-- inline styles related to this page -->
        <!-- ace settings handler -->
        <script src="assets/js/ace-extra.min.js"></script>
        <!-- basic scripts -->
        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
        </script>
        <!-- <![endif]-->
        <!--[if IE]>
        <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
        </script>
        <![endif]-->
        <script type="text/javascript">
            if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- page specific plugin scripts -->
        <!--[if lte IE 8]>
        <script src="assets/js/excanvas.min.js"></script>
        <![endif]-->
        <script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        <script src="assets/js/jquery.easy-pie-chart.min.js"></script>
        <script src="assets/js/jquery.sparkline.min.js"></script>
        <script src="assets/js/flot/jquery.flot.min.js"></script>
        <script src="assets/js/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/js/flot/jquery.flot.resize.min.js"></script>
        <!-- ace scripts -->
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>
        <!-- inline scripts related to this page -->
    </head>
<body>

    <div class="navbar" id="navbar">
        <script type="text/javascript">
            try {
                ace.settings.check('navbar', 'fixed')
            } catch (e) {
            }
        </script>
        <div class="navbar-inner">
            <div class="container-fluid">
                <a href="http://610491429.qzone.qq.com/" target="_blank" class="brand">
                    <small>
                        <i class="icon-leaf"></i>
                            LJ音乐站
                    </small>
                </a><!-- /.brand -->
                <ul class="nav ace-nav pull-right">
                <li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>
                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                        <li class="nav-header">
                            <i class="icon-ok"></i>
                            1个代办事项
                        </li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">学习CI框架</span>
                                    <span class="pull-right">50%</span>
                                </div>
                                <div class="progress progress-mini progress-success progress-striped active">
                                    <div style="width:50%" class="bar"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                See tasks with details
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-alt icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>
                    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
                        <li class="nav-header">
                            <i class="icon-warning-sign"></i>
                            1个提醒
                        </li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">
                                        <i class="btn btn-mini no-hover btn-info icon-twitter"></i>
                                        来访
                                    </span>
                                    <span class="pull-right badge badge-info">+3</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                See all notifications
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">1</span>
                    </a>
                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                        <li class="nav-header">
                            <i class="icon-envelope-alt"></i>
                            5 条提醒
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar">
                                <span class="msg-body">
                                    <span class="msg-title">
                                        <span class="blue">Alex:</span>
                                        Ciao sociis natoque penatibus et auctor ...
                                    </span>

                                    <span class="msg-time">
                                        <i class="icon-time"></i>
                                        <span>a moment ago</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                See all messages
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo">
                            <span class="user-info">
                                <small>欢迎您</small>
                                LJ
                            </span>
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                设置
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-user"></i>
                                配置
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <i class="icon-off"></i>
                                    退出
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.ace-nav -->
            </div>
            <!-- /.container-fluid -->
        </div>
            <!-- /.navbar-inner -->
    </div>



    <div class="sidebar" id="sidebar">
        <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-small btn-success">
                    <i class="icon-signal"></i>
                </button>

                <button class="btn btn-small btn-info">
                    <i class="icon-pencil"></i>
                </button>

                <button class="btn btn-small btn-warning">
                    <i class="icon-group"></i>
                </button>

                <button class="btn btn-small btn-danger">
                    <i class="icon-cogs"></i>
                </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- #sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="active">
                <a href="index.html">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> 首页 </span>
                </a>
            </li>
            <li>
                <a href="typography.html">
                    <i class="icon-text-width"></i>
                    <span class="menu-text"> 推荐 </span>
                </a>
            </li>
            <li>
                <a href="#" class="dropdown-toggle">
                    <i class="icon-desktop"></i>
                    <span class="menu-text"> 歌手列表 </span>

                    <b class="arrow icon-angle-down"></b>
                </a>

                <ul class="submenu">
                    <li>
                        <a href="elements.html">
                            <i class="icon-double-angle-right"></i>
                            华人男歌手
                        </a>
                    </li>

                    <li>
                        <a href="buttons.html">
                            <i class="icon-double-angle-right"></i>
                            华人女歌手
                        </a>
                    </li>

                    <li>
                        <a href="treeview.html">
                            <i class="icon-double-angle-right"></i>
                            港台男歌手
                        </a>
                    </li>

                    <li>
                        <a href="jquery-ui.html">
                            <i class="icon-double-angle-right"></i>
                            港台女歌手
                        </a>
                    </li>

                    <li>
                        <a href="nestable-list.html">
                            <i class="icon-double-angle-right"></i>
                            华人组合
                        </a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-double-angle-right"></i>
                            欧美风
                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="#">
                                    <i class="icon-leaf"></i>
                                    欧美男歌手
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown-toggle">
                                    <i class="icon-pencil"></i>
                                    欧美女歌手
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle">
                    <i class="icon-list"></i>
                    <span class="menu-text"> 上传歌曲 </span>
                </a>
            </li>
            <li>
                <a href="#" class="dropdown-toggle">
                    <i class="icon-edit"></i>
                    <span class="menu-text"> 上传歌词 </span>
                </a>
            </li>
            <li>
                <a href="gallery.html">
                    <i class="icon-picture"></i>
                    <span class="menu-text"> 搜索内容 </span>
                </a>
            </li>
        </ul><!-- /.nav-list -->

        <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
        </div>

        <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
    </div>
