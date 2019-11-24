<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_not_found extends CI_Controller {
    public function index()
    {
        $data['title'] = "Página não encontrada";
        $this->load->view('user_public/header', $data);
        $this->load->view('error_404');
        $this->load->view('footer');
    }
}