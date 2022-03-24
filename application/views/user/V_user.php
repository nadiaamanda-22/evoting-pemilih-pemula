   <div class="main-content">
      <div class="page-content">
         <div class="container-fluid">

            <!-- judul halaman -->
            <div class="row">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">User</h4>
                  </div>
               </div>
            </div>
            <!-- end judul halaman -->

            <div class="row">
               <div class="col-xl">

                  <!-- tombol sementara -->
                  <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#addUser" style="margin-bottom:20px;">
                     <i class="fas fa-plus"></i> Tambah Data
                  </button>

                  <!-- tombol asli -->
                  <!-- <a href="" class="btn btn-gradient mb-3 warnaprimer" data-toggle="modal" data-target="#addUser"><i class="fas fa-plus"></i> Tambah Data</a> -->

                  <table class="table table-striped" id="tableUser">
                     <thead>
                        <tr>
                           <th scope="col">No</th>
                           <th scope="col">Username</th>
                           <th scope="col">Role</th>
                           <th scope="col">Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td scope="row">1</td>
                           <td>admin123</td>
                           <td>Admin KPU</td>
                           <td>
                              <!-- tombol sementara -->
                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editUser"><i class="far fa-edit"></i></button>

                              <!-- tombol aslinya -->
                              <!-- <a href="<?= base_url('user/editUser') ?>" class="btn btn-gradient warnaprimer" data-toggle="modal" data-target="#editUser"><i class="far fa-edit"></i></a> -->

                              <a href="#" class=" btn btn-gradient warnadanger"><i class="far fa-trash-alt"></i></a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>

            </div>
            <!-- end row -->

         </div>
         <!-- container fluid -->
      </div>
      <!-- page content -->

      <script>
         $(document).ready(function() {
            $('#tableUser').DataTable();
         });
      </script>


      <!-- Modal Tambah  -->
      <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="addUserLabel">Tambah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form action="<?= base_url('user/addUser'); ?>" method="post">
                     <div class="modal-body">

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">Username</label>
                           <div class="col-md-12">
                              <input type="hidden" class="form-control">
                              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username">
                           </div>
                        </div>


                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">Password</label>
                           <div class="col-md-12">
                              <input type="password" class="form-control" id="inputPassword" placeholder="Masukkan Password">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-8 col-sm-8 control-label">Role</label>
                           <div class="col-md-12">
                              <select class="form-select" aria-label="Default select example">
                                 <option selected>Pilih Role</option>
                                 <option value="1">Admin KPU</option>
                                 <option value="2">Admin Panitia</option>
                              </select>
                           </div>
                        </div>

                  </form>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-gradient warnaprimer">Simpan</button>
                     <button type="button" class="btn btn-gradient warnacancel" data-bs-dismiss="modal">Batal</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Akhir modal tambah -->

   </div>
   <!-- main content -->

   <!-- Modal edit -->
   <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="editUserLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="editUserLabel">Ubah Data</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('User/editUser'); ?>" method="post">
                  <div class="modal-body">

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Username</label>
                        <div class="col-md-12">
                           <input type="hidden" class="form-control">
                           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Password</label>
                        <div class="col-md-12">
                           <input type="password" class="form-control" id="inputPassword" placeholder="Masukkan Password">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-8 col-sm-8 control-label">Role</label>
                        <div class="col-md-12">
                           <select class="form-select" aria-label="Default select example">
                              <option selected>Pilih Role</option>
                              <option value="1">Admin KPU</option>
                              <option value="2">Admin Panitia</option>
                           </select>
                        </div>
                     </div>
               </form>
               <div class="modal-footer">
                  <button type="button" class="btn btn-gradient warnaprimer">Simpan</button>
                  <button type="button" class="btn btn-gradient warnacancel" data-bs-dismiss="modal">Batal</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Akhir modal edit-->