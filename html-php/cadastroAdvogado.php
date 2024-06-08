<?php include("/include/formularioAdvogadoCadastro.php") ?>
<?php include("/include/header.php") ?>
<?php include("/include/footer.php") ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro do Advogado</title>

    <link rel="stylesheet" href="../css/cabecario.css"> 
    <link rel="stylesheet" href="../css/cadAdvogado.css">
    <link rel="stylesheet" href="../css/footer.css">

</head>

<body>
    <main>
        <div class="retangulo">
            <h1 class="titulo">Preencha Seus Dados</h1>
            <h2 class="subtitulo1">Dados Cadastrais</h2>
            
            <form class="formulario" action="" method="POST">
                
                <div class="divCaixaNome">
                    <label for="nomeCompletoAdvogado">Nome Completo: </label>
                    <input required type="text" id="nomeCompletoAdvogado" name="nomeCompletoAdvogado" size="70">
                </div>
                <div class="divCaixaData">
                    <label for="dataNasciAdvogado">Data de Nascimento: </label>
                    <input required type="date" id="dataNasciAdvogado" name="dataNasciAdvogado">
                </div>
                
                <div class="divCelularAdvogado">
                    <label class="divCelularAdvogado" for="celularAdvogado">Celular:</label>
                    <input class="divCelularAdvogado" type="tel" id="celularAdvogado" name="celularAdvogado">
                </div>
                <div class="divSexoAdvogado">
                    <label for="sexoDoAdvogado">Sexo:</label>
                    <select id="sexoDoAdvogado" name="sexoDoAdvogado">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
                <div class="divEmailAdvogado">
                    <label for="emailAdvogado">E-mail: </label>
                    <input type="email" id="emailAdvogado" name="emailAdvogado" size="34">
                </div>
                <div class="divSenhaAdvogado">
                    <label for="senhaAdvogado">Senha: </label>
                    <input type="password" id="senhaAdvogado" name="senhaAdvogado" size="34">
                </div>
                <div class="divModeloDeTrabalho">
                    <label for="modeloDeConsultoria">Modelo de Consultoria: </label>
                    <select name="modeloDeConsultoria">
                        <option value="Presencial">Presencial</option>
                        <option value="Online">Online</option>
                        <option value="Híbrido">Híbrido</option>
                    </select>
                </div>
                <div class="divNumeroDaOab">
                    <label for="numeroOab">Número da OAB: </label>
                    <input type="text" name="numeroOAB">
                </div><br><br>
                
                <h2 class="subtitulo2">Endereço</h2>
                <br>
                <div class="divCepAdvogado">
                    <label for="cepAdvogado">CEP: </label>
                    <input type="text" id="cepAdvogado" name="cepAdvogado">
                </div>
                <div class="divBairroAdvogado">
                    <label for="bairroAdvogado">Bairro: </label>
                    <input type="text" id="bairroAdvogado" name="bairroAdvogado" size="33">
                </div>
                <div class="divRuaAdvogado">
                    <label for="ruaAdvogado">Rua: </label>
                    <input type="text" id="ruaAdvogado" name="ruaAdvogado" size="30">
                </div>
                <div class="divNumeroCasaAdvogado">
                    <label for="numeroCasaAdvogado">Número: </label>
                    <input type="number" id="numeroCasaAdvogado" name="numeroCasaAdvogado">
                </div>
                <div class="divCidadeAdvogado">
                    <label for="cidadeAdvogado">Cidade: </label>
                    <input type="text" id="cidadeAdvogado" name="cidadeAdvogado">
                </div>
                <div class="divComplementoCasaAdvogado">
                    <label for="complementoCasaAdvogado">Complemento: </label>
                    <input type="text" id="complementoCasaAdvogado" name="complementoCasaAdvogado" size="26">
                </div>
                <div class="divBotaoEnviar">
                    <input class="botaoEnviar" type="submit" value="Enviar">
                </div>

            </form>
        </div>
    </main>
</body>

</html>