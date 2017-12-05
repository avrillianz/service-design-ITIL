<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistem Evaluasi Manajemen Layanan Teknologi Informasi</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Font Icon -->
    <script src="<?php echo base_url().'assets/'; ?>js/jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'assets/'; ?>plugins/aos-animation/aos.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="<?php echo base_url().'assets/'; ?>css/main.css" rel="stylesheet">
    <!-- themes Css -->
    <link href="<?php echo base_url().'assets/'; ?>css/themes/all-themes.css" rel="stylesheet" />

    <link href="<?php echo base_url().'assets/'; ?>plugins/waitme/waitMe.css" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url().'assets/'; ?>plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- AdminCC You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url().'assets/'; ?>css/themes/all-themes.css" rel="stylesheet" />

    <link href="<?php echo base_url().'assets/'; ?>css/hm-style.css" rel="stylesheet" />

    <link href="<?php echo base_url().'assets/'; ?>plugins/sweetalert/sweetalert.css" rel="stylesheet" />


</head>
<?php 

$level = $_SESSION['level'];
$jabatan = $_SESSION['jabatan'];

if($level == 1 ) { ?>

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header"> <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.html">SISTEM EVALUASI MANAJEMEN LAYANAN TI</a> </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="<?php echo base_url()."index.php/login/logout"; ?>" class="mega-menu" data-close="true">Logout <i class="material-icons">input</i></a></li> -->
                    <li><?php echo '<button onclick="logout(\'Anda Yakin ingin logout ?\', \' '.base_url('index.php/login/logout/').'/login\')" class="btn btn-raised bg-white btn-block btn-xs waves-effect" type="button">Logout <i class="material-icons">input</i></button>'; ?>
                    </li>                
                </ul>
            </div>
        </div>
    </nav>
    <!-- Left & Right bar menu -->
    <section> 
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar"> 
            <!-- User Info -->
            <div class="user-info">
                <div class="image"> <img src="<?php echo base_url().'assets/'; ?>images/random-avatar1.jpg" width="48" height="48" alt="User" /> </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown">Septian Akbar Widya DP</div>
                    <div class="email"><?php echo $jabatan ?></div>
                    <div class="btn-group user-helper-dropdown"> <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    </div>
                </div>
            </div>
            <!-- #User Info --> 
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU NAVIGATION</li>
                    <li class="active open"> <a href="<?php echo base_url('index.php/dashboard'); ?>" ><i class="material-icons">home</i><span>Dashboard</span></a></li>
                    <li> <a href="<?php echo base_url('index.php/user'); ?>" ><i class="material-icons">assignment_ind</i><span>User</span></a></li>
                    <li> <a href="<?php echo base_url('index.php/service'); ?>" ><i class="material-icons">cached</i><span>Lifecycle Service</span></a></li>
                    <li> <a href="<?php echo base_url('index.php/control'); ?>" ><i class="material-icons">pie_chart</i><span>Kontrol Objektif</span></a></li>
                    <li> <a href="<?php echo base_url('index.php/maturity'); ?>" ><i class="material-icons">format_list_numbered</i><span>Maturity Level</span></a></li>
                    <li> <a href="<?php echo base_url('index.php/kuesioner'); ?>" ><i class="material-icons">description</i><span>Kuesioner</span></a></li>
                    <li> <a href="<?php echo base_url('index.php/periode'); ?>" ><i class="material-icons">date_range</i><span>
                        Periode</span></a></li>
                        <li> <a href="<?php echo base_url('index.php/rekomendasi'); ?>" ><i class="material-icons">assignment_turned_in</i><span>Rekomendasi</span></a></li>

                    </ul>
                </div>
                <!-- #Menu --> 
            </aside>
            
            <!-- Right Sidebar -->
        </section>

        <?php } else if ($level ==  2 ) { ?>

        <body class="theme-blush index2">
            <!-- Page Loader -->
            <div class="page-loader-wrapper">
                <div class="loader">
                    <div class="preloader">
                        <div class="spinner-layer pl-cyan">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                    <p>Please wait...</p>
                </div>
            </div>

            <!-- Overlay For Sidebars -->
            <div class="overlay"></div>

            <!-- Top Bar -->
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header"> <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a> <a href="javascript:void(0);" class="h-bars"></a> <a class="navbar-brand" href="index.html">SISTEM EVALUASI MANAJEMEN LAYANAN TEKNOLOGI INFORMASI</a> </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url()."index.php/login/logout"; ?>" class="mega-menu" data-close="true"><?php echo $jabatan ?> , Logout  <i class="zmdi zmdi-power"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="menu-container">
                <div class="menu">
                    <ul>
                        <li><a href="<?php echo base_url('index.php/dashboard'); ?>">Dashboard</a></li>            
                        <li><a href="<?php echo base_url('index.php/itil'); ?>"><i class="zmdi zmdi-copy"></i> IT Infrastructure Library</a></li>
                        <li><a href="<?php echo base_url('index.php/maturity/view_maturity_level'); ?>"><i class="zmdi zmdi-assignment-o"></i> Maturity Level</a></li>
                        <?php $periode = $this->session->userdata('periode');
                        if($periode) { ?>
                            <li><a href="<?php echo base_url('index.php/isi'); ?>"><i class="zmdi zmdi-assignment"></i> Kuesioner</a></li>
                            <?php } ?>
                    </ul>
                </div>
            </div>


            <?php } else if ($level == 3 ) { ?>

            <body class="theme-cyan index2">
                <!-- Page Loader -->
                <div class="page-loader-wrapper">
                    <div class="loader">
                        <div class="preloader">
                            <div class="spinner-layer pl-cyan">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                        </div>
                        <p>Please wait...</p>
                    </div>
                </div>

                <!-- Overlay For Sidebars -->
                <div class="overlay"></div>

                <!-- Top Bar -->
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="navbar-header"> <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a> <a href="javascript:void(0);" class="h-bars"></a> <a class="navbar-brand" href="index.html">SISTEM EVALUASI MANAJEMEN LAYANAN TEKNOLOGI INFORMASI</a> </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo base_url()."index.php/login/logout"; ?>" class="mega-menu" data-close="true"><?php echo $jabatan ?>  , Logout  <i class="zmdi zmdi-power"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="menu-container">
                    <div class="menu">
                        <ul>
                            <li><a href="<?php echo base_url('index.php/dashboard'); ?>">Dashboard</a></li>            
                            <li> <a href="<?php echo base_url('index.php/itil'); ?>" ><i class="material-icons">filter_none</i><span> IT Infrastructure Library</span></a></li>
                            <li><a href="<?php echo base_url('index.php/nilai'); ?>"><i class="zmdi zmdi-assignment-o"></i> Nilai Yang Diharapkan</a></li>
                            <li> <a href="<?php echo base_url('index.php/hasil'); ?>" ><i class="material-icons">assignment</i><span> Hasil Evaluasi</span></a></li>
                            <li> <a href="<?php echo base_url('index.php/rekomendasi/view_rekomendasi_hasil'); ?>" ><i class="material-icons">assignment_turned_in</i><span> Rekomendasi</span></a></li>
                        </ul>
                    </div>
                </div>

                <?php } ?>

                