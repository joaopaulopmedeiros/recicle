<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desafios extends CI_Controller {

	public function index() 
	{
	    $api_url = "http://localhost/recicle-api/desafios/index";
  
        $client = curl_init($api_url);
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
                        <img src="'.base_url().'assets/images/blog_2.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><div class="text-primary">'.$row->titulo.'</div></h2>
                        <div class="meta mb-4">'.$row->nome.'<span class="mx-2">&bullet;</span>'.$row->tipo.'<span class="mx-2">&bullet;</span>Jan 18, 2019</div>
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