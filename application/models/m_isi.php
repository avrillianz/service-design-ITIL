<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_isi extends CI_Model {


    public function __construct()
    {
        parent::__construct();
    }

    public function getIsi($id_co)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('control', 'control.id_co = kuesioner.id_co');
        $this->db->where('kuesioner.id_co', $id_co);
        $data = $this->db->get();
        return $data->result();
    }

    public function getPilih($id)
    {
        $data = $this->db->query("SELECT * FROM control c LEFT JOIN kuesioner k ON c.id_co = k.id_co LEFT JOIN jawaban j ON k.id_kuesioner = j.id_kuesioner WHERE j.id_maturity = 0 AND j.id_user = '$id'  GROUP BY c.id_co");
        print_r($id);
        return $data->result_array();
    }

    public function maturity(){
        $this->db->select('*');
        $this->db->from('maturity');
        $this->db->where('id_maturity = 1 or id_maturity = 2 or id_maturity = 3 or id_maturity = 4 or id_maturity = 5');
        $data = $this->db->get();
        return $data->result();
    }

    public function storeData($store, $id){
        try {
            $this->db->where('id_user', $id);
            $this->db->update_batch('jawaban', $store, 'id_kuesioner');
            return true;
        } catch (Exception $e) {
            return false;
        }
        $query = array(
            'id_status' => 1);
        $this->db->insert('jawaban', $query);
    }
}
