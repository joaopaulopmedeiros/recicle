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

            if(count($result) > 0){
                echo "Deu bom!";
            }else{
                echo "Você ainda não aceitou os desafios ofertados!";
            }

        }else{
            redirect("user_public/index");
        }


    } 

}
