  <style>
     .containerf1 {
        font-family: Arial, Helvetica, sans-serif;
        padding: 40px;
        font-size: 13px;
        color: black !important;
     }

     .containerf1 h4 {
        font-size: 14px;
        font-weight: 700;
        text-align: center;
        margin-top: 25px;
        margin-bottom: 50px;
     }

     .containerf1 .namains {
        width: 430px;
     }

     .containerf1 .namains p {
        font-size: 13px;
        margin-top: -8px;
        width: 500px;
     }

     .containerf1 h6 {
        font-size: 14px;
        font-weight: 700;
        margin-top: 20px;
     }

     .breadcrumb {
        background-color: #fff;
     }

     .breadcrumb-item a {
        color: #d67d3e;
     }

     .containerf1 ol li {
        margin-left: -17px;
        width: 700px;
     }
  </style>


  <div class="main-content">
     <div class="page-content">
        <div class="container-fluid">

           <div class="row">
              <div class="col-xl">

                 <!-- tombol -->
                 <div class="row" style="width: 300px;">
                    <div class="col-lg-6">
                       <!-- tombol kembali -->
                       <a href="<?= base_url('Hasilpemilihan') ?>" class="btn btn-gradient mb-3 warnaprimer"><i class="fas fa-undo-alt"></i> Kembali</a>
                    </div>

                    <!-- tombol simpan -->
                    <div class="col-lg-6" style="margin-left: -25px;">
                       <a href="" class="btn btn-gradient mb-3 warnaprimer"><i class="fas fa-save"></i> Simpan</a>
                    </div>
                 </div>
                 <!-- end tombol -->

                 <!-- breadcrumb -->
                 <div class="row">
                    <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="<?= base_url('Formlaporan/index') ?>">Form 1</a></li>
                          <li class="breadcrumb-item"><a href="<?= base_url('Formlaporan/formDua') ?>">Form 2</a></li>
                       </ol>
                    </nav>
                 </div>
                 <!-- end breadcrumb -->


                 <!-- form 1 -->
                 <div class="containerf1 shadow mb-5 bg-body rounded">
                    <h4>BERITA ACARA <br> PEMUNGUTAN DAN PENGHITUNGAN SUARA <br>PEMILIHAN UMUM KETUA DAN WAKIL KETUA BEM<br> UNIVERSITAS IBN KHALDUN BOGOR <br> PERIODE 2022-2023</h4>

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
                    <h6>A. PERSIAPAN PELAKSANAAN PEMILIHAN</h6>
                    <ol>
                       <li>Mengumumkan persyaratan untuk menggunakan hak pilih secara online melalui file pdf.</li>
                       <li>Menjelaskan tata cara dan mekanisme pemberian suara secara online melalui file pdf.</li>
                       <li>Melakukan autentifikasi identitas pemilih yang akan menggunakan hak pilihnya.</li>
                    </ol>

                    <!-- bagian b -->
                    <h6>B. PROSES SETELAH PELAKSANAAN PEMILIHAN</h6>
                    <ol>
                       <li>Mencetak berita acara yang terdapat pada sistem manajemen e-voting.</li>
                       <li>Menampilkan rekapitulasi akhir penghitungan suara.</li>
                       <li>Panitia penyelenggara beserta saksi dan pengawas menandatangani berita acara yang dicetak, lalu di
                          upload kembali pada menu yang telah disediakan.
                       </li>
                    </ol>

                    <!-- bagian c -->
                    <h6>C. PANITIA PENYELENGGARA</h6>
                    <table class="table table-bordered mb-5">
                       <thead style="text-align: center;">
                          <tr>
                             <th scope="col" width="50">NO</th>
                             <th scope="col" width="370">NAMA</th>
                             <th scope="col" width="250">JABATAN</th>
                             <th scope="col">TANDA TANGAN</th>
                          </tr>
                       </thead>
                       <tbody style="text-align: center;">
                          <tr>
                             <td>1</td>
                             <td>Andri Safrudin</td>
                             <td>Ketua Panitia</td>
                             <td></td>
                          </tr>

                          <tr>
                             <td>2</td>
                             <td>Andri Safrudin</td>
                             <td>Ketua Panitia</td>
                             <td></td>
                          </tr>

                          <tr>
                             <td>3</td>
                             <td>Andri Safrudin</td>
                             <td>Ketua Panitia</td>
                             <td></td>
                          </tr>

                       </tbody>
                    </table>

                    <!-- bagian d -->
                    <h6>D. PESERTA PEMILIHAN</h6>
                    <table class="table table-bordered mb-5">
                       <thead style="text-align: center;">
                          <tr>
                             <th scope="col" width="50">NO</th>
                             <th colspan="2" width="300">NAMA PESERTA PEMILIHAN</th>
                             <th scope="col">TANDA TANGAN</th>
                          </tr>
                       </thead>
                       <tbody style="text-align: center;">
                          <tr>
                             <td>1</td>
                             <td colspan="2">Andri Safrudin</td>
                             <td></td>
                          </tr>
                          <tr>
                             <td>2</td>
                             <td colspan="2">Andri Safrudin</td>
                             <td></td>
                          </tr>
                          <tr>
                             <td>3</td>
                             <td colspan="2">Andri Safrudin</td>
                             <td></td>
                          </tr>

                       </tbody>
                    </table>

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