  <style>
     .containerc5 {
        font-family: Arial, Helvetica, sans-serif;
        padding: 30px;
        font-size: 12px;
        color: black !important;
     }

     .containerc5 h4 {
        font-size: 13px;
        font-weight: 700;
        text-align: center;
        margin-top: 25px;
        margin-bottom: 50px;
     }

     .containerc5 .namains {
        width: 530px;
     }

     .containerc5 h6 {
        font-size: 12px;
        font-weight: 700;
     }

     .containerc5 .kotk .card-text {
        text-align: center;
        height: 40px;
        margin-top: 60px;
     }

     .containerc5 .nmpengawas {
        text-align: center;
        font-size: 12px;
        font-weight: 700;
     }

     .containerc5 .ttdckpu {
        width: 250px;
        text-align: center;
        margin-left: 70%;
     }

     .row .ttdc5 {
        margin-top: 50px;
     }
  </style>


  <div class="main-content">
     <div class="page-content">
        <div class="container-fluid">

           <!-- judul halaman -->
           <div class="row">
              <div class="col-12">
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Laporan C5 KPU</h4>
                 </div>
              </div>
           </div>
           <!-- end judul halaman -->

           <div class="row">
              <div class="col-xl">

                 <div class="row" style="width: 300px;">
                    <div class="col-lg-6">
                       <!-- tombol tambah -->
                       <a href="<?= base_url('Hasilpemilihan') ?>" class="btn btn-gradient mb-3 warnaprimer"><i class="fas fa-undo-alt"></i> Kembali</a>
                    </div>

                    <div class="col-lg-6" style="margin-left: -25px;">
                       <a href="" class="btn btn-gradient mb-3 warnaprimer"><i class="fas fa-save"></i> Simpan</a>
                    </div>
                 </div>

                 <!-- form c5 kpu BAGIAN A -->
                 <div class="containerc5 shadow mb-5 bg-body rounded">
                    <h4>TANDA TERIMA <br>PENYERAHAN SALINAN BERITA ACARA PEMUNGUTAN DAN PENGHITUNGAN SUARA <br> SERTA SERTIFIKAT HASIL PENGHITUNGAN SUARA <br> PEMILIHAN UMUM UNIVERSITAS IBN KHALDUN BOGOR TAHUN 2022</h4>

                    <div class="row namains">
                       <div class="col-lg-4">
                          <p>Nama Instansi</p>
                          <p>Alamat</p>
                          <p>Jenis Pemilihan</p>
                       </div>
                       <div class="col-lg-8">
                          <p>: Universitas Ibn Khaldun Bogor</p>
                          <p>: Jln KH Sholeh Iskandar KM 2, Bogor, Jawa Barat</p>
                          <p>: Ketua dan Wakil Ketua Badan Eksekutif Mahasiswa (BEM)</p>
                       </div>
                    </div>

                    <p>Penerima Salinan Berita Acara Dan Sertifikat:</p>
                    <h6>A. SAKSI PASANGAN KETUA DAN WAKIL KETUA BEM</h6>

                    <div class="card-group kotk">
                       <div class="card">
                          <div class="card-body">
                             <div class="row">
                                <div class="col-lg-2">
                                   <h5 class="card-title">01</h5>
                                </div>
                                <div class="col-lg-10">
                                   <h5 class="card-title">Muhammad <br> Ahmad</h5>
                                </div>
                             </div>
                             <hr>
                             <p class="card-text">
                                <input type="text" aria-label="Last name" placeholder="Nama Lengkap Saksi">
                                <br> Nama Lengkap
                             </p>
                          </div>
                       </div>

                       <div class="card">
                          <div class="card-body">
                             <div class="row">
                                <div class="col-lg-2">
                                   <h5 class="card-title">02</h5>
                                </div>
                                <div class="col-lg-10">
                                   <h5 class="card-title">Habibi <br> Ainun</h5>
                                </div>
                             </div>
                             <hr>
                             <p class="card-text">
                                <input type="text" aria-label="Last name" placeholder="Nama Lengkap Saksi">
                                <br> Nama Lengkap
                             </p>
                          </div>
                       </div>

                       <div class="card">
                          <div class="card-body">
                             <div class="row">
                                <div class="col-lg-2">
                                   <h5 class="card-title">03</h5>
                                </div>
                                <div class="col-lg-10">
                                   <h5 class="card-title">Romeo <br> Moreo</h5>
                                </div>
                             </div>
                             <hr>
                             <p class="card-text">
                                <input type="text" aria-label="Last name" placeholder="Nama Lengkap Saksi">
                                <br> Nama Lengkap
                             </p>
                          </div>
                       </div>



                    </div>

                    <!-- </div>


                 <div class="containerc5 shadow mb-5 bg-body rounded">
                    <h4>TANDA TERIMA <br>PENYERAHAN SALINAN BERITA ACARA PEMUNGUTAN DAN PENGHITUNGAN SUARA <br> SERTA SERTIFIKAT HASIL PENGHITUNGAN SUARA <br> PEMILIHAN UMUM UNIVERSITAS IBN KHALDUN BOGOR TAHUN 2022</h4>

                    <div class="row namains">
                       <div class="col-lg-4">
                          <p>Nama Instansi</p>
                          <p>Alamat</p>
                          <p>Jenis Pemilihan</p>
                       </div>
                       <div class="col-lg-8">
                          <p>: Universitas Ibn Khaldun Bogor</p>
                          <p>: Jln KH Sholeh Iskandar KM 2, Bogor, Jawa Barat</p>
                          <p>: Ketua dan Wakil Badan Eksekutif Mahasiswa (BEM)</p>
                       </div>
                    </div>

                    <p>Penerima Salinan Berita Acara Dan Sertifikat:</p> -->
                    <h6 class="mt-5">B. PENGAWAS PANITIA PELAKSANA</h6>

                    <div class="card-group kotk">
                       <div class="card">
                          <div class="card-body">
                             <h5 class="nmpengawas">PENGAWAS PANITIA PELAKSANA</h5>
                             <hr>
                             <p class="card-text">
                                <input type="text" aria-label="Last name" placeholder="Nama Lengkap Pengawas Panitia Pelaksana">
                                <br> Nama Lengkap
                             </p>
                          </div>
                       </div>
                    </div>

                    <div class="ttdckpu">
                       <div class="row ttdc5">
                          <div class="col-lg-4">
                             <input type="text" aria-label="Last name" placeholder="Tempat," style="width: 100px;">
                          </div>

                          <div class="col-lg-3">
                             <input type="text" aria-label="Last name" placeholder="Tanggal-Bulan-Tahun" style="width: 150px; margin-left:10px;">
                          </div>

                          <p class="mt-2 mb-5">Yang Menyerahkan, <br>Panitia Penyelenggara Pemungutan Suara <br> Ketua,</p>
                          <input type=" text" aria-label="Last name" placeholder="Nama Lengkap Ketua Panitia Penyelenggara" class="mt-4">
                       </div>
                    </div>

                 </div>

              </div>

           </div>
           <!-- end row -->

        </div>
        <!-- container fluid -->
     </div>
     <!-- page content -->

  </div>
  <!-- main content -->