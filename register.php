<?php
    session_start();
    include "conect.php";
    if (!empty($_POST)){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $pass = md5($_POST["senha"]);
        $cpass = md5($_POST["csenha"]);
        $ano = $_POST["ano"];
        $code = $_POST["code"];
        if($code == "profobj2016"){
            $perm = 1;
        }else{
          $perm = 0;
        };
        if($pass == $cpass){
            $pass = md5(md5($pass));
            $queru = "SELECT * FROM user WHERE email = '$email'";
            $ran = $mysql->query($queru);
            $cont = $ran->num_rows;
            if($cont == 0){
                $query = "INSERT INTO user(nome,email,senha,permi,ano) VALUES ('$nome','$email','$pass','$perm','$ano')";
                $run = $mysql->query($query);
                echo 1;
                exit;
            }else{
                echo 2;
            }
        }else{
            echo 3;
        }
    }else{
    header("location: index");
    }
?>
