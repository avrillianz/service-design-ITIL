<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_periode extends CI_Model {


	public function __construct()
    {
        parent::__construct();
    }

	 public function getPeriode()
    {
        $this->db->select('*');
        $this->db->from('periode');
        $data = $this->db->get();
        return $data->result();
    }

    public function get_id_periode(){
        $this->db->select('(max(id_periode)+1) as id_periode');
        $this->db->from('periode');
        $data = $this->db->get();
        return $data->result_array();

    }

    public function input_periode($input){
        return $query = $this->db->query("INSERT INTO periode (id_periode, periode_awal, periode_akhir) VALUES ('$input[id_periode]', '$input[periode_awal]',
            '$input[periode_akhir]') ");
    }

    public function get_edit_periode($id_periode){
        $this->db->select('*');
        $this->db->from('periode');
        $this->db->where('id_periode', $id_periode);
        $data = $this->db->get();
        return $data->result_array();
    }

    public function edit_periode($input){
        return $query = $this->db->query("UPDATE periode SET periode_awal='$input[periode_awal]', periode_akhir='$input[periode_akhir]' 
            WHERE id_periode='$input[id_periode]'");
    }
    public function delete_periode($id_periode){
        $this->db->delete('periode', array('id_periode' => $id_periode));
    }

    public function cek($input) {
        return $query = $this->db->query("SELECT * FROM periode WHERE periode_akhir >= '$input[periode_awal]'  ORDER BY id_periode desc limit 1")->result_array();
    }

    public function sekarang() {
        return $query = $this->db->query("SELECT GETDATE() AS now");
    }

    public function awal() {
        return $query = $this->db->query("SELECT periode_awal from periode");
    }
        
    public function akhir() {
        return $query = $this->db->query("SELECT periode_akhir from periode");
    }

}
