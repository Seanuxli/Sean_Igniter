<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room2_Control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Room2_Model');
    }

    public function index()
    {
    
        if ($this->input->post()) {
            $data = array(
                'Roomname' => $this->input->post('Room1'),
                'Description' => $this->input->post('description')
            );

            $insert_id = $this->Room2_Model->insert_res_room2_data($data);

            redirect('Room2_Control/index');
        }

        $res_room2_data = $this->Room2_Model->get_all_res_room2_data();
        $this->load->view('View/Room2', array('res_room2_data' => $res_room2_data));
    }
}
