<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bonificacao extends CI_Controller {

	public function index() 
	{
        $api_url = "http://localhost/recicle-api/bonificacao/index";

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

    public function insert()
    {
        $api_url = "http://localhost/recicle-api/bonificacao/insert";

        $form_data = array(
			'nome' => $this->input->post('nome')
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