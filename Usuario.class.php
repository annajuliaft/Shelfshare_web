<?php
// Classe com funções para logar, sair e verificar se o usuário está logado

class Usuario{
    public function logar($email, $senha): bool{
        global $pdo; // Recebendo a varável global

        // Verificando se o usuário e senha existem no banco de dados, e bindando valores para evitar SQL Injection
        $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":email", $email, PDO::PARAM_STR);
        $sql->bindValue(":senha", $senha, PDO::PARAM_STR);
        $sql->execute();

        if($sql->rowCount() > 0){ // Se retornar algum valor, o usuário existe
            $dado = $sql->fetch(); // Fetch: Cria um array recebendo os dados do usuário
            
            $_SESSION['id'] = $dado['id']; // Criando uma sessão para o ID do usuário

            return true;
        }
        else{
            return false;
        }
    }

    public function sair(): void{
        session_destroy(); // Destrói a sessão
        header(header: "Location: login.php"); // Redireciona para a página de login
    }

    public function logged($id): array{
        global $pdo; // Recebendo a variável global

        $array = array(); // Criando um array vazio 

        $sql = "SELECT username FROM usuario WHERE id = :id"; // Selecionando todos os dados do usuário pelo ID
        $sql = $pdo->prepare(query: $sql);
        $sql->bindValue(param: "id", value: $id);
        $sql->execute();

        if($sql->rowCount() > 0){ // Se retornar algum valor, o usuário existe
            $array = $sql->fetch(); // Fetch: Cria um array recebendo os dados do usuário
        }

        return $array;
    }

    public function verEmail($email){
        global $pdo;
        $sql = "SELECT * FROM usuario WHERE email = :email";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            return false;
        }
        else{
            return true;
        }
    }

    public function cadastrar($username, $email, $telefone, $senha){
        global $pdo;
        try {
            echo "Email: " . $email; // Adicionar para depuração
            $sql = "INSERT INTO `usuario` (`id`, `username`, `email`, `telefone`, `senha`) VALUES (:id, :username, :email, :telefone, :senha)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":id", null, PDO::PARAM_INT);
            $sql->bindValue(":username", $username, PDO::PARAM_STR);
            $sql->bindValue(":email", $email, PDO::PARAM_STR);
            $sql->bindValue(":telefone", $telefone, PDO::PARAM_STR);
            $sql->bindValue(":senha", $senha, PDO::PARAM_STR);
            $sql->execute();
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}
?>