<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link rel="stylesheet" href="style/main.css">

        <!-- responsividade -->
        <link rel="stylesheet" href="style/responsive.css">

        <!-- owl css -->
        <link rel="stylesheet" href="style/owl/owl.carousel.min.css">
        <link rel="stylesheet" href="style/owl/owl.theme.default.min.css">

        <title>EBD FLIX :: ESCOLA BÍBLICA DOMINICAL ONLINE</title>
    </head>

    <body>

        <?php include('./_header.php'); ?>
        
        <main>
            <div class="filme-principal">
                <div class="container-fluid">
                    <h3 class="titulo">GÁLATAS, EFÉSIOS E FILEMOM</h3>
                    <p class="descricao">
                        Os comentários são do pastor Edimar Santos e equipe editorial, destacando a graça divina no Evangelho de Jesus, realçada pelo apóstolo Paulo nas Cartas aos Gálatas, Efésios e Filemom.
                    </p>

                    <div class="filme-progresso">
                        <ul class="progress-bar mb-3">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li class="stop"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <span class="progresso">05 de 13 lições</span>
                    </div>

                    <div class="botoes">
                        <button role="button" class="botao" data-bs-toggle="modal" data-bs-target="#mdAssistir">
                            <em class="fas fa-play"></em>
                            ASSITIR AGORA
                        </button>
                        <button role="button" class="botao" data-bs-toggle="modal" data-bs-target="#mdInfo">
                            <em class="fas fa-info-circle"></em>
                            MAIS INFORMAÇÕES
                        </button>
                    </div>
                </div>

            </div>
        </main>

        <?php include('./_carrosel-filmes.php'); ?>

        <?php include('./_footer.php'); ?>

        <?php include('./_modal-details.php'); ?>

        <?php include('./_modal-info.php'); ?>

        <script src="https://kit.fontawesome.com/314a2a7e49.js" crossorigin="anonymous"></script>
        <script src="js/owl/jquery.min.js"></script>
        <script src="js/owl/owl.carousel.min.js"></script>
        <script src="js/owl/setup.js"></script>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".fa-search").click(function() {
                    $(".icon").toggleClass("active");
                    $("input[type='text']").toggleClass("active");
                });
            });
        </script>
        <script>
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>
    </body>

</html>