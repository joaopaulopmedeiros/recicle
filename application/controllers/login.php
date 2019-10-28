<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() 
	{
    	$api_url = "http://localhost/recicle-api/login/logon";
    
		$form_data = array(
			'login' => $this->input->post('login'),
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
