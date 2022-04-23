  <style>
     .nav-link:focus,
     .nav-link:hover {
        color: #d67d3e;
        text-decoration: none;
     }
  </style>


  <div class="main-content">
     <div class="page-content">
        <div class="container-fluid">

           <!-- judul halaman -->
           <div class="row">
              <div class="col-12">
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Hasil Pemilihan</h4>
                 </div>
              </div>
           </div>
           <!-- end judul halaman -->

           <div class="row">
              <div class="col-md-12" style="margin: 0 auto;">

                 <!-- tombol export -->
                 <button type="submit" class="btn btn-gradient warnaprimer mb-4">
                    <i class="fas fa-file-export"></i> Ekspor PDF</button>

                 <!-- hasil pemilihan -->
                 <div class="card cardhasil shadow mb-5 bg-body rounded">
                    <h5 class="card-header warnaprimer">BEM Universitas</h5>
                    <div class="card-body">
                       <div class="row">
                          <div class="col">
                             <h5>111</h5>
                             <h6>Ahmad - Muhammad</h6>
                          </div>

                          <div class="col">
                             <h5>121</h5>
                             <h6>Habibi - Ainun</h6>
                          </div>

                          <div class="col">
                             <h5>400</h5>
                             <h6>Romeo - Moreo</h6>
                          </div>

                       </div>
                    </div>
                 </div>
                 <!-- end hasil pemilihan -->

                 <!-- judul form plano -->
                 <div class="row">
                    <div class="col-12">
                       <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                          <h4 class="mb-sm-0 font-size-18">Laporan C1 Plano dan C5-KPU</h4>
                       </div>
                    </div>
                 </div>

                 <!-- form plano -->
                 <div class="col-xl-12 containerform">
                    <div class="card-box pb-0 shadow p-3 mb-5 bg-body rounded">

                       <div id="progressbarwizard" class="pull-in">
                          <ul class="nav nav-tabs nav-justified">
                             <li class="nav-item "><a href="#c1plano" data-bs-toggle="tab" class="nav-link">C1 Plano</a>
                             </li>
                             <li class="nav-item"><a href="#c5kpu" data-bs-toggle="tab" class="nav-link">C5-KPU</a></li>
                          </ul>

                          <div class="tab-content b-0 mb-0">

                             <div id="bar" class="progress progress-striped progress-bar-info-alt">
                                <div class="bar progress-bar progress-bar-info"></div>
                             </div>

                             <div class="tab-pane p-t-10" id="c1plano">
                                <div class="row">
                                   <div class="col-12">
                                      <div class="p-20">

                                         <h6 style="padding: 13px;">Catatan Hasil Penghitungan Suara</h6>
                                         <div class="row" style="width: 570px;">
                                            <!-- tombol isi form -->
                                            <div class="col-lg-4">
                                               <a href="<?= base_url('Formlaporan/index') ?>" class="btn btn-gradient mb-3 warnaprimer"><i class="fas fa-plus"></i> Isi Laporan</a>
                                            </div>

                                            <!-- tombol lihat form -->
                                            <!-- <div class="col-lg-4">
                                               <a href="<?= base_url('Formlaporan/index') ?>" class="btn btn-gradient mb-3 warnaprimer"><i class="fas fa-plus"></i> Lihat Laporan</a>
                                            </div> -->

                                            <!-- tombol cetak -->
                                            <div class="col-lg-4" style="margin-left: -23px;">
                                               <a href="" class="btn btn-gradient mb-3 warnaprimer" target="_blank"><i class="fas fa-file-export"></i> Cetak Laporan</a>
                                            </div>

                                            <!-- tombol Upload -->
                                            <div class="col-lg-4">
                                               <a href="" class="btn btn-gradient mb-3 warnaprimer" data-bs-toggle="modal" data-bs-target="#uploadFormc1"><i class="fas fa-upload"></i> Upload Laporan</a>
                                            </div>
                                         </div>

                                      </div>
                                   </div>

                                </div>
                             </div>
                             <!-- end c1 plano -->


                             <!-- c5 kpu -->
                             <div class="tab-pane p-t-10" id="c5kpu">
                                <div class="row">
                                   <div class="col-12">
                                      <div class="p-20">

                                         <h6 style="padding: 13px;">Tanda Terima Penyerahan Salinan Berita Acara Pemungutan dan Penghitungan Suara serta Sertifikat Hasil Penghitungan Suara</h6>

                                         <div class="row" style="width: 570px;">
                                            <!-- tombol isi form -->
                                            <div class="col-lg-4">
                                               <a href="<?= base_url('Formlaporan/cLima') ?>" class="btn btn-gradient mb-3 warnaprimer"><i class="fas fa-plus"></i> Isi Laporan</a>
                                            </div>

                                            <!-- tombol lihat form -->
                                            <!-- <div class="col-lg-4">
                                               <a href="<?= base_url('Formlaporan/index') ?>" class="btn btn-gradient mb-3 warnaprimer"><i class="fas fa-plus"></i> Lihat Laporan</a>
                                            </div> -->

                                            <!-- tombol cetak -->
                                            <div class="col-lg-4" style="margin-left: -23px;">
                                               <a href="" class="btn btn-gradient mb-3 warnaprimer" target="_blank"><i class="fas fa-file-export"></i> Cetak Laporan</a>
                                            </div>

                                            <!-- tombol Upload -->
                                            <div class="col-lg-4">
                                               <a href="" class="btn btn-gradient mb-3 warnaprimer" data-bs-toggle="modal" data-bs-target="#uploadFormc5"><i class="fas fa-upload"></i> Upload Laporan</a>
                                            </div>
                                         </div>

                                      </div>
                                   </div>

                                </div>


                             </div>
                          </div>

                       </div>
                    </div>
                    <!-- end c5 kpu -->

                 </div>
              </div>
           </div>
        </div>

     </div>



  </div>
  <!-- container fluid -->
  </div>
  <!-- page content -->

  <!-- Modal Upload C1 Plano  -->
  <div class="modal fade" id="uploadFormc1" tabindex="-1" aria-labelledby="uploadFormc1Label" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <h5 class="modal-title" id="uploadFormc1Label">Upload Laporan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
              <form action="<?= base_url('kandidat/addKandidat'); ?>" method="post">
                 <div class="modal-body">

                    <div class="form-group" style="margin-bottom: 20px;">
                       <label class="col-lg-6 col-sm-4 control-label">Laporan C1 Plano</label>
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
  <!-- Akhir modal -->

  </div>
  <!-- main content -->

  <!-- Modal Upload C1 Plano  -->
  <div class="modal fade" id="uploadFormc5" tabindex="-1" aria-labelledby="uploadFormc5Label" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <h5 class="modal-title" id="uploadFormc5Label">Upload Laporan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
              <form action="<?= base_url('kandidat/addKandidat'); ?>" method="post">
                 <div class="modal-body">

                    <div class="form-group" style="margin-bottom: 20px;">
                       <label class="col-lg-6 col-sm-4 control-label">Laporan C5-KPU</label>
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
  <!-- Akhir modal -->