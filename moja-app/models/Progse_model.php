<?php

class Progse_model{
	
	private $table = 'accounts';
	private $db;


	public function __construct(){

	$this->db = new Database;
	
	}
	

	public function createAcc($data, $apassword, $code){
		
		$type = "trial";

		$query = "INSERT INTO accounts VALUES('', :code, :username, :contact, :email, :apassword, :spassword, :type, :status, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
		
		$this->db->query($query);

		$this->db->bind('code', $code);
		$this->db->bind('username', $data['username']);
		$this->db->bind('contact', $data['contact']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('apassword', $apassword);
		$this->db->bind('spassword', md5($data['password']));
		$this->db->bind('type', $type);
		$this->db->bind('status', 0);
		$this->db->execute();

		return $this->db->rowCount();		

	}


	public function getAccData($logid, $password){

		$query = "SELECT * FROM accounts WHERE username = :logid OR contact = :logid OR email = :logid AND spassword = :password";

		$this->db->query($query);
		$this->db->bind(':logid', $logid);
		$this->db->bind(':password', md5($password));
		return $this->db->single();

	}

	public function editStatus($uid){

		$query = "UPDATE accounts SET
					status = :status
				  WHERE id = :id";
		
		$this->db->query($query);		

		$this->db->bind('status', 1);		
		$this->db->bind('id', $uid);

		$this->db->execute();

		return $this->db->rowCount();

		//return 0;
	}


	public function loginCheck($data){

		$query = "SELECT * FROM accounts WHERE (username = :logid OR contact = :logid OR email = :logid) AND status = 1 AND spassword = :password";

		$this->db->query($query);
		$this->db->bind(':logid', $data['logid']);
		$this->db->bind(':password', md5($data['password']));
		$this->db->execute();

		return $this->db->rowCount();		

	}
	
	public function checkCode($data){

		$query = "SELECT * FROM accounts WHERE id = :id AND code = :code";

		$this->db->query($query);
		$this->db->bind(':id', $data['id']);
		$this->db->bind(':code', $data['code']);
		$this->db->execute();

		return $this->db->rowCount();		
	}

	public function getAllData($uid){

		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

		$this->db->bind('id', $uid);
		return $this->db->single();		

	}	
	
	public function deleteAcc($id){
		
		$query = "DELETE FROM accounts WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();		
	}
	
}