<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $nome = $_SESSION["bt_nome"];

    $endereco = $_SESSION["bt_endereco"];

    $estados = $_SESSION["estados"];

    $cidade = $_SESSION["cidade"];

    $telefone = $_SESSION["telefone"];

    $email = $_SESSION["email"];

    $nasc = $_SESSION["nasc"];

    $cpf = $_SESSION["cpf"];

    $senha = $_SESSION["senha"];


    /*
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
*/
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
    <div class="container text-bg-secondary p-3">
    <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Estado</th>
      <th scope="col">Cidade</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">CPF</th>
      <th scope="col">Senha</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><?php echo $nome ?></td>
      <td><?php echo $endereco ?></td>
      <td><?php echo $estados ?></td>
      <td><?php echo $cidade ?></td>
      <td><?php echo $telefone ?></td>
      <td><?php echo $email ?></td>
      <td><?php echo $nasc ?></td>
      <td><?php echo $cpf ?></td>
      <td><?php echo $senha ?></td>
    </tr>
    
  </tbody>
</table>
        
        <hr>
        <!-- 
        <p>Nome:</p>
        <p>Endereço:</p>
        <p>Estado:</p>
        <p>Cidade:</p>
        <p>Telefone:></p>
        <p>Email:</p>
        <p>Data de Nascimento:</p>
        <p>CPF:</p>
        <p>Senha:</p>
        -->
        <a class="form-control btn btn-info" href="index.php">Voltar</a>
        
    </div>
</body>

</html>