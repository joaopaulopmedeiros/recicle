<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_cidadao extends CI_Controller {
	//controller fundamental para carregar views de user_cidadao
	public function index()
	{
		$this->load->view('user_cidadao/header');
		$this->load->view('user_cidadao/index');
		$this->load->view('footer');
	}
	public function about()
	{
		$this->load->view('user_cidadao/header');
		$this->load->view('about');
		$this->load->view('footer');
	}	
	public function contact()
	{
		$this->load->view('user_cidadao/header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function desafios()
	{
		$this->load->view('user_cidadao/header');
		$this->load->view('desafios');
		$this->load->view('footer');
	}
	public function ecopontos()
	{
		$this->load->view('user_cidadao/header');
		$this->load->view('ecopontos');
		$this->load->view('footer');
	}
}
