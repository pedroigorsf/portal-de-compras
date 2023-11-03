<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
	{
        $this->load->model("Produtos_model");
        $data["produtos"] = $this->Produtos_model->listar_produtos();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/dashboard-produtos', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

    public function novo()
	{	
		$this->load->model("Produtos_model");
		$data["produtos"] = $this->Produtos_model->listar_produtos();
		
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/form-produtos', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

	public function cadastro()
	{
		$novo = $_POST;
		$this->load->model("Produtos_model");
		$this->Produtos_model->cadastro($novo);
		redirect("produtos");
	}

	public function edit($id){
		$this->load->model("Produtos_model");
		$data["produto"] = $this->Produtos_model->show($id);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/form-produtos', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

	public function update($id){
		$this->load->model("Produtos_model");
		$produto = $_POST;
		$this->Produtos_model->update($id, $produto);
		redirect("produtos");
	}

	public function delete($id){
		$this->load->model("Produtos_model");
		$this->Produtos_model->destroy($id);
		redirect("produtos");
	}
	
}
