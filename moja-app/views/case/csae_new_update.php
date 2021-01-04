        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
    <!--      <h1 class="h3 mb-2 text-gray-800">Kes Baharu</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
-->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
		  
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Kes Baharu Terkini</h6>
            </div>
			
			<div class="card-body">
            <!-- form -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tbody>
				  <?php
						
						$caseid = $_GET['case'];

						$stmt = $conn->prepare("SELECT * FROM aduan WHERE id = '$caseid'"); 

						$stmt->execute(); 

						$row = $stmt->fetch();

						extract($row);			  
						
						$ncode = $negeri;
				  ?>				  
                    <tr>
                      <td>No Kes</td>
                      <td><?php echo $aduan_code; ?></td>
                    </tr>
                    <tr>
                      <td>Tarikh Laporan</td>
                      <td>
						<?php
						
						//echo $aduan_date; 
						$timestamp = $aduan_date;
						$splitTimeStamp = explode(" ",$timestamp);
						$date = $splitTimeStamp[0];
						$time = $splitTimeStamp[1];
						
						echo $date . " - " . $time;
						
						?>
					  </td>
                    </tr>
                    <tr>
                      <td>Nama Pelapor</td>
                      <td>
				  <?php

						//echo "PID ". $pelapor_id;
						
						$rakanid = $pelapor_id;
						$asnafid = $asnaf_id;

						$stmt2 = $conn->prepare("SELECT * FROM rakan WHERE user_id = '$rakanid'"); 

						$stmt2->execute(); 
						
						if ($stmt2->rowCount() > 0) { 						

						$row2 = $stmt2->fetch();

						extract($row2);	
						
						echo $name . " " . "[ mobile = " .$contact . " ]";
						
						}else{
							
							echo "N/A";
						
						}
						
				  ?>					  
					  </td>
                    </tr>
                    <tr>
                      <td>Nama Asnaf</td>
                      <td>					  
			  
				  <?php

						$stmt3 = $conn->prepare("SELECT * FROM asnaf WHERE id = '$asnafid'"); 

						$stmt3->execute(); 
						
						if ($stmt3->rowCount() > 0) { 						
						

						$row3 = $stmt3->fetch();

						extract($row3);	
						
						echo $name;
						
						}else{
						
							echo "N/A";
							
						}

						
				  ?>						  
					  
					  </td>
                    </tr>
                    <tr>
                      <td>No MyKad</td>
                      <td><?php echo $ic; ?></td>
                    </tr>
                    <tr>
                      <td>No Tel</td>
                      <td><?php echo $contact; ?></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td><?php echo $alamat; ?></td>
                    </tr>
                    <tr>
                      <td>Lokasi</td>
                      <td>
					  <a href="casemaps.php?lat=<?php echo $latitudes; ?>&lng=<?php echo $longitudes; ?>" target="_blank">
				  <?php

						$stmt4 = $conn->prepare("SELECT * FROM aduan WHERE id = '$caseid'"); 

						$stmt4->execute(); 

						$row4 = $stmt4->fetch();

						extract($row4);	
						
						echo "Latitude: " . $latitudes . ",  Longitude: " . $longitudes;
						
						//echo $pegawai_id;
						
						$pgid = $pegawai_id;
						
				  ?>							  
				  </a>
					  </td>
                    </tr>
                    <tr>
                      <td>Kategori Kes</td>
                      <td>
				<?php

						$stmt9 = $conn->prepare("SELECT * FROM category WHERE ctgid = '$category'"); 

						$stmt9->execute(); 
						
						if ($stmt9->rowCount() > 0) { 

						$row9 = $stmt9->fetch();

						extract($row9);	
						
						echo $ctgname;
						
						}else{

						echo "N/A";
						
						}						

				?>
					  
					  
                      </td>
                    </tr>
                    <tr>
                      <td>Gambar Sokongan</td>					  
                      <td>
					  
				  <?php

						$query5 = "SELECT * FROM aduan_images WHERE aduan_id = '$caseid'";

						$stmt5 = $conn->prepare($query5);
						
						$stmt5->execute();
						
						if ($stmt5->rowCount() > 0) { 

						$result5 = $stmt5->fetchAll();		
					
							foreach( $result5 as $row5 ) {
								
								echo '<a href="' . $row5['name'] . '" target="_blank">';								
								
								echo '<img src="' . $row5['name'] . '" width="10%">';
								
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								
								echo '</a>';								
								
							}
						
						}						
						
				  ?>	

                      </td>
                    </tr>
					
                    <tr>
                      <td>Gambar Pegawai</td>
                      <td>
				
						<?php

						$query8 = "SELECT * FROM aduan_images WHERE pegawai_id = '$pegawai_id'";

						$stmt8 = $conn->prepare($query8);
						
						$stmt8->execute();
						
						if ($stmt8->rowCount() > 0) { 

						$result8 = $stmt8->fetchAll();		
					
							foreach( $result8 as $row8 ) {
								
								echo '<a href="' . $row8['name'] . '" target="_blank">';								
								
								echo '<img src="' . $row8['name'] . '" width="10%">';
								
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								
								echo '</a>';								
								
							}
							
						}else{
							
							echo "N/A";
							
						}
							
						?>				

                      </td>
                    </tr>
					
                    <tr>
                      <td>Keterangan</td>
                      <td><?php echo $keterangan; ?><br>
                      </td>
                    </tr>
					<form action="case_new_update_insert.php?caseid=<?php echo $caseid; ?>" method="post">
                    <tr>
                      <td>Pegawai</td>
                      <td>					
					
					  <?php if ($_SESSION['role_id'] == 100 || $_SESSION['role_id'] == 200 ): ?>

						
				<?php						
							if($pgid == 0){
								
								$pgname = "N/A";
								
								$npgid = "";								
								
							}else{
							$stmt18 = $conn->prepare("SELECT * FROM pegawai WHERE user_id = '$pgid'"); 

							$stmt18->execute(); 

							$row18 = $stmt18->fetch();
							
							//$row_count18 = $stmt18->rowCount();

							extract($row18);	

							//echo $name;
							
							//echo $pgid;
							
							$pgname = $name;
							
							$npgid = $user_id;
							
							$idpr = $parlimen;
							
							}
							 
				?>
			
				  	
					<select class="form-control" id="sel1" name="pegawai" required>	
					<option value="<?php echo $npgid; ?>"><?php echo $pgname; ?></option>
				  <?php

						$query6 = "SELECT * FROM pegawai";

						$stmt6 = $conn->prepare($query6);
						
						$stmt6->execute();						

						$result6 = $stmt6->fetchAll();		
					
							foreach( $result6 as $row6 ) {
								
							?>
							
								<option value="<?php echo $row6['user_id']; ?>"><?php echo $row6['name']; ?></option>							
								
							<?php	
							}						
							?>
							
								</select>
					   <?php endif; ?>			
					  </td>
                    </tr>
					
                    <tr>
                      <td>Status Kes</td>
                      <td>
					  				  
				  <?php
						$caseid = $_GET['case'];

						$stmt7 = $conn->prepare("SELECT * FROM aduan WHERE id = '$caseid'"); 

						$stmt7->execute(); 

						$row7 = $stmt7->fetch();

						extract($row7);			

						//echo $status_aduan;
				  ?>
				  
						<?php if ($status_aduan == "Selesai" || $status_aduan == 5): ?>
						
						<?php echo "Kes Selesai"; ?>
						
						<?php else: ?>
						
						<?php
							
							if($status_aduan == "Kes Baharu" || $status_aduan == 1){
								
								$status_value = 1;
								$status_kes = "Kes Baharu";
							}
							
							if($status_aduan == "Diproses" || $status_aduan == 2){
								
								$status_value = 2;								
								$status_kes = "Kes Diproses";
							}							

							if($status_aduan == "Disiasat" || $status_aduan == 3){
								
								$status_value = 3;
								$status_kes = "Kes Disiasat";
							}
							
							if($status_aduan == "Bertindan" || $status_aduan == 4){
								
								$status_value = 4;								
								$status_kes = "Kes Bertindan";
							}
							
							if($status_aduan == "Selesai" || $status_aduan == 5){
								
								$status_value = 5;
								$status_kes = "Kes Selesai";
							}
							
							if($status_aduan == "Ditolak" || $status_aduan == 6){
								
								$status_value = 6;								
								$status_kes = "Kes Ditolak";
							}							
						?>	
						
						<?php if ($_SESSION['role_id'] == 300): ?>
						
						<?php echo $status_kes; ?>
						
						<?php else: ?>	
						
                        <select class="form-control" id="status_aduan" name="status_aduan">	
							<option value="<?php echo $status_value; ?>"><?php echo $status_kes; ?></option>						
						  <?php
								
								if($status_kes == 1 || $status_kes == "Kes Baharu"){
									
								$query8 = "SELECT * FROM casestatus2";
								
								$stmt8 = $conn->prepare($query8);
								
								$stmt8->execute();									
									
								}else{
								
								$query8 = "SELECT * FROM casestatus";
								
								$stmt8 = $conn->prepare($query8);
								
								$stmt8->execute();
								
								}
								
								if ($stmt8->rowCount() > 0) { 

								$result8 = $stmt8->fetchAll();		
							
								foreach( $result8 as $row8 ) {
						  ?>						
						  
								<?php if($row8['statusname'] != $status_kes): ?>
								
							<option value="<?php echo $row8['casenum']; ?>"><?php echo $row8['statusname']; ?></option>	
								<?php endif; ?>						
								
												


							<?php	
								}}						
							?>							
							
                        </select>	
						
						<?php endif; ?>
						
						<?php endif; ?>		
						
					  </td>
                    </tr>
					
                    <tr>
                      <td>Wilayah</td>
                      <td>					

					  <?php if ($_SESSION['role_id'] == 100 || $_SESSION['role_id'] == 200 ): ?>


					<select class="form-control" id="sel1" name="negeri" required>	
					<?php
						if($ncode == ''){
					?>
					<option value="">Wilayah</option>
					<?php
					
						}else{
							
							$stmt9 = $conn->prepare("SELECT * FROM negeri WHERE negeri_id = '$ncode'"); 

							$stmt9->execute(); 

							$row9 = $stmt9->fetch();
							
							echo $nama_negeri;	
						}
					?>
				
				  <?php

						$query6 = "SELECT * FROM negeri";

						$stmt6 = $conn->prepare($query6);
						
						$stmt6->execute();						

						$result6 = $stmt6->fetchAll();		
				
							foreach( $result6 as $row6 ) {
								
							$n_name = $row['nama_negeri'];
								
							?>
								<?php if($n_name == $nama_negeri): ?>
								
								<?php $n_name = ''; ?>
								
								<?php endif; ?>
								<option value="<?php echo $row6['negeri_id']; ?>"><?php echo $row6['nama_negeri']; ?></option>							
								
							<?php	
							
							}						
							?>
							
								</select>
					   <?php endif; ?>			
					  </td>
                    </tr>					
					
                    <tr>
                      <td>Parlimen</td>
                      <td>
					  
					  <?php
					  
					 		if($pgid == 0){
								
								echo "N/A";
								
							}else{
								


						$stmt11 = $conn->prepare("SELECT * FROM parlimen WHERE id = '$idpr'"); 

						$stmt11->execute(); 

						$row11 = $stmt11->fetch();

						extract($row11);			

						//echo $status_aduan;							
					  
					    echo $parlimen;
					  ?>

					  <?php
					  }
					  ?>
					  </td>
                    </tr>
                    <tr>
                      <td>Sinopsis</td>
                      <td>
					  
					  <!--<div class="form-group">
                      <input type="synopsis" class="form-control" id="email" placeholder="Masukkan sinopsis">
                      </div>-->
					  <input type="text" class="form-control" rows="5" name="sinopsis" id="sinopsis" value="<?php echo $sinopsis; ?>">
                      </td>
                    </tr>
                    <tr>
                      <td>Laporan</td>
                      <td><?php echo $laporan; ?><br>
                      </td>
                    </tr>				
                    <tr>
                      <td>Cadangan Skim Bantuan</td>
                      <td>
					  <?php

						$nskim = explode(' ' , $skim);
											
						foreach($nskim as $i => $key){
						
							
						if($key == "" || $key == NULL){
							
							echo "N/A";
							
						}else{
							$stmt6 = $conn->prepare("SELECT * FROM bantuan WHERE numbantuan = '$key'"); 

							$stmt6->execute(); 

							$row6 = $stmt6->fetch();
							
							$row_count6 = $stmt6->rowCount();
							
							if($row_count6 > 0){
								
								extract($row6);	

							echo $namebantuan;
							
							echo "<br />";
								
							}else{
								
								echo "N/A";
								
							}
							

						}
							
						}

					   ?>

                      </td>
                    </tr>
					
                   <tr>
                      <td>Status Rekod</td>
                      <td>					  
				  
							<?php 

									if($status_rekod == 1){
										$sr = "Aktif";
									}
									
									if($status_rekod == 0){
										$sr = "Tidak Aktif";
									}
									
								?>	
								
					  <select class="form-control" id="sel1" name="status">
							<option value="<?php echo $status_rekod; ?>">
								<?php echo $sr; ?>
							</option>						
							<option value="1">Aktif</option>
							<option value="0">Tidak aktif</option>
                        </select>		
						
					  </td>
                    </tr>
                    </tbody>
                    
            </table>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Kemaskini</button>
			</form>
			<button type="button" class="btn btn-primary" onclick="Batal()">Batal</button>
           
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->