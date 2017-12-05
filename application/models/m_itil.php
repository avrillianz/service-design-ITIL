n<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_itil extends CI_Model {


    public function __construct()
    {
        parent::__construct();
    }

    public function getItil()
    {
        $this->db->select('*');
        $this->db->from('service');
        $data = $this->db->get();
        return $data->result();
    }

    public function getItilDetail()
    {
        $this->db->select('*');
        $this->db->from('service');
        $this->db->join('control', 'control.id_service = service.id_service');
        $data = $this->db->get();
        return $data->result();
    }
}
