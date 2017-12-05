<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_dashboard extends CI_Model {

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
    public function getHasil(){
        $this->db->select('periode, (sum(hasil_akhir)/count(area)) hasil');
        $this->db->from('view_hasil_proses');
        $data = $this->db->get();
        return $data->result();
    }

}
