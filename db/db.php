<?php

try{
  $conexao = new PDO('mysql:host=localhost;dbname=typperdb', 'root', '');
  $conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo 'ERROR: ' . $e->getMessage();
}

define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB', 'typperdb');

$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB) or die ('Não conectou ao banco de dados!');

?>