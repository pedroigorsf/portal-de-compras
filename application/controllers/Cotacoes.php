<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cotacoes extends CI_Controller {

	public function index()
	{
        $this->load->model("Cotacoes_model");
        $data["cotacoes"] = $this->Cotacoes_model->listar_cotacao();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/dashboard-cotacoes', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

    public function novo()
	{
		$this->load->model("Cotacoes_model");
		$data["solicitantes"] = $this->Cotacoes_model->solicitantes();
		$data["aprovadores"] = $this->Cotacoes_model->aprovadores();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/form-cotacao', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

	public function cadastro(){
		$novo = $_POST;
		$this->load->model("Cotacoes_model");
		$this->Cotacoes_model->cadastro($novo);
		redirect("cotacoes");
	}
}
