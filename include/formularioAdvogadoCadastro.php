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