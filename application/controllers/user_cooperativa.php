<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_cooperativa extends CI_Controller {
	//controller fundamental para carregar views de user_public
	public function index()
	{
		$this->load->view('user_cooperativa/header');
		$this->load->view('user_cooperativa/index');
		$this->load->view('user_cooperativa/footer');
	}
	public function showViewAbout()
	{
		$this->load->view('user_cooperativa/header');
		$this->load->view('about');
		$this->load->view('user_cooperativa/footer');
	}	
	public function showViewContact()
	{
		$this->load->view('user_cooperativa/header');
		$this->load->view('contact');
		$this->load->view('user_cooperativa/footer');
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
		$this->load->view('user_cooperativa/header');
		$this->load->view('ecopontos');
		$this->load->view('user_cooperativa/footer');
	}
}
