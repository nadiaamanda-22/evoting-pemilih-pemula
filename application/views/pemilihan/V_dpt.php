   <div class="main-content">
      <div class="page-content">
         <div class="container-fluid">

            <!-- judul halaman -->
            <div class="row">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Daftar Pemilih Tetap</h4>
                  </div>
               </div>
            </div>
            <!-- end judul halaman -->

            <div class="row">
               <div class="col-xl">


                  <div class="row" style="width: 340px;">
                     <div class="col-lg-6">
                        <!-- tombol tambah -->
                        <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#addDpt" style="margin-bottom:20px;">
                           <i class="fas fa-plus"></i> Tambah Data
                        </button>
                     </div>

                     <div class="col-lg-6">
                        <!-- tombol export -->
                        <div class="dropdown">
                           <button class="btn btn-gradient dropdown-toggle warnaprimer" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fas fa-file-export"></i> Ekspor
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="<?= base_url('DPT/cetakPdfDpt') ?>" target="_blank">PDF</a></li>
                              <li><a class="dropdown-item" href="<?= base_url('DPT/cetakCsvDpt') ?>">CSV</a></li>
                              <li><a class="dropdown-item" href="<?= base_url('DPT/cetakXlsxDpt') ?>">XLXS</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>

                  <table class="table table-striped" id="tableDpt">
                     <thead>
                        <tr>
                           <th scope="col">No</th>
                           <th scope="col">Nama</th>
                           <th scope="col">Username</th>
                           <th scope="col">Nomor Induk</th>
                           <th scope="col">Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td scope="row">1</td>
                           <td>Ahmad</td>
                           <td>ahmad123</td>
                           <td>123456</td>
                           <td>
                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#detailDpt"><i class="fas fa-eye"></i></i></button>

                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editDpt"><i class="far fa-edit"></i></button>


                              <a href="#" class=" btn btn-gradient warnadanger"><i class="far fa-trash-alt"></i></a>
                           </td>
                        </tr>

                        <tr>
                           <td scope="row">2</td>
                           <td>Muhammad</td>
                           <td>muhamad22</td>
                           <td>123457</td>
                           <td>
                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#detailDpt"><i class="fas fa-eye"></i></i></button>

                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editDpt"><i class="far fa-edit"></i></button>


                              <a href="#" class=" btn btn-gradient warnadanger"><i class="far fa-trash-alt"></i></a>
                           </td>
                        </tr>


                        <tr>
                           <td scope="row">3</td>
                           <td>Susi</td>
                           <td>susi90</td>
                           <td>123458</td>
                           <td>
                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#detailDpt"><i class="fas fa-eye"></i></i></button>

                              <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#editDpt"><i class="far fa-edit"></i></button>


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

         <!-- Modal Tambah  -->
         <div class="modal fade" id="addDpt" tabindex="-1" aria-labelledby="addDptLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="addDptLabel">Tambah Data</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="<?= base_url('dpt/editDpt'); ?>" method="post">
                        <div class="modal-body">

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-6 col-sm-4 control-label">Nama</label>
                              <div class="col-md-12">
                                 <input type="hidden" class="form-control">
                                 <input type="text" class="form-control" id="namapemilih" name="namapemilih" placeholder="Masukkan Nama">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-6 col-sm-4 control-label">Nama Ibu</label>
                              <div class="col-md-12">
                                 <input type="text" class="form-control" id="namaibu" name="namaibu" placeholder="Masukkan Nama Ibu">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Nomor Induk</label>
                              <div class="col-md-12">
                                 <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan Nomor Induk">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">NIK</label>
                              <div class="col-md-12">
                                 <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Username</label>
                              <div class="col-md-12">
                                 <input type="text" class="form-control" id="usernamepemilih" name="usernamepemilih" placeholder="Masukkan Username">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Password</label>
                              <div class="col-md-12">
                                 <input type="password" class="form-control" id="passpemilih" name="passpemilih" placeholder="Masukkan Password">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Email</label>
                              <div class="col-md-12">
                                 <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Imei</label>
                              <div class="col-md-12">
                                 <input type="text" class="form-control" id="imei" name="imei" placeholder="Masukkan Imei">
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
      <!-- page content -->

      <script>
         $(document).ready(function() {
            $('#tableDpt').DataTable();
         });
      </script>

      <!-- Modal detail -->
      <div class="modal fade" id="detailDpt" tabindex="-1" aria-labelledby="detailDptLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="detailDptLabel">Detail Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form action="<?= base_url('dpt/editDpt'); ?>" method="post">
                     <div class="modal-body">

                        <div class="form-group" style="margin-bottom: 20px;">
                           <div class="row">
                              <div class="col-lg-3">
                                 <label class="control-label">Nama</label>
                              </div>
                              <div class="col-lg-9">
                                 <input type="hidden" class="form-control">
                                 <input type="text" class="form-control" id="namapemilih" name="namapemilih" placeholder="Ahmad" disabled>
                              </div>
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <div class="row">
                              <div class="col-lg-3">
                                 <label class="control-label">Nama Ibu</label>
                              </div>
                              <div class="col-lg-9">
                                 <input type="text" class="form-control" id="namaibup" name="namaibup" placeholder="Fuji Astuti" disabled>
                              </div>
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <div class="row">
                              <div class="col-lg-3">
                                 <label class="control-label">Nomor Induk</label>
                              </div>
                              <div class="col-lg-9">
                                 <input type="text" class="form-control" id="noinduk" name="noinduk" placeholder="123456" disabled>
                              </div>
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <div class="row">
                              <div class="col-lg-3">
                                 <label class="control-label">NIK</label>
                              </div>
                              <div class="col-lg-9">
                                 <input type="text" class="form-control" id="nik" name="nik" placeholder="123456" disabled>
                              </div>
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <div class="row">
                              <div class="col-lg-3">
                                 <label class="control-label">Username</label>
                              </div>
                              <div class="col-lg-9">
                                 <input type="text" class="form-control" id="usernamep" name="usernamep" placeholder="ahmad123" disabled>
                              </div>
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <div class="row">
                              <div class="col-lg-3">
                                 <label class="control-label">Email</label>
                              </div>
                              <div class="col-lg-9">
                                 <input type="text" class="form-control" id="emailp" name="emailp" placeholder="ahmad123@gmail.com" disabled>
                              </div>
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <div class="row">
                              <div class="col-lg-3">
                                 <label class="control-label">Imei</label>
                              </div>
                              <div class="col-lg-9">
                                 <input type="text" class="form-control" id="imei" name="imei" placeholder="123456" disabled>
                              </div>
                           </div>
                        </div>
                  </form>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-gradient warnacancel" data-bs-dismiss="modal">Kembali</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Akhir modal detail-->


   </div>
   <!-- main content -->


   <!-- Modal edit -->
   <div class="modal fade" id="editDpt" tabindex="-1" aria-labelledby="editDptLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="editDptLabel">Edit Data</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('dpt/editDpt'); ?>" method="post">
                  <div class="modal-body">

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-6 col-sm-4 control-label">Nama</label>
                        <div class="col-md-12">
                           <input type="hidden" class="form-control">
                           <input type="text" class="form-control" id="namapemilih" name="namapemilih" placeholder="Ahmad">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-6 col-sm-4 control-label">Nama Ibu</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="namaibu" name="namaibu" placeholder="Fuji Astuti">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Nomor Induk</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="nim" name="nim" placeholder="1234567">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">NIK</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="nik" name="nik" placeholder="1234567">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Username</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="usernamepemilih" name="usernamepemilih" placeholder="ahmad123">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Password</label>
                        <div class="col-md-12">
                           <input type="password" class="form-control" id="passpemilihh" name="passpemilihh" placeholder=".....">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Email</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="email" name="email" placeholder="ahmad123@gmail.com">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Imei</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="imei" name="imei" placeholder="225">
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