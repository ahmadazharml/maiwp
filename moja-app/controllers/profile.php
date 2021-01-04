<?php


	class Profile extends Controller{


		public function index(){

			$logged = Session::get('loggedIn');	
			
			if ($logged == false) {	

				Session::destroy();

				header('location: ' . BASEURL . 'login');

				exit;				

			}

				//echo "User ID: ".Session::get('user_id');
				//echo "Role: ".Session::get('role');

				$uid = Session::get('user_id');	
				$user_id = Session::get('user_id');		
				$roles = Session::get('role');


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
				
				//$roles1 = $data['users']['role_id'];
				$data['role_name'] = $this->model('Aduan_model')->getUserRole($roles);

				//$user_id = $data['users']['uid'];

				if($this->model('Profile_model')->getProfile($user_id) > 0){

					$data['profile'] = $this->model('Profile_model')->getUserPic($user_id);

					$data['propic'] = $data['profile']['picture'];

				}else{

					$data['propic'] = BASEURL . "img/user.png";

				}

				$data['user_id'] = Session::get('user_id');
				$data['roles'] = Session::get('role');

				//echo "Role: ".$roles;			


				switch ($roles) {
					
					case 200:
					
						$data['pengguna'] = $this->model('Pentadbir_model')->getPentadbir($user_id);
						
						break;
						
					case 300:

						$data['pengguna'] = $this->model('Pentadbir_model')->getPentadbirPaza($user_id);

						break;
						
					case 400:
						
						$data['pengguna'] = $this->model('Pentadbir_model')->getPegawai($user_id);

						break;
						
					default:
					
						$data['pengguna'] = $this->model('Pentadbir_model')->getPegawai($user_id);
						
				}


				$data['title'] = "MOJA - Kemaskini Profil";

				$this->view('templates/header', $data);
				$this->view('home/profile', $data);
				$this->view('templates/footer', $data);
		}


		public function editPegawai(){

			if($this->model('Profile_model')->editPegawaiData($_POST) > 0 ){

				Session::setFlash(' Profile berjaya ', 'di edit', 'success');

				header('Location: ' . BASEURL . 'dashboard');

				exit;

			}else{

				Session::setFlash('Profile gagal ', 'di edit', 'danger');

				header('Location: ' . BASEURL . 'dashboard');

				exit;

			}

		}


		public function editPaza(){

			if($this->model('Profile_model')->editPazaData($_POST) > 0 ){

				Session::flash(' Profile berjaya ', 'di edit', 'success');

				header('Location: ' . BASEURL . 'dashboard');

				exit;

			}else{

				Session::flash('Profile gagal ', 'di edit', 'danger');

				header('Location: ' . BASEURL . 'dashboard');

				exit;

			}

		}	

		
		public function editPentadbir(){

			if($this->model('Profile_model')->editPentadbirData($_POST) > 0 ){

				Session::flash(' Profile berjaya ', 'di edit', 'success');

				header('Location: ' . BASEURL . 'dashboard');

				exit;

			}else{

				Session::flash('Profile gagal ', 'di edit', 'danger');

				header('Location: ' . BASEURL . 'dashboard');

				exit;

			}

		}


	}