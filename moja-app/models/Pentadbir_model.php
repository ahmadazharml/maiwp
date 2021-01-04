<?php

class Pentadbir_model{

		private $table = 'pentadbir';
		private $db;


	public function __construct(){

		$this->db = new Database;

	}


	public function getPentadbir($user_id){

		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id = :user_id');

		$this->db->bind('user_id', $user_id);

		return $this->db->single();

	}		


	public function getPentadbirPaza($user_id){

		$this->db->query('SELECT * FROM pentadbir_paza WHERE user_id = :user_id');

		$this->db->bind('user_id', $user_id);

		return $this->db->single();

	}	


	public function getPegawai($user_id){

		$this->db->query('SELECT * FROM pegawai WHERE user_id = :user_id');

		$this->db->bind('user_id', $user_id);

		return $this->db->single();

	}	

}