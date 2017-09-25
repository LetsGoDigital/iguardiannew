<?php

function check_login() {
    $CI = & get_instance();
    if (!isset($CI->session->userdata['logged_in'])) {
        redirect("user/login");
    }
}
