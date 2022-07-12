<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_main extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('models');
	}
	
	public function login()
	{
        $param = array(
			"username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "app" => "SKTN"
		);
		
		$data = $this->models->post_methode($param,$this->config->item('detail_login'));
		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($data));
	}
}
