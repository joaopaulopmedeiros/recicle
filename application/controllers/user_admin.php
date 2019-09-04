<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_admin extends CI_Controller {
	//controller fundamental para carregar views de user_admin
    public function index()
    {
        $data['title'] = "Recicle";
        $this->load->view('user_admin/menu', $data);
        $this->load->view('user_admin/home');
        $this->load->view('user_admin/footer');
    }
    public function users()
    {
        $data['title'] = "Listagem de Usuários";
        $this->load->view('user_admin/menu', $data);
        $this->load->view('user_admin/users');
        $this->load->view('user_admin/footer');
    }
    public function desafios()
    {
        $data['title'] = "Listagem de Desafios";
        $this->load->view('user_admin/menu', $data);
        $this->load->view('user_admin/desafios');
        $this->load->view('user_admin/footer');
    }
}