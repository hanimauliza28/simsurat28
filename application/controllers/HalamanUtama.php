<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanUtama extends CI_Controller {

    function __construct() {
        parent::__construct();

        if($this->session->userdata('status') != "login"){
            redirect('Login');	
        }
    }

	public function index()
	{
		$this->load->view('template',[			
			'content' 	=> $this->load->view('halamanutama',[
				'title_bar'	=> 'SIM SURAT',
			],true) 
		]);
	}
}
