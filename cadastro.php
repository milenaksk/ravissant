<?php
require_once __DIR__ . "/src/autoload.php";

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro</title>
  <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
          crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
        crossorigin="anonymous"/>
</head>

<body>
<!-- Header-->
<nav class="navbar navbar-expand-lg bg-light shadow-sm p-3 mb-5">
  <div class="container-fluid">
    <!--Logo-->
    <a class="navbar-brand" href="index.php">
    <img src="img/logo-site.png" alt="Ravissant Jóias" width="75px"/>
    </a>
  </div>
</nav>

<!--Form de Cadastro-->
<div class="container mt-5">
  <div class="row align-items-center">
    <div class="col-md-10 mx-auto col-lg-5">
      <form
              class="p-4 p-md-5 border rounded-3 bg-purple text-center shadow p-3 mb-5"
      >
        <!--Título do Form-->
        <p class="h2 mb-3">Criar uma conta</p>
        <p class="mb-3">Preencha com os seus dados</p>

        <!--Inputs-->
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="inputCadastroName" required />
          <label for="inputCadastroName">Nome completo</label>
        </div>

        <div class="form-floating mb-3">
          <input
                  type="email"
                  class="form-control"
                  id="inputCadastroEmail"
                  required
          />
          <label for="inputCadastroEmail">E-mail</label>
        </div>

        <div class="form-floating mb-3">
          <input
                  type="password"
                  class="form-control"
                  id="inputCadastroPassword"
                  required
          />
          <label for="inputCadastroPassword">Senha</label>
        </div>

        <div class="form-floating mb-3">
          <input
                  type="password"
                  class="form-control"
                  id="inputConfirmPassword"
                  required
          />
          <label for="inputConfirmPassword">Confirme a senha</label>
        </div>

        <!--Botões-->
        <button
                class="btn btn-lg btn-dark mb-4 shadow-lg w-100"
                type="submit"
        >
          Criar
        </button>

        <hr />
        <br />

        <button
                class="btn btn-lg btn-dark mb-4 shadow-lg w-100"
                type="submit"
        >
          <i class="fa-brands fa-facebook-f"></i> Criar com Facebook
        </button>

        <button
                class="btn btn-lg btn-dark mb-4 shadow-lg w-100"
                type="submit"
        >
          <i class="fa-brands fa-google-plus-g"></i> Criar com Google
        </button>

        <div class="text-center">
          <p>
            <a href="login.php" class="text-decoration-none"
            >Já tenho uma conta</a
            >
          </p>
        </div>
      </form>
    </div>
  </div>
</div>

<footer class="text-center text-lg-start bg-light text-muted">
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">© Todos os direitos reservados.</div>
</footer>

<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous">
</script>
<script src="js/cadastro.js"></script>
</body>
</html>
