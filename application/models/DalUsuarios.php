<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DalUsuarios extends CI_Model
{

    public function LogarUser($nome, $senha)
    {

        $this->db->where("nickname" or "email", $nome);
        $this->db->where("senha", $senha);
        $linha = $this->db->get("tbl_User")->row_array();
        return $linha;
    }

    public function CadastrarUsuario($data)
    {

        return $this->db->insert('tbl_User', $data);

    }
}
?>
