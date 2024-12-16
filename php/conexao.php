<?php
// Conexão com o banco de dados


session_start(); // Inicia a sessão


// Dados para conexão com o banco de dados
$localhost = "localhost";
$user = "root";
$passw = "serra";
$banco = "shelfshare";
global $pdo; // Variável global para ser usada em qualquer lugar do código

// Tenta fazer a conexão com o banco de dados

try{ 
    
    // Estrutura básica de conexão com o banco de dados
    $pdo = new PDO(dsn: "mysql:dbname=".$banco."; host=".$localhost, username: $user,  password: $passw, );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch(PDOException $e){ // Caso ocorra algum erro na conexão com o banco, exibe a mensagem
    echo "Erro ao conectar ao banco de dados: ".$e->getMessage();
    exit;
}

?>