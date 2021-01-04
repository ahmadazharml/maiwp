<?php

	class Case_new_update extends Controller{

		public function index($id){

			//echo $id;

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

			//$data['aduan2'] = $this->model('Case_model')->getAduanJoin();

			$data['title'] = "MOJA - Administration Page";

			$this->view('templates/header', $data);
			$this->view('case/case_new_update', $data);
			$this->view('templates/footer', $data);

		}			


		public function aduan($id){

			//echo $id;		

		}
	}