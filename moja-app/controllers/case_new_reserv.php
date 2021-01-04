<?php

	class Case_new extends Controller{

		public function index(){

			$logged = Session::get('loggedIn');	
			
			if ($logged == false) {	

				Session::destroy();

				header('location: ' . BASEURL . 'login');

				exit;				

			}

				$uid = Session::get('user_id');			
				$role = Session::get('role');

				//echo "User ID: ".$uid;		
				//echo "Role: ".$role;

				$data['users'] = $this->model('Users_model')->getAllData($uid);
				//$data['total'] = $this->model('Aduan_model')->totalAduan();	
				$data['aduan'] = $this->model('Aduan_model')->getAllAduan();


				if($this->model('Aduan_model')->totalAduan() > 0){

					$data['total'] = $this->model('Aduan_model')->totalAduan();
					$data['aduasn'] = $this->model('Aduan_model')->getAduanAsnaf();						

				}else{

					$data['total'] = "Tiada Kes";
					$data['aduasn'] = "Tiada Kes";

				}
				
				$roles = $data['users']['role_id'];
				$data['role_name'] = $this->model('Aduan_model')->getUserRole($roles);

				$user_id = $data['users']['uid'];

				if($this->model('Profile_model')->getProfile($user_id) > 0){

					$data['profile'] = $this->model('Profile_model')->getUserPic($user_id);

					$data['propic'] = $data['profile']['picture'];

				}else{

					$data['propic'] = BASEURL . "img/user.png";

				}




			$data['aduan2'] = $this->model('Case_model')->getAduanAll();

			foreach($data['aduan2'] as $aduan) : ;

			$data['aduan_id'] = $aduan['id'];//

			$data['aduan_code'] = $aduan['aduan_code'];//

			$data['aduan_date'] = date('d/m/y h:i: A', strtotime($aduan['aduan_date']));//

			$pelapor_id = $aduan['pelapor_id']; 

			//echo $pelapor_id;

			//echo "<br />";

			$asnaf_id = $aduan['asnaf_id'];

			//echo $aduan['asnaf_id'];

			//echo "<br />";

			$status_aduan = $aduan['status_aduan'];

			$pegawai_id = $aduan['pegawai_id'];

				$data['rakan'] = $this->model('Case_model')->getAllRakan($pelapor_id);

				foreach($data['rakan'] as $rakan2) : ;

					//echo $rakan2['name'];

					//echo "<br />";

					$data['rakan_name']	= $rakan2['name'];//

					$data['asnaf'] = $this->model('Case_model')->getAllAsnaf($asnaf_id);

					foreach($data['asnaf'] as $asnaf) : ;

						//echo $asnaf['name'];

						//echo "<br />";

						$data['asnaf_name'] = $asnaf['name'];//

						$data['asnaf_contact'] = $asnaf['contact'];//

						//$pegawai_id = $aduan['pegawai_id'];

						if($pegawai_id == 0 || $pegawai_id == NULL){
							
							//echo "N/A";

							//echo "<br />";

							$data['pegawai_name'] = "N/A";//
							
						}else{

							$data['pegawai'] = $this->model('Case_model')->getAllPegawai($pegawai_id);

							foreach($data['pegawai'] as $pegawai) : ;

							$name3 = $pegawai['name'];

							//echo $name3;

							//echo "<br />";

							$data['pegawai_name'] = $pegawai['name'];//

							if($status_aduan == "Kes Baharu" || $status_aduan == 1){
							
							$status_aduan = "Kes Baharu";
							
							//echo $status_aduan;

							//echo "<br />";

							$data['status_aduan'] = "Kes Baharu";//
							
							}else{

							//echo "Tiada Kes!";

							$data['status_aduan'] = "Tiada Kes!";//

							//echo "<br />";
							}	

							//echo "<br />";



							endforeach;


							//echo "<br />";
						}						

						

						//echo "<br />";


					endforeach;

				endforeach;


			endforeach;


			$data['title'] = "MOJA - Administration Page";

			$this->view('templates/header', $data);
			$this->view('case/case_new', $data);
			$this->view('templates/footer', $data);

		}

	}