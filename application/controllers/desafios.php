<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desafios extends CI_Controller {

	public function index() 
	{
        if ($this->input->post('data_action')) {
            $data_action = $this->input->post('data_action');
            $api_url = "";

            if ($data_action == "all")
            {
                $api_url = "http://localhost/recicle-api/desafios/exibirTodosOsDesafios";
            }
            elseif($data_action == "meus-desafios")
            {
                $api_url = "http://localhost/recicle-api/desafios/exibirMeusDesafios";
            }

            $data = array(
                'user_id' => $this->input->post('user_id')
            );
    
            $client = curl_init($api_url);
            curl_setopt($client, CURLOPT_POST, true);
            curl_setopt($client, CURLOPT_POSTFIELDS, $data);
            curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($client);
            curl_close($client);
            $result = json_decode($response);

            $output = '';

            if(count($result) > 0)
            {
                foreach($result as $row)
                {
                    $output .= '
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <img src="'.base_url().'assets/images/'.$row->img.'" alt="Image" class="img-fluid">
                            <a href="#" class="h4"><div class="text-primary">'.$row->titulo.'</div></a>
                            <div class="meta mb-4">'.$row->tipo_rsu.'<span class="mx-2">&bullet;</span>'.$row->tipo_bonificacao.'</div>
                        </div> 
                    </div>
                    ';
                }
            }
            else
            {
                $output .= '
                <div class="col-12" role="alert">
                    <h4 class="text-center">Ainda não há desafios cadastrados :(</h4>
                </div>
                ';
            }
            echo $output;
        }
        else
        {
            redirect('user_criadordesafio/index');
        }
    }

    public function insert()
    {
        $api_url = "http://localhost/recicle-api/desafios/inserir";
      
        $form_data = array(
            'titulo' => $this->input->post('titulo'),
            'descricao' => $this->input->post('descricao'),
            'idCriadorDesafio' => $this->input->post('idCriadorDesafio'),
            'idTipoBonificacao' => $this->input->post('idTipoBonificacao'),
            'idTipoRSU' => $this->input->post('idTipoRSU'),
            'qtdRSU' => $this->input->post('qtdRSU'),
            'descricaoBonificacao' => $this->input->post('descricaoBonificacao'),
            'dataLimite' => $this->input->post('dataLimite'),
            'img' => $this->input->post('img')
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