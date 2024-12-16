<?php
// Arquivo de existência do usuário no banco de dados 

// Verifica se o usuário e senha foram preenchidos
if(!empty($_POST['email']) && !empty($_POST['senha']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    
    // Requisitando os arquivos necessários para conexão e instância da classe
    require 'conexao.php';
    require 'Usuario.class.php';

    // Instanciando a classe
    $usuario = new Usuario();
    

    // Recebendo os valores do formulário
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($usuario->logar($email, $senha)){
        if(isset($_SESSION['id'])){
            header("Location: ../inicial.php");
            echo "<script>alert('Logado com sucesso!');</script>";
        }
        else{
            header("Location: ../login.php");
            echo "<script>alert('Erro no login!');</script>";
        }
    }
    else{
        echo "<script>alert('Email ou Senha Incorretos!');</script>";
        header("Location: ../login.php");
    }

}else{
    header("Location: ../login.php");
}



?>