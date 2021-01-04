<?php

class Users_model{

		private $table = 'users';
		private $db;


	public function __construct(){

		$this->db = new Database;

	}

	public function loginCheck($data){		

		//$query = "SELECT * FROM users WHERE (username = :logid OR contact = :logid OR email = :logid) AND status = 1";

		$query = "SELECT * FROM users WHERE username = :logid AND status = 1 AND password = :password";

		$this->db->query($query);

		$this->db->bind(':logid', $data['logid']);

		$this->db->bind(':password', md5($data['password']));

		$this->db->execute();

		return $this->db->rowCount();	

	}



	public function getUsersData($logid, $password){

		//$query = "SELECT * FROM users WHERE username = :logid OR contact = :logid OR email = :logid AND spassword = :password";
		
		$query = "SELECT * FROM users WHERE username = :logid AND password = :password";

		$this->db->query($query);

		$this->db->bind(':logid', $logid);

		$this->db->bind(':password', md5($password));

		return $this->db->single();

	}	



	public function getAllData($uid){

		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE uid=:uid');

		$this->db->bind('uid', $uid);

		return $this->db->single();

	}

}