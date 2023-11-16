<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cotacoes extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model("Cotacoes_model");
	}

	public function index()
	{

		
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
		$this->Cotacoes_model->cadastro($novo);
		redirect("cotacoes");

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$stats = 1;
			$fornecedor = $this->input->post('nome');
			$cnpj = $this->input->post('cnpj');
			$cep = $this->input->post('cep');
			$endereco = $this->input->post('endereco');
			$data = array(
				'stats' => $stats,
				'nome' => $fornecedor,
				'cnpj' => $cnpj,
				'cep' => $cep,
				'endereco' => $endereco,
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

	public function edit($id)
	{
		$data["cotacao"] = $this->Cotacoes_model->show($id);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/form-cotacao', $data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$cotacao = $_POST;
		$this->Cotacoes_model->update($id, $cotacao);
		redirect("cotacoes");
	}

	public function delete($id)
	{
		$this->Cotacoes_model->destroy($id);
		redirect("cotacoes");
	}

	public function painel($id)
	{
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
		$cotacao = $_POST;
		$this->Cotacoes_model->update($id, $cotacao);
		redirect("painel");
	}

	public function cadastro_cotacao_fornecedor($id)
	{
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
		$this->Cotacoes_model->destroy_fornecedor_cotacao($id_cotacao, $id_fornecedor);
		redirect("cotacoes/adicionar_fornecedores/$id_cotacao");
	}

	public function deletar_produto_cotacao($id_cotacao, $id_produto)
	{
		$this->Cotacoes_model->destroy_produto_cotacao($id_cotacao, $id_produto);
		redirect("cotacoes/adicionar_produtos/$id_cotacao");
	}



}



