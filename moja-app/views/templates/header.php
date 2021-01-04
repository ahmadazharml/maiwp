<?php

  $role = Session::get('role');

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $data['title'];?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= BASEURL; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 <link href="<?= BASEURL; ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= BASEURL; ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-white sidebar sidebar-light accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a style="background:#fff" class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
    <img src="<?=BASEURL;?>img/maiwp.jpg" width="25%">
        <div class="sidebar-brand-icon">
          <!--<i class="fas fa-laugh-wink"></i>-->
      
        </div>
        <div class="sidebar-brand-text mx-3"><font style="color:#04b8d9">MOJA Admin</font></div>
      </a>


      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
    <!--  <div class="sidebar-heading">
        Interface
      </div> -->
    
      <?php if ($role < 500): ?>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
           <?php if ($role == 400): ?>
        <a class="nav-link collapsed" href="case_pegawai.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Status Laporan</span>
        </a>           
        <?php else: ?>        
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Status Laporan</span>
        </a>
        <?php endif; ?>      
       
       
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Status Kes:</h6>
    
        <?php if ($role == 200): ?>    
      
            <a class="collapse-item" href="case_new">Kes Baharu</a>
            <a class="collapse-item" href="case_process.php">Kes Diproses</a>
            <a class="collapse-item" href="case_investigation.php">Kes Siasatan</a>
            <a class="collapse-item" href="case_overlapping.php">Kes Bertindan</a>
            <a class="collapse-item" href="case_done.php">Kes Selesai</a>
            <a class="collapse-item" href="case_reject.php">Kes Ditolak</a> 
      <a class="collapse-item" href="case_destroy.php">Kes Dihapuskan</a>
      <?php endif; ?>  

      <?php if ($role == 300): ?>      
            <a class="collapse-item" href="pcase_new.php">Kes Baharu</a>
            <a class="collapse-item" href="pcase_process.php">Kes Diproses</a>
            <a class="collapse-item" href="pcase_investigation.php">Kes Siasatan</a>
            <a class="collapse-item" href="pcase_overlapping.php">Kes Bertindan</a>
            <a class="collapse-item" href="pcase_done.php">Kes Selesai</a>
            <a class="collapse-item" href="pcase_destroy.php">Kes Dihapuskan</a>    
      
      <?php endif; ?>  
      
      <?php if ($role == 400): ?>
            <a class="collapse-item" href="case_pegawai.php">Semak Kes</a>
            <!--<a class="collapse-item" href="case_process_pegawai.php">Kes Diproses</a>
            <a class="collapse-item" href="case_investigation_pegawai.php">Kes Siasatan</a>
            <a class="collapse-item" href="case_overlapping_pegawai.php">Kes Bertindan</a>
            <a class="collapse-item" href="case_done_pegawai.php">Kes Selesai</a>
            <a class="collapse-item" href="case_reject_pegawai.php">Kes Ditolak</a>-->      
      <?php endif; ?>  
      

            </div>
        </div>
    
      </li>
    
      <!-- Divider -->
      <hr class="sidebar-divider">
<?php endif; ?>  

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->

<?php if ($role < 400): ?>   
      <!-- Divider -->
      <li class="nav-item active">
        <a class="nav-link" href="pengguna.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Pengguna</span></a>
      </li>   
<?php endif; ?>

<?php if ($role< 300): ?> 
      <!-- Divider -->
      <li class="nav-item active">
        <a class="nav-link" href="asnaf.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Asnaf</span></a>
      </li> 
<?php endif; ?>     

<?php if ($role < 500): ?>   
      <!-- Divider -->
      <li class="nav-item active">
        <a class="nav-link" href="rakan.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Rakan</span></a>
      </li> 
<?php endif; ?>     

<?php if ($role < 300): ?>
      <li class="nav-item active">
        <a class="nav-link" href="faq.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Soalan Lazim</span></a>
      </li> 
<?php endif; ?> 

<?php if ($role < 300): ?>
      <li class="nav-item active">
        <a class="nav-link" href="paza.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Senarai PAZA</span></a>
      </li> 
<?php endif; ?>     

<?php if ($role < 500): ?>
      <!-- Divider -->
      <li class="nav-item active">
        <a class="nav-link" href="laporan.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan</span></a>
      </li>
<?php endif; ?> 

<?php if ($role< 300): ?>
      <li class="nav-item active">
        <a class="nav-link" href="configure.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Konfigurasi</span></a>
      </li> 
<?php endif; ?> 

<?php if ($role < 500): ?>   
      <!-- Divider -->
      <!--<hr class="sidebar-divider">
      <!-- Nav Item - Utilities Collapse Menu -->
      <!--<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Penyelengaraan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sistem:</h6>
            <a class="collapse-item" href="#">Jabatan</a>
            <a class="collapse-item" href="#">Jenis Asnaf</a>
            <a class="collapse-item" href="#">Jenis Kes</a>
            <a class="collapse-item" href="#">Lain-lain</a>
          </div>
        </div>
      </li>-->
<?php endif; ?>   

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <!--<div class="input-group">
              <input type="text" name="keywords" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>-->
            <strong>Admin Sistem Aplikasi Jejak Asnaf (MOJA)</strong>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <!--<li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <!--<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search" action="asnaf_results.php" method="post">
                  <div class="input-group">
                    <input type="text" name="keywords" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                        <input type="submit">
                    </div>
                  </div>
                </form>
              </div>
            </li>-->

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"><?= $data['total']; ?> +</span>
              </a>

              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">

                <h6 class="dropdown-header">
                 Senarai kes terbaru
                </h6>

                <?php foreach($data['aduasn'] as $aduasn) : ;?>

                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>

                    <?php

                      $start = $aduasn['aduan_date'];

                      $reverse = date('d M Y h.i.s A', strtotime($start));

                      $time = date('F d, Y H:i', strtotime($reverse));

                    ?>

                    <div class="small text-gray-500"><?= $time; ?></div>

                    <span class="font-weight-bold"><?= $aduasn['name'];?></span>

                  </div>
                </a>

                <?php endforeach ;?>


            <!-- Nav Item - Messages -->
            <!--<li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <!--<span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <!--<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>-->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang!&nbsp;<?= Session::get('fullname'); ?>&nbsp;&nbsp;Jawatan: <?= $data['role_name']['role_name'];?></span>
                <img class="img-profile rounded-circle" src="<?= $data['propic']; ?>">
              </a>


              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!--<a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>-->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="profile">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Kemaskini Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="change_pwd">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Tukar Katalaluan
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login/logout" onclick="return confirm('Adakah anda pasti!')">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Log Keluar
                </a>
               </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->