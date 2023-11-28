<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Login_model");
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/alertas.php');
		$this->load->view('pages/login.php');
		$this->load->view('templates/js');
	}

	public function auth()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$tipo = $this->input->post('tipo');
			$usuario = $this->input->post('usuario');
			$senha = $this->input->post('senha');

			$data = array(
				'usuario' => $usuario,
				'senha' => $senha
			);

			if ($tipo == 1) { // ACESSO FUNCIONÁRIO
				$acesso = $this->Login_model->auth_user($data);

				if ($acesso) {
					if ($acesso['stats']) {
						$this->session->set_userdata("logged_user", $acesso);
						$this->session->set_flashdata('success_user', 'Sucesso!');
						redirect("welcome");
					} else {
						$this->session->set_flashdata('inactive_user', 'Inativo!');
						redirect("login");
					}
				} else {
					$this->session->set_flashdata('error', 'Erro!');
					redirect("login/");
				}

			} else if ($tipo == 2) { // ACESSO FORNECEDOR
				$acesso = $this->Login_model->auth_supplier($data);
				if ($acesso) {
					if ($acesso['stats']) {
						$this->session->set_userdata("logged_user", $acesso);
						$this->session->set_flashdata('success_supplier', 'Sucesso!');
						redirect("welcome");
					} else {
						$this->session->set_flashdata('inactive_supplier', 'Inativo!');
						redirect("login");
					}
				} else {
					$this->session->set_flashdata('inactive', 'Sucesso!');
					redirect("welcome");
				}
			} else {
				$this->session->set_flashdata('error', 'Erro!');
				redirect("login/");
			}

		} else {
			$this->session->set_flashdata('without-access', 'Sem acesso');
			redirect("login/");
		}


	}

	public function logout()
	{
		$this->session->unset_userdata("logged_user");
		redirect("login");
	}
}