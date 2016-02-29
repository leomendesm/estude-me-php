<?php
    session_start();
    if(!empty($_SESSION["id"])){
        $islogged = 1;
    }
    else{
        $islogged = 2;
    }
?>
    <!DOCTYPE html>
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
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.modal-trigger').leanModal();
                $('#errolog').hide(); //Esconde o elemento com id errolog
                $('#prog').hide(); //Esconde o elemento com id errolog
                $('#materia').hide();
                $('#log').hide();
                var islogged = <?=$islogged?>;
                if (islogged == 1) {
                    $('#principal').hide();
                    $('#materia').show();
                    $('#nlog').hide();
                    $('#log').show();
                }
                $('#formlogin').submit(function () { //Ao submeter formulário
                    $('#prog').show();
                    var email = $('#email').val(); //Pega valor do campo email
                    var senha = $('#senha').val(); //Pega valor do campo senha
                    $.ajax({ //Função AJAX
                        url: "login.php", //Arquivo php
                        type: "post", //Método de envio
                        data: "email=" + email + "&senha=" + senha, //Dados
                        success: function (result) { //Sucesso no AJAX
                            if (result == 1) {
                                //Redireciona
                                $('#principal').hide();
                                $('#materia').show();
                                $('#nlog').hide();
                                $('#log').show();
                                $('#modal2').closeModal();
                            } else {
                                $('#errolog').show(); //Informa o erro
                            }
                        }
                    })
                    return false; //Evita que a página seja atualizada
                })
            });
        </script>
        <div id="modal2" class="modal" style="height:120%;">
            <div class="modal-content">
                <div class="row">
                    <form id="formlogin" class="col s12">
                        <div class="row">
                            <div class="input-field col s12 m12 left">
                                <h4> Login: </h4>
                                <h5 id="errolog" class="red-text text-darken-2">Usuário ou senha incorretos!</h5>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="email" type="text" class="validate" name="email" autofocus placeholder="Ex:asd@asd.com">
                                <label for="Nome">E-Mail</label>
                            </div>
                            <div class="input-field col s12 m6 left">
                                <input id="senha" type="password" class="validate" name="senha" placeholder="Ex:12345678">
                                <label for="valor">Senha</label>
                            </div>
                        </div>
                        <div class="input-field col s12 m6 left">
                            <p>Caso não possua uma conta ainda clique <a href="criar">Aqui</a>!</p>
                        </div>
                        <div class="input-field col s12 m6 right">
                            <button class="btn waves-effect waves-light right" type="submit" name="action">Login
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                        <div id="prog" class="progress">
                            <div class="indeterminate"></div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- Menu -->
        <nav class="white" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo">Estude.me</a>
                <ul class="right hide-on-med-and-down">
                    <div id='nlog'>
                        <li><a class='modal-trigger' data-target='modal' href='#modal2'>Área do Aluno</a></li>
                        <li><a class='modal-trigger' data-target='modal' href='#modal2'>Área do Professor</a></li>
                    </div>
                    <div id='log'>
                        <li><a href='logout'>Sair</a></li>
                    </div>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="">Iniciar Sessão</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse grey-text text-darken-1"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div id="principal">
            <!-- Banner/parallax -->
            <div id="index-banner" class="parallax-container mainpage">
                <div class="section no-pad-bot">
                    <div class="container">
                        <br>
                        <br>
                        <h1 class="header center red-text text-lighten-1 title">estude.me</h1>
                        <div class="row center">
                            <h5 class="header col s12 light">Uma ferramenta de auxílio nos estudos.</h5>
                        </div>
                        <div class="row center">
                            <a href="materia.html" class="btn-large waves-effect waves-light red lighten-1">Começe agora</a>
                        </div>
                        <br>
                        <br>

                    </div>
                </div>
                <div class="parallax"><img src="img/book2-1.jpg" alt="Unsplashed background img 1"></div>
            </div>

            <!-- content -->
            <div class="container">
                <div class="section">

                    <!--   Icon Section   -->
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="icon-block">
                                <h2 class="center grey-text text-darken-4"><i class="material-icons">flash_on</i></h2>
                                <h5 class="center">Foco nos Estudos</h5>

                                <p class="light">Nosso foco é auxiliar em seus estudos facilitando seu acesso aos conteúdo da aulas contidas em sua apostila, reforçando o aprendizado e agilizando o processo.</p>
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="icon-block">
                                <h2 class="center grey-text text-darken-4"><i class="material-icons">assignment_ind</i></h2>
                                <h5 class="center">Facilidade de acesso</h5>

                                <p class="light">Você necessita apenas de sua matrícula e senha para ter acesso à todo conteúdo do site, comentar nas aulas e fazer perguntas diretamente a seus professores.</p>
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="icon-block">
                                <h2 class="center grey-text text-darken-4"><i class="material-icons">live_help</i></h2>
                                <h5 class="center">Auxílio no estudo</h5>

                                <p class="light">Todos resumos e teorias estarão disponíveis para consulta, ajuda na confeção de tarefas e afins.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="section">

                    <div class="row">

                        <div class="col s12 center">
                            <div class="icon-block">
                                <h2 class="center grey-text text-darken-4"><i class="material-icons">settings</i></h2>
                                <h4 class="center">Trabalho em equipe</h4>
                                <p class="left-align light">Nós precisamos de sua ajuda! A maioria de nossas aulas são criadas por nossos professores, mas às vezes suas pesquisas podem ajudar outras pessoas, faça contato conosco e iremos avaliar e inserir seu conteúdo em sua respectiva matéria, com seus créditos e agradecimentos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="materia">
            <!-- parallax -->
            <div id="index-banner" class="parallax-container">
                <div class="section no-pad-bot">
                    <div class="container valign-wrapper">
                        <br>
                        <br>
                        <h2 class="center white-text text-lighten-1 title valign">Selecione uma matéria <span class="hide-on-med-and-down">para começar</span></h2>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="parallax"><img src="img/book2.jpg" alt="Unsplashed background img 1"></div>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card big">
                            <div class="card-image">
                                <img src="img/materia/bio.png" class="responsive-img">
                            </div>
                            <div class="card-content">
                                <span class="card-title black-text">Biologia</span>
                                <p>Aqui você irá encontrar tudo sobre Biologia.</p>
                            </div>
                            <div class="card-action center">
                                <a href="selecionar.html" class="left">Frente 1</a>
                                <a href="#" class="right">Frente 2</a>
                                <br>
                                <a href="#" class="left">Frente 3</a>
                                <a href="#" class="right">Frente 4</a>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card big">
                            <div class="card-image">
                                <img src="img/materia/mate.png" class="responsive-img cinza">
                            </div>
                            <div class="card-content">
                                <span class="card-title black-text">Matemática</span>
                                <p>Aqui você irá encontrar tudo sobre Matémática.</p>
                            </div>
                            <div class="card-action center">
                                <a href="selecionar.html" class="left">Frente 1</a>
                                <a href="#" class="right">Frente 2</a>
                                <br>
                                <a href="#" class="left">Frente 3</a>
                                <a href="#" class="right">Frente 4</a>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card big">
                            <div class="card-image">
                                <img src="img/materia/fisica.png" class="responsive-img">
                            </div>
                            <div class="card-content">
                                <span class="card-title black-text">Física</span>
                                <p>Aqui você irá encontrar tudo sobre Física.</p>
                            </div>
                            <div class="card-action center">
                                <a href="selecionar.html" class="left">Frente 1</a>
                                <a href="#" class="right">Frente 2</a>
                                <br>
                                <a href="#" class="left">Frente 3</a>
                                <a href="#" class="right">Frente 4</a>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card big">
                            <div class="card-image">
                                <img src="img/materia/geo.png" class="responsive-img">
                            </div>
                            <div class="card-content">
                                <span class="card-title black-text">Geografia</span>
                                <p>Aqui você irá encontrar tudo sobre geografia.</p>
                            </div>
                            <div class="card-action center">
                                <a href="selecionar.html" class="left">Frente 1</a>
                                <a href="#" class="right">Frente 2</a>
                                <br>
                                <a href="#" class="left">Frente 3</a>
                                <a href="#" class="right">Frente 4</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer grey darken-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Sobre o projeto</h5>
                        <p class="grey-text text-lighten-4">O Estude.me é um projeto criado para buscar ajudar alunos no ensino médio em seus estudos para vestibulares e concursos.</p>
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
                    Made with <span class="white-text">♥</span> using <a class="white-text" href="http://materializecss.com" target="_blank">Materialize</a> by <a class="white-text" href="http://github.com/leomendesm" target="_blank">Leonardo Mendes Miraglia</a>
                </div>
            </div>
        </footer>


        <!--  Scripts-->
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>

    </body>

    </html>
