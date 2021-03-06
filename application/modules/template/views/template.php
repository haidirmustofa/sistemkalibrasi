<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/assets/images/favicon.png">
  <?php if (empty($title)) {
  ?>
    <title>Sistem Kalibrasi</title>
  <?php
  } else {
  ?>
    <title><?= $title ?></title>
  <?php } ?>

  <link href="<?= base_url() ?>assets/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/dist/css/style.min.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin6">
      <nav class="navbar top-navbar navbar-expand-md">
        <div class="navbar-header" data-logobg="skin6">
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          <div class="navbar-brand">
            <a href="index.html">
              <b class="logo-icon">
                <img src="<?= base_url() ?>assets/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                <img src="<?= base_url() ?>assets/assets/images/logo-icon.png" alt="homepage" class="light-logo" />
              </b>
              <span class="logo-text">
                <img src="<?= base_url() ?>assets/assets/images/logo-text-1.png" alt="homepage" class="dark-logo" />
                <img src="<?= base_url() ?>assets/assets/images/logo-light-text-1.png" class="light-logo" alt="homepage" />
              </span>
            </a>
          </div>
          <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
          <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
            <!-- Notification -->

            <!-- End Notification -->
            <!-- ============================================================== -->
            <!-- create new -->
            <!-- ============================================================== -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="settings" class="svg-icon"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
            <!-- <li class="nav-item d-none d-md-block">
              <a class="nav-link" href="javascript:void(0)">
                <div class="customize-input">
                  <select class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                    <option selected>EN</option>
                    <option value="1">AB</option>
                    <option value="2">AK</option>
                    <option value="3">BE</option>
                  </select>
                </div>
              </a>
            </li> -->
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-right">
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <!-- <li class="nav-item d-none d-md-block">
              <a class="nav-link" href="javascript:void(0)">
                <form>
                  <div class="customize-input">
                    <input class="form-control custom-shadow custom-radius border-0 bg-white" type="search" placeholder="Search" aria-label="Search">
                    <i class="form-control-icon" data-feather="search"></i>
                  </div>
                </form>
              </a>
            </li> -->
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?= base_url() ?>assets/assets/images/profil.png" alt="user" class="rounded-circle" width="40">
                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark"><?= $this->fungsi->user_login()->user_fullname ?></span> <i data-feather="chevron-down" class="svg-icon"></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                <a class="dropdown-item" href="<?= base_url('profile'); ?>"><i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                  My Profile</a>
                <!-- <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card" class="svg-icon mr-2 ml-1"></i>
                  My Balance</a>
                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail" class="svg-icon mr-2 ml-1"></i>
                  Inbox</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings" class="svg-icon mr-2 ml-1"></i>
                  Account Setting</a>
                <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="<?= base_url('logout'); ?>"><i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                  Logout</a>
                <div class="dropdown-divider"></div>
                <!-- <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                    Profile</a></div> -->
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin6">
      <div class="scroll-sidebar" data-sidebarbg="skin6">
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <li class="sidebar-item  <?php echo ($navbar == 'Dashboard') ? 'selected' : ''; ?>"> <a class="sidebar-link sidebar-link" href="<?= base_url('dashboard') ?>" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
            <li class="list-divider"></li>
            <li class="nav-small-cap"><span class="hide-menu">Menu</span></li>
            <li class="sidebar-item <?php echo ($navbar == 'Data Alat') ? 'selected' : ''; ?>"> <a class="sidebar-link sidebar-link" href="<?= base_url('data-alat') ?>" aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span class="hide-menu">Data Alat</span></a></li>
            <?php
            if ($this->fungsi->user_login()->user_status == 'Admin') {
            ?>
              <li class="sidebar-item  <?php echo ($navbar == 'Data Pengajuan') ? 'selected' : ''; ?>"> <a class=" sidebar-link sidebar-link" href="<?= base_url('data-pengajuan') ?>" aria-expanded="false"><i data-feather="list" class="feather-icon"></i><span class="hide-menu">Pengajuan </span></a></li>
            <?php } else {
            ?>
              <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Pengajuan</span></a>
                <ul aria-expanded="false" class="collapse  first-level base-level-line">
                  <li class="sidebar-item"><a href="<?= base_url('tambah-pengajuan') ?>" class="sidebar-link"><span class="hide-menu"> Buat Pengajuan
                      </span></a>
                  </li>
                  <li class="sidebar-item"><a href="<?= base_url('data-pengajuan') ?>" class="sidebar-link"><span class="hide-menu"> Daftar Pengajuan
                      </span></a>
                  </li>
                </ul>
              </li>
            <?php }
            if ($this->fungsi->user_login()->user_status == 'Admin') {
            ?>
              <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('data-status') ?>" aria-expanded="false"><i data-feather="pocket" class="feather-icon"></i><span class="hide-menu">Status </span></a></li>
              <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('data-lab') ?>" aria-expanded="false"><i data-feather="map" class="feather-icon"></i><span class="hide-menu">Laboratorium </span></a></li>
              <li class="sidebar-item "> <a class="sidebar-link sidebar-link" href="<?= base_url('data-user') ?>" aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span class="hide-menu">User </span></a></li>
            <?php } ?>
            <li class="list-divider"></li>
            <li class="sidebar-item "> <a class="sidebar-link sidebar-link" href="index.html" aria-expanded="false"><i data-feather="download" class="feather-icon"></i><span class="hide-menu">Download Aplikasi </span></a></li>
          </ul>
        </nav>
      </div>
    </aside>
    <?= $contents ?>
    <footer class="footer text-center text-muted">
      All Rights Reserved by Operational Management ( <a href="https://mkop.my.id">Engineering & Project Planning )</a>
    </footer>
    <div class="modal fade" id="modal_delete">
      <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
          <div class="modal-header">
            <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini?</h4>
          </div>
          <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
            <a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
            <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="<?= base_url() ?>assets/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/dist/js/app-style-switcher.js"></script>
  <script src="<?= base_url() ?>assets/dist/js/feather.min.js"></script>
  <script src="<?= base_url() ?>assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/assets/extra-libs/sparkline/sparkline.js"></script>
  <script src="<?= base_url() ?>assets/dist/js/sidebarmenu.js"></script>
  <script src="<?= base_url() ?>assets/dist/js/custom.min.js"></script>
  <script src="<?= base_url() ?>assets/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/dist/js/pages/datatable/datatable-basic.init.js"></script>
  <script>
    function confirm_modal(delete_url) {
      $('#modal_delete').modal('show', {
        backdrop: 'static'
      });
      document.getElementById('delete_link').setAttribute('href', delete_url);
    }
  </script>
  <script>
    $('#example').dataTable({
      "order": []
    });
  </script>

</body>

</html>