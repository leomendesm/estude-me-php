<?php
    include "conect.php";
    if(!empty($_POST)){
        $email=$_POST['email'];	//Pegando dados passados por AJAX
        $senha=$_POST['senha'];

      //Consulta no banco de dados
        $sql="select * from user where email='".$email."' and senha='".md5(md5(md5($senha)))."'";
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
           echo 0;	//retorna erro.
	   }
    }
?>
