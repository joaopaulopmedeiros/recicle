<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function autenticar() {
        $this->load->model('usuario_model');
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');
        $tipo_conta = $this->input->post('conta');
        $usuario = $this->usuario_model->autenticarUsuario($email, $senha, $tipo_conta);

        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("success", "Login realizado com sucesso!");
        } else {
            $this->session->set_flashdata("danger", "conta: " . $tipo_conta);
        }
        redirect('/');
    }
}
