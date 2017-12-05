n<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_nilai extends CI_Model {


    public function __construct()
    {
        parent::__construct();
    }

    public function get_nilai()
    {
        $this->db->select('*');
        $this->db->from('nilai_harapan');
        $data = $this->db->get();
        return $data->result();
    }

    public function get_maturity()
    {
        $this->db->select('*');
        $this->db->from('maturity');
        $this->db->where('id_maturity = 1 or id_maturity = 2 or id_maturity = 3 or id_maturity = 4 or id_maturity = 5');
        $data = $this->db->get();
        return $data->result();
    }
    public function get_periode()
    {
        $this->db->select('max(id_periode) as id_periode, periode_awal, periode_akhir');
        $this->db->from('periode');
        $data = $this->db->get();
        return $data->result();
    }

  
    public function add_nilai($nilai_harapan, $id_periode, $keterangan){
        $query = array(
            'id_nilai' => 'null',
            'nilai_harapan' => $nilai_harapan,
            'id_periode' => $id_periode,
            'keterangan' => $keterangan,
        );
        $this->db->insert('nilai_harapan', $query);
    }

     public function get_edit_nilai($id_nilai)
    {
        $this->db->select('*');
        $this->db->from('nilai_harapan');
        $this->db->where('id_nilai', $id_nilai);
        $data = $this->db->get();
        return $data->result_array();
    }

    public function edit_nilai($id_nilai, $keterangan){
        $this->db->set('keterangan', $keterangan);
        $this->db->where('id_nilai', $id_nilai);
        $this->db->update('nilai_harapan');
    }

}
