<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('User_model','u');

	}

	function index(){
		$this->load->view('login_form',[
			'title_bar' => 'Login Form',
			'peringatan' => ''
			]);
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->u->cek_login("tb_user",$where)->num_rows();
		$sql = $this->u->cek_login("tb_user",$where)->result_array();
		if($cek > 0){
			foreach ($sql as $yes) {
				$nama_lengkap = $yes['nama_lengkap'];
				$id_user = $yes['id_user'];
			}
			$data_session = array(
				'nama_lengkap' => $nama_lengkap,
				'id_user' => $id_user,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('HalamanUtama');

		}else{

		$this->load->view('login_form',[
			'title_bar' => 'Login Form',
			'peringatan' => 'Username atau Password Salah'
			]);
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}