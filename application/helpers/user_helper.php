<?php

function check_login() {
    $CI = & get_instance();
    $method = $CI->router->fetch_method();
    if($method=="index"){
        $method = $CI->router->fetch_class();
    }
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
            } else {
                return $CI->session->userdata['logged_in'];
            }
        }
    }
}

function is_allowed($pages) {
    $pages = explode(",",$pages);
    $CI = & get_instance();
    $page_access = $CI->config->item('page_access');
    $one_allowed = false;
    foreach ($pages as $page) {
        if (isset($page_access[$page])) {
            if (in_array($CI->session->userdata['logged_in']['user_type_id'], $page_access[$page]) || in_array($CI->session->userdata['logged_in']['user_type_id'], $page_access['global'])) {
                $one_allowed = true;
            }
        }
    }
    return $one_allowed;
}
