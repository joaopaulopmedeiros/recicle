<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desafios extends CI_Controller {
    public $idCriadorDesafio;
    public $idCidadao;
    public $idTipoRSU;
    public $idTipoBonificacao;
    public $idDesafio;

	public function index() 
	{
        if ($this->input->post('data_action')) {
            $data_action = $this->input->post('data_action');
            $api_url = "";

            if ($data_action == "all"){
                $api_url = "http://localhost/recicle-api/desafios/exibirTodosOsDesafios";
            }
            elseif($data_action == "meus-desafios"){
                $api_url = "http://localhost/recicle-api/desafios/exibirMeusDesafios";
            }

            $data = array(
                'user_id' => $this->input->post('user_id')
            );

            $url = "";

            if ($this->input->post('user') == 'user_cidadao'){
                $url = base_url() . "user_cidadao/desafio/";
            }
            else if ($this->input->post('user') == 'user_criadordesafio'){
                $url = base_url() . "user_criadordesafio/desafio/";
            }
            else {
                $url = base_url() . "user_public/desafio/";
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

    public function indexDesafiosEcopontos() 
	{
        $api_url = "http://localhost/recicle-api/desafios/exibirTodosOsDesafios";

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);

        echo $response;
    }

    public function showRecentChallenges() 
	{
        $api_url = "http://localhost/recicle-api/desafios/exibirTodosOsDesafios";

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
        $result = json_decode($response);

        $output = '';

        if($result != null)
        {
            for ($i=0; $i < 3; $i++)
            {
                $output .= '
                <div class="col-8 col-md-5 col-lg-3 p-4 mb-3 mb-lg-0 desafio">
                    <img src="'.base_url().'assets/images/challenges/desafio.svg" alt="Imagem do desafio" class="img-fluid mb-3">
                    <p>'.$result[$i]->titulo.'</p>
                    <a href="./desafio/'.$result[$i]->id.'" class="btn btn-green py-1 px-3">Saber mais</a>
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

            if($result != null)
            {
                foreach($result as $row)
                {   
                    $output .= '
                    <div class="row justify-content-center mb-5">
                        <div class="col-10 col-md-8 text-center text-uppercase">
                            <h2 class="title-section">'.$row->titulo.'</h2>
                        </div>
                    </div>

                    <div class="row mb-5 justify-content-center align-items-center">
                        <div class="col-lg-5 col-10 mb-5 mb-lg-0 d-flex justify-content-center">
                            <img src="'.base_url().'assets/images/challenges/desafio.svg" alt="Imagem do desafio" class="img-fluid">
                        </div>

                        <div class="col-lg-6 col-10">
                            <div class="mb-2 row align-items-center">
                                <div class="icon-desafio">
                                    <span class="icon-user"></span>
                                </div>
                                <div style="line-height:40px;" class="ml-3">Criador do desafio: '.$row->criador_desafio.'</div>
                            </div>

                            <div class="mb-2 row align-items-center">
                                <div class="icon-desafio">
                                    <span class="icon-trophy"></span>
                                </div>
                                <div style="line-height:40px;" class="ml-3">Tipo da bonificação: '.$row->tipo_bonificacao.'</div>
                            </div>

                            <div class="mb-2 row align-items-center">
                                <div class="icon-desafio">
                                    <span class="icon-trash"></span>
                                </div>
                                <div style="line-height:40px;" class="ml-3">Tipo do resíduo sólido urbano: '.$row->tipo_rsu.'</div>
                            </div>

                            <div class="mb-2 row align-items-center">
                                <div class="icon-desafio">
                                    <span class="icon-database"></span>
                                </div>
                                <div style="line-height:40px;" class="ml-3">Quantidade (kg): '.$row->qtdRSU.'</div>
                            </div>

                            <div class="mb-2 row align-items-center">
                                <div class="icon-desafio">
                                    <span class="icon-calendar"></span>
                                </div>
                                <div style="line-height:40px;" class="ml-3">Data limite: '.$row->dataLimite.'</div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-5">
                        <div class="col-10 text-justify">'.$row->descricao.'</div>
                    </div>
                    
                    <script type="text/javascript" language="javascript">
                        var idDesafio = '.$row->id.';
                        var idCriadorDesafio = '.$row->idCriadorDesafio.';
                        var idTipoRSU = '.$row->idTipoRSU.';
                        var idTipoBonificacao = '.$row->idTipoBonificacao.';
                    </script>
                    ';

                    if ($this->input->post('user') == 'user_cidadao')
                    {
                        $data2 = array(
                            'id_user' => $this->session->cidadao['doc'],
                            'id_desafio' => $this->input->post('id_desafio')
                        );
            
                        $api_url2 = "http://localhost/recicle-api/desafiosaceitos/index";
            
                        $client2 = curl_init($api_url2);
                        curl_setopt($client2, CURLOPT_POST, true);
                        curl_setopt($client2, CURLOPT_POSTFIELDS, $data2);
                        curl_setopt($client2, CURLOPT_RETURNTRANSFER, true);
                        $response2 = curl_exec($client2);
                        curl_close($client2);
                        $result2 = json_decode($response2);

                        if(count($result2) > 0)
                        {
                            for ($i=0; $i < count($result2); $i++)
                            {
                                if (isset($result2[$i]->cumprido))
                                {
                                    if($result2[$i]->cumprido == 1 && (!isset($result2[$i+1])) && $result2[$i]->premio_resgatado == 1)
                                    {
                                        $output .=
                                        '
                                        <div class="row text-center">
                                            <div class="col-12" id="botao">
                                                <p class="mb-0"><a href="#" onclick="adicionarDesafio()" class="btn btn-green py-2 px-5">Quero participar novamente!</a></p>   
                                            </div>
                                        </div>
                                        ';
                                    }
                                    else if($result2[$i]->cumprido == 0 && $result2[$i]->premio_resgatado == 0)
                                    {
                                        $output .=
                                        '
                                        <div class="row text-center">
                                            <div class="col-12" id="botao">
                                                <p class="mb-0"><a href="#" onclick="cancelarDesafio()" class="btn btn-red py-2 px-5">Não quero participar</a></p>   
                                            </div>
                                        </div>
                                        ';
                                    }
                                    else if($result2[$i]->cumprido == 1 && $result2[$i]->premio_resgatado == 0) {
                                        $output .=
                                        '
                                        <div class="row text-center">
                                            <div class="col-12" id="botao">
                                                <p class="mb-0"><a data-toggle="modal" href="#ModalResgatarPremio" class="btn btn-green py-2 px-5">Resgatar prêmio</a></p>
                                            </div>
                                        </div>

                                        <!-- Modal da bonificação -->
                                        <div class="modal fade" id="ModalResgatarPremio" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-primary font-weight-bold" id="TituloModalCentralizado">Parabéns, você venceu o desafio!</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body d-flex justify-content-center">
                                                        <img src="'.base_url().'assets/images/icons/trofeu.svg" alt="Image" class="img-fluid my-4">
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-gray" data-dismiss="modal">Resgatar depois</button>
                                                        <button type="button" class="btn btn-green" onClick="resgatarPremio('. $result2[$i]->id .')">Resgatar agora</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ';
                                    }
                                }
                            }
                        }
                        else
                        {
                            $output .=
                            '
                            <div class="row text-center">
                                <div class="col-12" id="botao">
                                    <p class="mb-0"><a href="#" onclick="adicionarDesafio()" class="btn btn-green py-2 px-5">Aceitar o desafio</a></p>   
                                </div>
                            </div>
                            ';
                        }
                    }
                    else if ($this->input->post('user') == 'user_public')
                    {
                        $output .=
                        '
                        <div class="row text-center">
                            <div class="col-12">
                                <p class="mb-0"><a href="../login" class="btn btn-green py-2 px-5">Faça login para aceitar o desafio!</a></p>
                            </div>
                        </div>
                        ';
                    }
                }
            }
            else
            {
                $output .= '
                <div class="row justify-content-center">
                    <div class="col-10" role="alert">
                        <h4 class="text-center font-weight-bold" style="color: var(--red);">Desafio não encontrado :/</h4>
                    </div>
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

    public function aceitar_desafio()
    {
        $api_url = "http://localhost/recicle-api/DesafiosAceitos/inserir";
        $data = array(
            "idCriadorDesafio" => $this->input->post("idCriadorDesafio"),
            "idCidadao" => $this->input->post("id_user"),
            "idTipoRSU" => $this->input->post("idTipoRSU"),
            "idTipoBonificacao" => $this->input->post("idTipoBonificacao"),
            "idDesafio" => $this->input->post("idDesafio"),
            "cumprido" => 0
        );
        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
      
        echo $response;
    }

    public function cancelar_desafio()
    {
        $api_url = "http://localhost/recicle-api/DesafiosAceitos/deletar";
        $data = array(
            "idDesafio" => $this->input->post("idDesafio"),
            "idCidadao" => $this->input->post("id_user")
        );
        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
      
        echo $response;
    }

    public function ver_concorrentes_desafio()
    {
        $api_url = "http://localhost/recicle-api/DesafiosAceitos/ver_concorrentes_desafio";   
        
        $data = array(
            "idDesafio" => $this->input->post("idDesafio")
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
            $output = '
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Cidadão</th>
                        <th>CPF</th>
                        <th>Status</th>
                    </thead>';

            foreach($result as $row)
            {
                if($row->cumprido == 0){
                    $output .= '
                    <tbody>
                        <td>'.$row->idDesafioAceito.'</td>
                        <td>'.$row->cidadao.'</td>
                        <td>'.$row->cpfCidadao.'</td>
                        <td id="btn-status-desafio"><button onclick="cumprirDesafio('.$row->idDesafioAceito.')" type="button" class="btn btn-green">Confirmar</button></td>       
                    </tbody>';
                }
                if($row->cumprido == 1){
                    $output .= '
                    <tbody>
                        <td>'.$row->idDesafioAceito.'</td>
                        <td>'.$row->cidadao.'</td>
                        <td>'.$row->cpfCidadao.'</td>
                        <td>Desafio cumprido</td>       
                    </tbody>';
                }
            }
            $output .= '</table>';
        } else {
            $output .= '<p class="text-center">Ainda não há concorrentes para este desafio!</p>';
        }

        echo $output;
    }

    public function cumprir_desafio()
    {
        $api_url = "http://localhost/recicle-api/DesafiosAceitos/cumprirDesafio";

        $idDesafioAceito = $this->input->post("idDesafioAceito");
        $status = $this->input->post("status");
        
        $data = array(
            "idDesafioAceito" => $idDesafioAceito,
            "status" => $status
        );

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
      
        echo $response;
    }

    public function resgatar_premio()
    {
        $api_url = "http://localhost/recicle-api/DesafiosAceitos/resgatarPremio";

        $idDesafioAceito = $this->input->post("idDesafioAceito");
        $status = $this->input->post("status");
        
        $data = array(
            "idDesafioAceito" => $idDesafioAceito,
            "status" => $status
        );

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
      
        echo $response;
    }
}