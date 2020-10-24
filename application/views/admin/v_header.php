<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>assets/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>&nbsp;SIGIKREACAP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url(); ?>assets/#" class="sidebar-toggle" data-toggle="push-menu" role="button"> &nbsp;
                            
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="<?php echo base_url(); ?>assets/#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="<?php echo base_url(); ?>assets/#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="<?php echo base_url(); ?>assets/#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>assets/#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>assets/#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>assets/#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url(); ?>assets/#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="<?php echo base_url(); ?>assets/#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="<?php echo base_url(); ?>assets/#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>assets/#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>assets/#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>assets/#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>assets/#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url(); ?>assets/#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="<?php echo base_url(); ?>assets/#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="<?php echo base_url(); ?>assets/#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="<?php echo base_url(); ?>assets/#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="<?php echo base_url(); ?>assets/#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="<?php echo base_url(); ?>assets/#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="<?php echo base_url(); ?>assets/#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="<?php echo base_url(); ?>assets/#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama_user') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('nama_user') ?>
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                 
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>assets/#" class="btn btn-default btn-flat"></a>
                </div> 
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo base_url(); ?>assets/#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets_frontend/img/masfirman.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin Sigikreacap</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGASI UTAMA</li>
        <li>
          <a href="<?php echo base_url().'index.php/login_ikm_cilacap/halaman_admin'?>">
            <i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
             
          </a>
           
        </li>
         <?php  
                    if ($this->session->userdata('level') == 1) {
                    ?>

        <li>
          <a href="<?php echo base_url().'admin/ikm_cilacap/users_ikm_cilacap' ?>">
            <i class="fa fa-user"></i> <span>DATA AKUN</span>
             
          </a>
           
        </li>

        <?php 
                    }
                    ?>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-book"></i> <span>INDUSTRI KREATIF</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
            <?php if ($this->session->userdata('level') == 1 OR $this->session->userdata('level') == 2) { ?>
             
               <li><a href="<?php echo base_url().'admin/ikm_cilacap/kategori' ?>"><i class="fa fa-circle-o"></i>Kategori Industri Kreatif </a></li>
              <li><a href="<?php echo base_url().'admin/ikm_cilacap/kategori/tambah' ?>"><i class="fa fa-plus"></i>Tambah Kategori Ind Kreatif</a></li>
               
              
              <li><a href="<?php echo base_url().'admin/ikm_cilacap/statistik' ?>"><i class="fa fa-circle-o"></i>Bahan Baku </a></li>
              <li><a href="<?php echo base_url().'admin/ikm_cilacap/statistik/tambah' ?>"><i class="fa fa-plus"></i>Tambah Bahan Baku</a></li>
              <?php } ?>

              <li><a href="<?php echo base_url().'admin/ikm_cilacap/kategoriproduk' ?>"><i class="fa fa-circle-o"></i>Kategori Produk </a></li>
              <li><a href="<?php echo base_url().'admin/ikm_cilacap/kategoriproduk/tambah' ?>"><i class="fa fa-plus"></i>Tambah Kategori Produk</a></li>
              
              <li><a href="<?php echo base_url().'admin/ikm_cilacap/produk' ?>"><i class="fa fa-circle-o"></i>Data Produk</a></li>
              <li><a href="<?php echo base_url().'admin/ikm_cilacap/produk/tambah' ?>"><i class="fa fa-plus"></i>Tambah Produk</a></li>
              <?php if ($this->session->userdata('level') == 1) { ?> 
                <li><a href="<?php echo base_url().'admin/ikm_cilacap/ikm' ?>"><i class="fa fa-circle-o"></i><b style="color: yellow">Data Industri Kreatif</b></a></li>
                <?php } ?>
               <?php if ($this->session->userdata('level') == 2 ) { ?>        
              <li><a href="<?php echo base_url().'admin/ikm_cilacap/ikm/nodelete' ?>"><i class="fa fa-circle-o"></i><b style="color: yellow">Data Industri Kreatif</b></a></li> 
                <?php } ?>

                <?php if ($this->session->userdata('level') == 3 ) { ?>        
              <li><a href="<?php echo base_url().'admin/ikm_cilacap/ikm/nodelete_ik' ?>"><i class="fa fa-circle-o"></i><b style="color: yellow">Data Industri Kreatif</b></a></li> 
                <?php } ?>
                    
              <?php if ($this->session->userdata('level') == 1 OR $this->session->userdata('level') == 2) { ?>
               <li><a href="<?php echo base_url().'admin/ikm_cilacap/ikm/tambah' ?>"><i class="fa fa-plus"></i>Tambah Industri Kreatif</a></li> 
                <?php } ?>          

            </ul>
            
          </li>

          <?php  
                    if ($this->session->userdata('level') == 1) {
                    ?>

          <li>
          <a href="<?php echo base_url().'admin/ikm_cilacap/ikm/verifikasi' ?>">
            <i class="fa fa-pencil"></i> <span>DATA VERIFIKASI</span>
             
          </a>
           
        </li>

        <li>
          <a href="<?php echo base_url().'admin/ikm_cilacap/users_ikm_cilacap/tambah' ?>">
            <i class="fa fa-check"></i> <span>REGISTER AKUN</span>
             
          </a>
           
        </li>
        <?php 
                    }
                    ?>

                    <?php  
                    if ($this->session->userdata('level') == 2) {
                    ?>

          <li>
          <a href="<?php echo base_url().'admin/ikm_cilacap/ikm/verifikasi' ?>">
            <i class="fa fa-pencil"></i> <span>DATA VERIFIKASI</span>
             
          </a>
           
        </li>
        <li>
           <a href="<?php echo base_url().'index.php/login_ikm_cilacap/halaman_adminprofil'?>">
            <i class="fa fa-user"></i> <span>PROFIL</span>
             
          </a>
           
        </li>
        <?php 
                    }
                    ?>
    
        
           <li>
            <a href="<?php echo base_url().'' ?>">
              <i class="fa fa-share"></i>
              <span>KELUAR</span>
            </a>
          </li>

      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>