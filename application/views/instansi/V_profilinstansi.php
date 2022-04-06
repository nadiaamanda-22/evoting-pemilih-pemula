   <div class="main-content">

      <div class="page-content">
         <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Profil Instansi</h4>
                  </div>
               </div>
            </div>
            <!-- end page title -->

            <div class="row">
               <div class="col-xl">

                  <button type="button" class="btn btn-gradient" data-bs-toggle="modal" data-bs-target="#addInstansi" style="background-color: #d67d3e; color:white; margin-bottom:20px;">
                     <i class="fas fa-plus"></i> Tambah Data
                  </button>

                  <table class="table table-striped" id="tableInstansi">
                     <thead>
                        <tr>
                           <th scope="col">No</th>
                           <th scope="col">Logo Instansi</th>
                           <th scope="col">Nama Instansi</th>
                           <th scope="col">Alamat Instansi</th>
                           <th scope="col">Warna Instansi</th>
                           <th scope="col">Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td scope="row">1</td>
                           <td><img src="<?= base_url('assets/gambar/logovoting.png') ?>" width="100" height="100"></td>
                           <td>RA Bahrul Ulum</td>
                           <td>Bogor</td>
                           <td>Hijau</td>
                           <td>
                              <!-- tombol sementara -->
                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editInstansi"><i class="far fa-edit"></i></button>

                              <!-- tombol aslinya -->
                              <!-- <a href="<?= base_url('instansi/editInstansi') ?>" class="btn btn-gradient warnaprimer" data-toggle="modal" data-target="#editInstansi"><i class="far fa-edit"></i></a> -->

                              <a href="#" class=" btn btn-gradient warnadanger"><i class="far fa-trash-alt"></i></a>
                           </td>
                        </tr>

                     </tbody>
                  </table>
               </div>
               <!-- end row -->
            </div>
            <!-- container-fluid -->


            <script>
               $(document).ready(function() {
                  $('#tableInstansi').DataTable();
               });
            </script>

            <!-- Modal Tambah  -->
            <div class="modal fade" id="addInstansi" tabindex="-1" aria-labelledby="addInstansiLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="addInstansiLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <form action="<?= base_url('instansi/addInstansi'); ?>" method="post">
                           <div class="modal-body">


                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-4 col-sm-4 control-label">Logo Instansi</label>
                                 <div class="col-md-12">
                                    <input class="form-control" type="file" id="formFile">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-4 col-sm-4 control-label">Nama Instansi</label>
                                 <div class="col-md-12">
                                    <input type="hidden" class="form-control">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Instansi">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-4 col-sm-4 control-label">Alamat Instansi</label>
                                 <div class="col-md-12">
                                    <input type="hidden" class="form-control">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat Instansi">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-4 col-sm-4 control-label">Warna Instansi</label>
                                 <div class="col-md-12">
                                    <input type="hidden" class="form-control">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Warna Instansi">
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
         <div class="modal fade" id="editInstansi" tabindex="-1" aria-labelledby="editInstansiLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="editInstansiLabel">Ubah Data</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="<?= base_url('instansi/editInstansi'); ?>" method="post">
                        <div class="modal-body">

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Logo Instansi</label>
                              <div class="col-md-12">
                                 <input class="form-control" type="file" id="formFile">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Nama Instansi</label>
                              <div class="col-md-12">
                                 <input type="hidden" class="form-control">
                                 <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Instansi">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Alamat Instansi</label>
                              <div class="col-md-12">
                                 <input type="hidden" class="form-control">
                                 <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat Instansi">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Warna Instansi</label>
                              <div class="col-md-12">
                                 <input type="hidden" class="form-control">
                                 <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Warna Instansi">
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