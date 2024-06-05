<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // CONEXÃO COM O BANCO DE DADOS
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bd_cadastro";

    $conn = new mysqli($servername,$username,$password,$dbname);
    
    if ($conn->connect_error){
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // captura os dados do formulario
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $descricao = $_POST["descricao"];

        // SQL PARA INSERIR OS DADOS COLETADOS NA TABELA CLIENTES
        $sql = "INSERT INTO clientes (nome, email, telefone, descricao) VALUES ('$nome', '$email', '$telefone', '$descricao')";

        if ($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao Cadastar: " . $conn->error;
        }

        $conn->close();


}
?>
        <a href="index.php">Voltar</a>