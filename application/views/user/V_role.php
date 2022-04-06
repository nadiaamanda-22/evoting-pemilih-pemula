   <div class="main-content">
      <div class="page-content">
         <div class="container-fluid">

            <!-- judul halaman -->
            <div class="row">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Role</h4>
                  </div>
               </div>
            </div>
            <!-- end judul halaman -->

            <div class="row">
               <div class="col-xl">

                  <!-- tombol sementara -->
                  <button type="button" class="btn btn-gradient warnaprimer" data-bs-toggle="modal" data-bs-target="#addRole" style="margin-bottom:20px;">
                     <i class="fas fa-plus"></i> Tambah Data
                  </button>

                  <!-- tombol asli -->
                  <!-- <a href="" class="btn btn-gradient mb-3 warnaprimer" data-toggle="modal" data-target="#addRole"><i class="fas fa-plus"></i> Tambah Data</a> -->

                  <table class="table table-striped" id="tableRole">
                     <thead>
                        <tr>
                           <th scope="col">No</th>
                           <th scope="col">Role</th>
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
      <div class="modal fade" id="addRole" tabindex="-1" aria-labelledby="addRoleLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="addRoleLabel">Tambah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form action="<?= base_url('role/addRole'); ?>" method="post">
                     <div class="modal-body">

                        <div class="form-group" style="margin-bottom: 20px;">
                           <label class="col-lg-4 col-sm-4 control-label">Role</label>
                           <div class="col-md-12">
                              <!-- <input type="hidden" class="form-control" id="id_role"> -->
                              <input type="text" class="form-control" id="role" name="role" placeholder="Masukkan Role">
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
   <!-- <div class="modal fade" id="editRole" tabindex="-1" aria-labelledby="editRoleLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="editRoleLabel">Ubah Data</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('role/editRole'); ?>" method="post">
                  <div class="modal-body">

                     <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-lg-4 col-sm-4 control-label">Role</label>
                        <div class="col-md-12">
                           <input type="hidden" class="form-control">
                           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Role">
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
   </div> -->
   <!-- Akhir modal edit-->

   <script>
      //reload table
      function reloadTable() {
         TblRole.ajax.reload();
      }

      //datatable
      $(document).ready(function() {

         var table = $('#tableRole');

         TblRole = table.DataTable({

            ajax: {
               url: base + "Role/ngambilData",
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
                     return data.role;
                  }
               },
               {
                  render: function(full, type, data, meta) {
                     return `<button  class="btn btn-sm warnaprimer" data-bs-toggle="modal" data-bs-target="#editRole" onclick='edit(${data.id_barang})'>Edit</button>
                			<button type="button" class="btn btn-sm warnadanger" onclick='hapus(${data.id_barang})'>Hapus</button>`;
                  }
               }
            ]
         });
      });

      // tambah
      function ButtonTambah() {
         let id_role = $('#id_role').val();
         let role = $('#role').val();
         console.log(role);
         $.ajax({
            url: base + 'Role/tambahData',
            data: {
               id_role: id_role,
               role: role
            },
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(response) {
               alert("Data berhasil ditambah");
            }
         })
      }
   </script>