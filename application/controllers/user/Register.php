<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    
    function index(){
        $data['account_name'] = 'Test2';
        $data['account_balance'] = '2500';
        $data['title_page'] = 'Registration';
        
        $this->load->view('common/header');
        $this->load->view('common/nav',$data);
        $this->load->view('user/register');
        $this->load->view('common/footer');
    }
    
    
}
