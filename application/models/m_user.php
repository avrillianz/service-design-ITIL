<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

	 public function getUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $data = $this->db->get();
        return $data->result();
    }

    public function level()
    {
        $this->db->select('*');
        $this->db->from('level');
        $data = $this->db->get();
        return $data->result();
    }

    public function add_user($username, $password, $jabatan, $id_level){
        $query = array(
            'id_user' => 'null',
            'username' => $username,
            'password' => $password,
            'jabatan' => $jabatan,
            'id_level' => $id_level,
        );
        $this->db->insert('user', $query);
    }

    public function get_edit_user($id_user){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $id_user);
        $data = $this->db->get();
        return $data->result_array();
    }

     public function edit_user($id_user, $username, $password, $jabatan){
        $this->db->set('username', $username);
        $this->db->set('password', $password);
        $this->db->set('jabatan', $jabatan);
        $this->db->where('id_user', $id_user);
        $this->db->update('user');
    }

    public function delete_user($id_user){
        $this->db->delete('user', array('id_user' => $id_user));
    }
}
