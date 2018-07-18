<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    
    function index(){
        $data['company_number'] = '+639123456789';
		$data['company_email'] = 'company@email.com';
		$data['company_address'] = 'Sample Street, Sample Avenue, Sample City, PH';
        $data['title_page'] = 'Registration';
        
        $this->load->view('common/header');
        $this->load->view('common/nav',$data);
        $this->load->view('user/register');
        $this->load->view('common/footer',$data);
    }
    
    
}
