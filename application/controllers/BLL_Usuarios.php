<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BLL_Usuarios extends CI_Controller
{


    public function index()
    {

        $this->load->view('Activity_Login');
    }

    public function ValidarLogin()
    {

        $nome = $this->input->post("Iden");
        $senha = $this->input->post("Pass");

        $result = $this->ValidarCredenciaisLogin($nome, $senha);

        if ($result) {
            /*BANCO DE DADOS*/
        }
    }


    private function ValidarCredenciaisLogin($nome, $senha)
    {

        if (empty($nome)) {
            echo "ErroEmail";
            die();
        } else if (empty($senha)) {
            echo "ErroSenha";
            die();
        } else {
            return true;
        }
    }

    public function ValidarCadastro()
    {
        $dados = [
            'nome' => $this->input->post("User"),
            'email' => $this->input->post("E-mail"),
            'senha' => $this->input->post("senhacad"),
            'nickname' => $this->input->post("Username"),
            'cargo' => "Cliente",
            'cpf' => $this->input->post("CPF"),
            'telefone' => $this->input->post("Telefone"),
        ];
        $cfsenha = $this->input->post("CPass");
        $result = $this->ValidarCredenciaisCadastro($dados, $cfsenha);
        $this->load->model('DalUsuarios');


        if ($result) {
            try {
                if ($this->DalUsuarios->CadastrarUsuario($dados)) {
                    echo "ClienteCadastrado";
                    die();
                } else {
                    echo "FalhaCadastrado";
                    die();
                }
            } catch (\Exception $ex) {
                echo "FalhaCadastrado";
                die();
            }
        }
    }

    private function ValidarCredenciaisCadastro($dados, $cfsenha)
    {

        if (empty($dados['nome'])) {
            echo "ErroNome";
            die();
        }
        if (empty($dados['email'])) {
            echo "ErroEmail";
            die();
        }
        if (empty($dados['senha'])) {
            echo "ErroSenhacad";
            die();
        }
        if (empty($cfsenha)) {
            echo "ErroConfSenha";
            die();
        }
        if ($dados['senha'] != $cfsenha) {
            echo "SenhasDiferentes";
            die();
        }
        if (empty($dados['nickname'])) {
            echo "ErroNick";
            die();
        }
        if (empty($dados['cpf']) or strlen($dados['cpf']) != 11) {
            echo "ErroCPf";
            die();
        }
        if (empty($dados['telefone'])) {
            echo "ErroTell";
            die();
        }
        return true;
    }
}
