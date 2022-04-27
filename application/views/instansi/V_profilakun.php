   <div class="main-content">

      <div class="page-content">
         <div class="container-fluid">

            <!-- start page title -->
            <div class="row akun">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Profil Akun</h4>
                  </div>
               </div>
            </div>
            <!-- end page title -->
            <div class="cardakun shadow p-3 mb-5 bg-body rounded" style="max-width: 540px;">
               <div class="row g-0">
                  <div class="col-md-4">
                     <img src="<?= base_url('assets/gambar/profil.png') ?>" width="150" height="150" class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-8">
                     <div class="card-body">
                        <h5 class="card-title" style="margin-top: 30px; font-size:20px;">AdminInstansi</h5>
                        <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editAkun" style="margin-top: 10px;"><i class="far fa-edit"></i> Ubah</button>
                     </div>
                  </div>
               </div>
            </div>

            <!-- end row -->
         </div>
         <!-- container-fluid -->

         <!-- Modal edit -->
         <div class="modal fade" id="editAkun" tabindex="-1" aria-labelledby="editAkunLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="editAkunLabel">Ubah Data</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="<?= base_url('Akun/editKandidat'); ?>" method="post">
                        <div class="modal-body">

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-6 col-sm-4 control-label">Username</label>
                              <div class="col-md-12">
                                 <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="AdminInstansi" disabled>
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-6 col-sm-4 control-label">Password</label>
                              <div class="col-md-12">
                                 <input type="password" class="form-control" id="exampleFormControlInput1">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-6 col-sm-4 control-label">Foto Profil</label>
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


      </div>
      <!-- main content -->