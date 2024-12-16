<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" async defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    <!-- Div principal para a página de login -->
        <div class="main-login">
            <div class="left-login">
            <!-- Coluna à esquerda contendo a imagem de fundo -->
                <img src="img/logo.png" alt="imagembackground" class="imgback">
            </div>
            <!-- Coluna à direita com o formulário de login -->
            <div class="right-login">
                <!-- Formulário de login que envia os dados para o arquivo 'logar.php' -->
                <form class="card" action="php/logar.php" method="POST">
                    <!-- Cabeçalho do cartão do formulário -->
                    <div class="card-head">
                        <div class="card-title">
                            <!-- Título principal do formulário -->
                            <h1>Login</h1>
                        </div>    
                        <a href="cadastro.php">Cadastre-se!</a>    
                    </div>
                    <!-- Corpo do formulário -->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email"/>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha" id="inputSenha" placeholder="Senha"/>
                        </div>
                        <!-- Botão de submissão do formulárioo -->
                        <button type="submit" class="btn btn-primary">Fazer Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>