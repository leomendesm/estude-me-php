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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.min.js"></script>

        <link href="css/materialize,min.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <script>
            $(document).ready(function () {
                $('.parallax').parallax();
                $('#nlog').hide();
            });
        </script>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Raleway:500);
            nav ul a,
            nav .brand-logo {
                color: #444;
            }

            p {
                line-height: 2rem;
            }

            .button-collapse {
                color: #26a69a;
            }

            .parallax-container {
                min-height: 150px;
                max-height: 150px;
                line-height: 0;
                height: auto;
                color: rgba(255, 255, 255, .9);
            }

            .mainpage {
                min-height: 350px;
                max-height: 350px;
            }

            .parallax-container .section {
                width: 100%;
            }

            @media only screen and (max-width: 992px) {
                .parallax-container .section {
                    position: absolute;
                    top: 40%;
                }
                #index-banner .section {
                    top: 10%;
                }
            }

            @media only screen and (max-width: 600px) {
                #index-banner .section {
                    top: 0;
                }
            }

            .icon-block {
                padding: 0 15px;
            }

            .icon-block .material-icons {
                font-size: inherit;
            }

            footer.page-footer {
                margin: 0;
            }

            .title {
                font-family: 'Raleway', sans-serif;
            }

            .cinza {
                background: #a8b6c0;
            }

            .ind {
                z-index: 999;
            }

            .nav {
                margin-left: 10rem;
                margin-right: 10rem;
            }

            .small {
                margin-top: -59px;
                font-size: 11px;
            }

            .fixa {
                bottom: 0;
                width: 100%;
            }

            .fixa1 {
                position: absolute;
                bottom: 0;
                width: 100%;
            }

            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }

            main {
                flex: 1 0 auto;
            }

            .green-text-darken-2 {
                color: #43a047;
            }
        </style>
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
                    echo'<h2 class="center white-text text-lighten-1 title valign">Aula '.$fetch['nome'].' </h2>
                    <br>
                    <br>
                </div>
            </div>
            <div class="parallax"><img src="img/book2-1.jpg" alt="Unsplashed background img 1"></div>
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


    </body>

    </html>
