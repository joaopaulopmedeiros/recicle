<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_admin extends CI_Controller {
	//controller fundamental para carregar views de user_admin
    public function index()
    {
        $data['title'] = "Recicle";
        $this->load->view('user_admin/production/menu', $data);
        $this->load->view('user_admin/production/home');
        $this->load->view('user_admin/production/footer');
    }
    public function users()
    {
        $data['title'] = "Listagem de Usuários";
        $this->load->view('user_admin/production/menu', $data);
        $this->load->view('user_admin/production/users');
        $this->load->view('user_admin/production/footer');
    }
    public function desafios()
    {
        $data['title'] = "Listagem de Desafios";
        $this->load->view('user_admin/production/menu', $data);
        $this->load->view('user_admin/production/desafios');
        $this->load->view('user_admin/production/footer');
    }
}