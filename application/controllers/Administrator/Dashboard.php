<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {	

	public function __construct(){
		parent::__construct();
		cek_login();
	}

	public function index(){
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/dashboard');
		$this->load->view('templates_administrator/footer');
	}

}