<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_cidadao extends CI_Controller {
	//controller fundamental para carregar views de user_cidadao

	public function index()
	{
		$data['title'] = 'Recicle - Página Inicial';
		$data['footer'] = 'Logon';

		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/index');
		$this->load->view('footer', $data);
	}

	public function about()
	{
		$data['title'] = 'Sobre o Recicle';
		$data['footer'] = 'Logon';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('about');
		$this->load->view('footer', $data);
	}

	public function contact()
	{
		$data['title'] = 'Contato';
		$data['footer'] = 'Logon';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('contact');
		$this->load->view('footer', $data);
	}

	public function desafios()
	{
		$data['title'] = 'Meus Desafios';
		$data['footer'] = 'Logon';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/desafios');
		$this->load->view('footer', $data);
	}

	public function ecopontos()
	{
		$data['title'] = 'Ecopontos';
		$data['footer'] = 'Logon';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('ecopontos');
		$this->load->view('footer', $data);
	}
	
	public function minhaConta()
	{
		$data['title'] = 'Minha Conta';
		$data['footer'] = 'Logon';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/minhaconta');
		$this->load->view('footer', $data);
  }  

}
