<?php
class sessao{
    private $id;
    private $especialidade;
    private $custoHora;
    private $dataSessao;
    private $horario;
    private $descricao;

    function _construct($id,$especialidade,$custoHora,$dataSessao,$horario,$descricao){
        $this->id = $id;
        $this->especialidade = $especialidade;
        $this->custoHora = $custoHora;
        $this->dataSessao = $dataSessao;
        $this->horario = $horario;
        $this->descricao = $descricao;
    }

    public function getId(){
        return $this->id;
    }

    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function getCustoHora(){
        return $this->custoHora;
    }

    public function setCustoHora($custoHora){
        $this->custoHora = $custoHora;
    }

    public function getdataSessao(){
        return $this->dataSessao;
    }

    public function setdataSessao($dataSessao){
        $this->dataSessao = $dataSessao;
    }

    
    public function getHorario(){
        return $this->horario;
    }

    public function setHorario($horario){
        $this->horario = $horario;
    }

       
    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

}