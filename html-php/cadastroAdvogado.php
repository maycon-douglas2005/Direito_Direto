<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once('../bd/config.php');

        $nome = isset($_POST['nomeCompletoadvogado']) ? mysqli_real_escape_string($conexao, $_POST['nomeCompletoadvogado']) : '';
        $sexo = isset($_POST['sexoDoadvogado']) ? mysqli_real_escape_string($conexao, $_POST['sexoDoadvogado']) : '';
        $dataNasci = isset($_POST['dataNasciadvogado']) ? mysqli_real_escape_string($conexao,$_POST['dataNasciadvogado']) : '';
        $celular = isset($_POST['celularadvogado']) ? mysqli_real_escape_string($conexao,$_POST['celularadvogado']) : '';
        $email = isset($_POST['emailadvogado']) ? mysqli_real_escape_string($conexao,$_POST['emailadvogado']) : '';
        $senha = isset($_POST['senhaadvogado']) ? mysqli_real_escape_string($conexao,$_POST['senhaadvogado']) : '';
        $modeloConsultorio = '';
        $numeroOAB = '';
        $cep = isset($_POST['cepadvogado']) ? mysqli_real_escape_string($conexao,$_POST['cepadvogado']) : '';
        $rua = isset($_POST['ruaadvogado']) ? mysqli_real_escape_string($conexao,$_POST['ruaadvogado']) : '';
        $numerocasa = isset($_POST['numeroCasaadvogado']) ? mysqli_real_escape_string($conexao,$_POST['numeroCasaadvogado']) : '';
        $cidade = isset($_POST['cidadeadvogado']) ? mysqli_real_escape_string($conexao,$_POST['cidadeadvogado']) : '';
        $bairro = isset($_POST['bairroadvogado']) ? mysqli_real_escape_string($conexao,$_POST['bairroadvogado']) : '';
        $complemento = isset($_POST['complementoCasaadvogado']) ? mysqli_real_escape_string($conexao,$_POST['complementoCasaadvogado']) : '';
    
        $stmt = $conexao->prepare("INSERT INTO usuario(nome_completo, sexo, data_nascimento, celular, email, senha, modelo_consultoria, numero_oab, cep, rua, numero_casa, cidade, bairro, complemento) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssss", $nome, $sexo, $dataNasci, $celular, $email, $senha, $modeloConsultorio, $numeroOAB, $cep, $rua, $numerocasa, $cidade, $bairro, $complemento);
    
        $stmt->execute();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do advogado</title>
    <link rel="stylesheet" href="../css/cadAdvogado.css">
</head>

<body>
    <header>
        <img src="../img/logo.png" alt="Logo da Empresa">

        <nav class="link1">
            <a href="comoVoceSeIdentificaCadastro.html">Cadastrar-se</a> |
            <a href="comoVoceSeIdentificaLogin.html">Login</a>
        </nav>
        <nav class="link2">
            <a href="../index.html">Página Inicial</a> |
            <a href="">Busca</a> |
            <a href="">Sobre</a>
        </nav>
    </header>
    <main>
        <div class="retangulo">
            <h1 class="titulo">Preencha Seus Dados</h1>
            <h2 class="subtitulo1">Dados Cadastrais</h2>
            
            <form class="formulario" action="" method="POST">
                
                <div class="divCaixaNome">
                    <label for="nomeCompletoadvogado">Nome Completo: </label>
                    <input required type="text" id="nomeCompletoadvogado" name="nomeCompletoadvogado" size="70">
                </div>
                <div class="divCaixaData">
                    <label for="dataNasciadvogado">Data de Nascimento: </label>
                    <input required type="date" id="dataNasciadvogado" name="dataNasciadvogado">
                </div>
                
                <div class="divCelularadvogado">
                    <label class="divCelularadvogado" for="celularadvogado">Celular:</label>
                    <input class="divCelularadvogado" type="tel" id="celularadvogado" name="celularadvogado">
                </div>
                <div class="divSexoadvogado">
                    <label for="sexoDoadvogado">Sexo:</label>
                    <select id="sexoDoadvogado" name="sexoDoadvogado">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
                <div class="divEmailadvogado">
                    <label for="emailadvogado">E-mail: </label>
                    <input type="email" id="emailadvogado" name="emailadvogado" size="34">
                </div>
                <div class="divSenhaadvogado">
                    <label for="senhaadvogado">Senha: </label>
                    <input type="password" id="senhaadvogado" name="senhaadvogado" size="34">
                </div>
                <div class="divModeloDeTrabalho">
                    <label for="modeloDeTrabalho">Modelo de Consultoria: </label>
                    <select name="modeloDeTrabalho">
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
                <div class="divCepadvogado">
                    <label for="cepadvogado">CEP: </label>
                    <input type="text" id="cepadvogado" name="cepadvogado">
                </div>
                <div class="divBairroadvogado">
                    <label for="bairroadvogado">Bairro: </label>
                    <input type="text" id="bairroadvogado" name="bairroadvogado" size="33">
                </div>
                <div class="divRuaadvogado">
                    <label for="ruaadvogado">Rua: </label>
                    <input type="text" id="ruaadvogado" name="ruaadvogado" size="30">
                </div>
                <div class="divNumeroCasaadvogado">
                    <label for="numeroCasaadvogado">Número: </label>
                    <input type="number" id="numeroCasaadvogado" name="numeroCasaadvogado">
                </div>
                <div class="divCidadeadvogado">
                    <label for="cidadeadvogado">Cidade: </label>
                    <input type="text" id="cidadeadvogado" name="cidadeadvogado">
                </div>
                <div class="divComplementoCasaadvogado">
                    <label for="complementoCasaadvogado">Complemento: </label>
                    <input type="text" id="complementoCasaadvogado" name="complementoCasaadvogado" size="26">
                </div>
                <div class="divBotaoEnviar">
                    <input class="botaoEnviar" type="submit" value="Enviar">
                </div>

            </form>
        </div>
    </main>
</body>

</html>