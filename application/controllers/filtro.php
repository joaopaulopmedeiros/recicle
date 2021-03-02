<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filtro extends CI_Controller {

	public function index() 
	{
        $api_url = "http://localhost/recicle-api/desafios/filtrar_desafios";

        $data = array(
            'idCriadorDesafio' => $this->input->post('idCriadorDesafio'),
            'idTipoBonificacao' => $this->input->post('idTipoBonificacao'),
            'idTipoRSU' => $this->input->post('idTipoRSU')
        );

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
        $result = json_decode($response);

        $url = "";
        if ($this->input->post('user') == 'user_public'){
            $url = base_url() . "user_public/desafio/";
        }
        if ($this->input->post('user') == 'user_cidadao'){
            $url = base_url() . "user_cidadao/desafio/";
        }

        $output = '';

        if(count($result) > 0)
        {
            foreach($result as $row)
            {
                $output .= '
                    <div class="col-10 col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="desafio-item p-4">
                            <img src="'.base_url().'assets/images/challenges/desafio.svg" alt="Image" class="img-fluid mb-3">
                            <h5>'.$row->titulo.'</h5>
                            <div class="meta mt-1 mb-3">'.$row->tipo_rsu.'<span class="mx-2">&bullet;</span>'.$row->tipo_bonificacao.'</div>
                            <a href="'.$url.$row->id.'" class="btn btn-green py-1 px-3">Saber mais</a>
                        </div> 
                    </div>
                    ';
            }
        }
        else
        {
            $output .= '
            <div class="col-12 mt-5" role="alert">
                <h4 class="text-center">Nenhum desafio encontrado :(</h4>
            </div>
            ';
        }
        echo $output;
    }

    
}
