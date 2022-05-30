   <div class="main-content">
      <div class="page-content">
         <div class="container-fluid">

            <!-- judul halaman -->
            <div class="row">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Kandidat</h4>
                  </div>
               </div>
            </div>
            <!-- end judul halaman -->

            <div class="row">
               <div class="col-xl">

                  <!-- tombol tambah -->
                  <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#addKandidat" style="margin-bottom:20px;">
                     <i class="fas fa-plus"></i> Tambah Data
                  </button>

                  <table class="table table-striped" id="tableKandidat">
                     <thead>
                        <tr>
                           <th scope="col">No</th>
                           <th scope="col">Nama Kandidat</th>
                           <th scope="col">Nama Pasangan Kandidat</th>
                           <th scope="col">Foto Kandidat</th>
                           <th scope="col">Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td scope="row">1</td>
                           <td>Bahar</td>
                           <td>Nur Khofifah Saadiah</td>
                           <td><img src="<?= base_url('assets/gambar/kandidat/1.jpeg') ?>" width="130" height="100"></td>
                           <td>

                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editKandidat"><i class="far fa-edit"></i></button>

                              <a href="#" class=" btn btn-gradient warnadanger"><i class="far fa-trash-alt"></i></a>
                           </td>
                        </tr>

                        <tr>
                           <td scope="row">2</td>
                           <td>Garis Haikal A</td>
                           <td>Dimas Mulya Saputra</td>
                           <td><img src="<?= base_url('assets/gambar/kandidat/2.jpeg') ?>" width="130" height="100"></td>
                           <td>

                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editKandidat"><i class="far fa-edit"></i></button>

                              <a href="#" class=" btn btn-gradient warnadanger"><i class="far fa-trash-alt"></i></a>
                           </td>
                        </tr>

                        <tr>
                           <td scope="row">3</td>
                           <td>Ardian Fakhturahman</td>
                           <td>Reky Prastian P</td>
                           <td><img src="<?= base_url('assets/gambar/kandidat/3.jpeg') ?>" width="130" height="100"></td>
                           <td>

                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editKandidat"><i class="far fa-edit"></i></button>

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
            $('#tableKandidat').DataTable();
         });
      </script>


      <!-- Modal Tambah  -->
      <div class="modal fade" id="addKandidat" tabindex="-1" aria-labelledby="addKandidatLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="addKandidatLabel">Tambah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form action="<?= base_url('kandidat/addKandidat'); ?>" method="post">
                     <div class="modal-body">

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">Nama Kandidat</label>
                           <div class="col-md-12">
                              <input type="hidden" class="form-control">
                              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Kandidat">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-6 col-sm-4 control-label">Nama Pasangan Kandidat</label>
                           <div class="col-md-12">
                              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Pasangan Kandidat">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-6 col-sm-4 control-label">Gambar Kandidat</label>
                           <div class="col-md-12">
                              <div class="custom-file">
                                 <label class="custom-file-label" for="formFile">Pilih File</label>
                                 <input class="custom-file-input" type="file" id="formFile">
                              </div>
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
   <div class="modal fade" id="editKandidat" tabindex="-1" aria-labelledby="editKandidatLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="editKandidatLabel">Ubah Data</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('kandidat/editKandidat'); ?>" method="post">
                  <div class="modal-body">

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Nama Kandidat</label>
                        <div class="col-md-12">
                           <input type="hidden" class="form-control">
                           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Kandidat">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-6 col-sm-4 control-label">Nama Pasangan Kandidat</label>
                        <div class="col-md-12">
                           <input type="hidden" class="form-control">
                           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Pasangan Kandidat">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-6 col-sm-4 control-label">Gambar Kandidat</label>
                        <div class="col-md-12">
                           <div class="custom-file">
                              <label class="custom-file-label" for="formFile">Pilih File</label>
                              <input class="custom-file-input" type="file" id="formFile">
                           </div>
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