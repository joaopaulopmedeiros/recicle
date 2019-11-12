<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_criadordesafio extends CI_Controller {
	//controller fundamental para carregar views de user_riadordesafio

	public function verificarSessao()
	{
		if (!isset($this->session->criador))
		{
			redirect('user_public/acesso_restrito');
		}
	}

	public function index()
	{
		$this->verificarSessao();

		$data['title'] = 'Recicle - Página Inicial';
		$data['footer'] = 'Logon';
		
		$this->load->view('user_criadordesafio/header', $data);
		$this->load->view('user_criadordesafio/index');
		$this->load->view('footer', $data);
	}
	public function about()
	{
		$this->verificarSessao();

		$data['title'] = 'Sobre o Recicle';
		$data['footer'] = 'Logon';
		
		$this->load->view('user_criadordesafio/header', $data);
		$this->load->view('about');
		$this->load->view('footer', $data);
	}	
	public function contact()
	{
		$this->verificarSessao();

		$data['title'] = 'Contato';
		$data['footer'] = 'Logon';
		
		$this->load->view('user_criadordesafio/header', $data);
		$this->load->view('contact');
		$this->load->view('footer', $data);
	}
	public function desafios()
	{
		$this->verificarSessao();

		$data['title'] = 'Meus Desafios';
		$data['footer'] = 'Logon';
		
		$this->load->view('user_criadordesafio/header', $data);
		$this->load->view('user_criadordesafio/desafios');
		$this->load->view('footer', $data);
	}
	public function ecopontos()
	{
		$this->verificarSessao();

		$data['title'] = 'Ecopontos';
		$data['footer'] = 'Logon';
		
		$this->load->view('user_criadordesafio/header', $data);
		$this->load->view('ecopontos');
		$this->load->view('footer', $data);
	}
	public function minhaConta()
	{
		$this->verificarSessao();

		$data['title'] = 'Minha Conta';
		$data['footer'] = 'Logon';
		
		$this->load->view('user_criadordesafio/header', $data);
		$this->load->view('user_criadordesafio/minhaconta');
		$this->load->view('footer', $data);
	}
	public function adicionarDesafio()
	{
		$this->verificarSessao();

		$data['title'] = 'Novo Desafio';
		$data['footer'] = 'Logon';
		
		$this->load->view('user_criadordesafio/header', $data);
		$this->load->view('user_criadordesafio/adicionardesafio');
		$this->load->view('footer', $data);
	}
	public function desafio()
	{
		$data['title'] = 'Desafio';
		$data['footer'] = 'Logon';
		
		$this->load->view('user_criadordesafio/header', $data);
		$this->load->view('ver_desafio');
		$this->load->view('footer');
	}
}
