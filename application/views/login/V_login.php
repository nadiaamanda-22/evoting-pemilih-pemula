<!doctype html>
<html lang="en">

<head>

   <meta charset="utf-8" />
   <title>Log in</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
   <meta content="Themesbrand" name="author" />
   <!-- App favicon -->
   <link rel="icon" type="image/png" sizes="50x26" href="<?= base_url('assets/gambar/logokpu.png'); ?>">

   <!-- Bootstrap Css -->
   <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <!-- Icons Css -->
   <link href="<?= base_url('assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
   <!-- App Css-->
   <link href="<?= base_url('assets/css/app.min.css') ?>" id="app-style" rel="stylesheet" type="text/css" />

   <!-- my css -->
   <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

   <style>
      body {
         font-family: 'Poppins';
         background-repeat: no-repeat;
         background-size: cover;
         background-color: #c77134;
         /* background-image: url('assets/gambar/bg.jpg'); */
      }

      .container-fluid {
         display: flex;
         width: 100%;
         height: 680px;
      }

      .kotaklogin {
         margin: auto !important;
         width: 500px;
         height: 550px;
         background-color: rgba(255, 255, 255, 0.925);
         border-radius: 30px;
      }

      .login {
         margin: auto;
      }

      .login h5 {
         margin-top: 30px !important;
         font-size: 24px;
         color: #d67d3e;
      }

      .login hr {
         width: 50%;
         margin: auto;
         height: 1px;
         background-color: #d67d3e;
         opacity: 100%;
      }

      .inputlogin label {
         font-size: 16px;
      }

      .submit button {
         margin-top: 15px;
         font-size: 15px;
         border-radius: 20px;
         width: 120px;
         height: 40px;
         background-color: #d67d3e;
         border: none;
         color: white;
      }


      .inputlogin input {
         width: 350px;
         font-size: 13px;
         font-weight: 300;

      }

      .inputlogin .form-control:focus {
         color: none;
         background-color: none !important;
         border-color: #d67d3e;
         outline: 0;
         box-shadow: none;

      }

      .inputlogin .password {
         margin-top: 25px !important;

      }

      .inputlogin {
         display: flex;
      }

      form {
         margin: auto;
      }

      .inputlogin .form-label {
         font-family: 'Poppins';
         font-weight: 500;
         color: grey;
      }

      .forgot a {
         color: grey;
         font-size: 14px;
      }

      .forgot {
         margin-top: 25px;
      }
   </style>

</head>

<body>

   <!-- <script src="<?= base_url('assets/backend/') ?>vendor/jquery/jquery.min.js"></script> -->
   <!-- login -->
   <section id="login">
      <div class="container-fluid">
         <div class="kotaklogin shadow">
            <div class="row">
               <div class="col-sm-12">
                  <div class="login">
                     <div class="text-center">
                        <img src="<?= base_url('assets/gambar/logokpu.png') ?>" width="75" class="rounded mt-5" alt="...">
                        <img src="<?= base_url('assets/gambar/logouika.png') ?>" width="75" class="rounded mt-5">
                     </div>
                     <h5 class="text-center lh-sm">E-Voting</h5>
                     <hr>
                     <div class="inputlogin mt-5">
                        <form id="formlogin" method="POST" action="<?= base_url('Login') ?>">
                           <div class="mb-3 NPM">
                              <label for="npm" class="form-label">Username</label>
                              <input type="text" class=" form-control" name="username" id="username" placeholder="Masukkan username">
                           </div>
                           <div class="mb-3 password">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                           </div>
                           <div class="submit text-center">
                              <button type="submit" class="btnmasuk">Log In</button>
                           </div>

                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </section>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</body>

</html>