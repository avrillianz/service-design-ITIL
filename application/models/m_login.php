<?php

if(!defined('BASEPATH')) exit ('No direct script access allowed');

class m_login extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function getLogin($username, $password){
		$data = $this->db->query('select * from user where username = "'.$username.'" and password = "'. $password.'"')->num_rows();
		return $data;
	}
	public function getLevel($username, $password){
		$data = $this->db->query('SELECT * FROM user u join level l on l.id_level = u.id_level WHERE username = "'.$username.'" AND password = "'.$password.'"');
		return $data->result_array();
	}

	public function getJabatan($username, $password){
		$data = $this->db->query('SELECT * FROM user WHERE username = "'.$username.'" AND password = "'.$password.'"');
		return $data->result_array();
	}
}