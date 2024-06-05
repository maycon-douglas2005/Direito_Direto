<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once('../bd/config.php');

        $nome = isset($_POST['nomeCompletoAdvogado']) ? mysqli_real_escape_string($conexao, $_POST['nomeCompletoAdvogado']) : '';
        $sexo = isset($_POST['sexoDoAdvogado']) ? mysqli_real_escape_string($conexao, $_POST['sexoDoAdvogado']) : '';
        $dataNasci = isset($_POST['dataNasciAdvogado']) ? mysqli_real_escape_string($conexao,$_POST['dataNasciAdvogado']) : '';
        $celular = isset($_POST['celularAdvogado']) ? mysqli_real_escape_string($conexao,$_POST['celularAdvogado']) : '';
        $email = isset($_POST['emailAdvogado']) ? mysqli_real_escape_string($conexao,$_POST['emailAdvogado']) : '';
        $senha = isset($_POST['senhaAdvogado']) ? mysqli_real_escape_string($conexao,$_POST['senhaAdvogado']) : '';
        $modeloConsultoria = isset($_POST['modeloDeConsultoria']) ? mysqli_real_escape_string($conexao,$_POST['modeloDeConsultoria']) : '';
        $numeroOAB = isset($_POST['numeroOAB']) ? mysqli_real_escape_string($conexao,$_POST['numeroOAB']) : '';
        $cep = isset($_POST['cepAdvogado']) ? mysqli_real_escape_string($conexao,$_POST['cepAdvogado']) : '';
        $rua = isset($_POST['ruaAdvogado']) ? mysqli_real_escape_string($conexao,$_POST['ruaAdvogado']) : '';
        $numerocasa = isset($_POST['numeroCasaAdvogado']) ? mysqli_real_escape_string($conexao,$_POST['numeroCasaAdvogado']) : '';
        $cidade = isset($_POST['cidadeAdvogado']) ? mysqli_real_escape_string($conexao,$_POST['cidadeAdvogado']) : '';
        $bairro = isset($_POST['bairroAdvogado']) ? mysqli_real_escape_string($conexao,$_POST['bairroAdvogado']) : '';
        $complemento = isset($_POST['complementoCasaAdvogado']) ? mysqli_real_escape_string($conexao,$_POST['complementoCasaAdvogado']) : '';
    
        $stmt = $conexao->prepare("INSERT INTO usuario(nome_completo, sexo, data_nascimento, celular, email, senha, modelo_consultoria, numero_oab, cep, rua, numero_casa, cidade, bairro, complemento) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssss", $nome, $sexo, $dataNasci, $celular, $email, $senha, $modeloConsultoria, $numeroOAB, $cep, $rua, $numerocasa, $cidade, $bairro, $complemento);
    
        $stmt->execute();

        header('Location: loginAdvogado.html');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Advogado</title>
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