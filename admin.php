<?php
require "../config.php";
session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$declaracaoSql = $conexao->prepare("SELECT * FROM admin WHERE usuario = ?");
$declaracaoSql->bindParam(1, $usuario);
$declaracaoSql->execute();
$usuario = $declaracaoSql->fetch(PDO::FETCH_ASSOC);


if ($senha == $usuario['senha']) {
    $_SESSION['admin'] = $usuario; 
      header('location:../../index.php');
      
}else{
     header('location:login.html');

}
