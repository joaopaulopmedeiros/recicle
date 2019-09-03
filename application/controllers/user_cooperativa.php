<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_cooperativa extends CI_Controller {
	//controller fundamental para carregar views de user_cooperativa
	public function index()
	{
		$data['title'] = 'Recicle - Página Inicial';
		$this->load->view('user_cooperativa/header', $data);
		$this->load->view('user_cooperativa/index');
		$this->load->view('footer');
	}
	public function about()
	{
		$data['title'] = 'Sobre o Recicle';
		$this->load->view('user_cooperativa/header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}	
	public function contact()
	{
		$data['title'] = 'Contato';
		$this->load->view('user_cooperativa/header', $data);
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function desafios()
	{
		$data['title'] = 'Meus Desafios';
		$this->load->view('user_cooperativa/header', $data);
		$this->load->view('user_cooperativa/desafios');
		$this->load->view('footer');
	}
	public function ecopontos()
	{
		$data['title'] = 'Ecopontos';
		$this->load->view('user_cooperativa/header', $data);
		$this->load->view('ecopontos');
		$this->load->view('footer');
	}
}
