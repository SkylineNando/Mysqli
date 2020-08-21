<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "events";

    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	date_default_timezone_set('America/Sao_Paulo');
  $dEvents = date('H:i:s', time());
  
  mysqli_query($conn, "INSERT INTO events (events_name, start_date, expired_date)
VALUES
    (
        '2019 Summer Promotion',
        '20190601',
        '20190901'
    ),
    (
        '2019 Fall Promotion',
        '20191001',
        '20191101'
    ),
    (
        '2019 Winter Promotion',
        '20191201',
        '20200101'
    )")
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
