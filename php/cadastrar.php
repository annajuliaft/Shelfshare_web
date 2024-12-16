<?php
require 'conexao.php';

// Verifica se o Usuário e Email foram preenchidos
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['email']) && !empty($_POST['email'])) {
    
    require 'Usuario.class.php';

    $usuario = new Usuario();

    $username = addslashes($_POST['username']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if ($usuario->verEmail($email)) {

        if (isset($_POST['telefone']) && !empty($_POST['telefone'])) {

            $telefone = addslashes($_POST['telefone']);

            if (isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['confirmarSenha']) && !empty($_POST['confirmarSenha']) && $_POST['senha'] == $_POST['confirmarSenha']) {

                $senha = $_POST['senha'];

                $usuario->cadastrar($username, $email, $telefone, $senha);

                if ($usuario->logar($email, $senha)) {
                    if (isset($_SESSION['id'])) {
                        echo "<script>setTimeout(function(){ window.location.href = '../inicial.php'; }, 500);</script>";
                    } else {
                        echo "<script>alert('Email ou Senha Incorretos!'); setTimeout(function(){ window.location.href = '../cadastro.php'; }, 500);</script>";
                    }
                } else {
                    echo "<script>alert('Email ou Senha Incorretos!'); setTimeout(function(){ window.location.href = '../cadastro.php'; }, 500);</script>";
                }
            } else {
                echo "<script>alert('Senhas não coincidem ou estão vazias!'); setTimeout(function(){ window.location.href = '../cadastro.php'; }, 500);</script>";
            }
        } else {
            echo "<script>alert('Telefone não preenchido!'); setTimeout(function(){ window.location.href = '../cadastro.php'; }, 500);</script>";
        }
    } else {
        echo "<script>alert('Email ou Senha Incorretos!'); setTimeout(function(){ window.location.href = '../cadastro.php'; }, 500);</script>";
    }
} else {
    echo "<script>alert('Campos obrigatórios não preenchidos!'); setTimeout(function(){ window.location.href = '../cadastro.php'; }, 500);</script>";
}
?>
