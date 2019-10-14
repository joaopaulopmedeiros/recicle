<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_cidadao extends CI_Controller {
	//controller fundamental para carregar views de user_cidadao
	public function index()
	{
		$data['title'] = 'Recicle - Página Inicial';
		$data['footer'] = 'Logon';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/index');
		$this->load->view('footer', $data);
	}
	public function about()
	{
		$data['title'] = 'Sobre o Recicle';
		$data['footer'] = 'Logon';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('about');
		$this->load->view('footer', $data);
	}	
	public function contact()
	{
		$data['title'] = 'Contato';
		$data['footer'] = 'Logon';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('contact');
		$this->load->view('footer', $data);
	}
	public function desafios()
	{
		$data['title'] = 'Meus Desafios';
		$data['footer'] = 'Logon';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/desafios');
		$this->load->view('footer', $data);
	}
	public function ecopontos()
	{
		$data['title'] = 'Ecopontos';
		$data['footer'] = 'Logon';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('ecopontos');
		$this->load->view('footer', $data);
	}
	public function minhaConta()
	{
		$data['title'] = 'Minha Conta';
		$data['footer'] = 'Logon';
		$this->load->view('user_cidadao/header', $data);
		$this->load->view('user_cidadao/minhaconta');
		$this->load->view('footer', $data);
	}

	public function action() {
    if($this->input->post('data_action')) {
      $data_action = $this->input->post('data_action');

      if($data_action == "Delete") {
        $api_url = "http://localhost/recicle-api/cidadao/delete";

        $form_data = array(
         'id'  => $this->input->post('user_id')
        );

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);

        echo $response;
      }

      if($data_action == "Edit") {
        $api_url = "http://localhost/recicle-api/cidadao/update";

        $form_data = array(
         'first_name'  => $this->input->post('first_name'),
         'last_name'   => $this->input->post('last_name'),
         'id'          => $this->input->post('user_id')
        );

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);

        echo $response;
      }

      if($data_action == "fetch_single") {
        $api_url = "http://localhost/recicle-api/cidadao/fetch_single";

        $form_data = array(
         'id'  => $this->input->post('user_id')
        );

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);

        echo $response;
      }

      if($data_action == "Insert") {
        $api_url = "http://localhost/recicle-api/cidadao/insert";

        $form_data = array(
         'nome'  => $this->input->post('nome'),
         'email' => $this->input->post('email'),
         'cpf'   => $this->input->post('doc'),
         'cep'   => $this->input->post('cep'),
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

      if($data_action == "fetch_all") {
        $api_url = "http://localhost/recicle-api/cidadao/index";

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
        $result = json_decode($response);

        $output = '';

        if(count($result) > 0) {
          foreach($result as $row) {
            $output .= '
            <tr>
            <td>'.$row->first_name.'</td>
            <td>'.$row->last_name.'</td>
            <td><button type="button" name="edit" class="btn btn-warning btn-xs edit" id="'.$row->id.'">Edit</button></td>
            <td><button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row->id.'">Delete</button></td>
            </tr>

            ';
          }
        } else {
          $output .= '
          <tr>
            <td colspan="4" align="center">No Data Found</td>
          </tr>
          ';
        }

        echo $output;
      }
    }
  }
}
