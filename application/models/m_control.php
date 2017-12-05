<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_control extends CI_Model {


    public function __construct()
    {
        parent::__construct();
    }

     public function getControl()
    {
        $this->db->select('*');
        $this->db->from('control');
        $data = $this->db->get();
        return $data->result();
    }

    public function add_control($id_co, $control, $area, $ket_control){
        $query = array(
            'id_co' => $id_co,
            'control' => $control,
            'area' => $area,
            'ket_control' => $ket_control,
            'id_service' => 's1',
        );
        $this->db->insert('control', $query);
    }

    public function get_edit_control($id_co){
        $this->db->select('*');
        $this->db->from('control');
        $this->db->where('id_co', $id_co);
        $data = $this->db->get();
        return $data->result_array();
    }

     public function edit_control($id_co, $control, $area, $ket_control){
        $this->db->set('id_co', $id_co);
        $this->db->set('control', $control);
        $this->db->set('area', $area);
        $this->db->set('ket_control', $ket_control);
        $this->db->where('id_co', $id_co);
        $this->db->update('control');
    }

    public function delete_control($id_co){
        $this->db->delete('control', array('id_co' => $id_co));
    }
}
