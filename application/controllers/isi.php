<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class isi extends CI_Controller {

   public function __construct()
   {

    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('session');
    $this->load->model('m_isi');

}

public function isi_kuesioner($id_co)
{   
    $data = $this->m_isi->getIsi($id_co);
    $maturity = $this->m_isi->maturity();
    $this->load->view('header');
    $this->load->view('view_isi_kuesioner', array('mydata' => $data, 'maturity' => $maturity));
}

public function index()
{   
    $id = $_SESSION['id_user'];
    $data['data'] = $this->m_isi->getPilih($id);
    $this->load->view('header');
    $this->load->view('view_pilih_kuesioner', $data);
}

public function kuisioner(){
    // print_r($_POST);
    $data = array_values($_POST);
    $key = array_keys($_POST);
    $store=array();
    for ($i=0; $i < count($data) ; $i++) { 
        $store[] = array('id_kuesioner'=>$key[$i],'id_maturity'=>$data[$i],'id_user'=>$_SESSION['id_user']);
    }
        // print_r($store);
    $id = $_SESSION['id_user'];
    $oke = $this->m_isi->storeData($store, $id);

    $this->index();
}

}
