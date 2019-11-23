<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filtro extends CI_Controller {

	public function index() 
	{
        $api_url = "http://localhost/recicle-api/filtro/index";

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

    
}
