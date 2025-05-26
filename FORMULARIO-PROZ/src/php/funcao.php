<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

include ('confg.php');
$tabela="ZeDaManga";  // informe a tabela 
$charset="utf8";
$conn = mysqli_connect($servername, $username, $senha,$database); // conecta banco de dados


// Check connection
if (mysqli_connect_errno())
  {
  $msg="Problemas com a conexão ao banco de dados";
 }
 $result = mysqli_query($conn,"SHOW TABLES LIKE '$tabela'");
 $existe = $result && $result->num_rows > 0;
 if ($existe<1) // se nao existir a tabela entao criaremos a tabela
 {
 	echo "<center><b>Criando a tabela de Cliente - ".$tabela." </center></b>";

   
   $query="CREATE TABLE $tabela (Nome varchar(255),
                                 CPF varchar(255),    
                                 Sexo values('M','F','I'),
                                 DDD int(2),
                                 Telefone int(9),
                                 Email varchar(255),
                                 Nacionalidade varchar(30),        
                                 Estado varchar(50),
                                 Cidade varchar(50),
                                 CEP int(11))";

echo "<b>Query tabela criada com sem sucesso".$query." </b>";


// cria tabela
   if ($result = mysqli_query($conn,$query))
   	{
   		$msg="<br><b><center>Tabela Criada com Sucesso! </b>";
   		$sql="ALTER DATABASE $tabela CHARSET = UTF8 COLLATE = utf8_general_ci";
         
   		$result = mysqli_query($conn,$sql);
   	} else 
   	{
   		echo("<enter><b>Problemas na criação da tabela".mysqli_connect_errno());
   	}
   
echo$msg;}


?>