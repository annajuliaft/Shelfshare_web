<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <title>Cadastro</title> 
        <meta name="description" content=""> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" async defer></script>
        <link rel="stylesheet" href="css/login.css"> 
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="main-login">
            <!-- Seção à esquerda com uma imagem -->
            <div class="left-login">
                <img src="img/logo.png" alt="Imagem de fundo" class="imgback"> 
            </div>
            <!-- Seção à direita com o formulário de cadastro -->
            <div class="right-login">
                <form class="card" action="php/cadastrar.php" method="POST">
                    <div class="card-head">
                        <div class="card-title">
                            <h1>Cadastro</h1> 
                        </div>    
                        <a href="login.php">Fazer Login</a> <!-- Link para a página de login -->
                    </div>  
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="username" class="form-label">Criar Nome de Usuário</label>
                            <input type="text" class="form-control" name="username" id="inputNome" placeholder="Usuário"/>
                            <p id="erroNome"></p> <!--exibir mensagens de erro -->
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelpId" placeholder="Email"/>
                            <p id="erroEmail"></p>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="telefone" class="form-control" name="telefone" id="inputTelefone" placeholder="Telefone"/>
                            <p id="erroEmail"></p>
                        </div>
                        <div class="mb-3">
                            <label for="inputSenha" class="form-label">Criar Senha</label>
                            <input type="password" class="form-control" name="senha" id="inputSenha" placeholder="Senha"/>
                            <p id="erroSenha"></p> 
                        </div>
                        <!-- Campo para confirmação de senha -->
                        <div class="mb-3">
                            <label for="inputConfirmarSenha" class="form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" name="confirmarSenha" id="inputConfirmarSenha" placeholder="Senha"/>
                            <p id="erroConfirmaSenha"></p> 
                        </div> 
                        <!-- Botão para concluir o cadastro -->
                        <button type="submit" class="btn btn-primary">Concluir Cadastro</button> 
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
