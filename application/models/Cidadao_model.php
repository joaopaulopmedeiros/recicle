<?php
class Api_model extends CI_Model
{
  function fetch_all()
  {
    $this->db->order_by('cpf', 'DESC');
    return $this->db->get('cidadao');
  }

  function insert_api($data)
  {
    $this->db->insert('cidadao', $data);
    if($this->db->affected_rows() > 0)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  function fetch_single_user($user_cpf)
  {
    $this->db->where("cpf", $user_cpf);
    $query = $this->db->get('ccpfadao');
    return $query->result_array();
  }

  function update_api($user_cpf, $data)
  {
    $this->db->where("cpf", $user_cpf);
    $this->db->update("cidadao", $data);
  }
 
  function delete_single_user($user_cpf)
  {
    $this->db->where("cpf", $user_cpf);
    $this->db->delete("cidadao");
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
