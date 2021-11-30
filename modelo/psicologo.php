<?php
class Psicologo{
    private $id;
    private $nomeCompleto;
    private $urlFoto;
    private $whatsapp;
    private $email;
    private $genero;
    private $especialidade;
    private $tempoExperiencia;
    private $crp;
    private $senha;


    function _construct($id,$nomeCompleto,$urlFoto,$whatsapp,$email,$genero,$especialidade,$tempoExperiencia,$crp,$senha){
        $this->id = $id;
        $this->nomeCompleto = $nomeCompleto;
        $this->urlFoto = $urlFoto;
        $this->whatsapp = $whatsapp;
        $this->email = $email;
        $this->genero = $genero;
        $this->especialidade = $especialidade;
        $this->tempoExperiencia = $tempoExperiencia;
        $this->crp = $crp;
        $this->senha = $senha;
    }

    public function getId(){
        return $this->id;
    }

    public function getNomeCompleto(){
        return $this->nomeCompleto;
    }

    public function setNomeCompleto($nomeCompleto){
        $this->nomeCompleto = $nomeCompleto;
    }

    public function getUrlFoto(){
        return $this->urlFoto;
    }

    public function setUrlFoto($urlFoto){
        $this->urlFoto = $urlFoto;
    }

    public function getWhatsapp(){
        return $this->whatsapp;
    }

    public function setWhatsapp($whatsapp){
        $this->whatsapp = $whatsapp;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function getTempoExperiencia(){
        return $this->tempoExperiencia;
    }

    public function setTempoExperiencia($tempoExperiencia){
        $this->tempoExperiencia = $tempoExperiencia;
    }

    public function getCrp(){
        return $this->crp;
    }

    public function setCrp($crp){
        $this->crp = $crp;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

}
