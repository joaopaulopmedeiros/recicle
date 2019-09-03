<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_cidadao extends CI_Controller {
	//controller fundamental para carregar views de user_cidadao
	public function index()
	{
		$data['title'] = 'Recicle - Página Inicial';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/index');
		$this->load->view('footer');
	}
	public function about()
	{
		$data['title'] = 'Sobre o Recicle';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}	
	public function contact()
	{
		$data['title'] = 'Contato';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function desafios()
	{
		$data['title'] = 'Meus Desafios';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/desafios');
		$this->load->view('footer');
	}
	public function ecopontos()
	{
		$data['title'] = 'Ecopontos';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('ecopontos');
		$this->load->view('footer');
	}
	public function myaccount()
	{
		$data['title'] = 'Minha Conta';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('my-account');
		$this->load->view('footer');
	}
}
