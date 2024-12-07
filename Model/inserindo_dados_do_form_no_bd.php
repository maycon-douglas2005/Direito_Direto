<?php
include('config.php');
session_start(); 

    try{
        if(isset($_POST['numeroOAB'])){   

            $nome = $_POST['nomeCompleto'];
            $sexo = $_POST['sexo'];
            $dataNasci = $_POST['dataNasci'];
            $celular = $_POST['celular'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $modeloConsultoria = $_POST['modeloDeConsultoria'];
            $numeroOAB = $_POST['numeroOAB'];
            $especialidade = $_POST['especialidade'];
            $cep = $_POST['cep'];
            $rua = $_POST['rua'];
            $numero_casa = $_POST['numero_casa'];
            $cidade = $_POST['cidade'];
            $bairro = $_POST['bairro'];
            $complemento = $_POST['complementoCasa'];
            
            $imagem = '../public/fotos_de_perfis_dos_advogados/' . $_FILES['imagem']['name'];
            move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
            
            $imagem_fundo = '../public/fotos_de_fundo_dos_advogados/fotoNaoInserida.png';
            
            $inserir = $conexao->prepare("INSERT INTO advogados (nome, data_nasci, sexo, celular, `e-mail`, senha, modelo_consultoria, numero_oab, especialidade, cep, rua, numero_casa, cidade, bairro, complemento, imagem, imagem_fundo) 
            VALUES (:nome, :dataNasci, :sexo, :celular, :email, :senha, :modeloConsultoria, :numeroOAB, :especialidade, :cep, :rua, :numero_casa, :cidade, :bairro, :complemento, :imagem, :imagem_fundo)");
            
            $inserir->bindParam(':nome', $nome);
            $inserir->bindParam(':dataNasci', $dataNasci);
            $inserir->bindParam(':sexo', $sexo);
            $inserir->bindParam(':celular', $celular);
            $inserir->bindParam(':email', $email);
            $inserir->bindParam(':senha', $senha);
            $inserir->bindParam(':modeloConsultoria', $modeloConsultoria);
            $inserir->bindParam(':numeroOAB', $numeroOAB);
            $inserir->bindParam(':especialidade', $especialidade);
            $inserir->bindParam(':cep', $cep);
            $inserir->bindParam(':rua', $rua);
            $inserir->bindParam(':numero_casa', $numero_casa);
            $inserir->bindParam(':cidade', $cidade);
            $inserir->bindParam(':bairro', $bairro);
            $inserir->bindParam(':complemento', $complemento);
            $inserir->bindParam(':imagem', $imagem);
            $inserir->bindValue(':imagem_fundo', $imagem_fundo); 
            
            $inserir->execute();      
            
        } 
         else { 
            
                $nome = $_POST['nomeCompleto'];
                $sexo = $_POST['sexo'];
                $dataNasci = $_POST['dataNasci'];
                $celular = $_POST['celular'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $cep = $_POST['cep'];
                $rua = $_POST['rua'];
                $numero_casa = $_POST['numero_casa'];
                $cidade = $_POST['cidade'];
                $bairro = $_POST['bairro'];
                $complemento = $_POST['complementoCasa'];

                $imagem = '../public/fotos_de_perfis_dos_advogados/' . $_FILES['imagem']['name'];
                move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
                
                // FOTO DE FUNDO ->  $imagem_fundo = '../public/fotos_de_fundo_dos_advogados/fotoNaoInserida.png';



                $inserir = $conexao->prepare("INSERT INTO clientes(nome, data_nasci, sexo, celular, `e-mail`, senha, cep, rua, numero_casa, cidade, bairro, complemento, imagem) 
                VALUES (:nome, :dataNasci, :sexo, :celular, :email, :senha, :cep, :rua, :numero_casa, :cidade, :bairro, :complemento, :imagem)");
                $inserir->bindParam(':nome', $nome);
                $inserir->bindParam(':dataNasci', $dataNasci);
                $inserir->bindParam(':sexo', $sexo);
                $inserir->bindParam(':celular', $celular);
                $inserir->bindParam(':email', $email);
                $inserir->bindParam(':senha', $senha);
                $inserir->bindParam(':cep', $cep);
                $inserir->bindParam(':rua', $rua);
                $inserir->bindParam(':numero_casa', $numero_casa);
                $inserir->bindParam(':cidade', $cidade);
                $inserir->bindParam(':bairro', $bairro);
                $inserir->bindParam(':complemento', $complemento);
                $inserir->bindParam(':imagem', $imagem);


                $inserir->execute();

    } 
} catch(PDOException $e){
    echo "Erro: " . $e;
} 