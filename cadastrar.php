<?php
require 'conexao.php';

// Verifica se o Usuário e  Email foram preenchidos
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['email']) && !empty($_POST['email']) ){
    
    require 'Usuario.class.php';

    $usuario = new Usuario();

    $username = addslashes($_POST['username']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 

    if($usuario->verEmail($email)){

        if(isset($_POST['telefone']) && !empty($_POST['telefone'])){

            $telefone = addslashes($_POST['telefone']);

            if(isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['confirmarSenha']) && !empty($_POST['confirmarSenha']) && $_POST['senha'] == $_POST['confirmarSenha'] ){

                $senha = $_POST['senha'];

                $usuario->cadastrar($username, $email, $telefone, $senha);
                
                if($usuario->logar($email, $senha)){
                    if(isset($_SESSION['id'])){
                        header("Location: inicial.php");
                    }
                    else{
                        header("Location: cadastro.php");
                    }
                }
                else{
                    header('Location: cadastro.php');
                }
            }
            else{
                header('Location: cadastro.php');
            }
        }
        else{
            header('Location: cadastro.php');
        }
    } 
    else{
        header('Location: cadastro.php');
    }  
}
else{
    header('Location: cadastro.php');
}
?>