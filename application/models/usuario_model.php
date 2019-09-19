<?php
class Usuario_model extends CI_Model {
    public function autenticarUsuario($email, $senha, $tipo_conta) {
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);

        if ($tipo_conta == 'usuario') {
            $usuario = $this->db->get('cidadao')->row_array();
        }
        else if ($tipo_conta == 'cooperativa') {
            $usuario = $this->db->get('cooperativa')->row_array();
        }
        
        return $usuario;
    }
}