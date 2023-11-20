<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("Produtos_model");
	}

	public function index()
	{
		$data["produtos"] = $this->Produtos_model->listar_produtos();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/dashboard-produtos', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');

	}

	public function novo()
	{
		$data["produtos"] = $this->Produtos_model->listar_produtos();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/form-produtos', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

	public function cadastro()
	{

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$stats = 1;
			$produto = $this->input->post('nome');
			$udm = $this->input->post('udm');
			$data = array(
				'stats' => $stats,
				'nome' => $produto,
				'udm' => $udm
			);

			$result = $this->Produtos_model->verificar_produto($data);

			if (count($result) <= 0) {
				$this->Produtos_model->cadastro($data);
				$this->session->set_flashdata('success', 'Registro atualizado!');
			} else {
				$this->session->set_flashdata('duplicated', 'Dado duplicado!');
			}

			redirect("produtos/");

		} else {

			$this->session->set_flashdata('error', 'Ocorreu algum erro inesperado');
			redirect("produtos/");
		}
	}

	public function edit($id)
	{
		$data["produto"] = $this->Produtos_model->show($id);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/form-produtos', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$stats = $this->input->post('stats');
			$produto = $this->input->post('nome');
			$udm = $this->input->post('udm');
			$data = array(
				'stats' => $stats,
				'nome' => $produto,
				'udm' => $udm
			);

			$result = $this->Produtos_model->verificar_produto($data);

			if (count($result) < 1) {
				$this->Produtos_model->update($id, $data);
				$this->session->set_flashdata('updated', 'Registrado com sucesso!');
			} else {
				$this->session->set_flashdata('duplicated', 'Dado duplicado!');
			}

			redirect("produtos/");

		} else {

			$this->session->set_flashdata('error', 'Ocorreu algum erro inesperado');
			redirect("produtos/");
		}
	}

	public function delete($id)
	{
		$this->Produtos_model->destroy($id);
		redirect("produtos");
	}

}
