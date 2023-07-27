<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link rel="stylesheet" href="style/main.css">

        <link rel="stylesheet" href="style/login.scss">

        <!-- responsividade -->
        <link rel="stylesheet" href="style/responsive.css">

        <!-- owl css -->
        <link rel="stylesheet" href="style/owl/owl.carousel.min.css">
        <link rel="stylesheet" href="style/owl/owl.theme.default.min.css">

        <title>EBD FLIX :: ESCOLA BÍBLICA DOMINICAL ONLINE</title>
    </head>

    <body>
      <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="./img/revista-celulas.png"
              class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form class="form" action="inicio.php" method="get">
              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-0 me-3">Faça login com</p>
                <button type="button" class="btn btn-danger btn-floating mx-1">
                  <em class="fab fa-facebook-f"></em>
                </button>
    
                <button type="button" class="btn btn-danger btn-floating mx-1">
                  <em class="fab fa-twitter"></em>
                </button>
    
                <button type="button" class="btn btn-danger btn-floating mx-1">
                  <em class="fab fa-linkedin-in"></em>
                </button>
              </div>
    
              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Ou</p>
              </div>
    
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control form-control-lg"
                  placeholder="Enter a valid email address" />
                <label class="form-label" for="form3Example3">E-mail</label>
              </div>
    
              <!-- Password input -->
              <div class="form-outline mb-3">
                <input type="password" id="form3Example4" class="form-control form-control-lg"
                  placeholder="Enter password" />
                <label class="form-label" for="form3Example4">Senha</label>
              </div>
    
              <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                  <label class="form-check-label" for="form2Example3">
                    Remember me
                  </label>
                </div>
                <a href="#!" class="text-body">Recuperar senha?</a>
              </div>
    
              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="button" class="btn btn-danger btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Ainda não tem conta? <a href="inicio.php"
                    class="link-danger">Cadastre-se</a></p>
              </div>
    
            </form>
          </div>
        </div>
      </div>
      <!-- <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary"> -->
        <!-- Copyright -->
        <!-- <div class="text-white mb-3 mb-md-0">
          Copyright © 2020. All rights reserved.
        </div> -->
        <!-- Copyright -->
    
        <!-- Right -->
        <!-- <div>
          <a href="#!" class="text-white me-4">
            <em class="fab fa-facebook-f"></em>
          </a>
          <a href="#!" class="text-white me-4">
            <em class="fab fa-twitter"></em>
          </a>
          <a href="#!" class="text-white me-4">
            <em class="fab fa-google"></em>
          </a>
          <a href="#!" class="text-white">
            <em class="fab fa-linkedin-in"></em>
          </a>
        </div> -->
        <!-- Right -->
      <!-- </div> -->
    </section>

    <?php include('./_footer.php'); ?>

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