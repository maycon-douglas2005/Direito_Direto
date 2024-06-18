<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once('../bd/config.php');

        $nome = isset($_POST['nomeCompletoCliente']) ? mysqli_real_escape_string($conexao, $_POST['nomeCompletoCliente']) : '';
        $sexo = isset($_POST['sexoDoCliente']) ? mysqli_real_escape_string($conexao, $_POST['sexoDoCliente']) : '';
        $dataNasci = isset($_POST['dataNasciCliente']) ? mysqli_real_escape_string($conexao,$_POST['dataNasciCliente']) : '';
        $celular = isset($_POST['celularCliente']) ? mysqli_real_escape_string($conexao,$_POST['celularCliente']) : '';
        $email = isset($_POST['emailCliente']) ? mysqli_real_escape_string($conexao,$_POST['emailCliente']) : '';
        $senha = isset($_POST['senhaCliente']) ? mysqli_real_escape_string($conexao,$_POST['senhaCliente']) : '';
        $modeloConsultorio = '';
        $numeroOAB = '';
        $cep = isset($_POST['cepCliente']) ? mysqli_real_escape_string($conexao,$_POST['cepCliente']) : '';
        $rua = isset($_POST['ruaCliente']) ? mysqli_real_escape_string($conexao,$_POST['ruaCliente']) : '';
        $numerocasa = isset($_POST['numeroCasaCliente']) ? mysqli_real_escape_string($conexao,$_POST['numeroCasaCliente']) : '';
        $cidade = isset($_POST['cidadeCliente']) ? mysqli_real_escape_string($conexao,$_POST['cidadeCliente']) : '';
        $bairro = isset($_POST['bairroCliente']) ? mysqli_real_escape_string($conexao,$_POST['bairroCliente']) : '';
        $complemento = isset($_POST['complementoCasaCliente']) ? mysqli_real_escape_string($conexao,$_POST['complementoCasaCliente']) : '';
    
        $stmt = $conexao->prepare("INSERT INTO usuario(nome_completo, sexo, data_nascimento, celular, email, senha, modelo_consultoria, numero_oab, cep, rua, numero_casa, cidade, bairro, complemento) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssss", $nome, $sexo, $dataNasci, $celular, $email, $senha, $modeloConsultorio, $numeroOAB, $cep, $rua, $numerocasa, $cidade, $bairro, $complemento);
    
        $stmt->execute();

        header('Location: loginCliente.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cliente</title>
    <link rel="stylesheet" href="../css/cadPessoaFisica.css">
    <link rel="stylesheet" href="../css/cabecario.css">
</head>
<body>
    <?php include('../include/header.php');?>
    <main>
        <div class="retangulo">
            <h1 class="titulo">Preencha Seus Dados</h1>
            <h2 class="subtitulo1">Dados Cadastrais</h2>
            
            <form class="formulario" action="" method="POST">
            
    <div class="divCaixaNome">
        <label for="nomeCompletoCliente">Nome Completo: </label>
        <input required type="text" id="nomeCompletoCliente" name="nomeCompletoCliente" size="70">
    </div>
    <div class="divCaixaData">
        <label for="dataNasciCliente">Data de Nascimento: </label>
        <input required type="date" id="dataNasciCliente" name="dataNasciCliente">
    </div>
    <div class="divSexoCliente">
        <label for="sexoDoCliente">Sexo:</label>
        <select id="sexoDoCliente" name="sexoDoCliente">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select>
    </div>
    <div class="divCelularCliente">
        <label for="celularCliente">Celular:</label>
        <input type="tel" id="celularCliente" name="celularCliente">
    </div>
    <div class="divEmailCliente">
        <label for="emailCliente">E-mail: </label>
        <input type="email" id="emailCliente" name="emailCliente" size="34">
    </div> 
    <div class="divSenhaCliente">
        <label for="senhaCliente">Senha: </label>
        <input type="password" id="senhaCliente" name="senhaCliente" size="34">
    </div>
    <h2 class="subtitulo2">Endereço</h2>
    <div class="divCepCliente">
        <label for="cepCliente">CEP: </label>
        <input type="text" id="cepCliente" name="cepCliente">
    </div>
    <div class="divBairroCliente">
        <label for="bairroCliente">Bairro: </label>
        <input type="text" id="bairroCliente" name="bairroCliente" size="33">
    </div>
    <div class="divRuaCliente">
        <label for="ruaCliente">Rua: </label>
        <input type="text" id="ruaCliente" name="ruaCliente" size="30">
    </div>
    <div class="divNumeroCasaCliente">
        <label for="numeroCasaCliente">Número: </label>
        <input type="number" id="numeroCasaCliente" name="numeroCasaCliente">
    </div>
    <div class="divCidadeCliente">
        <label for="cidadeCliente">Cidade: </label>
        <input type="text" id="cidadeCliente" name="cidadeCliente">
    </div>
    <div class="divComplementoCasaCliente">
        <label for="complementoCasaCliente">Complemento: </label>
        <input type="text" id="complementoCasaCliente" name="complementoCasaCliente" size="26">
    </div>
    <div class="divBotaoEnviar">
        <input class="botaoEnviar" type="submit" value="Enviar">
    </div>

            </form>
        </div>
    </main>
</body>
</html>
