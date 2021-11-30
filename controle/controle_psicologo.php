<?php
include_once('../modelo/psicologo.php');
include_once('../modelo/psicologoDAO.php');

$psicologoDAO = new psicologoDAO();

if (isset($_POST['salvar'])) {
    $psicologoDAO->inserir($_POST['nomeCompleto'], $_POST['urlFoto'], $_POST['whatsapp'], $_POST['email'], $_POST['genero'], 
    $_POST['especialidade'], $_POST['tempoExperiencia'],$_POST['crp'],$_POST['senha']);
}

if (isset($_POST['bt_enviar'])) {
    $psicologoDAO->login($_POST['email'], $_POST['senha']); 
}

