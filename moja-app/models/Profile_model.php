<?php

class Profile_model{

		private $table = 'profile';
		private $db;


	public function __construct(){

		$this->db = new Database;

	}


	public function getProfile($user_id){

		$query = "SELECT * FROM profile WHERE user_id = :user_id";

		$this->db->query($query);

		$this->db->bind('user_id', $user_id);

		$this->db->execute();

		return $this->db->rowCount();		
		
	}		


	public function getUserPic($user_id){

		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id = :user_id');

		$this->db->bind('user_id', $user_id);

		return $this->db->single();

	}


	public function editPegawaiData($data){

		$query = "UPDATE pegawai SET
					name = :name,
					ic = :ic,
					contact = :contact,
					email = :email
				  WHERE user_id = :user_id";
		
		$this->db->query($query);		

		$this->db->bind('name', $data['name']);
		$this->db->bind('ic', $data['ic']);
		$this->db->bind('contact', $data['contact']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('user_id', $data['user_id']);

		$this->db->execute();

		return $this->db->rowCount();

		//return 0;
	}			


	public function editPazaData($data){

		$query = "UPDATE pentadbir_paza SET
					name = :name,
					ic = :ic,
					contact = :contact,
					email = :email
				  WHERE user_id = :user_id";
		
		$this->db->query($query);		

		$this->db->bind('name', $data['name']);
		$this->db->bind('ic', $data['ic']);
		$this->db->bind('contact', $data['contact']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('user_id', $data['user_id']);

		$this->db->execute();

		return $this->db->rowCount();

		//return 0;
	}


	public function editPentadbirData($data){

		$query = "UPDATE pentadbir SET
					name = :name,
					ic = :ic,
					contact = :contact,
					email = :email
				  WHERE user_id = :user_id";
		
		$this->db->query($query);		

		$this->db->bind('name', $data['name']);
		$this->db->bind('ic', $data['ic']);
		$this->db->bind('contact', $data['contact']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('user_id', $data['user_id']);

		$this->db->execute();

		return $this->db->rowCount();

		//return 0;
	}


	public function checkOldPass($data){

		$query = "SELECT * FROM users WHERE uid = :uid AND password = :password";

		$this->db->query($query);

		$this->db->bind('uid', $data['uid']);

		$this->db->bind('password', md5($data['cpassword']));

		$this->db->execute();

		return $this->db->rowCount();		
		
	}		


	public function getNewPass($data){

		$query = "UPDATE users SET
					password = :password
					  WHERE uid = :uid";
			
		$this->db->query($query);		

		$this->db->bind('password', md5($data['newpassword']));
		$this->db->bind('uid', $data['uid']);

		$this->db->execute();

		return $this->db->rowCount();

			//return 0;
	}	


}