<!doctype html>
<html lang="en">

<head>

   <meta charset="utf-8" />
   <title>E-Voting</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
   <meta content="Themesbrand" name="author" />

   <!-- sweetalert -->
   <link href="<?= base_url('assets/sweetalert/dist/sweetalert2.min.css') ?>" rel="stylesheet">

   <!-- App favicon -->
   <link rel="icon" type="image/png" sizes="50x26" href="<?= base_url('assets/gambar/logokpu.png'); ?>">


   <!-- datetime -->
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

   <!-- Bootstrap Css -->
   <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

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
   <script>
      const base = '<?= base_url() ?>'
   </script>
   <!-- Begin page -->
   <div id="layout-wrapper">
      <header id="page-topbar">
         <div class="navbar-header">
            <div class="d-flex">

               <!-- topbar logo -->
               <div class="navbar-brand-box warnaprimer">
                  <a href="<?= base_url('dashboard') ?>" class="logo">
                     <span class="logo-sm">
                        <img src="<?= base_url('assets/gambar/logokpu.png') ?>">
                     </span>
                     <span class="logo-lg">
                        <div class="row logoo">
                           <div class="col-3">
                              <img src="<?= base_url('assets/gambar/logokpu.png') ?>">
                           </div>

                           <div class="col-6">
                              <h3>E-Voting</h3>
                           </div>
                        </div>
                     </span>
                  </a>
               </div>
               <!-- end topbar logo -->

               <div class="logoinstansii">
                  <a href="<?= base_url('profilinstansi') ?>">
                     <img src="<?= base_url('assets/gambar/logouika.png') ?>">
               </div>

               <div class="nminstansi">
                  <h6>Universitas Ibn Khaldun Bogor</h6>
               </div>

               </a>
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


               <!-- Profil -->
               <div class="dropdown d-inline-block">
                  <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img class="rounded-circle header-profile-user" src="<?= base_url('assets/gambar/profil.png') ?>" alt="Header Avatar">
                     <span class="d-none d-xl-inline-block ms-1" key="t-henry">AdminInstansi</span>
                     <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                     <!-- item-->
                     <a class="dropdown-item" href="<?= base_url('profilakun') ?>"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profil Akun</span></a>

                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="<?= base_url('profilinstansi') ?>"><i class="bx bx-store font-size-16 align-middle me-1"></i> <span key="t-logout">Profil Instansi</span></a>

                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="bx bx-power-off font-size-16 align-middle me-1"></i> <span key="t-logout">Logout</span></a>
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

                  <!-- <li class="menu-title warnafont" key="t-pemilihan">Pemilihan</li> -->

                  <li>
                     <a href="<?= base_url('dpt') ?>" class="waves-effect">
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
                     <a href="<?= base_url('pemilihan') ?>" class="waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-pmlhn">Pemilihan</span>
                     </a>
                  </li>

                  <li>
                     <a href="<?= base_url('hasilpemilihan') ?>" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-hasil">Hasil Pemilihan</span>
                     </a>
                  </li>

                  <!-- <li class="menu-title warnafont" key="t-user">User</li>

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
                  </li> -->

               </ul>
            </div>
            <!-- Sidebar -->
         </div>
      </div>
      <!-- Left Sidebar End -->


      <?= $contents; ?>

   </div>
   <!-- END layout-wrapper -->

   <!-- Logout Modal logout-->
   <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document"">
         <div class=" modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Yakin keluar ?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body" style="text-align: center;">Pilih tombol "logout" jika ingin keluar</div>
         <div class="modal-footer">
            <a class="btn btn-gradient warnaprimer warnafont" href="<?= base_url('Logout'); ?>">Logout</a>
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
         </div>
      </div>
   </div>
   </div>

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
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

   <!-- sweetalert -->
   <script src="<?= base_url('assets/sweetalert/dist/sweetalert2.all.min.js'); ?>"></script>

   <!-- datetime -->
   <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


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

   <!-- jquery easing -->
   <script src="<?= base_url('assets/libs/jquery.easing/jquery.easing.min.js') ?>"></script>


   <script>
      //untuk gambar
      $('.custom-file-input').on('change', function() {
         let fileName = $(this).val().split('\\').pop();
         $(this).next('.custom-file-label').addClass("selected").html(fileName);

      });

      // datetime
      $(function() {
         $('input[name="datetimes"]').daterangepicker({
            timePicker24Hour: true,
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            drops: "up",
            locale: {
               format: 'M/DD/YYYY hh:mm A'
            }
         });
      });
   </script>

</body>

</html>