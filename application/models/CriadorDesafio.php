<?php
class CriadorDesafio extends CI_Model
{
  function fetch_all()
  {
    $this->db->order_by('docCadastrado', 'DESC');
    return $this->db->get('criadorDesafio');
  }

  function insert_api($data)
  {
    $this->db->insert('criadorDesafio', $data);
    if($this->db->affected_rows() > 0)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  function fetch_single_user($user_doc)
  {
    $this->db->where("docCadastrado", $user_doc);
    $query = $this->db->get('criadorDesafio');
    return $query->result_array();
  }

  function update_api($user_doc, $data)
  {
    $this->db->where("docCadastrado", $user_cpf);
    $this->db->update("criadorDesafio", $data);
  }
 
  function delete_single_user($doc_cpf)
  {
    $this->db->where("docCadastrado", $user_doc);
    $this->db->delete("criadorDesafio");
    if($this->db->affected_rows() > 0)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
}
