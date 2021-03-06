<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_cidadao extends CI_Controller
{
	//controller fundamental para carregar views de user_cidadao

	public function verificarSessao()
	{
		if (!isset($this->session->cidadao))
		{
			redirect('user_public/acesso_restrito');
		}
	}

	public function index()
	{
		$this->verificarSessao();

		$data['title'] = 'Recicle - Página Inicial';
		$data['footer'] = 'Logon';

		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/index');
		$this->load->view('footer', $data);
	}

	public function about()
	{
		$this->verificarSessao();

		$data['title'] = 'Sobre o Recicle';
		$data['footer'] = 'Logon';

		$this->load->view('user_cidadao/header', $data);
		$this->load->view('about');
		$this->load->view('footer', $data);
	}

	public function contact()
	{
		$this->verificarSessao();

		$data['title'] = 'Contato';
		$data['footer'] = 'Logon';

		$this->load->view('user_cidadao/header', $data);
		$this->load->view('contact');
		$this->load->view('footer', $data);
	}

	public function desafios()
	{
		$this->verificarSessao();

		$data['title'] = 'Desafios Disponíveis';
		$data['footer'] = 'Logon';

		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/desafios');
		$this->load->view('footer', $data);
	}
	
	public function meusdesafios()
	{
		$this->verificarSessao();

		$data['title'] = 'Meus Desafios';
		$data['footer'] = 'Logon';

		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/desafiosaceitos');
		$this->load->view('footer', $data);

	}

	public function desafio($id)
	{
		$data['title'] = 'Desafio';
		$data['footer'] = 'Logon';
		
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/ver_desafio');
		$this->load->view('footer', $data);
	}

	public function ecopontos()
	{
		$this->verificarSessao();

		$data['title'] = 'Ecopontos';
		$data['footer'] = 'Logon';

		$this->load->view('user_cidadao/header', $data);
		$this->load->view('ecopontos');
		$this->load->view('footer', $data);
	}
	
	public function minhaConta()
	{
		$this->verificarSessao();

		$data['title'] = 'Minha Conta';
		$data['footer'] = 'Logon';
		
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/minhaconta');
		$this->load->view('footer', $data);
	}  
}
