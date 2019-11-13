<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_public extends CI_Controller {
	//controller fundamental para carregar views de user_public
	public function index()
	{
		$data['title'] = 'Recicle';
		$this->load->view('user_public/header', $data);
		$this->load->view('user_public/index');
		$this->load->view('footer');
	}
	public function about()
	{
		$data['title'] = 'Sobre o Recicle';
		$this->load->view('user_public/header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}	
	public function contact()
	{
		$data['title'] = 'Contato';
		$this->load->view('user_public/header', $data);
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function desafios()
	{
		$data['title'] = 'Desafios';
		$this->load->view('user_public/header', $data);
		$this->load->view('user_public/desafios');
		$this->load->view('footer');
	}
	public function login()
	{
		$data['title'] = 'Login/Cadastro';
		$this->load->view('user_public/header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function ecopontos()
	{
		$data['title'] = 'Ecopontos';
		$this->load->view('user_public/header', $data);
		$this->load->view('ecopontos');
		$this->load->view('footer');
	}
	public function acesso_restrito()
	{
		$data['title'] = 'Acesso restrito';
		$this->load->view('user_public/header', $data);
		$this->load->view('acessorestrito');
		$this->load->view('footer');
	}
	public function desafio($id)
	{
		$data['title'] = 'Desafio';
		$this->load->view('user_public/header', $data);
		$this->load->view('ver_desafio');
		$this->load->view('footer');
	}
}
