<?php
namespace App;
class Paciente extends Pessoa{
    public $convenio;
    public $observacao;
    public function cadastrar(){
                    $db = new Database('paciente');
                    $db->insert([
                        'NOME' => $this->nome,
                        'CPF' => $this->cpf,
                        'data_nascimento' => $this->data_nascimento,
                        'telefone' => $this->telefone,
                        'email' => $this->email,
                        'endereco' => $this->endereco,
                        'convenio' => $this->convenio,
                        'observacao' => $this->observacao
                    ]);
    }
    public function alerar(){

    }
    public function excluir(){

    }
    public static function listar(){
        
        return null;
    }
}