<?php

    session_start();
    if(!isset($_SESSION["id"])){
        header('location: index');
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <title>Estude.me</title>
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.3/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.3/summernote.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

    </head>

    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <a href="index.html" class="navbar-brand">Estude.me</a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Retornar</a></li>
                </ul>
            </div>
        </nav>
        <ul class="nav nav-tabs tab">
            <li role="presentation" class="active"><a href="#">Criar Aula</a></li>
            <li role="presentation"><a href="#">Dúvidas <span class="badge">4</span></a></li>
        </ul>
        <div class="container">

            <form id="formaula">
                <div class="form-group">
                    <br/>
                    <label for="sele">Selecione a Matéria:</label>
                    <select class="form-control" id="sele">
                        <option value="matematica">matemática</option>
                        <option value="fisica">Física</option>
                        <option value="história">História</option>
                        <option value="geografia">Geografia</option>
                    </select>
                    <br>
                    <label for="sele2">Selecione a Matéria:</label>
                    <select class="form-control" id="sele2">
                        <option value="1">Frente 1</option>
                        <option value="2">Frente 2</option>
                        <option value="3">Frente 3</option>
                        <option value="4">Frente 4</option>
                    </select>
                    <br>
                    <input type="text" id="nome" class="form-control" placeholder="Nome da aula" aria-describedby="sizing-addon2">

                </div>
                <textarea id="summernote" rows="6" name="textarea_name"></textarea>
                <div class="btn-group">
                    <button class="btn btn-primary" type="submit" name="action">Enviar</button>
                </div>
            </form>
            <!-- Split button -->

        </div>
        <script src="js/lang/summernote-pt-BR.js"></script>
        <script type="application/javascript">
            $(document).ready(function () {
                $('#summernote').summernote({
                    lang: 'pt-BR',
                    height: 250, // set editor height
                    minHeight: null, // set minimum height of editor
                    //https://www.google.com.br/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=escape%20ajax%20php
                    maxHeight: null, // set maximum height of editor
                    focus: true, // set focus to editable area after initializing summernote
                    callbacks: {
                        onImageUpload: function (files) {
                            sendFile(files[0]);
                        }
                    }
                });

                function sendFile(file) {
                    data = new FormData();
                    data.append("file", file);
                    console.log(data);
                    $.ajax({
                        data: data,
                        type: "POST",
                        url: "uploader.php",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (url) {
                            $('#summernote').summernote('insertImage', url, url);
                        }
                    });
                }

                $('#formaula').submit(function () { //Ao submeter formulário
                    $('#prog_log').show();
                    var nome = $('#nome').val(); //Pega valor do campo email
                    var mate = $('#sele').val(); //Pega valor do campo senha
                    var frente = $('#sele2').val(); //Pega valor do campo senha
                    var content = $('#summernote').summernote('code');
                    content = encodeURIComponent(content);
                    alert(content);
                    $.ajax({ //Função AJAX
                        url: "create.php", //Arquivo php
                        type: "post", //Método de envio
                        data: "nome=" + nome + "&materia=" + mate + "&frente=" + frente + "&content=" + content, //Dados
                        success: function (result) { //Sucesso no AJAX
                            if (result == 1) {
                                window.location = "http://estude.esy.es";
                            } else {
                                alert(result);
                            }
                        }
                    })
                    return false; //Evita que a página seja atualizada
                })
            });
        </script>
    </body>

    </html>
