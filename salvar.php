<?php
    session_start();
    include "conect.php";

    if (!empty($_POST)){
        $nome = $_POST["nome"];
        $desc = $_POST["desc"];
        if(empty($desc)){
            $desc = " ";
        }
        $cat = $_POST["cate"];
        $data = date("d/m/Y");
        $valor = floatval ($_POST["valor"]);
        if($cat == "alimentacao"){
            $cor = "grey darken-1";
        }elseif($cat == "habitacao"){
            $cor = "blue-grey lighten-1";
        }elseif($cat == "vestuario"){
            $cor = "green darken-1";
        }elseif($cat == "transporte"){
            $cor = "blue darken-1";
        }elseif($cat == "saude"){
            $cor = "red darken-1";
        }elseif($cat == "recreacao"){
            $cor = "amber darken-1";
        }elseif($cat == "outros"){
            $cor = "teal darken-1";
        }
        $iduser = $_SESSION["id"];
        $query = "INSERT INTO transfer(nome,descr,valor,id_user,cate,cor,data) VALUES ('$nome','$desc','$valor','$iduser','$cat','$cor','$data')";
        $run = $mysql->query($query);
        header("Location: index.php");
        }else{
        header("Location: index.php");
    }
?>
