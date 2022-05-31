   <div class="main-content">
      <div class="page-content">
         <div class="container-fluid">

            <!-- judul halaman -->
            <div class="row">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Kandidat</h4>
                  </div>
               </div>
            </div>
            <!-- end judul halaman -->

            <div class="row">
               <div class="col-xl">

                  <!-- tombol tambah -->
                  <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#tambahKandidat" style="margin-bottom:20px;">
                     <i class="fas fa-plus"></i> Tambah Data
                  </button>

                  <table class="table table-striped" id="tableKandidat">
                     <thead>
                        <tr>
                           <th scope="col">No</th>
                           <th scope="col">Nama Kandidat</th>
                           <th scope="col">Nama Pasangan Kandidat</th>
                           <th scope="col">Foto Kandidat</th>
                           <th scope="col">Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                  </table>
               </div>

            </div>
            <!-- end row -->

         </div>
         <!-- container fluid -->
      </div>
      <!-- page content -->


      <!-- Modal Tambah  -->
      <div class="modal fade" id="tambahKandidat" tabindex="-1" aria-labelledby="tambahKandidatLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="tambahKandidatLabel">Tambah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form>
                     <div class="modal-body">

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">Nama Kandidat</label>
                           <div class="col-md-12">
                              <input type="hidden" class="form-control" id="id_kandidat">
                              <input type="text" class="form-control" id="namaKetua" name="namaKetua" placeholder="Masukkan Nama Kandidat">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-6 col-sm-4 control-label">Nama Pasangan Kandidat</label>
                           <div class="col-md-12">
                              <input type="text" class="form-control" id="namaWakil" name="namaWakil" placeholder="Masukkan Nama Pasangan Kandidat">
                           </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-6 col-sm-4 control-label">Gambar Kandidat</label>
                           <div class="col-md-12">
                              <div class="custom-file">
                                 <label class="custom-file-label" for="formFile">Pilih File</label>
                                 <input class="custom-file-input" type="file" id="formFile">
                              </div>
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
      <!-- Akhir modal tambah -->

   </div>
   <!-- main content -->

   <!-- Modal edit -->
   <div class="modal fade" id="editKandidat" tabindex="-1" aria-labelledby="editKandidatLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="editKandidatLabel">Ubah Data</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form>
                  <div class="modal-body">

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Nama Kandidat</label>
                        <div class="col-md-12">
                           <input type="hidden" class="form-control" id="id_kandidat">
                           <input type="text" class="form-control" id="nama_ketua" name="namaKetua">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-6 col-sm-4 control-label">Nama Pasangan Kandidat</label>
                        <div class="col-md-12">
                           <input type="hidden" class="form-control">
                           <input type="text" class="form-control" id="nama_wakil" name="namaWakil">
                        </div>
                     </div>

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-6 col-sm-4 control-label">Gambar Kandidat</label>
                        <div class="col-md-12">
                           <div class="custom-file">
                              <label class="custom-file-label" for="formFile">Pilih File</label>
                              <input class="custom-file-input" type="file" id="formFile">
                           </div>
                        </div>
                     </div>

               </form>
               <div class="modal-footer">
                  <button type="button" class="btn btn-gradient warnaprimer" id="ButtonEdit">Simpan</button>
                  <button type="button" class="btn btn-gradient warnacancel" data-bs-dismiss="modal">Batal</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Akhir modal edit-->


   <script>
      //reload table
      function reloadTable() {
         Tblkandidat.ajax.reload();
      }

      //nampilin datatable
      $(document).ready(function() {

         var table = $('#tableKandidat');

         Tblkandidat = table.DataTable({

            ajax: {
               url: base + "kandidat/getKandidat",
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
                     return data.nama_ketua;
                  }
               },
               {
                  render: function(full, type, data, meta) {
                     return data.nama_wakil;
                  }
               },
               {
                  render: function(full, type, data, meta) {
                     return data.foto_kandidat;
                  }
               },
               {
                  render: function(full, type, data, meta) {
                     return `<button  class="btn btn-sm warnaprimer" data-bs-toggle="modal" data-bs-target="#editKandidat" onclick='getIdKandidat(${data.id_kandidat})'><i class="far fa-edit"></i></button>
                			<button type="button" class="btn btn-sm warnadanger" onclick='ButtonHapus(${data.id_kandidat})'><i class="far fa-trash-alt"></button>`;
                  }
               }
            ]
         });
      });

      //get data perid
      function getIdKandidat(id_kandidat) {
         $.ajax({
            url: base + 'Kandidat/getIdKandidat/' + id_kandidat,
            type: 'GET',
            dataType: 'json',
            cache: false,
            success: function(data) {
               $('#id_kandidat').val(data.id_kandidat);
               $('#nama_ketua').val(data.nama_ketua);
               $('#nama_wakil').val(data.nama_wakil);
               $('#editKandidat').modal('show');

               console.log(data.id_kandidat);
            }
         })
      }

      // tambah data
      function ButtonTambah() {
         let id_kandidat = $('#id_kandidat').val();
         let nama_ketua = $('#namaKetua').val();
         let nama_wakil = $('#namaWakil').val();

         $.ajax({
            url: base + 'kandidat/tambahKandidat',
            data: {
               id_kandidat: id_kandidat,
               nama_ketua: nama_ketua,
               nama_wakil: nama_wakil
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
               $('#id_kandidat').val('');
               $('#namaKetua').val('');
               $('#namaWakil').val('');
               $('#tambahKandidat').modal('hide');
            }
         })
      }

      //hapus data
      function ButtonHapus(id_kandidat) {
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
                  url: base + 'kandidat/hapuskandidat/' + id_kandidat,
                  type: 'POST',
                  data: {
                     id_kandidat: id_kandidat
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
      $('#ButtonEdit').click(function(e) {
         e.preventDefault()
         let id_kandidat = $('#id_kandidat').val();
         let nama_ketua = $('#nama_ketua').val();
         let nama_wakil = $('#nama_wakil').val();

         $.ajax({
            url: base + 'kandidat/editKandidat/' + id_kandidat,
            type: 'POST',
            data: {
               id_kandidat: id_kandidat,
               nama_ketua: nama_ketua,
               nama_wakil: nama_wakil
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
               $('#editKandidat').modal('hide');
            }
         })
      })
   </script>