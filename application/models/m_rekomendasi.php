<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_rekomendasi extends CI_Model {


	public function __construct()
    {
        parent::__construct();
    }

    public function get_hasil_co($id_periode)
    {
        $this->db->select('*');
        $this->db->from('view_hasil_co');
        $this->db->where('id_periode', $id_periode);
        $data = $this->db->get();
        return $data->result();  
    }


    public function get_rekomendasi($id_periode){
        $this->db->select('*');
        $this->db->from('hasil_rekomendasi');       
        $this->db->where('id_periode', $id_periode);
        $data = $this->db->get();
        return $data->result();  
    }

    public function get_detail_rekomendasi($id_periode){
        $this->db->select('*');
        $this->db->from('hasil_rekomendasi');   
        $this->db->where('id_periode', $id_periode);    
        $data = $this->db->get();
        return $data->result();  
    }

    public function get_detail_co($id_co)
    {
        $this->db->select('*');
        $this->db->from('view_detail_co');
        $this->db->where('id_co', $id_co);
        $data = $this->db->get();
        return $data->result();
    }

    public function add_rekomendasi($id_periode, $temuan, $rekomendasi){
        $query = array(
            'id_rekomendasi' => null,
            'id_periode' => $id_periode,
            'temuan' => $temuan,
            'rekomendasi' => $rekomendasi,
            );

        $this->db->insert('hasil_rekomendasi', $query);

    }

    public function get_edit_rekomendasi($id_rekomendasi){
        $this->db->select('*');
        $this->db->from('hasil_rekomendasi');
        $this->db->where('id_rekomendasi', $id_rekomendasi);
        $data = $this->db->get();
        return $data->result_array();
    }

    public function edit_rekomendasi($id_rekomendasi, $temuan, $rekomendasi){
        $this->db->set('id_rekomendasi', $id_rekomendasi);
        $this->db->set('temuan', $temuan);
        $this->db->set('rekomendasi', $rekomendasi);
        $this->db->where('id_rekomendasi', $id_rekomendasi);
        $this->db->update('hasil_rekomendasi');
    }

    public function get_id_rekomendasi(){
        $this->db->select('(max(id_rekomendasi)+1) as id_rekomendasi');
        $this->db->from('hasil_rekomendasi');
        $data = $this->db->get();
        return $data->result_array();
    }

    public function get_periode(){
        $this->db->select('*');
        $this->db->from('periode');
        $data = $this->db->get();
        return $data->result();
    }

    public function get_nilai($id_periode){
        $this->db->select('*');
        $this->db->from('nilai_harapan');
        $this->db->where('id_periode', $id_periode);
        $data = $this->db->get();
        return $data->result();
    }

}
