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

        header('Location: loginCliente.html');
    }
?>