<?php
// Arquivo de verificação se a sessão está ativa

require 'conexao.php';

if(isset($_SESSION['id']) and !empty($_SESSION['id'])){
    require_once 'Usuario.class.php'; // Requisitando a classe Usuario uma vez para evitar erros de duplicidade

    $usuario = new Usuario(); // Instanciando a classe

    $listLogged = $usuario->logged($_SESSION['id']); // Recebendo os dados do usuário ligado ao ID da sessão

    $username = $listLogged['username']; // Recebendo o username do usuário

}
else{
    header("Location: login.php");
}
?>