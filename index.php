<?php
    include "template.php";
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

        <!-- Menu -->
        <?= $nav ?>
            <div class="row container" id="login">
                <form id="formlogin" class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m12 left">
                            <h4> Inicie uma sessão para começar </h4>
                            <div id="prog_log" class="progress">
                                <div class="indeterminate"></div>
                            </div>
                            <p id="errolog" class="red-text text-darken-2">Usuário ou senha incorretos!</p>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="email" type="email" class="validate" name="email" autofocus placeholder="Ex:asd@asd.com">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12 m6 left">
                            <input id="senha" type="password" class="validate" name="senha" placeholder="Ex:12345678">
                            <label for="valor">Senha</label>
                        </div>
                    </div>
                    <div class="input-field col s12 m6 left">
                        <p>Caso não possua uma conta ainda clique <a id="troca_p_registro" href="#">Aqui!</a></p>
                    </div>
                    <div class="input-field col s12 m6 right">
                        <button class="btn waves-effect waves-light right cyan lighten-2" type="submit" name="action">Login
                            <i class="material-icons right">send</i>
                        </button>
                    </div>

                </form>

            </div>
            <div class="row container" id="register">
                <form id="formregister" class="col s12">
                    <div class="row">

                        <div class="input-field col s12 m12 left">
                            <h4> Cadastre-se para iniciar uma sessão </h4>
                            <p id="erroreg" class="red-text text-darken-2">Usuário ou senha incorretos!</p>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="rnome" type="text" class="validate" name="nome" autofocus placeholder="Ex:Maria, João">
                            <label for="rnome">Nome</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="remail" type="text" class="validate" name="email" placeholder="Ex:asd@asd.com">
                            <label for="remail" data-error="Escreva Corretamente" data-success="">Email</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="rsenha" type="password" class="validate" name="rsenha" placeholder="Ex:12345678">
                            <label for="valor">Senha</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="rcsenha" type="password" class="validate" name="senha" placeholder="Ex:12345678">
                            <label for="valor">Confirmar Senha</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="rcode" type="text" class="validate" name="code" placeholder="Ex:obj-2016">
                            <label for="code">Código Escolar*</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <select id="rano" name="cate">
                                <option value="1">1º Ano do Ensino Médio</option>
                                <option value="2">2º Ano do Ensino Médio</option>
                                <option value="3">3º Ano do Ensino Médio</option>
                            </select>
                            <label>Selecione uma categoria</label>
                        </div>

                    </div>
                    <div class="input-field col s12 m12">
                        <p class="hide-on-med-and-down small grey-text text-lighten-1">*Exclusivo para professores e alunos de escolas específicas</p>
                        <p>Caso já possua uma conta <a id="troca_p_login" href="#">clique aqui para fazer login.</a></p>
                    </div>
                    <div class="input-field col s12 m6 right">
                        <button class="btn waves-effect waves-light right" type="submit" name="action">Cadastrar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                    <div id="prog_reg" class="progress">
                        <div class="indeterminate"></div>
                    </div>
                </form>

            </div>
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
                                <a id="abrelogin" href="#" class="btn-large waves-effect waves-light red lighten-1">Começe agora</a>
                            </div>
                            <br>
                            <br>

                        </div>
                    </div>
                    <div class="parallax"><img src="img/book2-1.jpg" alt="Unsplashed background img 1"></div>
                </div>

                <!-- content -->
                <div class="white">
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
                <div class="white">
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
                                        <a href='show.php?materia=biologia&frente=1' class="left">Frente 1</a>
                                        <a href='show.php?materia=biologia&frente=2' class="right">Frente 2</a>
                                        <br>
                                        <a href='show.php?materia=biologia&frente=3' class="left">Frente 3</a>
                                        <a href='show.php?materia=biologia&frente=4' class="right">Frente 4</a>
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
                                        <a href='show.php?materia=matematica&frente=1' class="left">Frente 1</a>
                                        <a href='show.php?materia=matematica&frente=2' class="right">Frente 2</a>
                                        <br>
                                        <a href='show.php?materia=matematica&frente=3' class="left">Frente 3</a>
                                        <a href='show.php?materia=matematica&frente=4' class="right">Frente 4</a>
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
                                        <a href='show.php?materia=fisica&frente=1' class="left">Frente 1</a>
                                        <a href='show.php?materia=fisica&frente=2' class="right">Frente 2</a>
                                        <br>
                                        <a href='show.php?materia=fisica&frente=3' class="left">Frente 3</a>
                                        <a href='show.php?materia=fisica&frente=4' class="right">Frente 4</a>
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
                                        <a href='show.php?materia=geografia&frente=1' class="left">Frente 1</a>
                                        <a href='show.php?materia=geografia&frente=2' class="right">Frente 2</a>
                                        <br>
                                        <a href='show.php?materia=geografia&frente=3' class="left">Frente 3</a>
                                        <a href='show.php?materia=geografia&frente=4' class="right">Frente 4</a>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $footerindex ?>

                <!--  Scripts-->
                <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script type="text/javascript" src="js/materialize.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $(function () {
                            $('.button-collapse').sideNav();
                            $('.parallax').parallax();
                        });
                        $('select').material_select();
                        $('.modal-trigger').leanModal();
                        $('#errolog').hide();
                        $('#erroreg').hide(); //Esconde o elemento com id errolog
                        $('#prog_log').hide(); //Esconde o elemento com id errolog
                        $('#prog_reg').hide(); //Esconde o elemento com id errolog
                        $('#materia').hide();
                        $('#log').hide();
                        $('#logm').hide();
                        $('#login').hide();
                        $('#register').hide();
                        $('#logo-container').click(function () {
                            $('#login').hide();
                            $('#register').hide();
                            $('#principal').show();
                            $('#footer').removeClass('fixa');
                            $('#footer2').removeClass('fixa1');
                        });
                        $('#troca_p_registro').click(function () {
                            $('#login').hide();
                            $('#register').show();
                            $('#footer').removeClass('fixa');
                            $('#footer2').removeClass('fixa1');
                        });
                        $('#troca_p_login').click(function () {
                            $('#login').show();
                            $('#register').hide();
                            $('#footer').addClass('fixa');
                            $('#footer2').addClass('fixa1');
                        });
                        //comece agora
                        $('#abrelogin').click(function () {
                            $('#principal').hide();
                            $('#footer').addClass('fixa');
                            $('#footer2').addClass('fixa1');
                            $('#login').show();
                            $('#register').hide();
                        });
                        //area
                        $('#abrelogin1').click(function () {
                            $('#principal').hide();
                            $('#footer').addClass('fixa');
                            $('#footer2').addClass('fixa1');
                            $('#login').show();
                            $('#register').hide();
                        });
                        //sidenav
                        $('#abrelogin2').click(function () {
                            $('.button-collapse').sideNav('hide');
                            $('#principal').hide();
                            $('#footer').addClass('fixa');
                            $('#footer2').addClass('fixa1');
                            $('#login').show();
                            $('#register').hide();
                        });
                        var islogged = <?=$islogged?>;
                        if (islogged == 1) {
                            $('#principal').hide();
                            $('#materia').show();
                            $('#nlog').hide();
                            $('#nlogm').hide();
                            $('#log').show();
                            $('#logm').show();
                        }
                        $('#formlogin').submit(function () { //Ao submeter formulário
                            $('#prog_log').show();
                            var email = $('#email').val(); //Pega valor do campo email
                            var senha = $('#senha').val(); //Pega valor do campo senha
                            $.ajax({ //Função AJAX
                                url: "login.php", //Arquivo php
                                type: "post", //Método de envio
                                data: "email=" + email + "&senha=" + senha, //Dados
                                success: function (result) { //Sucesso no AJAX
                                    if (result == 1) {
                                        //Redireciona
                                        $('#login').hide();
                                        $('#materia').show();
                                        $('#nlog').hide();
                                        $('#log').show();
                                        $('#footer').removeClass('fixa');
                                        $('#footer2').removeClass('fixa1');
                                    } else {
                                        $('#errolog').show(); //Informa o erro
                                        $('#prog_log').hide();
                                    }
                                }
                            })
                            return false; //Evita que a página seja atualizada
                        })
                        $('#formregister').submit(function () { //Ao submeter formulário
                            $('#prog_reg').show();
                            var nome = $('#rnome').val(); //Pega valor do campo email
                            var email = $('#remail').val(); //Pega valor do campo senha
                            var senha = $('#rsenha').val(); //Pega valor do campo senha
                            var csenha = $('#rcsenha').val(); //Pega valor do campo senha
                            var ano = $('#rano').val(); //Pega valor do campo senha
                            var code = $('#rcode').val(); //Pega valor do campo senha
                            $.ajax({ //Função AJAX
                                url: "register.php", //Arquivo php
                                type: "post", //Método de envio
                                data: "nome=" + nome + "&senha=" + senha + "&email=" + email + "&csenha=" + csenha + "&ano=" + ano + "&code=" + code,
                                success: function (result) { //Sucesso no AJAX
                                    if (result == 1) {
                                        //Redireciona
                                        $('prog_reg').hide();
                                        $('#register').hide();
                                        $('#login').show();
                                    } else if (result == 3) {
                                        $('#prog_reg').hide();
                                        $('#erroreg').html("As senhas não coincidem!");
                                        $('#erroreg').show();
                                    } else if (result == 2) {
                                        $('#erroreg').html('Este e-mail já está em uso!');
                                        $('#erroreg').show();
                                        $('#prog_reg').hide();
                                    }
                                }
                            })
                            return false; //Evita que a página seja atualizada
                        })

                    });
                </script>

    </body>

    </html>
