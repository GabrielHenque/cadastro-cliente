<?php


    // Processamento do formulário para edição
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $novo_nome = $_POST["nome"];
    $novo_email = $_POST["email"];
    $novo_telefone = $_POST["telefone"];
    $novo_descricao = $_POST["descricao"];

    // Query SQL para atualizar os dados do cliente
    $sql = "UPDATE clientes SET nome = :novo_nome, email = :novo_email, telefone = :novo_telefone, descricao = :novo_descricao WHERE id = :cliente_id";
    $stmt = $pdo->prepare($sql);

    // Bind dos parâmetros
    $stmt->bindParam(':novo_nome', $novo_nome, PDO::PARAM_STR);
    $stmt->bindParam(':novo_email', $novo_email, PDO::PARAM_STR);
    $stmt->bindParam(':novo_telefone', $novo_telefone, PDO::PARAM_STR);
    $stmt->bindParam(':novo_descricao', $novo_descricao, PDO::PARAM_STR);
    $stmt->bindParam(':cliente_id', $cliente_id, PDO::PARAM_INT);

    // Executa a atualização
    try {
        $stmt->execute();
        echo "Dados do cliente atualizados com sucesso.";
    } catch (PDOException $e) {
        echo "Erro ao atualizar dados do cliente: " . $e->getMessage();
    }
}

?>