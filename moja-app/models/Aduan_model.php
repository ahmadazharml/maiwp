<?php

class Aduan_model{

		private $table = 'aduan';
		private $db;


	public function __construct(){

		$this->db = new Database;

	}



	public function totalAduan(){

		$this->db->query("SELECT * FROM aduan WHERE status_aduan = 'Kes Baharu' OR status_aduan = 1 ORDER BY id DESC");

		//$this->db->bind('uid', $uid);

		$this->db->execute();

		return $this->db->rowCount();

	}


	public function getAllAduan(){

		$this->db->query("SELECT * FROM aduan WHERE status_aduan = 'Kes Baharu' OR status_aduan = 1 ORDER BY id DESC");

		//$this->db->bind('uid', $uid);

		$this->db->execute();

		return $this->db->resultSet();

	}


	public function getAduanAsnaf(){

		$this->db->query("SELECT * FROM aduan LEFT JOIN asnaf ON aduan.asnaf_id = asnaf.id  WHERE aduan.status_aduan = 'Kes Baharu' OR aduan.status_aduan = 1 ORDER BY aduan.id DESC");

		//$this->db->bind('uid', $uid);

		$this->db->execute();

		return $this->db->resultSet();

	}	


	public function getUserRole($roles){

		$this->db->query('SELECT * FROM roles WHERE role_id = :role_id');

		$this->db->bind('role_id', $roles);

		return $this->db->single();

	}	


}