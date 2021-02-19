<?php
session_start(); 
if( ! isset($_SESSION['username'])){
    header("location: login.php");
}
?>
<?php include("config.php"); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Header menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="dashboard.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="dashboard.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a title="Dashboard" href="dashboard.php" aria-expanded="false"><span class="educate-icon educate-home icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                        </li>
                        <li>
                            <a title="Stok Alat" href="data-alat.php" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Alat</span></a>
                        </li>
                        <li>
                            <a title="Pengguna RFID" href="data-pengguna.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Pengguna</span></a>
                        </li>
                        <li>
                            <a title="Peminjaman Alat" href="data-peminjaman.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Peminjaman</span></a>
                        </li>
                        <li>
                            <a title="Pengembalian Alat" href="data-pengembalian.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Pengembalian</span></a>
                        </li>
                        <li>
                            <a title="Tambah Peminjaman" href="tambah-peminjaman.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Tambah Peminjaman</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Header menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro" style="margin-bottom: 64px;">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="img/smk.png" alt="" />
                                                        <span class="admin-name">Admin</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li>
                                                            <a href="#">
                                                                <span class="edu-icon edu-locked author-log-ic"></span>Log Out
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <ul class="breadcome-menu">
                                    <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Dashboard</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="traffice-source-area mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="white-box analytics-info-cs">
                            <h3 class="box-title">Total Pengguna</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right sp-cn-r"><i class="fa fa-address-card" aria-hidden="true"></i> <span class="counter text-success"><span class="counter">1</span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 table-mg-t-pro-n">
                            <h3 class="box-title">Total Alat</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right graph-two-ctn"><i class="fa fa-calculator" aria-hidden="true"></i> <span class="counter text-purple"><span class="counter">1</span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <h3 class="box-title">Total Peminjam</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right graph-three-ctn"><i class="fa fa-address-card-o" aria-hidden="true"></i> <span class="counter text-info"><span class="counter">1</span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>List Data Alat</h4>
                            <div class="asset-inner">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID</th>
                                            <th>Alat</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                        <tbody>
                                                <tr>
                                                <?php
                                                $sql = "SELECT * FROM stock";
                                                $query = mysqli_query($conn, $sql);
                                                $no=0;
                                                        
                                                while($stock = mysqli_fetch_array($query)){
                                                $no++;
                                                echo "<tr>";
                                                    echo "<td>".$no."</td>";
                                                    echo "<td>".$stock['id']."</td>";
                                                    echo "<td>".$stock['alat']."</td>";
                                                    echo "<td>".$stock['kategori']."</td>";
                                                    echo "<td>".$stock['deskripsi']."</td>";
                                            ?>
                                                </tr>
                                            <?php 
                                                }
                                            ?>  
                                            </tbody>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- main JS -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>