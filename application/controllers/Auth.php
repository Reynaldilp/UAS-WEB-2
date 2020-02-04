<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('m_login');
	}

	public function index(){
			$this->form_validation->set_rules('npm','Npm','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');

		if ($this->form_validation->run() == false){
			$data['title'] = 'STT Bandung | Halaman Utama';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		}else {
			//validasi sukses
			$this->user_login();
		}
	}

	public function user_login(){
        $npm      = $this->input->post('npm');
        $password = $this->input->post('password');
        $where    = array(
            'npm' => $npm,
            'password' => sha1($password)
        );
        $cek = $this->m_login->cek_login("user", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'npm' => $npm,
                'status_user' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect('User');
        } else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
 	  			Username dan Password salah!!!
 				</div>');
            redirect ('Auth');
        }
    }
    
	public function admin(){
			$data['title'] = 'STT Bandung | Login Admin';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login_admin');
			$this->load->view('templates/auth_footer');
	}

	public function admin_login(){
        $npm      = $this->input->post('username');
        $password = $this->input->post('password');
        $where    = array(
            'username' => $npm,
            'password' => $password
        );
        $cek = $this->m_login->cek_login("admin", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'npm' => $npm,
                'status_admin' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect('Administrator/dashboard');
        } else {
            $this->session->set_flashdata('message','NPM atau Password Salah');
            redirect ('Auth');
        }
    }


	public function tampil_regist(){
		$data['title'] = 'STT Bandung | Halaman Daftar';
		$this->load->view('templates/reg_header', $data);
		$this->load->view('auth/register');
		$this->load->view('templates/reg_footer');	
	}

	public function register(){

		$npm = $this->input->post("npm");
		$nama = $this->input->post("nama");
        $pass = $this->input->post("password");

        $data = array(
            'npm' => $npm,
            'nama' => $nama,
            'password' => sha1($pass)
        );
        $where = array('npm' => $npm);

        $cek = $this->m_login->cek_login('mahasiswa', $where)->num_rows();
            
            if ($cek > 0) {
                $this->m_login->tambah('user', $data);
                $this->session->set_flashdata('message','Akun Berhasil Dibuat');
                redirect('Auth/tampil_regist');
            } else {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                NPM belum terdaftar Terdaftar!
			 	</div>');
                redirect('Auth/tampil_regist');
            }
	}
  
  	public function logout(){
  		$this->session->unset_userdata('npm');
  		$this->session->unset_userdata('role_id');

  		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
  			Anda telah logut
			</div>');
			redirect('auth');

  	}

}