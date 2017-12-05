<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class itil extends CI_Controller {

     public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('m_itil');

    }

    public function index()
    {   
        $data = $this->m_itil->getItil();
        $this->load->view('header');
        $this->load->view('view_itil', array('mydata' => $data));
    }

    public function view_itil_detail()
    {   
        $data = $this->m_itil->getItilDetail();
        $this->load->view('header');
        $this->load->view('view_itil_detail', array('mydata' => $data));
    }
}
