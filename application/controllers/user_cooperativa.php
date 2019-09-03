<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_cooperativa extends CI_Controller {
	//controller fundamental para carregar views de user_cooperativa
	public function index()
	{
		$this->load->view('user_cooperativa/header', $data);
		$this->load->view('user_cooperativa/index');
		$this->load->view('footer');
	}
	public function about()
	{
		$this->load->view('user_cooperativa/header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}	
	public function contact()
	{
		$this->load->view('user_cooperativa/header', $data);
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function desafios()
	{
		$this->load->view('user_cooperativa/header', $data);
		$this->load->view('desafios');
		$this->load->view('footer');
	}
	public function login()
	{
		$this->load->view('user_cooperativa/header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function ecopontos()
	{
		$this->load->view('user_cooperativa/header', $data);
		$this->load->view('ecopontos');
		$this->load->view('footer');
	}
}
