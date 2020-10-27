<?php
session_start();
session_id();
include('db/db.php');

if(empty($_POST['username']) || empty($_POST['password'])){
  header('Location: index.php');
  $_SESSION['error_vazio'] = true;
  exit();
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "SELECT * FROM usuarios WHERE BINARY usuarios.username = '{$username}' AND BINARY usuarios.password 
      = '{$password}' ";

$result = mysqli_query($conn, $query);
$dado = mysqli_fetch_array($result);
$row = mysqli_num_rows($result);

if($row > 0){
  $_SESSION['username'] = $username;
  $_SESSION['nome'] = $dado["nome"];
  $_SESSION['foto'] = $dado["foto"];
  $_SESSION['id_user'] = $dado["id_user"];
  $_SESSION['access_level'] = $dado["access_level"];

  if ($_SESSION['access_level'] == 'Suporte'){
    header('Location: index.php');
    exit();
  }
  if ($_SESSION['access_level'] == 'Administrador'){
  header('Location: vv/dashboard.php');
  exit();
  }
  if ($_SESSION['access_level'] == 'Desativado'){
    header('Location: index.php');
    $_SESSION['permissao_negada'] = true;
    exit();
    }

  exit();
}else{
  $_SESSION['error_authentication'] = true;
  header('Location: index.php');

  exit();

}

?>