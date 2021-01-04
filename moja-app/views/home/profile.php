        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
<!--          <h1 class="h3 mb-2 text-gray-800">Senarai Asnaf</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
-->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Kemaskini Profil</h6>
            </div>
		<div class="card-body">
            <!-- form -->

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			
			
			<?php if ($data['roles'] == 400): ?>
			<form action="profile/editPegawai" method="post">
			<?php endif; ?>
			
			<?php if ($data['roles'] == 300): ?>
			<form action="profile/editPaza" method="post">
			<?php endif; ?>
			
			<?php if ($data['roles'] == 200): ?>
			<form action="profile/editPentadbir" method="post">
			<?php endif; ?>
			<input type="hidden" name="user_id" value="<?= $data['user_id']; ?>">
                  <tbody>
                    <tr>
                      <td>Jenis pengguna</td>
                      <td><?php if ($data['roles'] == 200): ?>Admin<?php endif; ?><?php if ($data['roles'] == 300): ?> Admin Paza<?php endif; ?><?php if ($data['roles'] == 400): ?>Pegawai<?php endif; ?></td>
                    </tr>					
                    <tr>
                    <tr>
                      <td>Nama Staff</td>
                      <td><div class="form-group">
                      <input type="text" class="form-control" name="name" id="name"  value="<?= $data['pengguna']['name']; ?>" required>
                      </div>
                      </td>
                    </tr>
                    <tr>
                      <td>No MyKad</td>
                      <td><div class="form-group">
                      <input type="number" class="form-control" name="ic" id="ic"  value="<?= $data['pengguna']['ic']; ?>" required>
                      </div>
                      </td>
                    </tr>
                                        <tr>
                      <td>No Mobil</td>
                      <td><div class="form-group">
                      <input type="number" class="form-control" name="contact" id="contact"  value="<?= $data['pengguna']['contact']; ?>" required>
                      </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Alamat Email</td>
                      <td><div class="form-group">
                      <input type="email" class="form-control" name="email" id="email"  value="<?= $data['pengguna']['email']; ?>" required>
                      </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Gambar Profil</td>
                      <td>
					  
					  <div class="form-group">
				

					  <img src="<?= $data['propic']; ?>" width="10%">

                      </div>
					  
                      </td>
                    </tr>					
                    </tbody>
                    
            </table>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Kemaskini</button>
		</form>	
			<button type="button" class="btn btn-danger" onclick="window.history.go(-1); return false;">Batal</button>
            <!-- end form -->
            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->