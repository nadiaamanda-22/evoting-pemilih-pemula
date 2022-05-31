  <style>
     .nav-link:focus,
     .nav-link:hover {
        color: #d67d3e;
        text-decoration: none;
     }

     .cardhasil .card-header {
        text-align: center;
        min-width: 10vw;
        min-height: 5vh;
        font-family: 'Poppins';
     }

     .cardLaporan {
        text-align: center;
     }

     .cardLaporan .card-header {
        font-weight: 500;
        text-align: center;
        font-size: 17px;
        color: #fff;
        background-color: #d67d3e;
        font-family: 'Poppins';
     }

     .cardLaporan .row {
        margin: 15px auto;
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

                 <!-- hasil pemilihan -->
                 <div class="card cardhasil shadow mb-5 bg-body rounded">
                    <h5 class="card-header warnaprimer">BEM Universitas</h5>
                    <div class="card-body">
                       <div class="row">
                          <div class="col">
                             <h5>150</h5>
                             <h6>Bahar - Nur Khofifah Saadiah</h6>
                          </div>

                          <div class="col">
                             <h5>170</h5>
                             <h6>Garis Haikal A - Dimas Mulya Saputra</h6>
                          </div>

                          <div class="col">
                             <h5>180</h5>
                             <h6>Ardian Fakhturahman - Reky Prastian P</h6>
                          </div>

                       </div>
                    </div>
                 </div>
                 <!-- end hasil pemilihan -->

                 <!-- judul berita acara -->
                 <div class="row">
                    <div class="col-12">
                       <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                          <h4 class="mb-sm-0 font-size-18">Laporan Berita Acara</h4>
                       </div>
                    </div>
                 </div>

                 <!-- laporan berita acara -->
                 <div class="card cardLaporan shadow mb-5 bg-body rounded">
                    <div class="card-header">
                       Laporan Berita Acara
                    </div>
                    <div class="card-body">
                       <!-- tombol isi form -->
                       <div class="row">
                          <div class="col-lg-4">
                             <a href="<?= base_url('Formlaporan/index') ?>" class="btn btn-gradient mb-3 warnaprimer"><i class="fas fa-plus"></i> Isi Laporan</a>
                          </div>

                          <!-- tombol lihat form -->
                          <!-- <div class="col-lg-4">
                             <a href="<?= base_url('Formlaporan/index') ?>" class="btn btn-gradient mb-3 warnaprimer"><i class="fas fa-plus"></i> Lihat Laporan</a>
                          </div> -->

                          <!-- tombol cetak -->
                          <div class="col-lg-4" style="margin-left: -23px;">
                             <a href="<?= base_url('Formlaporan/BeritaAcara') ?>" class="btn btn-gradient mb-3 warnaprimer" target="_blank"><i class="fas fa-file-export"></i> Cetak Laporan</a>
                          </div>

                          <!-- tombol Upload -->
                          <div class="col-lg-4">
                             <a href="" class="btn btn-gradient mb-3 warnaprimer" data-bs-toggle="modal" data-bs-target="#uploadFormc1"><i class="fas fa-upload"></i> Upload Laporan</a>
                          </div>
                       </div>

                    </div>
                 </div>
              </div>
              <!-- end form berita acara -->
           </div>

        </div>
     </div>

  </div>
  <!-- container fluid -->
  </div>
  <!-- page content -->

  <!-- Modal Upload -->
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
                       <label class="col-lg-6 col-sm-4 control-label">Laporan Berita Acara</label>
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