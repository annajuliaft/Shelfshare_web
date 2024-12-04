<?php
// Arquivo de logout

require 'php/conexao.php';
require 'php/Usuario.class.php';

$usuario = new Usuario();
$usuario->sair();
?>