<!DOCTYPE html>
<?php
    session_start();
    include "conect.php";
    if(!isset($_SESSION["id"])){
        header('location: index');
    }
    $materia = $_GET["materia"];
    if($materia == "matematica"){
        $nomemateria = "Matemática";
    }
    $frente = $_GET["frente"];

?>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <title>Estude.me</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    </head>

    <body>
        <nav class="white" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo">Estude.me</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Iniciar Sessão</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#">Iniciar Sessão</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse grey-text text-darken-1"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container valign-wrapper">
                    <br>
                    <br>
                    <h2 class="center white-text text-lighten-1 title valign">Selecione uma matéria</h2>
                    <br>
                    <br>

                </div>
            </div>
            <div class="parallax"><img src="img/book2.jpg" alt="Unsplashed background img 1"></div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= $nomemateria." - Frente ".$frente ?></h4>
                    </li>
                    <?php
                        $query = "SELECT * FROM aula WHERE materia = '$materia' and frente = '$frente' ORDER BY id ASC";
                        $run = $mysql->query($query);
                            $cont = 0;
                        while($fetch = $run->fetch_assoc()){
                            ++$cont;
                            echo "<a href='aula.php?id=".$fetch["id"]."&cont=".$cont."' class='collection-item'>Aula ".$cont." - ".$fetch["nome"]."</a>";
                        }
                    ?>
                </ul>
            </div>
        </div>
        <footer class="page-footer grey darken-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Sobre o Estude.me</h5>
                        <p class="grey-text text-lighten-4">Estude.me é um projeto criado por um aluno do colégio objetivo buscando ajudar alunos no ensino médio em seus estudos para vestibulares e concursos.</p>
                    </div>
                    <div class="col l3 s12 right">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Objetivo Litoral</a></li>
                            <li><a class="white-text" href="#!">Conectados educacional</a></li>
                            <li><a class="white-text" href="#!">Facebook - Conectados</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container center">
                    Made with love using <a class="white-text" href="http://materializecss.com" target="_blank">Materialize</a> by <a class="white-text" href="http://github.com/leomendesm" target="_blank">Leonardo Mendes Miraglia</a>
                </div>
            </div>
        </footer>


        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>

    </body>

    </html>
