<?php

	class Dashboard_model{

		private $table = 'aduan';
		private $db;


		public function __construct(){

			$this->db = new Database;

		}


		public function annualPen(){

			$this->db->query("SELECT * FROM aduan WHERE aduan_date > NOW() - INTERVAL 1 YEAR");

			//$this->db->bind('uid', $uid);

			$this->db->execute();

			return $this->db->rowCount();

		}


		public function annualPaza($user_id){

			$this->db->query("SELECT * FROM pentadbir_paza LEFT JOIN aduan WHERE pentadbir_paza.user_id = :user_id AND pentadbir_paza.parlimen = aduan.parlimen AND aduan_date > NOW() - INTERVAL 1 YEAR");

			$this->db->bind('user_id', $user_id);

			$this->db->execute();

			return $this->db->rowCount();

		}		


		public function annualPeg($user_id){

			$this->db->query("SELECT * FROM aduan WHERE pegawai_id = :pegawai_id AND aduan_date > NOW() - INTERVAL 1 MONTH");

			$this->db->bind('pegawai_id', $user_id);

			$this->db->execute();

			return $this->db->rowCount();

		}



		public function monthlPen(){

			$this->db->query("SELECT * FROM aduan WHERE aduan_date > NOW() - INTERVAL 1 MONTH");

			//$this->db->bind('uid', $uid);

			$this->db->execute();

			return $this->db->rowCount();

		}		


		public function monthlPaza($user_id){

			$this->db->query("SELECT * FROM pentadbir_paza LEFT JOIN aduan WHERE pentadbir_paza.user_id = :user_id AND pentadbir_paza.parlimen = aduan.parlimen AND aduan_date > NOW() - INTERVAL 1 MONTH");

			$this->db->bind('user_id', $user_id);

			$this->db->execute();

			return $this->db->rowCount();

		}


		public function monthlPeg($user_id){

			$this->db->query("SELECT * FROM aduan WHERE pegawai_id = :pegawai_id AND aduan_date > NOW() - INTERVAL 1 MONTH");

			$this->db->bind('pegawai_id', $user_id);

			$this->db->execute();

			return $this->db->rowCount();

		}	



		public function donePen(){

			$this->db->query("SELECT * FROM aduan WHERE status_aduan = 'Selesai' OR status_aduan = 'Kes Selesai' OR status_aduan = 5");

			//$this->db->bind('uid', $uid);

			$this->db->execute();

			return $this->db->rowCount();

		}		


		public function donePaza($user_id){

			$this->db->query("SELECT * FROM pentadbir_paza LEFT JOIN aduan WHERE (pentadbir_paza.user_id = :pentadbir_paza.user_id AND aduan.parlimen = pentadbir_paza.parlimen AND status_aduan = 'Selesai') OR (aduan.parlimen = pentadbir_paza.parlimen AND status_aduan = 'Kes Selesai') OR (aduan.parlimen = pentadbir_paza.parlimen AND status_aduan = 5)");

			$this->db->bind('pentadbir_paza.user_id', $user_id);

			$this->db->execute();

			return $this->db->rowCount();

		}


		public function donePeg($user_id){

			$this->db->query("SELECT * FROM aduan WHERE (pegawai_id = :pegawai_id AND status_aduan = 'Selesai') OR (pegawai_id = :pegawai_id AND status_aduan = 'Kes Selesai') OR (pegawai_id = :pegawai_id AND status_aduan = 5)");

			$this->db->bind('pegawai_id', $user_id);

			$this->db->execute();

			return $this->db->rowCount();

		}	



		public function invPen(){

			$this->db->query("SELECT * FROM aduan WHERE status_aduan = 'Siasatan' OR status_aduan = 'Kes Disiasat' OR status_aduan = 3");

			//$this->db->bind('uid', $uid);

			$this->db->execute();

			return $this->db->rowCount();

		}		


		public function invPaza($user_id){

			$this->db->query("SELECT * FROM pentadbir_paza LEFT JOIN aduan WHERE (pentadbir_paza.user_id = :pentadbir_paza.user_id AND aduan.parlimen = pentadbir_paza.parlimen AND status_aduan = 'Siasatan') OR (aduan.parlimen = pentadbir_paza.parlimen AND status_aduan = 'Kes Disiasat') OR (aduan.parlimen = pentadbir_paza.parlimen AND status_aduan = 3)");

			$this->db->bind('pentadbir_paza.user_id', $user_id);

			$this->db->execute();

			return $this->db->rowCount();

		}


		public function invPeg($user_id){

			$this->db->query("SELECT * FROM aduan WHERE (pegawai_id = :pegawai_id AND status_aduan = 'Siasatan') OR (pegawai_id = :pegawai_id AND status_aduan = 'Kes Disiasat') OR (pegawai_id = :pegawai_id AND status_aduan = 3)");

			$this->db->bind('pegawai_id', $user_id);

			$this->db->execute();

			return $this->db->rowCount();

		}	

	}