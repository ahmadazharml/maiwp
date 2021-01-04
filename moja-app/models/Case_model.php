<?php

	class Case_model{

		private $table = 'aduan';
		private $db;


		public function __construct(){

			$this->db = new Database;

		}


		public function getAduanJoin(){

			$this->db->query("SELECT * FROM aduan LEFT JOIN rakan ON rakan.user_id = aduan.pelapor_id LEFT JOIN asnaf ON asnaf.id = aduan.asnaf_id LEFT JOIN pegawai ON pegawai.user_id = aduan.pegawai_id WHERE aduan.status_aduan = 'Kes Baharu' OR aduan.status_aduan = 1 ORDER BY aduan.id DESC");

			//$this->db->bind('uid', $uid);

			$this->db->execute();

			return $this->db->resultSet();

		}


		public function getAduanAll(){

			$this->db->query("SELECT * FROM aduan WHERE status_aduan = 'Kes Baharu' OR status_aduan = 1 ORDER BY id DESC");

			//$this->db->bind('uid', $uid);

			$this->db->execute();

			return $this->db->resultSet();

		}


		public function countAllRakan($user_id){

			$this->db->query("SELECT * FROM rakan WHERE user_id = :user_id");

			$this->db->bind('user_id', $user_id);

			$this->db->execute();

			return $this->db->rowCount();			

		}		


		public function getAllRakan($user_id){

			$this->db->query("SELECT * FROM rakan WHERE user_id = :user_id");

			$this->db->bind('user_id', $user_id);

			$this->db->execute();

			return $this->db->resultSet();

		}


		public function getAllAsnaf($id){

			$this->db->query("SELECT * FROM asnaf WHERE id = :id");

			$this->db->bind('id', $id);

			$this->db->execute();

			return $this->db->resultSet();

		}		


		public function countAsnaf($asnaf_id){

			$this->db->query("SELECT * FROM asnaf WHERE id = :id");

			$this->db->bind('id', $asnaf_id);

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function countAllPegawai($user_id){

			$this->db->query("SELECT * FROM pegawai WHERE user_id = :user_id");

			$this->db->bind('user_id', $user_id);

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function getAllPegawai($user_id){

			$this->db->query("SELECT * FROM pegawai WHERE user_id = :user_id");

			$this->db->bind('user_id', $user_id);

			$this->db->execute();

			return $this->db->resultSet();

		}


		public function getAduanId($id){

			$this->db->query('SELECT * FROM aduan WHERE id = :id');

			$this->db->bind('id', $id);

			return $this->db->single();

		}		

	}