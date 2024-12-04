<?php
// Arquivo de verificação se a sessão está ativa

require 'php/conexao.php';

if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    require_once 'php/Usuario.class.php'; // Requisitando a classe Usuario uma vez para evitar erros de duplicidade

    $usuario = new Usuario(); // Instanciando a classe

    $listLogged = $usuario->logged($_SESSION['id']); // Recebendo os dados do usuário ligado ao ID da sessão

    $username = $listLogged['username']; // Recebendo o username do usuário

}
else{
    header("Location: navbar.php");
}
?>