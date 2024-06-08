<?php include("/include/formularioPessoaFisicaCadastro.php")?>
<?php include("/include/header.php")?>
<?php include("/include/footer.php") ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro do Cliente</title>
    
    <link rel="stylesheet" href="../css/cabecario.css"> 
    <link rel="stylesheet" href="../css/cadPessoaFisica.css">
    <link rel="stylesheet" href="../css/footer.css">
 
</head>
<body>
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
