<?php

header("Content-Type: application/json; charset=UTF-8");

if(isset($_POST["dados"]))
{
    $obj = json_decode($_POST["dados"], false);
    $curso = $obj->curso;
    $vagas = $obj->vagas;
    $periodo = $obj->periodo;
    $conexao = new mysqli("localhost","root", "", "teste");
    $send = $conexao->query("Insert into cursos (curso, vagas, periodo) values ('$curso', $vagas, '$periodo')");
   
   
    $outp = $_POST;
}else{
    $outp = "{'Teste':'123'}";
}

echo json_encode($outp);