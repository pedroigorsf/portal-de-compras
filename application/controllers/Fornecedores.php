<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fornecedores extends CI_Controller {

	public function __construct(){
		parent::__construct();
		permission();
		$this->load->model("Fornecedores_model");
	}

	public function index()
	{
        $data["fornecedores"] = $this->Fornecedores_model->listar_fornecedor();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/dashboard-fornecedores', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

    public function novo()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/form-fornecedores');
		$this->load->view('templates/js');
		$this->load->view('templates/cnpj');
		$this->load->view('templates/cep');
		$this->load->view('templates/footer');
	}

	public function cadastro()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$stats = 1;
			$fornecedor = $this->input->post('nome');
			$cnpj = $this->input->post('cnpj');
			$cep = $this->input->post('cep');
			$endereco = $this->input->post('endereco');
			$numero = $this->input->post('numero');
			$bairro = $this->input->post('bairro');
			$cidade = $this->input->post('cidade');
			$estado = $this->input->post('estado');
			$email = $this->input->post('email');
			$senha = md5($this->input->post('senha'));
			$data = array(
				'stats' => $stats,
				'nome' => $fornecedor,
				'cnpj' => $cnpj,
				'cep' => $cep,
				'endereco' => $endereco,
				'numero' => $numero,
				'bairro' => $bairro,
				'cidade' => $cidade,
				'estado' => $estado,
				'email' => $email,
				'senha' => $senha
			);

			$result = $this->Fornecedores_model->verificar_fornecedor($data);

			if (count($result) <= 0) 
			{
				$this->Fornecedores_model->cadastro($data);
				$this->session->set_flashdata('success', 'Registrado com sucesso!');
			} 
			else 
			{
				$this->session->set_flashdata('duplicated', 'Dado duplicado!');
			}
		redirect("fornecedores/");
		} 
		else 
		{
			$this->session->set_flashdata('error', 'Ocorreu algum erro inesperado');
			redirect("fornecedores/");
		}

		
			
	}

	public function edit($id){
		$data["fornecedor"] = $this->Fornecedores_model->show($id);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/form-fornecedores', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/cnpj');
		$this->load->view('templates/cep');
		$this->load->view('templates/footer');
	}

	public function update($id){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$stats = $this->input->post('stats');
			$fornecedor = $this->input->post('nome');
			$cnpj = $this->input->post('cnpj');
			$cep = $this->input->post('cep');

			$data = array(
				'stats' => $stats,
				'nome' => $fornecedor,
				'cnpj' => $cnpj,
				'cep' => $cep
			);

			$result = $this->Fornecedores_model->verificar_fornecedor($data);

			if (count($result) < 1) 
			{
				$this->Fornecedores_model->update($id, $data);
				$this->session->set_flashdata('updated', 'Registrado com sucesso!');
			} 
			else 
			{
				$this->session->set_flashdata('duplicated', 'Dado duplicado!');
			}
		redirect("fornecedores/");
		} 
		else 
		{
			$this->session->set_flashdata('error', 'Ocorreu algum erro inesperado');
			redirect("fornecedores/");
		}
	}

	public function delete($id){
		$this->Fornecedores_model->destroy($id);
		redirect("fornecedores");

	}
}
