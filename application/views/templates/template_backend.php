<!doctype html>
<html lang="en">

<head>

   <meta charset="utf-8" />
   <title>E-Voting</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
   <meta content="Themesbrand" name="author" />

   <!-- App favicon -->
   <link rel="icon" type="image/png" sizes="50x26" href="<?= base_url('assets/gambar/logovoting.png'); ?>">

   <!-- Bootstrap Css -->
   <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />

   <!-- Icons Css -->
   <link href="<?= base_url('assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />

   <!-- App Css-->
   <link href="<?= base_url('assets/css/app.min.css') ?>" id="app-style" rel="stylesheet" type="text/css" />

   <!-- datatable -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

   <!-- my css -->
   <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">


</head>

<!-- jquery -->
<script src="<?= base_url('assets/libs/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<body>
   <!-- Begin page -->
   <div id="layout-wrapper">
      <header id="page-topbar">
         <div class="navbar-header">
            <div class="d-flex">

               <!-- topbar logo -->
               <div class="navbar-brand-box warnaprimer">
                  <a href="index.html" class="logo">
                     <span class="logo-sm">
                        <img src="<?= base_url('assets/gambar/logovoting.png') ?>">
                     </span>
                     <span class="logo-lg">
                        <div class="row logoo">
                           <div class="col-3">
                              <img src="<?= base_url('assets/gambar/logovoting.png') ?>">
                           </div>

                           <div class="col-6">
                              <h3>E-Voting</h3>
                           </div>
                        </div>
                     </span>
                  </a>

                  <!-- <a href="index.html" class="logo logo-light">
                     <span class="logo-sm">
                        <img src="assets/images/logo-light.svg" alt="" height="22">
                     </span>
                     <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="19">
                     </span>
                  </a> -->
               </div>
               <!-- end topbar logo -->

               <!-- ikon untuk ngecilin sidebar -->
               <!-- <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                  <i class="fa fa-fw fa-bars"></i>
               </button> -->

            </div>

            <!-- topbar -->
            <div class="d-flex">

               <!-- fullscreen -->
               <div class="dropdown d-none d-lg-inline-block ms-1">
                  <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                     <i class="bx bx-fullscreen"></i>
                  </button>
               </div>
               <!-- end fullscreen -->


               <!-- Notification -->
               <!-- <div class="dropdown d-inline-block">
                  <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="bx bx-bell bx-tada"></i>
                     <span class="badge bg-danger rounded-pill">3</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                     <div class="p-3">
                        <div class="row align-items-center">
                           <div class="col">
                              <h6 class="m-0" key="t-notifications"> Notifications </h6>
                           </div>
                           <div class="col-auto">
                              <a href="#!" class="small" key="t-view-all"> View All</a>
                           </div>
                        </div>
                     </div>
                     <div data-simplebar style="max-height: 230px;">
                        <a href="javascript: void(0);" class="text-reset notification-item">
                           <div class="d-flex">
                              <div class="avatar-xs me-3">
                                 <span class="avatar-title bg-primary rounded-circle font-size-16">
                                    <i class="bx bx-cart"></i>
                                 </span>
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="mb-1" key="t-your-order">Your order is placed</h6>
                                 <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <a href="javascript: void(0);" class="text-reset notification-item">
                           <div class="d-flex">
                              <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                              <div class="flex-grow-1">
                                 <h6 class="mb-1">James Lemire</h6>
                                 <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <a href="javascript: void(0);" class="text-reset notification-item">
                           <div class="d-flex">
                              <div class="avatar-xs me-3">
                                 <span class="avatar-title bg-success rounded-circle font-size-16">
                                    <i class="bx bx-badge-check"></i>
                                 </span>
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
                                 <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                 </div>
                              </div>
                           </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                           <div class="d-flex">
                              <img src="assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                              <div class="flex-grow-1">
                                 <h6 class="mb-1">Salena Layfield</h6>
                                 <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                           <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
                        </a>
                     </div>
                  </div>
               </div> -->

               <!-- Profil -->
               <div class="dropdown d-inline-block">
                  <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                     <span class="d-none d-xl-inline-block ms-1" key="t-henry">Nadia</span>
                     <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                     <!-- item-->
                     <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>

                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                  </div>
               </div>
               <!-- end profil -->

            </div>
            <!-- end topbar -->
         </div>
      </header>

      <!-- sidebar kiri -->
      <div class="vertical-menu warnaprimer">

         <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu" class="warnaprimer warnafont">
               <!-- Left Menu Start -->
               <ul class="metismenu list-unstyled warnafont" id="side-menu">
                  <li>
                     <a href="<?= base_url('dashboard') ?>" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboard</span>
                     </a>
                  </li>

                  <li class="menu-title warnafont" key="t-instansi">Instansi</li>

                  <li>
                     <a href="<?= base_url('jenisinstansi') ?>" class="waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-ji">Instansi</span>
                     </a>
                  </li>

                  <li>
                     <a href="<?= base_url('profilinstansi') ?>" class="waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-pi">Profil Instansi</span>
                     </a>
                  </li>


                  <!-- <li class="menu-title warnafont" key="t-aplikasi">Manajemen Aplikasi</li>

                  <li>
                     <a href="chat.html" class="waves-effect">
                        <i class="bx bx-aperture"></i>
                        <span key="t-logo">Logo</span>
                     </a>
                  </li>

                  <li>
                     <a href="chat.html" class="waves-effect">
                        <i class="bx bx-tone"></i>
                        <span key="t-warna">Warna</span>
                     </a>
                  </li>

                  <li>
                     <a href="<?= base_url('menu') ?>" class="waves-effect">
                        <i class="bx bx-task"></i>
                        <span key="t-menu">Menu Admin</span>
                     </a>
                  </li>

                  <li>
                     <a href="<?= base_url('submenu') ?>" class="waves-effect">
                        <i class="bx bx-task"></i>
                        <span key="t-submenu">Submenu Admin</span>
                     </a>
                  </li> -->

                  <li class="menu-title warnafont" key="t-pemilihan">Pemilihan</li>

                  <li>
                     <a href="chat.html" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-dpt">Daftar Pemilih Tetap</span>
                     </a>
                  </li>

                  <li>
                     <a href="<?= base_url('kandidat') ?>" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-kndt">Kandidat</span>
                     </a>
                  </li>

                  <li>
                     <a href="chat.html" class="waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-pmlhn">Pemilihan</span>
                     </a>
                  </li>

                  <li>
                     <a href="chat.html" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-hasil">Hasil</span>
                     </a>
                  </li>

                  <li class="menu-title warnafont" key="t-user">User</li>

                  <li>
                     <a href="<?= base_url('user') ?>" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-admin">User</span>
                     </a>
                  </li>

                  <li>
                     <a href="<?= base_url('role') ?>" class="waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-role">Role</span>
                     </a>
                  </li>

               </ul>
            </div>
            <!-- Sidebar -->
         </div>
      </div>
      <!-- Left Sidebar End -->


      <?= $contents; ?>

   </div>
   <!-- END layout-wrapper -->

   <!-- Right Sidebar -->
   <!-- <div class="right-bar">
      <div data-simplebar class="h-100">
         <div class="rightbar-title d-flex align-items-center px-3 py-4">

            <h5 class="m-0 me-2">Settings</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
               <i class="mdi mdi-close noti-icon"></i>
            </a>
         </div>
         <hr class="mt-0" />
         <h6 class="text-center mb-0">Choose Layouts</h6>

         <div class="p-4">
            <div class="mb-2">
               <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
            </div>

            <div class="form-check form-switch mb-3">
               <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
               <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
               <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-3">
               <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
               <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
               <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-3">
               <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
               <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            <div class="mb-2">
               <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-5">
               <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
               <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
            </div>


         </div>

      </div>
   </div> -->
   <!-- /Right-bar -->

   <!-- Right bar overlay-->
   <!-- <div class="rightbar-overlay"></div> -->

   <!-- footer -->
   <footer class="footer" fixed-bottom>
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <script>
                  document.write(new Date().getFullYear())
               </script> © E-Voting
            </div>
            <div class="col-sm-6">
               <div class="text-sm-end d-none d-sm-block">
                  Manajemen E-Voting
               </div>
            </div>
         </div>
      </div>
   </footer>
   </div>
   <!-- end footer -->

   <!-- datatable -->
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

   <script>
      //untuk gambar
      $('.custom-file-input').on('change', function() {
         let fileName = $(this).val().split('\\').pop();
         $(this).next('.custom-file-label').addClass("selected").html(fileName);

      });
   </script>


   <!-- JAVASCRIPT -->
   <script src="<?= base_url('assets/libs/metismenu/metisMenu.min.js') ?>"></script>
   <script src="<?= base_url('assets/libs/simplebar/simplebar.min.js') ?>"></script>
   <script src="<?= base_url('assets/libs/node-waves/waves.min.js') ?>"></script>

   <!-- apexcharts -->
   <script src="<?= base_url('assets/libs/apexcharts/apexcharts.min.js') ?>"></script>

   <!-- dashboard init -->
   <script src="<?= base_url('assets/js/pages/dashboard.init.js') ?>"></script>

   <!-- App js -->
   <script src="<?= base_url('assets/js/app.js') ?>"></script>



</body>

</html>