<?php
require APPPATH . '/libraries/CreatorJwt.php';

class Session extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->objOfJwt = new CreatorJwt();
	}

	public function decode()
	{
		$token = $this->input->post('token');
        $dataUser = $this->objOfJwt->DecodeToken($token);
        $this->getSession($dataUser);
    }
    
    public function getSession($dataUser)
    {
        $this->session->set_userdata('usuario_logado', $dataUser);
        $this->session->set_flashdata('success', true);
        redirect(base_url().'user_cidadao/index');
    }
}