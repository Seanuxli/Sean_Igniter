<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room2_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_res_room2_data($data)
    {
        $this->db->insert('res_room2', $data);
        return $this->db->insert_id(); 
    }

    public function get_all_res_room2_data()
    {
        $query = $this->db->get('res_room2');
        return $query->result_array();
    }

}
