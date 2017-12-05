<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

     public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('m_dashboard');
    }
    public function index()
    {    
        $level = $_SESSION['level'];
        if ($level > 0) {
        $this->session->set_userdata('periode', $this->cek_periode());
            // Menentukan Dashboard View
            if ($level == 1){
                $this->load->view('header');
                $this->load->view('view_dashboard');
            } elseif ($level == 2){
                $this->load->view('header');
                $this->load->view('view_dashboard_2');
            } elseif ($level == 3){
                $data = $this->m_dashboard->getHasil();
                $this->load->view('header');
                $this->load->view('view_dashboard_3', array('mydata' => $data));
            } 
        }
    }

    public function cek_periode()
    {
        $result = $this->db->query("select count(*) as periode from periode
where date(now()) between periode_awal and periode_akhir order by id_periode desc limit 1")->result_array();
        if(!empty($result[0]['periode']))
        {
            return true;
        }
        return false;
    }
}
