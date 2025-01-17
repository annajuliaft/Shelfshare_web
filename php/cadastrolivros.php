<?php
session_start();
require 'conexao.php'; // Conexão com o banco de dados

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_id = $_SESSION['user_id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $genero = $_POST['genero'];
    $descricao = $_POST['descricao'];

    // Processar upload da capa do livro publicado
    $capa = null;
    if (isset($_FILES['capa']) && $_FILES['capa']['error'] === 0) {
        $upload_dir = 'uploads/';
        $ext = pathinfo($_FILES['capa']['name'], PATHINFO_EXTENSION);
        $capa = $upload_dir . uniqid() . '.' . $ext;
        move_uploaded_file($_FILES['capa']['tmp_name'], $capa);
    }

    // Inserir os dados no banco
    $stmt = $pdo->prepare("INSERT INTO livros (usuario_id, titulo, autor,  genero, descricao, capa) 
                           VALUES (:usuario_id, :titulo, :autor, :genero, :descricao, :capa)");
    $stmt->execute([
        ':usuario_id' => $usuario_id,
        ':titulo' => $titulo,
        ':autor' => $autor,
        ':genero' => $genero,
        ':descricao' => $descricao,
        ':capa' => $capa,
    ]);

    header("Location: perfil.php");
    exit;
}
?>