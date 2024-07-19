<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container text-center">
        <h1>Cadastro de Pessoas</h1>
    </div>
    <div class="container">
        <form action="" method="post"></form>
        <label for="">Nome:</label>
        <input class="form-control" type="text">
        <label for="">Endereço:</label>
        <input class="form-control" type="text">
        <label for="">Estado:</label> <!-- Selecione o Estado -->
        <select class="form-select" aria-label="Default select example">
            <option selected>Selecione o Estado</option>
            <option value="1">Acre</option>
            <option value="2">Alagoas</option>
            <option value="4">Amazonas</option>
            <option value="5">Bahia</option>
            <option value="6">Ceará</option>
            <option value="7">Distrito Federal</option>
            <option value="8">Espírito Santo </option>
            <option value="9">Goiás</option>
            <option value="10">Maranhão</option>
            <option value="11">Mato Grosso</option>
            <option value="12">Mato Grosso do Sul</option>
            <option value="13">Minas Gerais</option>
            <option value="14">Pará</option>
            <option value="15">Paraíba</option>
            <option value="16">Paraná</option>
            <option value="17">Pernambuco</option>
            <option value="18">Piauí</option>
            <option value="19">Rio de Janeiro</option>
            <option value="20">Rio Grande do Norte</option>
            <option value="21">Rio Grande do Sul</option>
            <option value="22">Rondônia</option>
            <option value="23">Roraima</option>
            <option value="24">Santa Catarina</option>
            <option value="25">São Paulo</option>
            <option value="26">Sergipe</option>
            <option value="27">Tocantins</option>
        </select>
        <label for="">Cidade:</label>
        <input class="form-control" type="text">
        <label for="">Telefone:</label>
        <input class="form-control" type="text">
        <label for="">Email:</label>
        <input class="form-control" type="text">
        <label for="">Data de Nascimento:</label>
        <input class="form-control" type="date" name="" id="">
        <label for="">CPF:</label>
        <input class="form-control" type="text">
        <label for="">Senha:</label>
        <input class="form-control" type="text">
        <label for="">Repetir Senha:</label>
        <input class="form-control" type="text">

        <input class="form-control btn btn-success" type="submit" value="Cadastrar">
        <input class="form-control btn btn-secondary" type="reset" value="Voltar">
    </div>
</body>

</html>