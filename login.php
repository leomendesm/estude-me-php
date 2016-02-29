<?php
    include "conect.php";
    if(!empty($_POST)){
        $email=$_POST['email'];	//Pegando dados passados por AJAX
        $senha=$_POST['senha'];

      //Consulta no banco de dados
        $sql="select * from user where email='".$email."' and senha='".md5($senha)."'";
        $run = $mysql->query($sql);
        $fetch = $run->fetch_assoc();
        $cont = $run->num_rows;//
        if ($cont == 1){
             echo 1;	//Responde sucesso
            if(!isset($_SESSION)){ 	//verifica se há sessão aberta
            session_start();		//Inicia seção
            //Abrindo seções
            $_SESSION['id']=$fetch['id'];
            $_SESSION['nome']=$fetch['nome'];
            $_SESSION['permi']=$fetch['permi'];
            exit;
            }
        }
        else{
           echo 0;	//Se a consulta não retornar nada é porque as credenciais estão erradas
	   }
    }

   // $email = $_POST["email"]; $pass = md5($_POST["senha"]); $remember = $_POST["lembrar"]; $query = "SELECT * FROM user WHERE email = '$email' AND senha = '$pass'"; $run = $mysql->query($query); $cont = $run->num_rows; echo $cont; if($cont == 1){ $fetch = $run->fetch_assoc(); $id = $fetch["id"]; $_SESSION["id"] = $id; $id_user = $_SESSION["id"]; if(isset($remember)){ setcookie("id", $id_user, time()+3600*24*99999); $_SESSION["id"] = $_COOKIE["id"]; } $_SESSION["email"] = $email; header("Location: index.php"); }else{ //header("Location: login.php"); } }
?>
