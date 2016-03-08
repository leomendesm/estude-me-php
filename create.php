<?php
    session_start();
    include "conect.php";
    $perm = $_SESSION["permi"];
    if (!empty($_POST)){
        $nome = $_POST["nome"];
        $materia = $_POST["materia"];
        $frente = $_POST["frente"];
        $content = urldecode($_POST["content"]);
        if(isset($nome)&&isset($materia)&&isset($frente)&&isset($content)){
        $iduser = $_SESSION["id"];
        $query = "INSERT INTO aula(nome,iduser,materia,frente,conteudo) VALUES ('$nome','$iduser','$materia','$frente','$content')";
        $run = $mysql->query($query);
        echo 1;
        exit;
        }
    }else{
    header("location: index");
    }
?>
