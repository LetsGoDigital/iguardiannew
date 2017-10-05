<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        redirect("dashboard");
    }

    public function login() {
        $data = array();
        $data['title'] = "Login";
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        if ($this->session->flashdata('error')) {
            echo $this->session->flashdata('error');
            die;
        }

        if (isset($this->session->userdata['logged_in'])) {
            redirect("dashboard");
        }
        if (!$this->input->post()) {
            $data['content'] = $this->load->view("login", $data, true);
            $this->load->view("layouts/main_unauthenticated", $data);
        } else {
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            
            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
                die;
                $this->session->set_flashdata('error', 'Email and Password required');
                redirect("user/login");
            } else {
                $where = array(
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password'))
                );
                $user = $this->User_model->get_single_user($where, "id,email,user_type_id,firstname,lastname");
                if ($user) {
                    $session_data = array(
                        'id' => $user->id,
                        'email' => $user->email,
                        'user_type_id' => $user->user_type_id,
                        'firstname' => $user->firstname,
                        'lastname' => $user->lastname
                    );

                    $this->session->set_userdata('logged_in', $session_data);
                    redirect("dashboard");
                } else {
                    $this->session->set_flashdata('error', 'Invalid email or password');
                    redirect("user/login");
                }
            }
        }
    }

    public function forgot() {
        $data = array();
        $data['content'] = $this->load->view("forgot_password", $data, true);
        $this->load->view("layouts/main_unauthenticated", $data);
    }

    public function signup() {
        $data = array();
        $data['content'] = $this->load->view("signup", $data, true);
        $this->load->view("layouts/main_unauthenticated", $data);
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect("user/login");
    }

}
