<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cotacoes extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library("session");
	}

	public function index()
	{

		$this->load->model("Cotacoes_model");
		$data["cotacoes"] = $this->Cotacoes_model->listar_cotacao();
		$data["solicitantes"] = $this->Cotacoes_model->solicitantes();

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

	public function cadastro()
	{
		$novo = $_POST;
		$novo['fk_usuario'] = '5';
		$this->load->model("Cotacoes_model");
		$this->Cotacoes_model->cadastro($novo);
		redirect("cotacoes");
	}

	public function edit($id)
	{
		$this->load->model("Cotacoes_model");
		$data["cotacao"] = $this->Cotacoes_model->show($id);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/form-cotacao', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$this->load->model("Cotacoes_model");
		$cotacao = $_POST;
		$this->Cotacoes_model->update($id, $cotacao);
		redirect("cotacoes");
	}

	public function delete($id)
	{
		$this->load->model("Cotacoes_model");
		$this->Cotacoes_model->destroy($id);
		redirect("cotacoes");
	}

	public function painel($id)
	{
		$this->load->model("Cotacoes_model");
		$data["cotacoes"] = $this->Cotacoes_model->painel($id);
		$this->load->model("Fornecedores_model");
		$data["fornecedores_cotacao"] = $this->Fornecedores_model->listar_fornecedor_cotacao($id);
		$this->load->model("Produtos_model");
		$data["produtos_cotacao"] = $this->Produtos_model->listar_produtos_cotacao($id);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/painel-cotacao', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

	public function adicionar_produtos($id)
	{
		$this->load->model("Produtos_model");
		$data["produtos"] = $this->Produtos_model->listar_produtos();
		$this->load->model("Cotacoes_model");
		$data["cotacoes"] = $this->Cotacoes_model->painel($id);
		$this->load->model("Produtos_model");
		$data["produtos_cotacao"] = $this->Produtos_model->listar_produtos_cotacao($id);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/adicionar-produtos', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}


	public function adicionar_fornecedores($id)
	{
		$this->load->model("Fornecedores_model");
		$data["fornecedores"] = $this->Fornecedores_model->listar_fornecedor();
		$this->load->model("Cotacoes_model");
		$data["cotacoes"] = $this->Cotacoes_model->painel($id);
		$this->load->model("Fornecedores_model");
		$data["fornecedores_cotacao"] = $this->Fornecedores_model->listar_fornecedor_cotacao($id);


		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/adicionar-fornecedores', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

	public function cotacao_fornecedor($id)
	{
		$this->load->model("Cotacoes_model");
		$cotacao = $_POST;
		$this->Cotacoes_model->update($id, $cotacao);
		redirect("painel");
	}

	public function cadastro_cotacao_fornecedor($id)
	{
		$this->load->model("Cotacoes_model");
		$data['fk_fornecedor'] = $_POST["fk-fornecedores"];
		$data['id'] = $id;

		$result = $this->Cotacoes_model->verificar_fornecedor_cotacao($data);

		if (count($result) <= 0) {
			$this->Cotacoes_model->cadastro_cotacao_fornecedor($data);
			redirect("cotacoes/adicionar_fornecedores/$id");
		} else {
			// $this->Cotacoes_model->atulizar_cotacao_fornecedor($data);
			redirect("cotacoes/adicionar_fornecedores/$id");
			// model sem nada, apenas atualiza a página
		}


		redirect("cotacoes/adicionar_fornecedores/$id");
	}


	public function cadastro_cotacao_produto($id)
	{
		$this->load->model("Cotacoes_model");
		$data['fk_produtos'] = $_POST["fk-produtos"];
		$data['quantidade'] = $_POST["quantidade"];
		$data['id'] = $id;
		

		$result = $this->Cotacoes_model->verificar_produtos_cotacao($data);
		// print_r(count($result));
		// exit;
		if (count($result) <= 0) {
			$this->Cotacoes_model->cadastro_cotacao_produto($data);
			redirect("cotacoes/adicionar_produtos/$id");
		} else {
			$this->Cotacoes_model->atulizar_cotacao_produto($data);
			redirect("cotacoes/adicionar_produtos/$id");
		}
		
	}

	public function deletar_fornecedor_cotacao($id_cotacao, $id_fornecedor)
	{
		$this->load->model("Cotacoes_model");
		$this->Cotacoes_model->destroy_fornecedor_cotacao($id_cotacao, $id_fornecedor);
		redirect("cotacoes/adicionar_fornecedores/$id_cotacao");
	}

	public function deletar_produto_cotacao($id_cotacao, $id_produto)
	{
		$this->load->model("Cotacoes_model");
		$this->Cotacoes_model->destroy_produto_cotacao($id_cotacao, $id_produto);
		redirect("cotacoes/adicionar_produtos/$id_cotacao");
	}



}



