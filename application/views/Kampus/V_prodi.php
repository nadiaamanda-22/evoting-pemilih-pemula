   <div class="main-content">
      <div class="page-content">
         <div class="container-fluid">

            <!-- judul halaman -->
            <div class="row">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Program Studi</h4>
                  </div>
               </div>
            </div>
            <!-- end judul halaman -->

            <div class="row">
               <div class="col-xl">

                  <!-- tombol sementara -->
                  <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#addProdi" style="margin-bottom:20px;">
                     <i class="fas fa-plus"></i> Tambah Data
                  </button>

                  <!-- tombol asli -->
                  <!-- <a href="" class="btn btn-gradient mb-3 warnaprimer" data-toggle="modal" data-target="#addProdi"><i class="fas fa-plus"></i> Tambah Data</a> -->

                  <table class="table table-striped" id="tableProdi">
                     <thead>
                        <tr>
                           <th scope="col">No</th>
                           <th scope="col">Prodi</th>
                           <th scope="col">Fakultas</th>
                           <th scope="col">Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td scope="row">1</td>
                           <td>Teknik Informatika</td>
                           <td>Teknik dan Sains</td>
                           <td>
                              <!-- tombol sementara -->
                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editProdi"><i class="far fa-edit"></i></button>

                              <!-- tombol aslinya -->
                              <!-- <a href="<?= base_url('prodi/editProdi') ?>" class="btn btn-gradient warnaprimer" data-toggle="modal" data-target="#editProdi"><i class="far fa-edit"></i></a> -->

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
            $('#tableProdi').DataTable();
         });
      </script>


      <!-- Modal Tambah  -->
      <div class="modal fade" id="addProdi" tabindex="-1" aria-labelledby="addProdiLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="addProdiLabel">Tambah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form action="<?= base_url('prodi/addProdi'); ?>" method="post">
                     <div class="modal-body">

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">Prodi</label>
                           <div class="col-md-12">
                              <input type="hidden" class="form-control">
                              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Prodi">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-8 col-sm-8 control-label">Fakultas</label>
                           <div class="col-md-12">
                              <select class="form-select" aria-label="Default select example">
                                 <option selected>Pilih Fakultas</option>
                                 <option value="1">Teknik dan Sains</option>
                                 <option value="2">Ekonomi</option>
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
   <div class="modal fade" id="editProdi" tabindex="-1" aria-labelledby="editProdiLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="editProdiLabel">Ubah Data</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('prodi/editProdi'); ?>" method="post">
                  <div class="modal-body">

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Prodi</label>
                        <div class="col-md-12">
                           <input type="hidden" class="form-control">
                           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Prodi">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-8 col-sm-8 control-label">Fakultas</label>
                        <div class="col-md-12">
                           <select class="form-select" aria-label="Default select example">
                              <option selected>Pilih Fakultas</option>
                              <option value="1">Teknik dan Sains</option>
                              <option value="2">Ekonomi</option>
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