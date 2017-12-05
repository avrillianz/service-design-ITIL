<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_kuesioner extends CI_Model {


    public function __construct()
    {
        parent::__construct();
    }

     public function getKuesioner()
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('control', 'control.id_co = kuesioner.id_co');
        $data = $this->db->get();
        return $data->result();
    }

    public function control(){
        $this->db->select('*');
        $this->db->from('control');
        $data = $this->db->get();
        return $data->result();   
    }

    public function add_kuesioner($id_kuesioner, $kuesioner, $id_co){
        $query = array(
            'id_kuesioner' => $id_kuesioner,
            'kuesioner' => $kuesioner,
            'id_co' => $id_co,
        );
        $this->db->insert('kuesioner', $query);
    }

    public function get_edit_kuesioner($id_kuesioner){
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('control', 'control.id_co = kuesioner.id_co');
        $this->db->where('id_kuesioner', $id_kuesioner);
        $data = $this->db->get();
        return $data->result_array();
    }

     public function edit_kuesioner($id_kuesioner, $kuesioner ,$id_co){
        $this->db->set('id_kuesioner', $id_kuesioner);
        $this->db->set('kuesioner', $kuesioner);
        $this->db->set('id_co', $id_co);
        $this->db->where('id_kuesioner', $id_kuesioner);
        $this->db->update('kuesioner');
    }

    public function delete_kuesioner($id_kuesioner){
        $this->db->delete('kuesioner', array('id_kuesioner' => $id_kuesioner));
    }
}
