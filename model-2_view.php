<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "services";
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
//Banco de dados
$services = "SELECT * FROM services ORDER BY item ASC";
$rservices = mysqli_query($conn, $services);
while($upServices = mysqli_fetch_assoc($rservices)){
			echo "<tr>
								<td>".$upServices['idServices']."</td>
								<td>".$upServices['item']."</td>
						</tr>";
};
?>
