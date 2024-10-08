<?php
    if(!isset($_SESSION)){
        session_start();
    }

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
        if(isset($_POST["senha"])){
          $senha = $_POST["senha"];
            $rep_senha = $_POST["rep_senha"];

        $_SESSION["bt_nome"] = $_POST["bt_nome"];

        $_SESSION["bt_endereco"] = $_POST["bt_endereco"];

        $_SESSION["estados"] = $_POST["estados"];

        $_SESSION["cidade"] = $_POST["cidade"];

        $_SESSION["telefone"] = $_POST["telefone"];

        $_SESSION["email"] = $_POST["email"];

        $_SESSION["nasc"] = $_POST["nasc"];

        $_SESSION["cpf"] = $_POST["cpf"];

        $_SESSION["senha"] = $_POST["senha"];

    }
        /* Senha */
    if(isset($senha)){
        if($senha === $rep_senha){

            
            header("Location:banco.php");
    
        }
        /* Fim Senha */
    }

?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta placeholder="" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

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
        <h1 class="mt-3">Cadastro de Pessoas</h1>
    </div>
    <div class="container">
        <form action="" method="post">
            <label for="">Nome:</label>
            <input class="form-control" type="text" placeholder="Nome completo" name="bt_nome" required>
            <label for="">Endereço:</label>
            <input class="form-control" type="text" placeholder="Ex. Rua Ceará Nunes" name="bt_endereco" required>
            <label for="">Estado:</label> <!-- Selecione o Estado -->
            <select class="form-select" id="estados" name="estados" required>
                <option selected>Selecione o Estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select><!-- FIM Selecione o Estado -->
            <label for="">Cidade:</label>
            <input class="form-control" type="text" name="cidade" required>
            <label for="">Telefone:</label>
            <input class="form-control" type="text" name="telefone" required>
            <label for="">Email:</label>
            <input class="form-control" type="text" placeholder="Ex. marcelo123@gmail.com" name="email" required>
            <label for="">Data de Nascimento:</label>
            <input class="form-control" type="date" name="nasc" id="nasc" required>
            <label for="">CPF:</label>
            <input class="form-control" type="text" placeholder="Ex. 123.456.789-12" name="cpf" required>
            <label for="">Senha:</label>
            <input class="form-control" type="password" name="senha" required>
            <label for="">Repetir Senha:</label>
            <input class="form-control" type="password" name="rep_senha" required>
            <?php
                if(isset($rep_senha)){
                    if($senha === $rep_senha){
                        
                    }else{
                        echo '<div class="container text-center"/>' ;
                        echo '<p class="text-center fs-3 text-danger ">Senha Inválida</p>';
                        echo "</div>";
                    }
                }
            ?>
            <div class="container">
                <input class="form-control btn btn-success" type="submit" value="Cadastrar">
                <input class="form-control btn btn-secondary" type="reset" value="Redefinir">
            </div>
        </form>

    </div>
</body>

</html>