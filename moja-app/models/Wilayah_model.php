<?php

	class Wilayah_model{

		private $table = 'asnaf';
		private $db;


		public function __construct(){

			$this->db = new Database;

		}


		public function kualaLumpur(){

			$this->db->query("SELECT * FROM asnaf WHERE parlimen < 13 OR parlimen = 'W.P Kuala Lumpur'");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function putrajaya(){

			$this->db->query("SELECT * FROM asnaf WHERE parlimen = 13 OR parlimen = 'W.P Putrajaya'");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function labuan(){

			$this->db->query("SELECT * FROM asnaf WHERE parlimen = 14 OR parlimen = 'W.P Labuan'");

			$this->db->execute();

			return $this->db->rowCount();			

		}

	}