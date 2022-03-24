   <div class="main-content">
      <div class="page-content">
         <div class="container-fluid">

            <!-- judul halaman -->
            <div class="row">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Jenis Instansi</h4>
                  </div>
               </div>
            </div>
            <!-- end judul halaman -->

            <div class="row">
               <div class="col-xl">

                  <!-- tombol sementara -->
                  <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#addJenisIns" style="margin-bottom:20px;">
                     <i class="fas fa-plus"></i> Tambah Data
                  </button>

                  <!-- tombol asli -->
                  <!-- <a href="" class="btn btn-gradient mb-3 warnaprimer" data-toggle="modal" data-target="#addJenisIns"><i class="fas fa-plus"></i> Tambah Data</a> -->

                  <table class="table table-striped" id="tableJenisIns">
                     <thead>
                        <tr>
                           <th scope="col">No</th>
                           <th scope="col">Jenis Instansi</th>
                           <th scope="col">Nama Instansi</th>
                           <th scope="col">Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td scope="row">1</td>
                           <td>Sekolah</td>
                           <td>SMKN 1 Bogor</td>
                           <td>
                              <!-- tombol sementara -->
                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editJenisIns"><i class="far fa-edit"></i></button>

                              <!-- tombol aslinya -->
                              <!-- <a href="<?= base_url('jenisinstansi/editJenisInstansi') ?>" class="btn btn-gradient warnaprimer" data-toggle="modal" data-target="#editJenisIns"><i class="far fa-edit"></i></a> -->

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
            $('#tableJenisIns').DataTable();
         });
      </script>


      <!-- Modal Tambah  -->
      <div class="modal fade" id="addJenisIns" tabindex="-1" aria-labelledby="addJenisInsLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="addJenisInsLabel">Tambah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form action="<?= base_url('jenisinstansi/addJenisInstansi'); ?>" method="post">
                     <div class="modal-body">

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-8 col-sm-8 control-label">Jenis Instansi</label>
                           <div class="col-md-12">
                              <select class="form-select" aria-label="Default select example">
                                 <option selected>Pilih Jenis Instansi</option>
                                 <option value="1">Sekolah</option>
                                 <option value="2">Kampus</option>
                              </select>
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">Nama Instansi</label>
                           <div class="col-md-12">
                              <input type="hidden" class="form-control">
                              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Instansi">
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
   <div class="modal fade" id="editJenisIns" tabindex="-1" aria-labelledby="editJenisInsLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="editJenisInsLabel">Ubah Data</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('jenisinstansi/editJenisInstansi'); ?>" method="post">
                  <div class="modal-body">

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-8 col-sm-8 control-label">Jenis Instansi</label>
                        <div class="col-md-12">
                           <select class="form-select" aria-label="Default select example">
                              <option selected>Pilih Jenis Instansi</option>
                              <option value="1">Sekolah</option>
                              <option value="2">Kampus</option>
                           </select>
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Nama Instansi</label>
                        <div class="col-md-12">
                           <input type="hidden" class="form-control">
                           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Instansi">
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