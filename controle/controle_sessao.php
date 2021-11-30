<?php
include_once('../modelo/sessao.php');
include_once('../modelo/sessaoDAO.php');

$sessaoDAO = new sessaoDAO();

if (isset($_POST['criarAnuncio'])) {
    $sessaoDAO->inserir($_POST['especialidade'], $_POST['custoHora'], $_POST['dataSessao'], $_POST['horario'], $_POST['descricao']);
    $sessaoDAO->listar();
}

if (isset($_POST['listar'])) {
    $sessaoDAO->listar();
}

if (isset($_POST['salvarSessao'])) {
    $sessaoDAO->buscarSessao($_POST['especialidade'], $_POST['dataSessao']);
}

if (isset($_POST['botao_excluir'])) {
    $sessaoDAO->excluir($_POST['id_hiden']);
}

if (isset($_POST['botao_editar'])) {
    $sessaoDAO->Editar($_POST['id_hiden']);
   }

if (isset($_POST['salvarAlteracoes'])) {
    $sessaoDAO->SalvarEdicao($_POST['id_hiden'],
    $_POST['especialidade'], $_POST['custoHora'], $_POST['dataSessao'], $_POST['Horário'], $_POST['descricao']);
    $sessaoDAO->listar();
}  
