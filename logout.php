<?php
// Arquivo de logout

require 'conexao.php';
require 'Usuario.class.php';

$usuario = new Usuario();
$usuario->sair();
?>