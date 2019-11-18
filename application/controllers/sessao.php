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

    public function editSession()
    {
        $dataUser = array(
            'nome' => $this->input->post('nome'),
            'login' => $this->input->post('login'),
            'doc' => $this->input->post('docCadastrado'),
            'cep' => $this->input->post('cep'),
            'senha' => $this->input->post('senha')
	    );

        if ($this->input->post('tipo_user') == 'criador')
        {
            $this->session->set_userdata('criador', $dataUser);
            $this->session->set_flashdata('success', true);
        }
        else if ($this->input->post('tipo_user') == 'cidadao')
        {
            $this->session->set_userdata('cidadao', $dataUser);
            $this->session->set_flashdata('success', true);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'user_public/index');
    }
}