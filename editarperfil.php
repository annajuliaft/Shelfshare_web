<?php require "verifica.php"; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editarperfil.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>Editar Perfil</title>
</head>
<body>
    <?php require_once('navbar.php'); ?>
    <div class="main-container">
        <div class="main">
            <!-- esquerda do body, para modificar só na esquerda -->
            <div class="esquerda">
                
                <h1>Editar Foto</h1>
                <form class="file-upload-form"> <!-- Formulário para upload de imagem -->
                    <label for="file" class="file-upload-label">
                    <div class="file-upload-design">
                        <svg viewBox="0 0 640 512" height="1em">
                            <path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z">
                            </path>
                        </svg>
                        <p>Arraste e solte</p>
                        <p>ou</p>
                        <span class="browse-button">Procurar documentos</span>
                    </div>
                    <input id="file" type="file" />
                    </label>
                </form>
               
            </div>

            <!--  direita do body -->
            <div class="direita">
                <div class="itens_editar">
                    <!-- Campos de formulario para editar dados -->
                    <label for="name_user" class="user">Nome de Usuário</label><br>
                    <input type="text" class="form-control" name="name_user" id="input_user" aria-describedby="userHelp"/><br>
                    
                    <label for="e_mail" class="email">E-mail</label><br>
                    <input type="mail" class="form-control" name="e_mail" id="input_email" aria-describedby="emailHelp"/><br>
                    
                    <label for="telefone" class="telefone">Telefone</label><br>
                    <input type="tel" class="form-control" name="telefone" id="input_telefone" aria-describedby="telefoneHelp"/><br>
                </div>

               
                <div class="btn_editar">
                    <a href="perfil.php"><button class="editar">Editar</button></a>
                </div>
            </div>    
        </div>
    </div> 
    <?php require_once('footer.php'); ?>   

</body>
</html>
