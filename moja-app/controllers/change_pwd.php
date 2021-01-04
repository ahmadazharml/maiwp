<?php


	class Change_pwd extends Controller{

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

				$data['title'] = "MOJA - Change Password";

				$this->view('templates/header', $data);
				$this->view('home/change_pwd', $data);
				$this->view('templates/footer', $data);							

		}


		public function changePass(){

			if($this->model('Profile_model')->checkOldPass($_POST) > 0){

				if($this->model('Profile_model')->getNewPass($_POST) > 0){
					
				$uid = Session::get('user_id');

				$data['users'] = $this->model('Users_model')->getAllData($uid);

				$email = $data['users']['email'];
				$fullname = $data['users']['fullname'];
				$username = $data['users']['username'];

				$passwordbaru = $_POST['newpassword'];

				$to = $email;
				$subject = "Tukar Kata Laluan Akaun Moja";

				$message = "
				<html>
				<head>
				<title>Tukar Katalaluan</title>
				</head>
				<body>
				<p>Assalamualaikum '$fullname'</p>
				<p><h2>Tukar Katalaluan Baru</h2></p>	
				
				<p>ID Pengguna:  '$username'</p>	
				<p>Kata Laluan baru:  '$passwordbaru'</p>
				<p>
				Terima Kasih,<br >
				Pasukan MOJA <br >
				Hotline : 012-3456789
				
				</p>
				</body>
				</html>
				";

				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From: <admin@maiwp.com>' . "\r\n";
				$headers .= 'Cc: myboss@example.com' . "\r\n";	
				
				mail($to,$subject,$message,$headers);	
				
				echo $email;				
				
				Session::setFlash(' Kata Laluan ', 'berjaya ditukar', 'success');
				header('location: ' . BASEURL . 'dashboard');
				exit;			

				}else{
					
				Session::setFlash(' Kata Laluan ', 'gagal ditukar', 'danger');
				header('location: ' . BASEURL . 'change_pwd');
				exit;

				}

			}else{

				?>
					<script>

						alert("Kata Laluan Semasa Mungkin salah!");

						window.location.replace("../change_pwd");

					</script>
				<?php


			}

		}
		

	}