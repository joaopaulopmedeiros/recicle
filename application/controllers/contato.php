<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function index() 
	{
        $api_url = "http://localhost/recicle-api/contato/index";

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
        $result = json_decode($response);

        $output = '';
        
        if(count($result) > 0)
        {
            foreach($result as $row)
            {
                $output .= '';
            }
        }
        echo $output;
    }

    public function insert()
    {
        $api_url = "http://localhost/recicle-api/contato/insert";

        $form_data = array(
            'nome' => $this->input->post('nome'),
            'sobrenome' => $this->input->post('sobrenome'),
            'email' => $this->input->post('email'),
            'assunto' => $this->input->post('assunto'),
            'mensagem' => $this->input->post('mensagem')
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