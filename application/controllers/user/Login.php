<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function index(){
        $data['account_name'] = 'Test2';
        $data['account_balance'] = '2500';
        $data['title_page'] = 'Login to start shopping!';
        
        $this->load->view('common/header');
        $this->load->view('common/nav',$data);
        $this->load->view('user/login');
        $this->load->view('common/footer');
    }
    
    
}