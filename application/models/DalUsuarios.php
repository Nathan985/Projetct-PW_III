<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DalUsuarios extends CI_Model
{

    public function LogarUser($nome, $senha)
    {
        
        $where = "(nickname = '$nome' OR email = '$nome') AND senha = '$senha'";
        $this->db->where($where);
        $result = $this->db->get("tbl_User")->row_array();
        return $result;

    }

    public function CadastrarUsuario($data)
    {

        return $this->db->insert('tbl_User', $data);

    }

    public function ValidarCampo($campo, $value){
        $this->db->where($campo, $value);
        $result = $this->db->get("tbl_User")->row_array();
        return $result;
    }
}