<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room1_Control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Room1_Model');
    }

    public function index()
    {
    
        if ($this->input->post()) {
            $data = array(
                'Roomname' => $this->input->post('Room1'),
                'Description' => $this->input->post('description')
            );

            $insert_id = $this->Room1_Model->insert_res_room1_data($data);

            redirect('Room1_Control/index');
        }

        $res_room1_data = $this->Room1_Model->get_all_res_room1_data();
        $this->load->view('View/Room1', array('res_room1_data' => $res_room1_data));
    }
}
