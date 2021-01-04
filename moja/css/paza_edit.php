<?php

include "logid-session.php";

	date_default_timezone_set("Asia/Kuala_Lumpur"); 

	$today = date("d/m/Y"); 

?>

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MOJA - User</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   <?php include "sidebar.php"; ?>
   
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

	   <?php include "topbar.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
<!--          <h1 class="h3 mb-2 text-gray-800">Senarai Asnaf</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
-->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah/Kemaskini Paza</h6>
            </div>
		  <div class="card-body">
            <!-- form -->
			<form action="paza_update_insert.php?id=<?php echo $_GET['id']; ?>" method="post">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tbody>
                    <tr>
                      <td>Entry Date</td>
                      <td><input type="text" class="form-control" id="id" name="dentry" value="<?php echo $_GET['dentry']; ?>">						
					  </td>
                    </tr>
                    <tr>
                      <td>Paza ID</td>
                      <td><div class="form-group">
                      <input type="text" class="form-control" id="id" name="pazaid" value="<?php echo $_GET['pazaid']; ?>">
                      </div></td>
                    </tr>
                    
                    <tr>
                      <td>Nama Paza</td>
                      <td><div class="form-group">
                      <input type="text" class="form-control" id="soalan" name="pazaname" value="<?php echo $_GET['pazaname']; ?>">
                      </div></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td><div class="form-group">
                      <input type="text" class="form-control" id="soalan" name="addr" value="<?php echo $_GET['addr']; ?>">
                      </div></td>
                    </tr>
                    <tr>
                      <td>Gambar</td>
                      <td><div class="form-group">
					  <a href="<?php echo $_GET['piclink']; ?>" target="_blank"><img src="<?php echo $_GET['picture']; ?>" width="30%"></a>
					  <p></p>
                      <input type="text" class="form-control" id="soalan" name="picture" value="<?php echo $_GET['picture']; ?>">
                      </div></td>
                    </tr>
                    <tr>
                      <td>Link Gambar</td>
                      <td>
					  
					  <div class="form-group" style="display:table;white-space:pre-line;word-break: break-all;">
					  <a href="<?php echo $_GET['piclink']; ?>" target="_blank"><?php echo $_GET['piclink']; ?></a>
					  <p></p>
                      <input type="text" class="form-control" id="piclink" name="piclink" value="<?php echo $_GET['piclink']; ?>">
                      </div>
					  
					  </td>
                    </tr>					
                    <tr>
                      <td>Latitude</td>
                      <td><div class="form-group">
                      <input type="text" class="form-control" id="soalan" name="latitude" value="<?php echo $_GET['latitude']; ?>">
                      </div></td>
                    </tr>
                    <tr>
                      <td>Longitude</td>
                      <td><div class="form-group">
                      <input type="text" class="form-control" id="soalan" name="longitude" value="<?php echo $_GET['longitude']; ?>">
                      </div></td>
                    </tr>					
                    <tr>
                      <td>No Tel</td>
                      <td><div class="form-group">
                      <input type="text" class="form-control" id="soalan" name="contact" value="<?php echo $_GET['contact']; ?>">
                      </div></td>
                    </tr>
                    <tr>
                      <td>No Faks</td>
                      <td><div class="form-group">
                      <input type="text" class="form-control" id="soalan" name="faks" value="<?php echo $_GET['faks']; ?>">
                      </div></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td><div class="form-group">
                      <input type="text" class="form-control" id="soalan" name="email" value="<?php echo $_GET['email']; ?>">
                      </div></td>
                    </tr>
                    <tr>
                      <td>Wilayah</td>
                      <td>
					  <?php
					  
						$wid = $_GET['wid'];
					  
						$stmt2 = $conn->prepare("SELECT * FROM wilayah WHERE id = '$wid'"); 

						$stmt2->execute(); 

						$row2 = $stmt2->fetch();

						extract($row2);		

						?>

					  <div class="form-group">
                        <select class="form-control" id="sel1" name="wilayah">
                        <option value="<?php echo $_GET['wid']; ?>|<?php echo $namaw; ?>"><?php echo $namaw; ?></option>
						
						  <?php
						  
								$query = "SELECT * FROM wilayah ORDER by id ASC";

								$stmt = $conn->prepare($query);
								
								$stmt->execute();
								
								if ($stmt->rowCount() > 0) { 

									$result = $stmt->fetchAll();		
							
								foreach( $result as $row ) {			

									$status = $row['status'];
						  
						  ?>						
                        <option value="<?php echo $row['id']; ?>|<?php echo $row['namaw']; ?>"><?php echo $row['namaw']; ?></option>
						
							<?php
								}
								}else{
									echo '<option value="">Tiada Data</option>';
								}
							?>	
						
                        </select>
                      </div>
					  </td>
                    </tr>
                    <tr>
                      <td>Parlimen</td>
                      <!-- senaraikan Parlimen ikut Wilayah yang dipiih -->
                      <td>

					  <div class="form-group">
                        <select class="form-control" id="sel1" name="parlimen" required>
                        <option value="<?php echo $_GET['parlimen']; ?>"><?php echo $_GET['parlimen']; ?></option>				
						
						  <?php
						  
								$query = "SELECT * FROM parlimen ORDER by id ASC";

								$stmt = $conn->prepare($query);
								
								$stmt->execute();
								
								if ($stmt->rowCount() > 0) { 

								$result = $stmt->fetchAll();		
							
								foreach( $result as $row ) {			

								$status = $row['status'];
						  
						  ?>						
                        <option value="<?php echo $row['parlimen']; ?>"><?php echo $row['parlimen']; ?></option>
						
							<?php
								}
								}else{
									echo '<option value="">Tiada Data</option>';
								}
							?>				
							
                        </select>
                      </div>
                      </td>
                    </tr>
                   <tr>
                      <td>Status</td>
                      <td>
						<?php 
							if ($_GET['status'] == 1){
								$sr = "Aktif";
							}
								if($_GET['status'] == 0){
								$sr = "Tidak Aktif";
							}
						?>	
					  <div class="form-group">
                        <select class="form-control" id="sel1" name="status">
						<option value="<?php echo $sr; ?>"><?php echo $sr; ?></option>						
						<option value="1">Aktif</option>
                        <option value="0">Tidak aktif</option>
                        </select>
                      </div></td>
                    </tr>
                    </tbody>
                    
            </table>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Kemaskini</button>
			</form>
			<button type="button" class="btn btn-default">Batal</button>
            <!-- end form -->
            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>COPYRIGHT &copy; MOJA - MAJLIS AGAMA ISLAM WILAYAH PERSEKUTUAN 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
