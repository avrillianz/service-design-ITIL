<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_service extends CI_Model {


    public function __construct()
    {
        parent::__construct();
    }

     public function getService()
    {
        $this->db->select('*');
        $this->db->from('service');
        $data = $this->db->get();
        return $data->result();
    }

    public function add_service($id_service, $nama_service, $ket_service){
        $query = array(
            'id_service' => $id_service,
            'nama_service' => $nama_service,
            'ket_service' => $ket_service,
        );
        $this->db->insert('service', $query);
    }

    public function get_edit_service($id_service){
        $this->db->select('*');
        $this->db->from('service');
        $this->db->where('id_service', $id_service);
        $data = $this->db->get();
        return $data->result_array();
    }

     public function edit_service($id_service, $nama_service, $ket_service){
        $this->db->set('id_service', $id_service);
        $this->db->set('nama_service', $nama_service);
        $this->db->set('ket_service', $ket_service);
        $this->db->where('id_service', $id_service);
        $this->db->update('service');
    }

    public function delete_service($id_service){
        $this->db->delete('service', array('id_service' => $id_service));
    }
}
