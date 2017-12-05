<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_hasil extends CI_Model {


    public function __construct()
    {
        parent::__construct();
    }

    public function getHasil()
    {
        $this->db->select('*');
        $this->db->from('view_hasil');
        $this->db->order_by('id_user');
        $this->db->order_by('id_co');
        $data = $this->db->get();
        return $data->result();
    }

    public function getPeriode(){
        $this->db->select('*');
        $this->db->from('periode');
        $data = $this->db->get();
        return $data->result();   
    }

    public function get_maturity($id_maturity){
        $this->db->select('*');
        $this->db->from('maturity');
        $this->db->where('id_maturity', $id_maturity);
        $data = $this->db->get();
        return $data->result();   
    }

    public function get_hasil_final($id_periode){
        $this->db->select('view_hasil.id_periode, control.area, (sum(hasil)/count(control.id_co)) as final, (max(maturity.id_maturity)-(sum(hasil)/count(control.id_co))) as gap');
        $this->db->from('view_hasil');
        $this->db->join('control', 'control.id_co = view_hasil.id_co');
        $this->db->join('kuesioner', 'kuesioner.id_co = control.id_co');
        $this->db->join('jawaban', 'jawaban.id_kuesioner = kuesioner.id_kuesioner');
        $this->db->join('maturity', 'maturity.id_maturity = jawaban.id_maturity');      
        $this->db->group_by('control.area');
        $this->db->where('view_hasil.id_periode', $id_periode);
        $data = $this->db->get();
        return $data->result();
    }

    public function get_rata_final($id_periode){
        $this->db->select('periode, (sum(hasil_akhir)/count(area)) as hasil_evaluasi, (sum(hasil_akhir)/count(area)) - (nilai_harapan.id_maturity) as gap');
        $this->db->from('view_hasil_proses');
        $this->db->join('jawaban', 'jawaban.id_periode = view_hasil_proses.periode');
        $this->db->join('periode', 'periode.id_periode = jawaban.id_periode');      
        $this->db->join('maturity', 'maturity.id_maturity = jawaban.id_maturity');
        $this->db->join('nilai_harapan', 'nilai_harapan.id_maturity = maturity.id_maturity');      
        $this->db->where('view_hasil_proses.periode', $id_periode);
        $this->db->where('nilai_harapan.id_periode', $id_periode);
        $data = $this->db->get();
        return $data->result();
    }

    public function get_hasil_co($id_periode){
        $this->db->select('*');
        $this->db->from('view_hasil_co');
        $this->db->where('id_periode', $id_periode);
        $data = $this->db->get();
        return $data->result();
    }

    public function get_detail_co($id_co){
        $this->db->select('*');
        $this->db->from('view_detail_co');
        $this->db->where('id_co', $id_co);
        $data = $this->db->get();
        return $data->result();
    }

    public function get_nilai_harapan($id_periode){
        $this->db->select('*');
        $this->db->from('nilai_harapan');
        $this->db->where('id_periode', $id_periode);
        $data = $this->db->get();
        return $data->result();
    }
}
