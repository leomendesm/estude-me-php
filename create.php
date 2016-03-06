<?php
    session_start();
    include "conect.php";
    $perm = $_SESSION["permi"];
    if (!empty($_POST) && $perm > 0){
        $nome = $_POST["nome"];
        $materia = $_POST["materia"];
        $frente = $_POST["frente"];
        $content = $_POST["content"];
        $query = "INSERT INTO aula(nome,materia,frente,conteudo) VALUES ('$nome','$materia','$frente','$content')";
        $run = $mysql->query($query);
        echo 1;
        exit;
    }else{
    header("location: index");
    }
?>
