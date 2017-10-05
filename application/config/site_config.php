<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['page_access'] = array(
    //Global Privileges on all Routes
    'global' => array(),
    //Dashboard
    'dashboard' => array(1,2,3,4),
    //Site Settings
    'company' => array(1),
    'adduser' => array(1),
    'users' => array(1),
    'user' => array(1),
    'userroles' => array(1),
    'stripe' => array(1),
    'discounts' => array(1),
    'editwebsite' => array(1),
    //Manage Organizations
    'addorg' => array(1),
    'orgs' => array(1),
    'org' => array(1),
    'helpdesk' => array(1),
    'referrals' => array(1)    
);