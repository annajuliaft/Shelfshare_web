<?php require "php/verifica.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/salvos.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script rel="js/resultados.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Salvos</title>
</head>
<body>
    <?php require_once('navbar.php'); ?>
     <!-- Insere o banner -->
    <img src="img/bannerR (1).jpeg" alt="bannerresultados">

    <div class="container">
     <!-- Exibe uma galeria de itens, cada um representando um livro com imagem, título, nome do usuário que salvou e os dados -->
        <div class="livros">
            <div class="item">
                <img src="img/a5passosdevc.jpg" alt="A cinco passos de você">
                <div class="caption">A cinco passos de você</div>
                <p>Usuário:@beatrizz</p>
                <p>Data: 17/10/2024</p>
            </div>
            <div class="item">
                <img src="img/asmusicasquevocenuncaouviu.jpg" alt="As músicas que você nunca ouviu">
                <div class="caption">As músicas que você nunca ouviu</div>
                <p>Usuário:@joana123</p>
                <p>Data: 17/10/2024</p>
            </div>
            <div class="item">
                <img src="img/emrotadecolisao.jpg" alt="Em rota de colisão">
                <div class="caption">Em rota de colisão</div>
                <p>Usuário:@caiosantos</p>
                <p>Data: 17/10/2024</p>
            </div>
            <div class="item">
                <img src="img/eueessemeucoracao.jpg" alt="Eu e esse meu coração">
                <div class="caption">Eu e esse meu coração</div>
                <p>Usuário:@annaju89</p>
                <p>Data: 17/10/2024</p>
            </div>
            <div class="item">
                <img src="img/quebrandogelo.jpg" alt="Quebrando o gelo">
                <div class="caption">Quebrando o gelo</div>
                <p>Usuário:@67junior</p>
                <p>Data: 17/10/2024</p>
            </div>
            <div class="item">
                <img src="img/imperfeitos.jpg" alt="Imperfeitos">
                <div class="caption">Imperfeitos</div>
                <p>Usuário:@kaua32</p>
                <p>Data: 17/10/2024</p>
            </div>
        </div>
       
    </div>
    <?php require_once('footer.php'); ?>


</body>
</html>