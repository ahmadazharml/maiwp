<?php

	class Mon_model{

		private $table = 'case_period';
		private $db;


		public function __construct(){

			$this->db = new Database;

		}

		public function jan12(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'January' AND tot_hrs < 12");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function jan24(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'January' AND tot_hrs <= 24");

			$this->db->execute();

			return $this->db->rowCount();			

		}		


		public function jan48(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'January' AND tot_hrs <= 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function jan48o(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'January' AND tot_hrs > 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function feb12(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'February' AND tot_hrs <= 12");

			$this->db->execute();

			return $this->db->rowCount();			

		}		


		public function feb24(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'February' AND tot_hrs <= 24");

			$this->db->execute();

			return $this->db->rowCount();			

		}	


		public function feb48(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'February' AND tot_hrs <= 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function feb48o(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'February' AND tot_hrs > 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function mar12(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'March' AND tot_hrs <= 12");

			$this->db->execute();

			return $this->db->rowCount();			

		}		


		public function mar24(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'March' AND tot_hrs <= 24");

			$this->db->execute();

			return $this->db->rowCount();			

		}	


		public function mar48(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'March' AND tot_hrs <= 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function mar48o(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'March' AND tot_hrs > 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function apr12(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'April' AND tot_hrs <= 12");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function apr24(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'April' AND tot_hrs <= 24");

			$this->db->execute();

			return $this->db->rowCount();			

		}		


		public function apr48(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'April' AND tot_hrs <= 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function apr48o(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'April' AND tot_hrs > 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function may12(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'May' AND tot_hrs <= 12");

			$this->db->execute();

			return $this->db->rowCount();			

		}	


		public function may24(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'May' AND tot_hrs <= 24");

			$this->db->execute();

			return $this->db->rowCount();			

		}		


		public function may48(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'May' AND tot_hrs <= 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}			


		public function may48o(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'May' AND tot_hrs > 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}		


		public function jun12(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'June' AND tot_hrs <= 12");

			$this->db->execute();

			return $this->db->rowCount();			

		}	


		public function jun24(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'June' AND tot_hrs <= 24");

			$this->db->execute();

			return $this->db->rowCount();			

		}		


		public function jun48(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'June' AND tot_hrs <= 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function jun48o(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'June' AND tot_hrs > 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function jul12(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'July' AND tot_hrs <= 12");

			$this->db->execute();

			return $this->db->rowCount();			

		}		


		public function jul24(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'July' AND tot_hrs <= 24");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function jul48(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'July' AND tot_hrs <= 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function jul48o(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'July' AND tot_hrs > 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}		


		public function aug12(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'August' AND tot_hrs <= 12");

			$this->db->execute();

			return $this->db->rowCount();			

		}	
		

		public function aug24(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'August' AND tot_hrs <= 24");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function aug48(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'August' AND tot_hrs <= 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function aug48o(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'August' AND tot_hrs > 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function sep12(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'September' AND tot_hrs <= 12");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function sep24(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'September' AND tot_hrs <= 24");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function sep48(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'September' AND tot_hrs <= 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function sep48o(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'September' AND tot_hrs > 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function oct12(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'October' AND tot_hrs <= 12");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function oct24(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'October' AND tot_hrs <= 24");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function oct48(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'October' AND tot_hrs <= 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function oct48o(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'October' AND tot_hrs > 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function nov12(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'November' AND tot_hrs <= 12");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function nov24(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'November' AND tot_hrs <= 24");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function nov48(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'November' AND tot_hrs <= 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function nov48o(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'November' AND tot_hrs > 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function dec12(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'December' AND tot_hrs <= 12");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function dec24(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'December' AND tot_hrs <= 24");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function dec48(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'December' AND tot_hrs <= 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}


		public function dec48o(){

			$this->db->query("SELECT * FROM case_period WHERE mon = 'December' AND tot_hrs > 48");

			$this->db->execute();

			return $this->db->rowCount();			

		}

	}