<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criador_Desafio extends CI_Controller {

	public function index() 
	{
        $api_url = "http://localhost/recicle-api/criadordesafio/fetch_single";

        $data = array(
            'docCadastrado' => $this->input->post('docCadastrado')
        );

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);

        echo $response;
    }
    
    public function fetch_all(){
        $api_url = "http://localhost/recicle-api/criadordesafio/index";

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
        $result = json_decode($response);

        $output = '<option selected>Escolher...</option>';

        if(count($result) > 0)
        {
            foreach($result as $row)
            {
                $output .= '
                <option value="'.$row->id.'">'.$row->nome.'</option>
                ';
            }
        }
        echo $output;
    }

    public function update()
    {
        $api_url = "http://localhost/recicle-api/criadordesafio/update";

        $form_data = array(
            'nome' => $this->input->post('nome'),
            'login' => $this->input->post('login'),
            'email_user' => $this->input->post('email_user'),
            'docCadastrado' => $this->input->post('docCadastrado'),
            'cep' => $this->input->post('cep'),
            'senha' => $this->input->post('senha')
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