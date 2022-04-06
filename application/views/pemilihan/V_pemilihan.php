   <div class="main-content">
      <div class="page-content">
         <div class="container-fluid">

            <!-- judul halaman -->
            <div class="row">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Pemilihan</h4>
                  </div>
               </div>
            </div>
            <!-- end judul halaman -->

            <div class="row">
               <div class="col-xl">

                  <table class="table table-striped" id="tablePemilihan">
                     <thead>
                        <tr>
                           <th scope="col">No</th>
                           <th scope="col">NIM</th>
                           <th scope="col">Status Pemilihan</th>
                           <th scope="col">Waktu Pemilihan</th>
                           <th scope="col">Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td scope="row">1</td>
                           <td>1234567</td>
                           <td>Sudah Memilih</td>
                           <td>2022-10-25
                              <br>
                              09:41:29
                           </td>
                           <td>
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
      </div>
      <!-- page content -->

      <script>
         $(document).ready(function() {
            $('#tablePemilihan').DataTable();
         });
      </script>

   </div>
   <!-- main content -->