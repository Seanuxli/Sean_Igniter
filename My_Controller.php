<?php
class My_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Model');
    }

    public function registration_form() {
        $this->Model->register_user();
    }

    public function login_form() {
        $this->Model->login_user();
    }

    public function login() {
        $this->load->view('View/login');
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect(base_url('My_Controller/login'));
    }

    public function index() {
        $this->load->view('View/index');
    }

    public function index2() {
        $data['items'] = $this->Model->get_items();
        $this->load->view('View/index2', $data);
    }

    public function register() {
        $this->load->view('View/register');
    }

    public function register_user() {
        $this->Model->register_user();
        redirect(base_url('My_Controller/login'));
    }

    public function main() {
        $this->load->view('View/index');
    }

    public function book_now() {
        $data = array(
            'Fullname' => $this->input->post('Fullname'),
            'Address' => $this->input->post('Address'),
            'Contact' => $this->input->post('Contact'),
            'Email' => $this->input->post('Email'),
            'MaxPerson' => $this->input->post('MaxPerson'),
            'Age' => $this->input->post('Age'),
            'Datein' => $this->input->post('Datein'),
            'Dateout' => $this->input->post('Dateout'),
        );
        $this->Model->book_now($data);
        $Id = $this->input->post('Id');
        redirect(base_url('My_Controller/index2'));
    }

    public function cancel_book() {
        $Id = $this->input->post('Id');
        $this->Model->cancel_book($Id); 
        redirect(base_url('My_Controller/adminpanel'));
    }

    public function delete_acc() {
        $id = $this->input->post('id');
        $this->Model->delete_acc($id);
        redirect(base_url('My_Controller/adminpanel'));
    }

    public function decline_book() {
        $Id = $this->input->post('Id');
        $this->Model->decline_book($Id);
        redirect(base_url('My_Controller/adminpanel'));
    }

    public function approve_book() {
        $Id = $this->input->post('Id');
        $this->Model->approve_book($Id);
        redirect(base_url('My_Controller/adminpanel'));
    }

    public function adminpanel() {
        $data['users'] = $this->Model->get_accounts();
        $data['items'] = $this->Model->get_items();
        $this->load->view('View/adminpanel', $data);
    }
}
?>
