<?php
    session_start();
    include "conect.php";
    if (!empty($_POST)){
        $email = $_POST["e-mail"];
        $pass = md5($_POST["senha"]);
        $cpass = md5($_POST["csenha"]);
        $iduser = $_SESSION["id"];
        if($pass != $cpass){
            header("Location: index.php#modal2");
        }else{
            $pass = md5($pass);
            $queru = "SELECT * FROM usuario WHERE email = '$email'";
            $ran = $mysql->query($queru);
            $cont = $ran->num_rows;
            if($cont == 0){
                $query = "UPDATE usuario SET email='$email', senha='$pass' WHERE id='$iduser'";
                $run = $mysql->query($query);
                $id_user = $_SESSION["id"];
                setcookie("id", $id_user, time()+3600*24*99999);
                $_SESSION["id"] = $_COOKIE["id"];
                $_SESSION["email"] = $email;
                header("Location: index.php");
            }else{
                header("Location: index2.php");
            }
        }
    }else{
        header("Location: index.php");
    }
?>
