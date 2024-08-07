<?php

if(!isset($_SESSION)){
    session_start();
} 

?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="">

<head>
    <meta charset="UTF-8">
    <meta placeholder="" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Css/style.php"/>


    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container text-center">
        <h1 class="mt-3">Cadastro</h1>
    </div>
    <div class="container">
        <form action="" method="post">
            <label for="">Nome:</label>
            <input class="form-control" type="text" placeholder="Nome completo" name="bt_nome" required>
            <label for="">Telefone:</label>
            <input class="form-control" type="text" name="telefone" required>
            <label for="">Email:</label>
            <input class="form-control" type="text" placeholder="Ex. marcelo123@gmail.com" name="email" required>
            <label for="">CPF:</label>
            <input class="form-control" type="text" placeholder="Ex. 123.456.789-12" name="cpf" required>
            <label for="">Senha:</label>
            <input class="form-control" type="password" name="senha" required>
            <label for="">Repetir Senha:</label>
            <input class="form-control" type="password" name="rep_senha" required>
            
            <div class="container">
                <input class="form-control btn btn-success" type="submit" value="Cadastrar">
                <input class="form-control btn btn-secondary" type="reset" value="Redefinir">
            </div>
        </form>

    </div>