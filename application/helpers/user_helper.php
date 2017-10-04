<?php

function check_login() {
    $CI = & get_instance();
    $method = $CI->router->fetch_method();
    $page_access = $CI->config->item('page_access');
    if (!isset($CI->session->userdata['logged_in'])) {
        redirect("user/login");
    } else {
        if (!isset($page_access[$method])) {
            echo "Access settings not defined in Config for: " . $method;
            die;
        } else {
            if (!in_array($CI->session->userdata['logged_in']['user_type_id'], $page_access[$method]) && !in_array($CI->session->userdata['logged_in']['user_type_id'], $page_access['global'])) {
                echo "You don't have access to view the page: " . $method;
                die;
            }
            else{
                return $CI->session->userdata['logged_in'];
            }
        }
    }
}
