<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index() 
	{
      if($this->input->post('user_type') == "cidadao" ){
        $api_url = "http://localhost/recicle-api/Cidadao/inserir";

      }else if($this->input->post('user_type') == "criador" ){
        $api_url = "http://localhost/recicle-api/CriadorDesafio/inserir";
      }
  
	  $form_data = array(
			'nome' => $this->input->post('nome'),
			'docCadastrado' => $this->input->post('doc'),
			'login' => $this->input->post('login'),
			'senha' => $this->input->post('senha'),
			'cep' => $this->input->post('cep'),
			'confirmarSenha' => $this->input->post('confirmarSenha')
	  );
  
	  $client = curl_init($api_url);
	  curl_setopt($client, CURLOPT_POST, true);
	  curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
	  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
	  $response = curl_exec($client);
	  curl_close($client);
  
	  echo $response;
	}
  
}
