<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Listar de Clientes</h1>

    <?php

    // Conexão com Banco de Dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bd_cadastro";

        $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na Conexão com o Banco de Dados: " . $conn->$connect_error);
    }

    // Verificar se o cliente foi excluido
    if (isset($_GET["Excluido"]) && $_GET["Excluido"] == "true") {
        echo "<p>Clienter Excluido com Sucesso!</p>";

    }

    // SQL para selecionar todos os clientes
    $sql = "SELECT * FROM clientes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Descrição</th><th>Ações</th></tr>";

    

    while ($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["telefone"] . "</td>";
        echo "<td>" . $row["descricao"] . "</td>";
        echo "<td>";
        echo "<a href='editar_cliente.php?id=" , $row["id"] . "'>Editar</a>";        
        echo "|";
        echo "<a href='excluir_cliente.php?id=" , $row["id"] . "'>Editar</a>";
        echo "</td>";
        echo "<tr>";

    }
        echo "</table>";
    }

    else {
        echo "Nenhum cliente cadastrado.";
    }

    $conn->close();
    ?>
    
</body>
</html>