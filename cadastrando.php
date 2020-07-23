<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "novo";
    $conexao = mysqli_connect($servidor, $usuario, $senha,$banco);
	
    $nome = $_POST["nome"]; 
    $user = $_POST["user"];
    $email = $_POST["email"];
	mysqli_query($conexao, "INSERT INTO pessoa (id,nome,user,email) VALUES (null,'$nome','$user','$email')"); //Inserir dados 
    if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<p>Cadastro feito com sucesso</p>";
        echo '<a href="index.html">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro
    } else {
        echo "Erro, não possível inserir no banco de dados";
    }
    mysqli_close($conexao); //fecha conexão com banco de dados 
