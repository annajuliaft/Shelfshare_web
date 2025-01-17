<?php
session_start();
require 'conexao.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$usuario_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT * FROM livros WHERE usuario_id = :usuario_id ORDER BY created_at DESC");
$stmt->execute([':usuario_id' => $usuario_id]);
$livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>