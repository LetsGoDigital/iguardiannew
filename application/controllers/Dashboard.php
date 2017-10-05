<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
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

}
