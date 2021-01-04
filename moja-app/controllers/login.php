<?php

	class Login extends Controller{

		public function index(){

			$logged = Session::get('loggedIn');	

			echo $logged;
			
			if ($logged == true) {	

				header('location: ' . BASEURL . 'dashboard');

				exit;

			}			

			$data['title'] = "Login";
			$this->view('home/login', $data);

		}


		public function check(){

			//echo "Check";

			$logid = $_POST['logid'];
			$password = $_POST['password'];
		
			if($this->model('Users_model')->loginCheck($_POST) > 0){			

				if($this->model('Users_model')->getUsersData($logid, $password)){

					$data['users'] = $this->model('Users_model')->getUsersData($logid, $password);

					$uid = $data['users']['uid'];
					$role = $data['users']['role_id'];
					$fullname = $data['users']['fullname'];					
					//Session::init();	

					Session::set('logid', $logid);
					Session::set('password', $password);					
					Session::set('loggedIn', true);
					Session::set('user_id', $uid);
					Session::set('role', $role);
					Session::set('fullname', $fullname);
					
					if(!empty($_POST['remember'])) {
						
					//setcookie ("member_login",$_POST["member_name"],time()+ (10 * 365 * 24 * 60 * 60));
								
						Cookie::set("password", $password, time()+ (86400 * 30));
								
					} else {
															
						Cookie::destroy("password");
									
					}

					//Session::setFlash(' Succesfully ', 'Logged in', 'success');

					header('Location: ' . BASEURL . 'dashboard');
					exit;

				}else{

					Cookie::destroy("password");

				?>

					<script>

						alert("Kata Laluan atau login ID Mungkin salah atau akaun anda belum diaktifkan sila semak email anda");

						window.location.replace("../login");
					</script>			

				<?php
				}			



			}else{			

				//Session::setFlash(' Password maybe Wrong or your account is not activate ', 'please check your email', 'danger');

				?>

					<script>

						alert("Kata Laluan atau login ID Mungkin salah atau akaun anda belum diaktifkan sila semak email anda");
						window.location.href = "../login";
					</script>			

				<?php

				//header('Location: ' . BASEURL . 'login');
				//exit;

			}		

		}



		public function logout(){

			Session::destroy();
			header('location: ' . BASEURL .  'login');
			exit;			

		}


	}