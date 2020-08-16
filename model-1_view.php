<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "services";
$user = "root";
$pass = "";
// conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass) or trigger_error(mysqli_error(),E_USER_ERROR); 
mysqli_select_db($con, $db);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM `services`");
// executa a query
$dados = mysqli_query($con, $query);
// transforma os dados em um array
$upServices = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
            echo $upServices['idServices']." - ".$upServices['item']";
        // finaliza o loop que vai mostrar os dados
        }while($upServices = mysqli_fetch_assoc($dados));
    // fim do if 
    }
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>
