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
                  <div class="row" style="width: 340px;">
                     <!-- tombol tambah -->
                     <div class="col-lg-6">
                        <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#tambahDpt" style="margin-bottom:20px;">
                           <i class="fas fa-plus"></i> Tambah Data
                        </button>
                     </div>

                     <!-- tombol import -->
                     <div class="col-lg-6">
                        <a href="" class="btn btn-gradient mb-3 warnaprimer" data-bs-toggle="modal" data-bs-target="#importData"><i class="fas fa-upload"></i> Import Data</a>
                     </div>
                  </div>
                  <!-- end tombol -->

                  <table class="table table-striped" id="tableDpt">
                     <thead>
                        <tr>
                           <th scope="col">No</th>
                           <th scope="col">Nama Pemilih</th>
                           <th scope="col">Username</th>
                           <th scope="col">Status Pemilihan</th>
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
                                 <input type="hidden" class="form-control" id="id_pemilih">
                                 <label class="col-lg-6 col-sm-4 control-label">Nama</label>
                                 <div class="col-md-12">
                                    <input type="hidden" class="form-control">
                                    <input type="text" class="form-control" id="tNamaPemilih" name="namaPemilih" placeholder="Masukkan Nama">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-6 col-sm-4 control-label">Jenis Kelamin </label>
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" id="tJenisKel" name="jkPemilih" placeholder="Jenis Kelamin">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-6 col-sm-4 control-label">Nama Ibu Kandung</label>
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" id="tNamaIbu" name="namaIbuKandung" placeholder="Masukkan Nama Ibu">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-4 col-sm-4 control-label">Nomor Induk</label>
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" id="tNomorInduk" name="nomorInduk" placeholder="Masukkan Nomor Induk">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-4 col-sm-4 control-label">NIK</label>
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" id="tNik" name="nik" placeholder="Masukkan NIK">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-4 col-sm-4 control-label">Username</label>
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" id="tUsername" name="username" placeholder="Masukkan Username">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-4 col-sm-4 control-label">Password</label>
                                 <div class="col-md-12">
                                    <input type="password" class="form-control" id="tPassword" name="password" placeholder="Masukkan Password">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-4 col-sm-4 control-label">Email</label>
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" id="tEmail" name="email" placeholder="Masukkan Email">
                                 </div>
                              </div>

                              <div class="form-group" style="margin-bottom: 20px;">
                                 <label class="col-lg-4 col-sm-4 control-label">Imei</label>
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" id="tImei" name="imei" placeholder="Masukkan Imei">
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
                           <label class="col-lg-6 col-sm-4 control-label">Nama</label>
                           <div class="col-md-12">
                              <input type="hidden" class="form-control" id="idpemilih">
                              <input type="text" class="form-control" id="dNama" name="nama_pemilih">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-6 col-sm-4 control-label">Jenis kelamin</label>
                           <div class="col-md-12">
                              <input type="text" class="form-control" id="dJenisKel" name="jkPemilih">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-6 col-sm-4 control-label">Nama Ibu Kandung</label>
                           <div class="col-md-12">
                              <input type="text" class="form-control" id="dNamaIbu" name="namaIbuKandung">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">Nomor Induk</label>
                           <div class="col-md-12">
                              <input type="text" class="form-control" id="dNoInduk" name="nomorInduk">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">NIK</label>
                           <div class="col-md-12">
                              <input type="text" class="form-control" id="dNik" name="noIndukKependudukan">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">Username</label>
                           <div class="col-md-12">
                              <input type="text" class="form-control" id="dUsername" name="username">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">Password</label>
                           <div class="col-md-12">
                              <input type="password" class="form-control" id="dPassword" name="password">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">Email</label>
                           <div class="col-md-12">
                              <input type="text" class="form-control" id="dEmail" name="email">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">Imei</label>
                           <div class="col-md-12">
                              <input type="text" class="form-control" id="dImei" name="imei">
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


      <!-- Modal detail -->
      <div class="detaildpt">
         <div class="modal fade" id="detailDpt" tabindex="-1" aria-labelledby="detailDptLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="detailDptLabel">Detail Data</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form>
                        <div class="modal-body">

                           <div class="form-group" style="margin-bottom: 20px;">
                              <div class="row">
                                 <div class="col-lg-3">
                                    <label class="control-label">Nama</label>
                                 </div>
                                 <div class="col-lg-9">
                                    <input type="hidden" class="form-control" id="idpemilih" name="id_pemilih">
                                    <input type="text" class="form-control" id="dNama" name="nama_pemilih" disabled>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <div class="row">
                                 <div class="col-lg-3">
                                    <label class="control-label">Jenis Kelamin</label>
                                 </div>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" id="dJenisKel" name="jk_pemilih" disabled>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <div class="row">
                                 <div class="col-lg-3">
                                    <label class="control-label">Nama Ibu Kandung</label>
                                 </div>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" id="dNamaIbu" name="nama_ibu_kandung" disabled>
                                 </div>
                              </div>
                           </div>


                           <div class="form-group" style="margin-bottom: 20px;">
                              <div class="row">
                                 <div class="col-lg-3">
                                    <label class="control-label">Nomor Induk</label>
                                 </div>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" id="dNoInduk" name="nomor_induk" disabled>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <div class="row">
                                 <div class="col-lg-3">
                                    <label class="control-label">NIK</label>
                                 </div>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" id="dNik" name="nomor_induk_kependudukan" disabled>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <div class="row">
                                 <div class="col-lg-3">
                                    <label class="control-label">Username</label>
                                 </div>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" id="dUsername" name="username" disabled>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <div class="row">
                                 <div class="col-lg-3">
                                    <label class="control-label">Email</label>
                                 </div>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" id="dEmail" name="email" disabled>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group" style="margin-bottom: 20px;">
                              <div class="row">
                                 <div class="col-lg-3">
                                    <label class="control-label">Imei</label>
                                 </div>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" id="dImei" name="imei" disabled>
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
      </div>
      <!-- end modal detail-->


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
                     return data.nama_pemilih;
                  }
               },
               {
                  render: function(full, type, data, meta) {
                     return data.username;
                  }
               },
               {
                  render: function(full, type, data, meta) {
                     return data.status_pemilihan;
                  }
               },
               {
                  render: function(full, type, data, meta) {
                     return `<button  class="btn btn-sm warnaprimer" data-bs-toggle="modal" data-bs-target="#detailDpt" onclick='getIdDpt(${data.id_pemilih})'><i class="fas fa-eye"></i></button>
                     <button  class="btn btn-sm warnaprimer" data-bs-toggle="modal" data-bs-target="#editDpt" onclick='getIdDpt(${data.id_pemilih})'><i class="far fa-edit"></i></button>
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
               $('#dNama').val(data.nama_pemilih);
               $('#dJenisKel').val(data.jk_pemilih);
               $('#dNamaIbu').val(data.nama_ibu_kandung);
               $('#dNoInduk').val(data.nomor_induk);
               $('#dNik').val(data.nomor_induk_kependudukan);
               $('#dUsername').val(data.username);
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
         let nama_pemilih = $('#tNamaPemilih').val();
         let jk_pemilih = $('#tJenisKel').val();
         let nama_ibu_kandung = $('#tNamaIbu').val();
         let nomor_induk = $('#tNomorInduk').val();
         let nomor_induk_kependudukan = $('#tNik').val();
         let username = $('#tUsername').val();
         let password = $('#tPassword').val();
         let email = $('#tEmail').val();
         let imei = $('#tImei').val();

         $.ajax({
            url: base + 'DPT/tambahDpt',
            data: {
               id_pemilih: id_pemilih,
               nama_pemilih: nama_pemilih,
               jk_pemilih: jk_pemilih,
               nama_ibu_kandung: nama_ibu_kandung,
               nomor_induk: nomor_induk,
               nomor_induk_kependudukan: nomor_induk_kependudukan,
               username: username,
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
               $('#tNamaPemilih').val('');
               $('#tJenisKel').val('');
               $('#tNamaIbu').val('');
               $('#tNomorInduk').val('');
               $('#tNik').val('');
               $('#tUsername').val('');
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