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

            <!-- datatable -->
            <div class="row">
               <div class="col-xl">

                  <!-- tombol tambah dan import -->
                  <div class="row" style="width: 501px;">
                     <!-- tombol tambah -->
                     <div class="col-lg-4">
                        <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#tambahDpt" style="margin-bottom:20px;">
                           <i class="fas fa-plus"></i> Tambah Data
                        </button>
                     </div>

                     <!-- tombol import -->
                     <div class="col-lg-4">
                        <a href="" class="btn btn-gradient mb-3 warnaprimer" data-bs-toggle="modal" data-bs-target="#importData"><i class="fas fa-upload"></i> Import Data</a>
                     </div>
                     <!-- tombol export -->
                     <div class="col-lg-4">
                        <div class="dropdown">
                           <button class="btn btn-gradient dropdown-toggle warnaprimer mb-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fas fa-file-export"></i> Export
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="<?= base_url('DPT/cetakDptPdf') ?>" target="_blank">PDF</a></li>
                              <li><a class="dropdown-item" href="<?= base_url('DPT/cetakDptCsv') ?>">CSV</a></li>
                              <li><a class="dropdown-item" href="<?= base_url('DPT/cetakDptXlsx') ?>">XLSX</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- end tombol -->
               </div>
               <!-- end tombol -->


               <table class="table table-striped" id="tableDpt">
                  <thead>
                     <tr>
                        <th scope="col" width="50">No</th>
                        <th scope="col" width="200">Username</th>
                        <th scope="col" width="340">Nama</th>
                        <th scope="col" width="200">Status Pemilihan</th>
                        <th scope="col">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                  </tbody>
               </table>
            </div>
         </div>
         <!-- end datatable -->

      </div>
      <!-- end container fluid -->

      <!-- Modal Tambah  -->
      <div class="tambahdatamodal">
         <div class="modal fade" id="tambahDpt" tabindex="-1" aria-labelledby="tambahDptLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="tambahDptLabel">Tambah Data</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form>
                        <div class="modal-body">

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Username</label>
                              <div class="col-md-12">
                                 <input type="hidden" class="form-control" id="id_pemilih">
                                 <input type="text" class="form-control" id="tUsername" name="username" placeholder="Masukkan username berupa nomor induk">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-6 col-sm-4 control-label">Nama</label>
                              <div class="col-md-12">
                                 <input type="text" class="form-control" id="tNamaPemilih" name="namaPemilih" placeholder="Masukkan nama">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-6 col-sm-4 control-label">Jenis Kelamin </label>
                              <div class="col-md-12">

                                 <select class="form-select" name="jk_pemilih" id="jk_pemilih" aria-label="Default select example">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                 </select>

                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Email</label>
                              <div class="col-md-12">
                                 <input type="text" class="form-control" id="tEmail" name="email" placeholder="Masukkan email">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-6 col-sm-4 control-label">Nama Ibu Kandung</label>
                              <div class="col-md-12">
                                 <input type="text" class="form-control" id="tNamaIbu" name="namaIbuKandung" placeholder="Nama ibu tidak disertai gelar, contoh: Putri Aini">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">NIK</label>
                              <div class="col-md-12">
                                 <input type="text" class="form-control" id="tNik" name="nik" placeholder="Masukkan NIK">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Password</label>
                              <div class="col-md-12">
                                 <input type="password" class="form-control" id="tPassword" name="password" placeholder="Masukkan password">
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-4 col-sm-4 control-label">Imei</label>
                              <div class="col-md-12">
                                 <input type="text" class="form-control" id="tImei" name="imei" placeholder="Masukkan imei">
                              </div>
                           </div>
                     </form>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-gradient warnaprimer" id="tambah" onclick="ButtonTambah()">Simpan</button>
                        <button type="button" class="btn btn-gradient warnacancel" data-bs-dismiss="modal">Batal</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end modal tambah -->

      <!-- Modal import data  -->
      <div class="importdatamodal">
         <div class="modal fade" id="importData" tabindex="-1" aria-labelledby="importDataLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="importDataLabel">Import Data</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="<?= base_url('DPT/importData'); ?>" method="post">
                        <div class="modal-body">

                           <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-lg-6 col-sm-4 control-label">Data DPT</label>
                              <div class="col-md-12">
                                 <div class="custom-file">
                                    <label class="custom-file-label" for="formFile">Pilih File</label>
                                    <input class="custom-file-input" type="file" id="formFile" required accept=".xls, .xlsx">
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
      </div>
      <!-- end modal -->

   </div>
   <!-- end page content -->


   <!-- Modal edit -->
   <div class="modal fade" id="editDpt" tabindex="-1" aria-labelledby="editDptLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="editDptLabel">Edit Data</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form method="POST">
                  <div class="modal-body">

                     <div class="form-group" style="margin-bottom: 20px;">
                        <input type="hidden" class="form-control" id="idpemilih">
                        <label class="col-lg-4 col-sm-4 control-label">Username</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="dUsername" name="username" disabled>
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-6 col-sm-4 control-label">Nama</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="dNama" name="nama_pemilih" disabled>
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-6 col-sm-4 control-label">Jenis kelamin</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="dJenisKel" name="jkPemilih" disabled>
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Email</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="dEmail" name="email" disabled>
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-6 col-sm-4 control-label">Nama Ibu Kandung</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="dNamaIbu" name="namaIbuKandung">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">NIK</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="dNik" name="noIndukKependudukan" disabled>
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Imei</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="dImei" name="imei" disabled>
                        </div>
                     </div>
                  </div>
               </form>
               <div class="modal-footer">
                  <button type="button" class="btn btn-gradient warnaprimer" id="ButtonEditt">Simpan</button>
                  <button type="button" class="btn btn-gradient warnacancel" data-bs-dismiss="modal">Batal</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end modal edit-->


   </div>
   <!-- end main content -->


   <script>
      //reload table
      function reloadTable() {
         TblDpt.ajax.reload();
      }

      //nampilin datatable
      $(document).ready(function() {

         var table = $('#tableDpt');

         TblDpt = table.DataTable({

            ajax: {
               url: base + "DPT/ngambilDpt",
               type: "POST",
               dataSrc: "",
               dataType: "json",
               data: function(d) {
                  nomer = 0;
               },
            },
            columns: [{
                  render: function(full, type, data, meta) {
                     return nomer += 1;
                     return nomer;
                  }
               },
               {
                  render: function(full, type, data, meta) {
                     return data.username;
                  }
               },
               {
                  render: function(full, type, data, meta) {
                     return data.nama_pemilih;
                  }
               },
               {
                  render: function(full, type, data, meta) {
                     // `<?php if ($status_pemilihan = 0) : ?>
                     //    <?= "Belum Memilih" ?>;
                     //    <?php endif; ?>
                     // `
                     return data.status_pemilihan;
                  }
               },
               {
                  render: function(full, type, data, meta) {
                     return `<button  class="btn btn-sm warnaprimer" data-bs-toggle="modal" data-bs-target="#editDpt" onclick='getIdDpt(${data.id_pemilih})'><i class="far fa-edit"></i></button>
                			<button type="button" class="btn btn-sm warnadanger" onclick='ButtonHapus(${data.id_pemilih})'><i class="far fa-trash-alt"></button>`;
                  }
               },
            ]
         });
      });

      //get data perid
      function getIdDpt(id_pemilih) {
         $.ajax({
            url: base + 'DPT/getIdDpt/' + id_pemilih,
            type: 'GET',
            dataType: 'json',
            cache: false,
            success: function(data) {
               $('#idpemilih').val(data.id_pemilih);
               $('#dUsername').val(data.username);
               $('#dNama').val(data.nama_pemilih);
               $('#dstatusPemilihan').val(data.status_pemilihan);
               $('#dJenisKel').val(data.jk_pemilih);
               $('#dNamaIbu').val(data.nama_ibu_kandung);
               $('#dNik').val(data.nomor_induk_kependudukan);
               $('#dPassword').val(data.password);
               $('#dEmail').val(data.email);
               $('#dImei').val(data.imei);
               if (onclick == '#detailDpt') {
                  $('#editDpt').modal('show');
               } else if (onclick == '#editDpt') {
                  $('#editDpt').modal('show');
               }
               console.log(data.id_pemilih);
            }
         })
      }

      // tambah data
      function ButtonTambah() {
         let id_pemilih = $('#id_pemilih').val();
         let username = $('#tUsername').val();
         let nama_pemilih = $('#tNamaPemilih').val();
         let jk_pemilih = $('#jk_pemilih').val();
         let nama_ibu_kandung = $('#tNamaIbu').val();
         let nomor_induk_kependudukan = $('#tNik').val();
         let password = $('#tPassword').val();
         let email = $('#tEmail').val();
         let imei = $('#tImei').val();

         $.ajax({
            url: base + 'DPT/tambahDpt',
            data: {
               id_pemilih: id_pemilih,
               username: username,
               nama_pemilih: nama_pemilih,
               jk_pemilih: jk_pemilih,
               nama_ibu_kandung: nama_ibu_kandung,
               nomor_induk_kependudukan: nomor_induk_kependudukan,
               password: password,
               email: email,
               imei: imei
            },
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(response) {
               if (response.sukses == false) {
                  Swal.fire({
                     icon: 'error',
                     text: response.alert,
                  })
               } else {
                  Swal.fire({
                     icon: 'success',
                     text: response.alert
                  })
               }
               reloadTable();
               $('#id_pemilih').val('');
               $('#tUsername').val('');
               $('#tNamaPemilih').val('');
               $('#jk_pemilih').val('');
               $('#tNamaIbu').val('');
               $('#tNik').val('');
               $('#tPassword').val('');
               $('#tEmail').val('');
               $('#tImei').val('');
               $('#tambahDpt').modal('hide');
            }
         })
      }

      //hapus data
      function ButtonHapus(id_pemilih) {
         Swal.fire({
            title: 'Hapus data ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya',
            cancelButtonText: 'Batal',
            closeOnConfirm: false,
            closeOnCancel: false
         }).then((result) => {
            if (result.isConfirmed) {

               $.ajax({
                  url: base + 'DPT/hapusDpt/' + id_pemilih,
                  type: 'POST',
                  data: {
                     id_pemilih: id_pemilih
                  },
                  dataType: 'json',
                  success: function(response) {
                     Swal.fire({
                        icon: 'success',
                        text: response.alert,
                     })
                     reloadTable();
                  }
               })

            }
         })
      }

      //edit data
      $('#ButtonEditt').click(function(e) {
         e.preventDefault()
         let idPemilih = $('#idpemilih').val();
         let namaPemilih = $('#dNama').val();
         let jkPemilih = $('#dJenisKel').val();
         let namaIbuKandung = $('#dNamaIbu').val();
         let nomorInduk = $('#dNoInduk').val();
         let noIndukKependudukan = $('#dNik').val();
         let username = $('#dUsername').val();
         let password = $('#dPassword').val();
         let email = $('#dEmail').val();
         let imei = $('#dImei').val();

         $.ajax({
            url: base + 'DPT/editDpt/' + idPemilih,
            type: 'POST',
            data: {
               id_pemilih: idPemilih,
               nama_pemilih: namaPemilih,
               jk_pemilih: jkPemilih,
               nama_ibu_kandung: namaIbuKandung,
               nomor_induk: nomorInduk,
               nomor_induk_kependudukan: noIndukKependudukan,
               username: username,
               password: password,
               email: email,
               imei: imei
            },
            dataType: 'json',
            cache: false,
            success: function(response) {
               if (response.sukses == false) {
                  Swal.fire({
                     icon: 'error',
                     text: response.alert,
                  })
               } else {
                  Swal.fire({
                     icon: 'success',
                     text: response.alert
                  })
               }
               reloadTable();
               $('#editDpt').modal('hide');
            }
         })
      })
   </script>