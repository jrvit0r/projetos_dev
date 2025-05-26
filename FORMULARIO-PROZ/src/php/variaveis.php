<?php
include('funcao.php'); // chama a conexao BD
// Verifica se os dados foram submetidos via método POST
   
    // Recebe os dados do formulário e os armazena em variáveis
    $name = $_POST['name'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $DDD = $_POST['ddd'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    
echo "Recebi: ".$name."-".$cpf."-".$email."-".$DDD."-".$telefone."-".$genero."-".$pais."-".$estado."-".$cidade."-".$cep;
    // Prepara e executa a inserção dos dados no banco de dados
    $sql = "INSERT INTO ZeDaManga (`Nome`,`CPF`,`Sexo`,`DDD`,`Telefone`,`Email`,`Nacionalidade`,`Estado`,`Cidade`,`CEP`) VALUES ('$name', '$cpf', '$genero','$DDD','$telefone','$email','$pais','$estado','$cidade','$cep')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados recebidos!";
    } else {
        echo "Erro de entrada de dados: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
    ?>