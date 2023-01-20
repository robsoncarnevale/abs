
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <title>Cadastro de Faltas</title>
    <link rel="shortcut icon" href="../favicon.ico"> 
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type = "text/css" href="css/style.css">
    <!-- CSS -->

    <!-- JavaScript -->
    <script src="js/jquery-1.8.2.js"></script>
    <script src="js/slide_img.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <!-- JavaScript -->
</head>
    <body>
        <section id="userBar">
            <div id="logo">
                <a href="index.php">
                    <img src="img/logo.png" />
                </a>
            </div>
            <div id = "infos">
                    <p>
                        <a>
                            <b>
                                Bem Vindo:
                            </b>
                        </a>
                        <i>
                            João
                        </i>
                        <a>
                            <b>
                                Data:
                            </b>
                        </a>
                        <i id="data">
                            <?php
                                echo date("d/m/Y")
                            ?>
                        </i>
                    </p>
                </div>
            </div>     
            <!-- FIM DO CABEÇALHO -->
        </section>