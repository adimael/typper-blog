<?php

if(isset($_POST['publicar'])){
  $titulo = $_POST['txttitulo'];
  $texto = $_POST['txttexto'];
  $imagem = $_FILES["img"];

     //Define a constante
     define('ROOT_PATH', dirname(__FILE__) . '/');

     if(isset($_FILES['img'])){
       $extensao = strtolower(substr($_FILES['img']['name'], -4));
       $novo_nome = rand().$_FILES['img']['name'];
       
       $diretorio = ROOT_PATH . "../../images/postagens/";
     
       if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
         echo "<script language='javascript'> window.alert('Você poderá enviar apenas arquivos '*.jpg;*.jpeg;*.gif;*.png''); </script>";
     
       if ( @move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$novo_nome) ){
         echo "<script language='javascript'> window.alert('Arquivo salvo com sucesso em: . $diretorio .'); </script>";
       }
       else
         echo "<script language='javascript'> window.alert('Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.'); </script>";
         }
         else{
             echo "<script language='javascript'> window.alert('Você poderá enviar apenas arquivos '*.jpg;*.jpeg;*.gif;*.png''); </script>";
     }
     
     }
   
   //CADASTRO DE USUÁRIOS
   $query = "INSERT INTO tb_postagens (titulo, texto, imagem, data) VALUES ('$titulo', '$texto', '$novo_nome', curDate() )";
   
   $result = mysqli_query($conn, $query);
   
   if($result == ''){
     //Mensagem Ocorreu um erro ao cadastrar!
     echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar!'); </script>";
     echo "<script language='javascript'> window.location='blog.php'; </script>";
   
   } else {
     //Mensagem de Salvo com Sucesso!
     echo "<script language='javascript'></script>";
     echo "<script language='javascript'> window.location='blog.php'; </script>";
   }
   
   }

?>