<?php

class Search_model{
	
	private $table = 'search';
	private $db;


	public function __construct(){

	$this->db = new Database;
	
	}	
	
		
	public function inputKey($data, $ipaddr){

		$query = "INSERT INTO keywords VALUES('', :search, :ipaddr, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
		
		$this->db->query($query);

		$this->db->bind('search', $data['keyword']);
		$this->db->bind('ipaddr', $ipaddr);
		$this->db->execute();

		return $this->db->rowCount();	

	}
		
		
	public function search(){
		
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM search WHERE keywords LIKE :keyword";
		$this->db->query($query);
		$this->db->bind(':keyword', "%$keyword%");
		return $this->db->resultSet();
		
	}
	
	public function addSearch($data){

		$query = "INSERT INTO search VALUES('', :usr_id, :keywords, :title, :vid_code, :pic_code, :map_code, :description, :links, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
		
		$this->db->query($query);		

		$this->db->bind('usr_id', $data['usr_id']);
		$this->db->bind('keywords', $data['keywords']);
		$this->db->bind('title', $data['title']);
		$this->db->bind('vid_code', $data['vid_code']);
		$this->db->bind('pic_code', $data['pic_code']);
		$this->db->bind('map_code', $data['map_code']);
		$this->db->bind('description', $data['description']);
		$this->db->bind('links', $data['links']);
		
		$this->db->execute();

		return $this->db->rowCount();

		//return 0;
	}
	
	
	public function getSearchById($uid){

		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE usr_id=:usr_id');

		$this->db->bind('usr_id', $uid);		
		$this->db->execute();
		return $this->db->rowCount();

	}
	
	public function getAllSearch($uid){

		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE usr_id=:usr_id');

		$this->db->bind('usr_id', $uid);		
		$this->db->execute();
		return $this->db->single();
	}	
	
}