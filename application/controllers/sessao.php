<?php
require APPPATH . '/libraries/CreatorJwt.php';

class Sessao extends CI_Controller {
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
        if ($dataUser['tipo'] == "cidadao")
        {
            $this->session->set_userdata('cidadao', $dataUser);
            $this->session->set_flashdata('success', true);
            redirect(base_url().'user_cidadao/index');
        }
        else if ($dataUser['tipo'] == "criador")
        {
            $this->session->set_userdata('criador', $dataUser);
            $this->session->set_flashdata('success', true);
            redirect(base_url().'user_criadordesafio/index');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'user_public/index');
    }
}