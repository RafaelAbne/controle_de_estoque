<?php

function agendamentos(){
    require "config.php";
    $sql = "select count(cliente) from agendar";
    $declaracaoSql = $conexao->prepare($sql);
    $declaracaoSql->execute();
    $num = $declaracaoSql->fetch();

    foreach ($num as $value) {
        $valor = $value;
    }
    return $valor;
}


function clientes(){
    require "config.php";
    $sql = "select count(nome) from cadastro_clientes";
    $declaracaoSql = $conexao->prepare($sql);
    $declaracaoSql->execute();
    $num = $declaracaoSql->fetch();

    foreach ($num as $value) {
        $valor = $value;
    }
    return $valor;
}


function funcionarios(){
    require "config.php";
    $sql = "select count(nome) from cadastro_funcionario";
    $declaracaoSql = $conexao->prepare($sql);
    $declaracaoSql->execute();
    $num = $declaracaoSql->fetch();

    foreach ($num as $value) {
        $valor = $value;
    }
    return $valor;
}


?>