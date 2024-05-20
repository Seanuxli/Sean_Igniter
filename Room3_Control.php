<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room3_Control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Room3_Model');
    }

    public function index()
    {
    
        if ($this->input->post()) {
            $data = array(
                'Roomname' => $this->input->post('Room3'),
                'Description' => $this->input->post('description')
            );

            $insert_id = $this->Room3_Model->insert_res_room3_data($data);

            redirect('Room3_Control/index');
        }

        $res_room3_data = $this->Room3_Model->get_all_res_room3_data();
        $this->load->view('View/Room3', array('res_room3_data' => $res_room3_data));
    }
}