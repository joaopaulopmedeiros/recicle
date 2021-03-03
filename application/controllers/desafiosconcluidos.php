<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DesafiosConcluidos extends CI_Controller
{
    public function index()
    {
        if($this->input->post("id_user"))
        {
            $api_url = "http://localhost/recicle-api/DesafiosAceitos/ver_meus_desafios_concluidos";
            $data = array("id_user" => $this->input->post("id_user"));

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
                    <div class="col-10 col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="desafio-item p-4">
                            <img src="'.base_url().'assets/images/icons/trofeu.svg" alt="Image" class="img-fluid mb-3">
                            <h5>'.$row->titulo.'</h5>
                            <div class="meta mt-1 mb-3">Status: Desafio vencido</div>
                            <a href="'.base_url().'user_cidadao/desafio/'.$row->id_desafio.'" class="btn btn-green py-1 px-3">Acessar desafio</a>
                        </div> 
                    </div>
                    ';
                }
            }
            else
            {
                $output .= '
                <div class="col-12" role="alert">
                    <h4 class="text-center">Nenhum desafio concluído</h4>
                </div>
                ';
            }
        }
        else
        {
            redirect("user_cidadao/index");
        }

        echo $output;
    }
}
