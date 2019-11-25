<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DesafiosAceitos extends CI_Controller
{
    public function index()
    {
        if($this->input->post("id_user")){

            $api_url = "http://localhost/recicle-api/DesafiosAceitos/index";
            $id_user = $this->input->post("id_user");
            $data = array("id_user" => $id_user);

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
                            <a href="'.base_url().'user_cidadao/desafio/'.$row->id.'" class="h4 font-weight-bold"><div class="text-primary">'.$row->titulo.'</div></a>
                            <div class="meta mt-1 mb-4">'.$row->tipo_rsu.'<span class="mx-2">&bullet;</span>'.$row->tipo_bonificacao.'</div>
                        </div> 
                    </div>
                    ';
                }
            }else{
                echo "Você ainda não aceitou os desafios ofertados!";
            }

        }else{
            redirect("user_public/index");
        }

        echo $output;

    } 

}
