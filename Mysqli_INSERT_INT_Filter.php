<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "events";

    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	date_default_timezone_set('America/Sao_Paulo');
  $dEvents = date('H:i:s', time());
  $name = "Mysqli 2020";
	mysqli_query($conn, "INSERT INTO eventsOne (name, date) VALUES ('$name', '$dEvents') SELECT dateTwo FROM eventsTow WHERE dateTwo != '$dEvents'")
    if(mysqli_affected_rows($conn) == 1){ 
		  echo "success"
			}else{
			echo "erro", $conn->error;
	   }
	} else {
            echo "Erro, não possível inserir no banco de dados" , $conn->error;
    }
    mysqli_close($conn); //fecha conexão com banco de dados 
?>
