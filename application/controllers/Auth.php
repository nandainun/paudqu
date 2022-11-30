<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function proses()
	{
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');

		$cek	= $this->m_login->cek_users($username, $password);

		if ($cek->num_rows() == 1) {
			foreach ($cek->result() as $data) {
				$users	= array(
					'level'	=> $data->level
				);

				if ($data->level == 'admin') {
					$this->session->set_userdata('akses', 'admin');
					redirect('dashboard');
				} elseif ($data->level == 'member') {
					$this->session->set_userdata('akses', 'member');
					redirect('dashboard_user');
				} else {
					echo "tidak masuk kategori";
				}
			}
		} else {
			$_SESSION['login_error'] = "Email atau Password anda Salah!";
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}

	public function registrasi()
	{
		$this->load->view('auth/registrasi');
	}
}
