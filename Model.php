<?php
class Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function register_user() {
        $password = $this->input->post('password');
        $con_password = $this->input->post('con_password');

        if ($password !== $con_password) {
            $this->session->set_flashdata('wrong', 'The password does not match the confirmation!');
            redirect('My_Controller/register');
            return;
        }

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $password
        );

        if ($this->db->insert('users', $data)) {
            $this->session->set_flashdata('success', 'You are registered. Please login.');
            redirect('My_Controller/login');
        } else {
            $this->session->set_flashdata('wrong', 'There was an issue with the registration. Please try again.');
            redirect('My_Controller/register');
        }
    }

 
    public function login_user(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query=$this->db->get('users');
        $find_user=$query->num_rows($query);

        if($find_user>0){
            $this->session->set_flashdata('success','Login Successful');
            redirect('My_Controller/index');
        }else{
            $this->session->set_flashdata('warning','Incorrect Email or Password!!!');
            redirect('My_Controller/login');
        }
    }

    public function get_items() {
        $query = $this->db->get('cus_table');
        return $query->result_array();
    }

    public function get_accounts() {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function book_now($data) {
        $data['status'] = 'Waiting For Approval';
        $this->session->set_flashdata('success', 'Thank You, Wait for Approval!');
        $this->db->insert('cus_table', $data);
    }  

   public function decline_book($Id) {
    $data = array(
        'status' => 'declined'
    );
    $this->db->where('Id', $Id);
    $this->session->set_flashdata('success', 'Booking Declined Succesfully.');
    $this->db->update('cus_table', $data);
}

    public function approve_book($Id) {
        $data = array(
            'status' => 'approved'
        );
        $this->db->where('Id', $Id);
        $this->session->set_flashdata('success', 'Booking Approved Successfully.');
        $this->db->update('cus_table', $data);
    }
    
    public function cancel_book($Id) {
        $this->db->where('Id', $Id);
        $this->db->delete('cus_table');
    }

    public function delete_acc($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

}
?>
