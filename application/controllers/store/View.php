<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
     function index(){
        $data['company_number'] = '+639123456789';
		$data['company_email'] = 'company@email.com';
		$data['company_address'] = 'Sample Street, Sample Avenue, Sample City, PH';
        $data['title_page'] = 'Store';
        
        $this->load->view('common/header');
        $this->load->view('common/nav',$data);
        $this->load->view('store/view');
        $this->load->view('common/footer');
     }

}