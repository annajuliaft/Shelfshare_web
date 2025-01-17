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

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <h1>Seus Livros</h1>
    <a href="cadastrarlivros.php">Cadastrar Novo Livro</a>
    <ul>
        <?php foreach ($livros as $livro): ?>
            <li>
                <img src="<?= htmlspecialchars($livro['capa']) ?>" alt="Capa" style="width: 100px;">
                <strong><?= htmlspecialchars($livro['titulo']) ?></strong> - <?= htmlspecialchars($livro['autor']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>