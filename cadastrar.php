<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="css./cadastrar.css">
</head>
<body>
    <div id="cadastro">
        <h1>Cadastro De Clientes</h1>
        <form action="processa.php" method="POST">
        <input type="text" name="nome" id="nome" placeholder="nome">
        <input type="email" name="email" id="email" placeholder="E-mail">
        <input type="text" name="telefone" id="telefone" placeholder="Telefone">
        <textarea name="descricao" id="descricao" placeholder="Descrição"></textarea>
        <button id="btn">Enviar</button>
        <h6 id="botão-voltar"><a href="index.php">Index</a></h6>
        </form>
    </div>
</body>
</html>