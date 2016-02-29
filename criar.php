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

        <form id="testre" action="/summernote.php" onsubmit="return postForm()">
            <div class="form-group">
                <br/>
                <label for="sel1">Selecione a Matéria:</label>
                <select class="form-control" id="sel1">
                    <option>matemática</option>
                    <option>Física</option>
                    <option>História</option>
                    <option>Geografia</option>
                </select>
                <br>
                <input type="text" class="form-control" placeholder="Nome da aula" aria-describedby="sizing-addon2">

            </div>
            <textarea id="summernote" rows="6" name="textarea_name"></textarea>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Enviar</button>
            </div>
        </form>
        <!-- Split button -->

    </div>
    <script type="application/javascript">
        $(document).ready(function () {
            $('#summernote').summernote({
                height: 250, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: true // set focus to editable area after initializing summernote
            });

        });
        var postForm = function () {
            var content = $('textarea[name="content"]').html($('#summernote').code());
        }
    </script>
</body>

</html>
