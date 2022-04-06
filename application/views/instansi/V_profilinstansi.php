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
                  <div class="cardprofil shadow p-3 mb-5 bg-body rounded">
                     <div class="card-body" style="text-align: left;">
                        <div class="row">
                           <div class="col-lg-6">
                              <h4>Logo Instansi</h4>
                              <img src="<?= base_url('assets/gambar/logovoting.png') ?>" width="150" height="150">
                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editLogo"><i class="far fa-edit"></i> Ubah Logo</button>
                           </div>

                           <div class="col-lg-6">
                              <h4>Warna Instansi</h4>
                              <div class="row">
                                 <div class="col-md-6">
                                    <img src="<?= base_url('assets/gambar/color.jpg') ?>" width="150" height="150">
                                 </div>
                                 <div class="col-md-4" style="margin-top: 50px; margin-left:-80px;">
                                    <input type="hidden" class="form-control">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="#d67d3e" style=" width:125px;">

                                    <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editWarna" style="margin-top: 10px;"><i class=" far fa-edit"></i> Ubah Warna</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end row -->
            </div>
            <!-- container-fluid -->

            <!-- Modal edit -->
            <div class="modal fade" id="editLogo" tabindex="-1" aria-labelledby="editLogoLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="editLogoLabel">Ubah Data</h5>
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




         <!-- Modal edit -->
         <div class="modal fade" id="editWarna" tabindex="-1" aria-labelledby="editWarnaLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="editWarnaLabel">Ubah Data</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="<?= base_url('instansi/editInstansi'); ?>" method="post">
                        <div class="modal-body">

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Warna Instansi</label>
                              <div class="col-md-12">
                                 <input type="hidden" class="form-control">
                                 <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Kode Warna Instansi">
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