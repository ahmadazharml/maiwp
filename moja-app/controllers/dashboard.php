<?php

	class Dashboard extends Controller{

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


			$user_id = Session::get('user_id');
			$roles = Session::get('role');

			//echo "Role: ".$roles;			

			


			switch ($roles) {
					
				case 200:
					
					if( $this->model('Dashboard_model')->annualPen() > 0){

						$data['annual'] = $this->model('Dashboard_model')->annualPen();

					}else{

						$data['annual'] = "Tiada Kes!";

					}		


					if( $this->model('Dashboard_model')->monthlPen() > 0){

						$data['monthly'] = $this->model('Dashboard_model')->monthlPen();

					}else{

						$data['monthly'] = "Tiada Kes!";

					}		


					if( $this->model('Dashboard_model')->donePen() > 0){

						$data['done'] = $this->model('Dashboard_model')->donePen();

					}else{

						$data['done'] = "Tiada Kes!";

					}


					if( $this->model('Dashboard_model')->invPen() > 0){

						$data['inv'] = $this->model('Dashboard_model')->invPen();

					}else{

						$data['inv'] = "Tiada Kes!";

					}					
						
					break;
						
				case 300:

					if( $this->model('Dashboard_model')->annualPaza($user_id) > 0){

						$data['annual'] = $this->model('Dashboard_model')->annualPaza($user_id);

					}else{

						$data['annual'] = "Tiada Kes!";


					}

					if( $this->model('Dashboard_model')->monthlPaza($user_id) > 0){

						$data['monthly'] = $this->model('Dashboard_model')->monthlPaza();

					}else{

						$data['monthly'] = "Tiada Kes!";

					}		


					if( $this->model('Dashboard_model')->donePaza() > 0){

						$data['done'] = $this->model('Dashboard_model')->donePaza();

					}else{

						$data['done'] = "Tiada Kes!";

					}


					if( $this->model('Dashboard_model')->invPaza() > 0){

						$data['inv'] = $this->model('Dashboard_model')->invPaza();

					}else{

						$data['inv'] = "Tiada Kes!";

					}										

					break;
						
				case 400:
						
					if( $this->model('Dashboard_model')->annualPeg($user_id) > 0){

						$data['annual'] = $this->model('Dashboard_model')->annualPeg($user_id);

					}else{

						$data['annual'] = "Tiada Kes!";

					}	

					if( $this->model('Dashboard_model')->monthlPeg() > 0){

						$data['monthly'] = $this->model('Dashboard_model')->monthlPeg();

					}else{

						$data['monthly'] = "Tiada Kes!";

					}


					if( $this->model('Dashboard_model')->donePeg($user_id) > 0){

						$data['done'] = $this->model('Dashboard_model')->donePaza();

					}else{

						$data['done'] = "Tiada Kes!";

					}


					if( $this->model('Dashboard_model')->invPeg() > 0){

						$data['inv'] = $this->model('Dashboard_model')->invPaza();

					}else{

						$data['inv'] = "Tiada Kes!";

					}

					break;
						
				default:
					
					if( $this->model('Dashboard_model')->annualPeg() > 0){

						$data['annual'] = $this->model('Dashboard_model')->annualPeg();

					}else{

						$data['annual'] = "Tiada Kes!";

					}


					if( $this->model('Dashboard_model')->monthlPeg() > 0){

						$data['monthly'] = $this->model('Dashboard_model')->monthlPeg();

					}else{

						$data['monthly'] = "Tiada Kes!";

					}


					if( $this->model('Dashboard_model')->donePeg() > 0){

						$data['done'] = $this->model('Dashboard_model')->donePaza();

					}else{

						$data['done'] = "Tiada Kes!";

					}


					if( $this->model('Dashboard_model')->invPeg() > 0){

						$data['inv'] = $this->model('Dashboard_model')->invPaza();

					}else{

						$data['inv'] = "Tiada Kes!";

					}											
					
						
			}

				$data['kuala_lumpur'] = $this->model('Wilayah_model')->kualaLumpur();
				$data['putrajaya'] = $this->model('Wilayah_model')->putrajaya();
				$data['labuan'] = $this->model('Wilayah_model')->labuan();

				$data['jan12'] = $this->model('Mon_model')->jan12();
				$data['jan24'] = $this->model('Mon_model')->jan24();
				$data['jan48'] = $this->model('Mon_model')->jan48();
				$data['jan48o'] = $this->model('Mon_model')->jan48o();

				$data['feb12'] = $this->model('Mon_model')->feb12();
				$data['feb24'] = $this->model('Mon_model')->feb24();
				$data['feb48'] = $this->model('Mon_model')->feb48();
				$data['feb48o'] = $this->model('Mon_model')->feb48o();

				$data['mar12'] = $this->model('Mon_model')->mar12();
				$data['mar24'] = $this->model('Mon_model')->mar24();
				$data['mar48'] = $this->model('Mon_model')->mar48();
				$data['mar48o'] = $this->model('Mon_model')->mar48o();

				$data['apr12'] = $this->model('Mon_model')->apr12();
				$data['apr24'] = $this->model('Mon_model')->apr24();
				$data['apr48'] = $this->model('Mon_model')->apr48();
				$data['apr48o'] = $this->model('Mon_model')->apr48o();

				$data['may12'] = $this->model('Mon_model')->may12();
				$data['may24'] = $this->model('Mon_model')->may24();
				$data['may48'] = $this->model('Mon_model')->may48();
				$data['may48o'] = $this->model('Mon_model')->may48o();

				$data['jun12'] = $this->model('Mon_model')->jun12();
				$data['jun24'] = $this->model('Mon_model')->jun24();
				$data['jun48'] = $this->model('Mon_model')->jun48();
				$data['jun48o'] = $this->model('Mon_model')->jun48o();


				$data['jul12'] = $this->model('Mon_model')->jul12();
				$data['jul24'] = $this->model('Mon_model')->jul24();
				$data['jul48'] = $this->model('Mon_model')->jul48();
				$data['jul48o'] = $this->model('Mon_model')->jul48o();

				$data['aug12'] = $this->model('Mon_model')->aug12();
				$data['aug24'] = $this->model('Mon_model')->aug24();
				$data['aug48'] = $this->model('Mon_model')->aug48();
				$data['aug48o'] = $this->model('Mon_model')->aug48o();

				$data['sep12'] = $this->model('Mon_model')->sep12();
				$data['sep24'] = $this->model('Mon_model')->sep24();
				$data['sep48'] = $this->model('Mon_model')->sep48();
				$data['sep48o'] = $this->model('Mon_model')->sep48o();

				$data['oct12'] = $this->model('Mon_model')->oct12();
				$data['oct24'] = $this->model('Mon_model')->oct24();
				$data['oct48'] = $this->model('Mon_model')->oct48();
				$data['oct48o'] = $this->model('Mon_model')->oct48o();

				$data['nov12'] = $this->model('Mon_model')->nov12();
				$data['nov24'] = $this->model('Mon_model')->nov24();
				$data['nov48'] = $this->model('Mon_model')->nov48();
				$data['nov48o'] = $this->model('Mon_model')->nov48o();

				$data['dec12'] = $this->model('Mon_model')->dec12();
				$data['dec24'] = $this->model('Mon_model')->dec24();
				$data['dec48'] = $this->model('Mon_model')->dec48();
				$data['dec48o'] = $this->model('Mon_model')->dec48o();

				$data['title'] = "MOJA - Administration Page";

				$this->view('templates/header', $data);
				$this->view('home/dashboard', $data);
				$this->view('templates/dashboard_footer', $data);

		}



		public function annualCase(){


		}

		
	}