<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_maturity extends CI_Model {


	public function __construct()
    {
        parent::__construct();
    }

	 public function getMaturity()
    {
        $this->db->select('*');
        $this->db->from('maturity');
        $this->db->where('id_maturity = 1 or id_maturity = 2 or id_maturity = 3 or id_maturity = 4 or id_maturity = 5');
        $data = $this->db->get();
        return $data->result();
    }

    public function add_maturity($level, $maturity, $ket){
        $query = array(
            'id_maturity' => 'null',
            'level' => $level,
            'maturity' => $maturity,
            'ket' => $ket,
        );
        $this->db->insert('maturity', $query);
    }

    public function get_edit_maturity($id_maturity){
        $this->db->select('*');
        $this->db->from('maturity');
        $this->db->where('id_maturity', $id_maturity);
        $data = $this->db->get();
        return $data->result_array();
    }

     public function edit_maturity($id_maturity, $level, $maturity, $ket){
        $this->db->set('level', $level);
        $this->db->set('maturity', $maturity);
        $this->db->set('ket', $ket);
        $this->db->where('id_maturity', $id_maturity);
        $this->db->update('maturity');
    }

    public function delete_maturity($id_maturity){
        $this->db->delete('maturity', array('id_maturity' => $id_maturity));
    }
}
