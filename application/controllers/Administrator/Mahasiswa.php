<?php  

class Mahasiswa extends CI_Controller{
		public function __construct(){
		parent::__construct();
		cek_login();
	}

	public function index(){
		$data['mahasiswa'] = $this->mhs_model->tampil_data()->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/mahasiswa', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah(){

		$npm	  = $this->input->post('npm');
		$nama_mhs = $this->input->post('nama_mhs');
		$jurusan  = $this->input->post('jurusan');
		$kelas    = $this->input->post('kelas');

		$data = array (
			'npm'   => $npm,
			'nama_mhs'     => $nama_mhs,
			'jurusan' => $jurusan,
			'kelas'      => $kelas,
		);

		$this->mhs_model->tambah_data($data, 'mahasiswa');
		redirect('Administrator/Mahasiswa');
	}

	public function edit($id){
		$where = array('id' =>$id);
		$data ['mahasiswa'] = $this->mhs_model->edit_data($where, 'mahasiswa')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/edit', $data);
		$this->load->view('templates_administrator/footer');

	}

	public function update(){
		$id 		= $this->input->post('id');
		$npm	  = $this->input->post('npm');
		$nama_mhs = $this->input->post('nama_mhs');
		$jurusan  = $this->input->post('jurusan');
		$kelas    = $this->input->post('kelas');

		$data = array(
			'npm'   => $npm,
			'nama_mhs'     => $nama_mhs,
			'jurusan' => $jurusan,
			'kelas'      => $kelas,
		);

		$where = array(
			'id' => $id);

		$this->mhs_model->update_data($where,$data,'mahasiswa');
		redirect('Administrator/Mahasiswa');
	}

		public function hapus($id){
		$where = array('id' => $id);
		$this->mhs_model->hapus_data($where, 'mahasiswa');
		redirect('Administrator/Mahasiswa');
	}
}