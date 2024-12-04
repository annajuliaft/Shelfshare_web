<?php require "php/verifica.php"; ?>
</!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastrarlivros.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Cadastrar Livros</title>
</head>
<body>

    <?php require_once('navbar.php'); ?>

    <div class="main-container">

        <div class="main">
            <!-- esquerda do body, para modificar só na esquerda -->
            <div class="esquerda">
                <h1>Insira a Capa do Livro</h1>

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
                <div class="itens_cadastro">
                    <!-- Campos de formulario para o cadastro do livro -->
                    <label for="name_livro" class="livro">Nome do livro</label><br>
                    <input type="text" class="form-control" name="name_livro" id="input_livro" aria-describedby="nomeLivroHelp"/><br>
                    
                    <label for="name_autor" class="autor">Autor</label><br>
                    <input type="text" class="form-control" name="name_autor" id="input_autor" aria-describedby="nomeAutorHelp"/><br>
                    
                    <label for="name_editora" class="editora">Editora</label><br>
                    <input type="text" class="form-control" name="name_editora" id="input_editora" aria-describedby="nomeEditoraHelp"/><br>
                </div>

                <!-- Seletor de gênero do livro -->
                <div class="selector">
                    <label for="genero" class="genero">Gênero</label><br>
                    <select class="form-select" aria-label=".form-select-sm" id="seletor" name="genero">
                        <option value="1">Romance</option>
                        <option value="2">Suspense</option>
                        <option value="3">Terror</option>
                        <option value="4">Biografia</option>
                        <option value="5">Ação</option>
                        <option value="6">Crônicas</option>
                        <option value="7">Científico</option>
                        <option value="8">Ficção</option>
                        <option value="9">Infantil</option>
                        <option value="10">Poesia</option>
                    </select>
                </div>

                <!-- Campo de texto para descrição -->
                <div class="sinopse">
                    <label for="descricao" class="descricao">Descrição</label><br>
                    <textarea type="descricao" class="form-control" name="descricao" id="input_descricao"></textarea>
                </div>
                <div class="btn_cadastrar">
                    <a href="perfil.php"><button class="cadastrar">Cadastrar</button></a>
                </div>
            </div>    
        </div>
    </div>
    <?php require_once('footer.php'); ?>
       

</body>
</html>
