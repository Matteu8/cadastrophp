<?php
    if(isset($_POST["bt_nome"])){   
        
    $nome = $_POST["bt_nome"];
    
    $endereco = $_POST["bt_endereco"];
    
    $estados = $_POST["estados"];

    $cidade = $_POST["cidade"];

    $telefone = $_POST["telefone"];

    $email = $_POST["email"];

    $nasc = $_POST["nasc"];

    $cpf = $_POST["cpf"];

    $senha = $_POST["senha"];

    $rep_senha = $_POST["rep_senha"];
    
    
    
    
}

?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste - Banco</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Css/style.php" />

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container text-center">
    <h1>Dados</h1>
    </div>
    <div class="container">
        <p>Nome: <?php echo $nome ?></p>
        <p>Endereço: <?php echo $endereco ?></p>
        <p>Estado: <?php echo $estados ?></p>
        <p>Cidade: <?php echo $cidade ?></p>
        <p>Telefone: <?php echo $telefone ?></p>
        <p>Email: <?php echo $email ?></p>
        <p>Data de Nascimento: <?php echo $nasc ?></p>
        <p>CPF: <?php echo $cpf ?></p>
        <p>Senha: <?php echo $senha ?></p>
        
        <a class="form-control btn btn-secondary" href="index.php">Voltar</a>
        
    </div>
</body>

</html>