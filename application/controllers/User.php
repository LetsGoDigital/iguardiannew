<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        redirect("/dashboard");
    }

    public function dashboard() {
        $this->load->helper("user_helper");
        $current_user = check_login();
        $data = array(
            // Set title page
            'title' => 'Dashboard',
            // Set CSS plugins
            'list_css_plugin' => array(
                'dropzone/downloads/css/dropzone.css',
                'jquery.gritter/css/jquery.gritter.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js',
                'flot/jquery.flot.js',
                'flot/jquery.flot.spline.min.js',
                'flot/jquery.flot.categories.js',
                'flot/jquery.flot.tooltip.min.js',
                'flot/jquery.flot.resize.js',
                'flot/jquery.flot.pie.js',
                'dropzone/downloads/dropzone.min.js',
                'jquery.gritter/js/jquery.gritter.min.js',
                'skycons-html5/skycons.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.dashboard.js'
            ),
            // Active menu on sidebar left
            'active_dashboard'=>'active'
        );
        $data['content'] = $this->load->view("dashboard", $data, true);
        $this->load->view("layouts/main_dashboard", $data);
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
            redirect("/user/dashboard");
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
                $user = $this->User_model->get_single_user($where, "id,email,user_type_id");
                if ($user) {
                    $session_data = array(
                        'id' => $user->id,
                        'email' => $user->email,
                        'user_type_id' => $user->user_type_id
                    );

                    $this->session->set_userdata('logged_in', $session_data);
                    redirect("user/dashboard");
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
