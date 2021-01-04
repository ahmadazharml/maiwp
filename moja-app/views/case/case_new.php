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
			
             <div class="table-responsive">
                <table data-order='[[ 0, "asc" ]]' class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Bil</th>					
                      <th>No Kes</th>
					            <th>Tarikh & Masa</th>
                      <th>Nama Pelapor</th>
                      <th>Nama Asnaf</th>
                      <th>No Tel</th>
                      <th>Pegawai</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Bil</th>					
                      <th>No Kes</th>
					            <th>Tarikh & Masa</th>					  
                      <th>Nama Pelapor</th>
                      <th>Nama Asnaf</th>
                      <th>No Tel</th>
                      <th>Pegawai</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                    <tbody>

                    <?php

                    $counter = 1;

                    $data['aduan2'] = $this->model('Case_model')->getAduanAll();

                    foreach($data['aduan2'] as $aduan) : ;

                    $aduan['id'];//

                    $aduan['aduan_code'];//

                    $data['aduan_date'] = date('d/m/y h:i: A', strtotime($aduan['aduan_date']));//

                    $pelapor_id = $aduan['pelapor_id']; 

                    $asnaf_id = $aduan['asnaf_id'];

                    $status_aduan = $aduan['status_aduan'];

                    $pegawai_id = $aduan['pegawai_id'];                    

                    ?>
                      <tr>
                        <td>                                   
                          <?php                            
                            echo $counter;            
                            $counter++;              
                          ?>
                        </td>
                        <td>
                            <a href="case_new_update/<?= $aduan['id']; ?>">
                              <?= $aduan['aduan_code']; ?>
                            </a>
                        </td>           
                        <td>
                            <?= $data['aduan_date']; ?>
                        </td>

                            <?php 

                            if($this->model('Case_model')->countAllRakan($pelapor_id) > 0){

                            $data['rakan'] = $this->model('Case_model')->getAllRakan($pelapor_id);
                            foreach($data['rakan'] as $rakan2) : ;

                            if($rakan2['name'] == null || $rakan2['name'] == ""){

                            $rakan_name = "";

                            }else{

                            $rakan_name = $rakan2['name'];

                            }                            

                            ?>                       

                        <td> 
                          <?php

                              echo $rakan_name;

                          ?>
                        </td>  

                            <?php endforeach; ?>

                            <?php 

                            }else{

                            $rakan_name = "";
                                 
                            ?>
                            <td>
                              <?= $rakan_name; ?> 
                            </td>                         

                            <?php

                            }

                                if($this->model('Case_model')->countAsnaf($asnaf_id) > 0 || $this->model('Case_model')->countAsnaf($asnaf_id) != null){
                                $data['asnaf'] = $this->model('Case_model')->getAllAsnaf($asnaf_id);
                                foreach($data['asnaf'] as $asnaf) : ; 

                                if($asnaf['name'] == null || $asnaf['name'] == ""){

                                  $asnaf_name = "";

                                }else{

                                  $asnaf_name = $asnaf['name'];
                                                                
                                }

                                if($asnaf['contact'] == null || $asnaf['contact'] == ""){

                                  $asnaf_contact = "";

                                }else{

                                  $asnaf_contact = $asnaf['contact'];

                                }
                              
                            ?>
                              <td>
                                  <?= $asnaf_name; ?> 
                              </td>                         
                              <td>
                                  <?= $asnaf_contact; ?>
                              </td>
                                  <?php endforeach; ?>
                             <?php 

                            }else{                                

                            $asnaf_name = "";

                            $asnaf_contact = "";
                                  
                            ?>

                            <td>
                                <?= $asnaf_name; ?> 
                            </td>                         
                            <td>
                                <?= $asnaf_contact; ?>
                            </td>

                            <?php
                            }
                            ?>

                           <?php

                                if($this->model('Case_model')->countAllPegawai($pegawai_id) > 0){
                                
                                $data['pegawai'] = $this->model('Case_model')->getAllPegawai($pegawai_id);

                                foreach($data['pegawai'] as $pegawai) : ;

                                if($pegawai['name'] == "" || $pegawai['name'] == null){

                                    $pegawai_name = "";

                                    $data['pegawai_name'] = "";

                                }else{

                                    $pegawai_name = $pegawai['name'];
                                }                                                               

                            ?>                        
                        <th>
                            <?= $pegawai_name; ?>
                        </th>

                        <?php endforeach; ?>

                            <?php 

                            } else {

                            ?>
                        <th>
                            N/A
                        </th>

                            <?php

                            }


                            ?>

                        <td>

                          <?php if($status_aduan == "Kes Baharu" || $status_aduan == 1){
                              
                              $status_aduan = "Kes Baharu";
                              
                              echo $status_aduan; 

                            }else{

                              echo "Tiada Kes!";
                            }

                            ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>             
                    </tbody>                  
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->