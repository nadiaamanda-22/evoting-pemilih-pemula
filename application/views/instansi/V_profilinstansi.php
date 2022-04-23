   <style>
      .card-title {
         margin-bottom: 0.75rem;
         font-size: 14px;
         font-weight: 400;
         color: #a9a3a3;
         font-family: 'Poppins';
      }

      .card-text {
         font-size: 15px;
         margin-top: -11px;
         margin-bottom: 25px;
         font-family: 'Poppins';
      }
   </style>


   <div class="main-content">

      <div class="page-content">
         <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Data Pemilihan Instansi</h4>
                  </div>
               </div>
            </div>
            <!-- end page title -->

            <div class="row">
               <div class="col-xl">
                  <div class="card mb-3" style="max-width: 700px;">
                     <div class="row g-0">
                        <div class="col-md-4">
                           <img src="<?= base_url('assets/gambar/logouika.png') ?>" class="img-fluid rounded-start" style="margin-left: 20px; margin-top:20px;">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h3 class="card-title">Nama Instansi</h3>
                              <p class="card-text">Universitas Ibn Khaldun Bogor</p>

                              <h3 class="card-title">Alamat</h3>
                              <p class="card-text">Jl. KH Soleh Iskandar 2</p>


                              <div class="row">
                                 <div class="col-lg-6">
                                    <h3 class="card-title">Waktu Mulai</h3>
                                    <p class="card-text">10-23-2022 09:00 AM</p>
                                 </div>

                                 <div class="col-lg-6">
                                    <h3 class="card-title">Waktu Selesai</h3>
                                    <p class="card-text">10-23-2022 01:30 PM</p>
                                 </div>
                              </div>

                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editprofilIns" style="margin-top:20px;">
                                 <i class="fas fa-edit"></i> Ubah Data
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <!-- end row -->
            <!-- container-fluid -->

            <script>
               $(document).ready(function() {
                  $('#tableprofilIns').DataTable();
               });
            </script>

            <!-- Modal edit -->
            <div class="modal fade" id="editprofilIns" tabindex="-1" aria-labelledby="editprofilInsLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="editprofilInsLabel">Ubah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <form action="<?= base_url('profilIns/editprofilIns'); ?>" method="post">
                           <div class="modal-body">

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-6 col-sm-4 control-label">Logo Instansi</label>
                                 <div class="col-md-12">
                                    <div class="custom-file">
                                       <input type="hidden" class="form-control">
                                       <label class="custom-file-label" for="formFile">Pilih File</label>
                                       <input class="custom-file-input" type="file" id="formFile">
                                    </div>
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-4 col-sm-4 control-label">Nama Instansi</label>
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" id="namains" placeholder="Universitas Ibn Khaldun Bogor">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-4 col-sm-4 control-label">Alamat</label>
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" id="alamatins" placeholder="Jl Kh Shole Iskandar 2">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label for="example-datetime-local-input" class="col-lg-4 col-sm-4 col-form-label">Waktu Awal</label>
                                 <div class="col-md-12">
                                    <input class="form-control" type="datetime-local" value="2022-10-23T09:00:00" id="example-datetime-local-input">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label for="example-datetime-local-input" class="col-lg-4 col-sm-4 col-form-label">Waktu Akhir</label>
                                 <div class="col-md-12">
                                    <input class="form-control" type="datetime-local" value="2022-10-23T13:30:00" id="example-datetime-local-input">
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