<?php require "verifica.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/perfil.js" defer></script>
</head>
<body>
<?php require_once('navbar.php'); ?>

    <!-- Container 1: Banner e Foto do Usuário -->
    <div class="banner-container">
        <div class="banner"></div>
        <div class="profile-pic">
            <img src="img/boy.jpg" alt="Foto do Usuário">
        </div>
    </div>

    <!-- Container 2: Informações do Perfil -->
    <div class="profile-info-container">
        <div class="profile-info">
            <?php echo "<h1>$username</h1>" ?> 
            <p class="bio">Leitor apaixonado por ficção e mistério. Sempre em busca de uma nova leitura inspiradora.</p>
            <div class="followers-following">
                <p><strong>200</strong> Seguidores</p>
                <p><strong>180</strong> Seguindo</p>
            </div>
            <!-- Ícone SVG clicável -->
            <div class="profile-actions">
                <a href="salvos.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                    <path d="M2 2v13.5l6-3.5 6 3.5V2z"/>
                </svg></a>
            </div>
            <!-- Botão de editar perfil -->
            <a href="editarperfil.php"><button class="edit-btn">Editar Perfil</button></a>
            <a href="logout.php"><button class="edit-btn">Sair</button></a>
            
        </div>
    </div>

    <!-- Container 3: Feed de Livros -->
    <div class="destaque">
        <h2>Livros</h2>
        <div class="livros">
            <div class="item">
                <p><strong>É assim que acaba</strong></p>
                <div class="image-wrapper">
                   <a href="dados.php"><img src="img/assim-acaba.jpg" alt="É assim que acaba"></a> 
                </div>
                <p><strong>Autor:</strong> Colleen Hoover</p>
            </div>

            <div class="item">
                <p><strong>É assim que acaba</strong></p>
                <div class="image-wrapper">
                    <img src="img/assim-acaba.jpg" alt="É assim que acaba">
                </div>
                <p><strong>Autor:</strong> Colleen Hoover</p>
            </div>

            <div class="item">
                <p><strong>É assim que acaba</strong></p>
                <div class="image-wrapper">
                    <img src="img/assim-acaba.jpg" alt="É assim que acaba">
                </div>
                <p><strong>Autor:</strong> Colleen Hoover</p>
            </div>

            <div class="item">
                <p><strong>É assim que acaba</strong></p>
                <div class="image-wrapper">
                    <img src="img/assim-acaba.jpg" alt="É assim que acaba">
                </div>
                <p><strong>Autor:</strong> Colleen Hoover</p>
            </div>

            <div class="item">
                <p><strong>É assim que acaba</strong></p>
                <div class="image-wrapper">
                    <img src="img/assim-acaba.jpg" alt="É assim que acaba">
                </div>
                <p><strong>Autor:</strong> Colleen Hoover</p>
            </div>

            <div class="item">
                <p><strong>É assim que acaba</strong></p>
                <div class="image-wrapper">
                    <img src="img/assim-acaba.jpg" alt="É assim que acaba">
                </div>
                <p><strong>Autor:</strong> Colleen Hoover</p>
            </div>
            <div class="item">
                <p><strong>É assim que acaba</strong></p>
                <div class="image-wrapper">
                    <img src="img/assim-acaba.jpg" alt="É assim que acaba">
                </div>
                <p><strong>Autor:</strong> Colleen Hoover</p>
            </div>
            <div class="item">
                <p><strong>É assim que acaba</strong></p>
                <div class="image-wrapper">
                    <img src="img/assim-acaba.jpg" alt="É assim que acaba">
                </div>
                <p><strong>Autor:</strong> Colleen Hoover</p>
            </div>
        </div>
    </div>
    <?php require_once('footer.php'); ?>

</body>
</html>
