<?php
    // Verificara se o cliente foi selecionado para edição
    if (isset($_GET["id"])) {
        $cliente_id = $_GET["id"];

    // Conexão com o Banco de Dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bd_cadastro";

        $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na Conexão com o Banco de Dados: " . $conn->$connect_error);
    }

    // Obter os Dados do Client para edição
    $sql = "SELECT * FROM clientes WHERE id = $cliente_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $rows = $result->fetch_assoc();
    }

    else {
        echo "Cliente nâo encontrado.";
        exit;
    }

    // Processa o Formulario pra ediçâo
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $novo_nome = $_POST["nome"];
        $novo_email = $_POST["email"];
        $novo_telefone = $_POST["telefone"];
        $novo_descricao = $_POST["descricao"];

        // Atualizar os dados do cliente no Banco de Dados
        $sql = "UPDATE clientes SET nome = '$novo_nome', email = '$novo_email', telefone = '$novo_telefone', descricao = '$novo_descricao' WHERE id = $cliente_id";

    }

    }




?>