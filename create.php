<?php
    session_start();
    include "conect.php";
    $perm = $_SESSION["permi"];
    if (!empty($_POST)){
        $nome = $_POST["nome"];
        $materia = $_POST["materia"];
        $content =$_POST["content"];
        $iduser = $_SESSION["id"];
        $query = "INSERT INTO aula(nome,iduser,materia,conteudo) VALUES ('$nome','$iduser','$materia','$content')";
        $run = $mysql->query($query);
        echo 1;
        exit;
    }else{
    header("location: index");
    }
?>
