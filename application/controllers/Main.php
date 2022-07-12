<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
        $this->load->view('menu');
        $this->load->view('iframe');
        $this->load->view('footer');
	}

	public function dashboard(){
		$this->load->view('header');
        $this->load->view('menu');
        $this->load->view('content');
        $this->load->view('footer');
	}

	public function login() {
		$this->load->view('login/login');
	}

	public function form() {
		$this->load->view('header');
        $this->load->view('page/form');
        $this->load->view('footer');
	}
}
