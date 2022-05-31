  <style>
     .containerf2 {
        font-family: Arial, Helvetica, sans-serif;
        padding: 40px;
        font-size: 13px;
        color: black !important;
     }

     .containerf2 h4 {
        font-size: 14px;
        font-weight: 700;
        text-align: center;
        margin-top: 25px;
        margin-bottom: 50px;
     }

     .containerf2 .namains {
        width: 530px;
     }

     .containerf2 h6 {
        font-size: 14px;
        font-weight: 700;
        margin-top: 20px;
     }

     .containerf2 .namains p {
        font-size: 13px;
        margin-top: -8px;
        width: 500px;
     }

     .nav-tabs {
        margin-top: 20px;
        width: 200px;
        margin-left: 20px;
     }
  </style>


  <div class="main-content">
     <div class="page-content">
        <div class="container-fluid">

           <div class="row">
              <div class="col-xl">

                 <div class="row" style="width: 300px;">
                    <div class="col-lg-6">
                       <!-- tombol tambah -->
                       <a href="<?= base_url('Hasilpemilihan/') ?>" class="btn btn-gradient mb-3 warnaprimer"><i class="fas fa-undo-alt"></i> Kembali</a>
                    </div>

                    <!-- tombol simpan -->
                    <div class="col-lg-6" style="margin-left: -25px;">
                       <a href="" class="btn btn-gradient mb-3 warnaprimer"><i class="fas fa-save"></i> Simpan</a>
                    </div>
                 </div>

                 <!-- tombol form -->
                 <div class="row">
                    <ul class="nav nav-tabs">
                       <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="<?= base_url('Formlaporan/index') ?>">Form 1</a>
                       </li>
                       <li class=" nav-item">
                          <a class="nav-link active" href="<?= base_url('Formlaporan/formDua') ?>">Form 2</a>
                       </li>
                    </ul>
                 </div>
                 <!-- end tombol form -->


                 <!-- form 2 -->
                 <div class="containerf2 shadow mb-5 bg-body rounded">
                    <h4>SERTIFIKAT <br>HASIL PENGHITUNGAN PEROLEHAN SUARA <br> PEMILIHAN UMUM KETUA DAN WAKIL KETUA BEM <br> UNIVERSITAS IBN KHALDUN BOGOR <br> PERIODE 2022-2023</h4>

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

                    <!-- bagian a -->
                    <h6>A. DATA PEMILIH DAN PENGGUNAAN HAK PILIH</h6>
                    <table class="table table-bordered mb-5">
                       <thead style="text-align: center;">
                          <tr>
                             <th rowspan="2" style="vertical-align: middle;">NO</th>
                             <th rowspan="2" style="vertical-align: middle;">DATA PEMILIH</th>
                             <th colspan="3">JUMLAH</th>
                             <th colspan="3">PRESENTASE</th>
                          </tr>
                          <tr>
                             <td>Lk</td>
                             <td>Pr</td>
                             <td>Jumlah</td>

                             <td>Lk</td>
                             <td>Pr</td>
                             <td>Jumlah</td>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td style="text-align: center;">1</td>
                             <td>Pemilih Terdaftar</td>
                             <td style="text-align: center;">77</td>
                             <td style="text-align: center;">19</td>
                             <td style="text-align: center;">96</td>

                             <td style="text-align: center;">80.21%</td>
                             <td style="text-align: center;">80.21%</td>
                             <td style="text-align: center;">80.21%</td>
                          </tr>

                          <tr>
                             <td style="text-align: center;">2</td>
                             <td>Menggunakan Hak Pilih</td>
                             <td style="text-align: center;">77</td>
                             <td style="text-align: center;">19</td>
                             <td style="text-align: center;">96</td>

                             <td style="text-align: center;">80.21%</td>
                             <td style="text-align: center;">80.21%</td>
                             <td style="text-align: center;">80.21%</td>
                          </tr>

                          <tr>
                             <td style="text-align: center;">3</td>
                             <td>Tidak Menggunakan Hak Pilih</td>
                             <td style="text-align: center;">77</td>
                             <td style="text-align: center;">19</td>
                             <td style="text-align: center;">96</td>

                             <td style="text-align: center;">80.21%</td>
                             <td style="text-align: center;">80.21%</td>
                             <td style="text-align: center;">80.21%</td>
                          </tr>
                       </tbody>
                    </table>

                    <!-- bagian b -->
                    <h6>B. DATA PEROLEHAN SUARA SAH CALON PESERTA PEMILIHAN</h6>
                    <table class="table table-bordered mb-5">
                       <thead style="text-align: center;">
                          <tr>
                             <th scope="col" width="90">NO URUT</th>
                             <th scope="col" width="400">NAMA CALON PESERTA PEMILIHAN</th>
                             <th scope="col" width="250">JUMLAH PEROLEHAN SUARA</th>
                             <th scope="col">PRESENTASE</th>
                          </tr>
                       </thead>
                       <tbody style="text-align: center;">
                          <tr>
                             <td>1</td>
                             <td>Susiliawati</td>
                             <td>0</td>
                             <td>0.00%</td>
                          </tr>
                          <tr>
                             <td>2</td>
                             <td>Susiliawati</td>
                             <td>0</td>
                             <td>0.00%</td>
                          </tr>
                          <tr>
                             <td>3</td>
                             <td>Susiliawati</td>
                             <td>0</td>
                             <td>0.00%</td>
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

     </div>
     <!-- main content -->