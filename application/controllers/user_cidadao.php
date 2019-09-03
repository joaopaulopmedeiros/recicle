<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_cidadao extends CI_Controller {
	//controller fundamental para carregar views de user_cidadao
	public function index()
	{
		$this->load->view('user_cidadao/header');
		$this->load->view('user_cidadao/index');
		$this->load->view('user_cidadao/footer');
	}
	public function showViewAbout()
	{
		$this->load->view('user_cidadao/header');
		$this->load->view('about');
		$this->load->view('user_cidadao/footer');
	}	
	public function showViewContact()
	{
		$this->load->view('user_cidadao/header');
		$this->load->view('contact');
		$this->load->view('user_cidadao/footer');
	}
	public function showViewDesafios()
	{
		$this->load->view('user_cooperativa/header');
		$this->load->view('desafios');
		$this->load->view('user_cooperativa/footer');
	}
	public function showViewLogin()
	{
		$this->load->view('user_cooperativa/header');
		$this->load->view('login');
		$this->load->view('user_cooperativa/footer');
	}
	public function showViewEcopontos()
	{
		$this->load->view('user_cidadao/header');
		$this->load->view('ecopontos');
		$this->load->view('user_cidadao/footer');
	}
}
