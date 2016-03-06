<!DOCTYPE html>
<?php
    session_start();
    include "conect.php";
    include "template.php";

    $idaula = $_GET["id"];
    $naula = $_GET["cont"];
    if(!isset($idaula) || !isset($naula)){
        header('location: index');
    }
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
        <?= $nav ?>
            <div id="index-banner" class="parallax-container">
                <div class="section no-pad-bot">
                    <div class="container valign-wrapper">
                        <br>
                        <br>
                        <?php
                        $query = "SELECT * FROM aula WHERE id='$idaula' ORDER BY id ASC";
                        $run = $mysql->query($query);
                    while($fetch = $run->fetch_assoc()){
                    echo'<h2 class="center white-text text-lighten-1 title valign">Aula '.$naula.' - '.$fetch['nome'].' </h2>
                    <br>
                    <br>
                </div>
            </div>
            <div class="parallax"><img src="img/book2.jpg" alt="Unsplashed background img 1"></div>
        </div>
        <br>
        <div class="container">
            <div class="row">';
                    echo $fetch['conteudo'];
                    echo "</div>";
                        }
                    ?>
                    </div>
                </div>

            </div>
            <?= $footer ?>


                <!--  Scripts-->
                <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script src="js/materialize.js"></script>
                <script src="js/init.js"></script>


    </body>

    </html>
