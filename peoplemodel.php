<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class peoplemodel extends CI_Model {

	public function getPeoples()
	{
		$this->db->select("*");
		$this->db->from('user');
		
		$query = $this->db->get();
		
		return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
			
			echo "There is no data in the database";
			exit(); }
	}
	
	public function insertPerson($username, $email, $password) {
		
		$this->db->set('username', $username);
		$this->db->set('email', $email);
		$this->db->set('password', $password);
		$this->db->insert('user');
	}
	
	
	}
	
	
