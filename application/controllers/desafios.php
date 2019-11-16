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

            $url = "";

            if ($this->input->post('user') == 'user_public')
            {
                $url = base_url() . "user_public/desafio/";
            }
            if ($this->input->post('user') == 'user_cidadao')
            {
                $url = base_url() . "user_cidadao/desafio/";
            }
            if ($this->input->post('user') == 'user_criadordesafio')
            {
                $url = base_url() . "user_criadordesafio/desafio/";
            }
    
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
                            <img src="'.base_url().'assets/images/desafio.png" alt="Image" class="img-fluid">
                            <a href="'.$url.$row->id.'" class="h5"><div class="text-primary">'.$row->titulo.'</div></a>
                            <div class="meta mt-1 mb-4">'.$row->tipo_rsu.'<span class="mx-2">&bullet;</span>'.$row->tipo_bonificacao.'</div>
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
            'dataLimite' => $this->input->post('dataLimite')
        );
      
        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
      
        echo $response;
    }

    public function ver_desafio()
    {
        if($this->input->post('id_desafio'))
        {
            $data = array(
                'id_desafio' => $this->input->post('id_desafio')
            );

            $api_url = "http://localhost/recicle-api/desafios/verdesafio";

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
                    <div class="row justify-content-center my-5">
                        <div class="col-md-7 col-10 mt-5 text-center border-primary">
                            <h2 class="font-weight-light text-primary">'.$row->titulo.'</h2>
                        </div>
                    </div>

                    <div class="row mb-5 justify-content-around align-items-center">
                        <div class="col-lg-6 col-10 mb-md-0 mb-5">
                            <img src="'.base_url().'assets/images/desafio.png" alt="Image" class="img-fluid">
                        </div>

                        <div class="col-lg-5 col-10">
                            <h5 class="text-primary text-center text-uppercase font-weight-bold mb-3">Informações do desafio</h5>

                            <div class="mb-2 row">
                                <div class="icon-desafio">
                                    <span class="icon-user"></span>
                                </div>
                                <div style="line-height:40px;" class="ml-3">Criador do desafio: '.$row->criador_desafio.'</div>
                            </div>

                            <div class="mb-2 row">
                                <div class="icon-desafio">
                                    <span class="icon-trophy"></span>
                                </div>
                                <div style="line-height:40px;" class="ml-3">Tipo da bonificação: '.$row->tipo_bonificacao.'</div>
                            </div>

                            <div class="mb-2 row">
                                <div class="icon-desafio">
                                    <span class="icon-trash"></span>
                                </div>
                                <div style="line-height:40px;" class="ml-3">Tipo do resíduo sólido urbano: '.$row->tipo_rsu.'</div>
                            </div>

                            <div class="mb-2 row">
                                <div class="icon-desafio">
                                    <span class="icon-database"></span>
                                </div>
                                <div style="line-height:40px;" class="ml-3">Quantidade (kg): '.$row->qtdRSU.'</div>
                            </div>

                            <div class="mb-2 row">
                                <div class="icon-desafio">
                                    <span class="icon-calendar"></span>
                                </div>
                                <div style="line-height:40px;" class="ml-3">Data limite: '.$row->dataLimite.'</div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-5">
                        <div class="col-md-10 col-10 text-justify">'.$row->descricao.'</div>
                    </div>
                    ';

                    
                    if ($this->input->post('user') == 'user_cidadao')
                    {
                        $output .=
                        '
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5 text-white">Aceitar o desafio</a></p>
                            </div>
                        </div>
                        ';
                    }
                    if ($this->input->post('user') == 'user_public')
                    {
                        $output .=
                        '
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p class="mb-0"><a href="../login" class="btn btn-primary p-3 text-white">Faça login para aceitar o desafio!</a></p>
                            </div>
                        </div>
                        ';
                    }
                }
            }
            else
            {
                $output .= '
                <div class="col-12 my-5" role="alert">
                    <h4 class="text-center">Desafio não encontrado :/</h4>
                </div>
                ';
            }
            echo $output;
        }
        else 
        {
            redirect('user_public/desafios');
        }
    }
}