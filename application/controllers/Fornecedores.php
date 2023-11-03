<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fornecedores extends CI_Controller {

	public function index()
	{
        $this->load->model("Fornecedores_model");
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
		$novo = $_POST;
		$this->load->model("Fornecedores_model");
		$this->Fornecedores_model->cadastro($novo);
		redirect("fornecedores");	
	}

	public function edit($id){
		$this->load->model("Fornecedores_model");
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
		$this->load->model("Fornecedores_model");
		$fornecedor = $_POST;
		$this->Fornecedores_model->update($id, $fornecedor);
		redirect("fornecedores");
	}

	public function delete($id){
		$this->load->model("Fornecedores_model");
		$this->Fornecedores_model->destroy($id);
		redirect("fornecedores");

	}
}
