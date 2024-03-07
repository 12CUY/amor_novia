<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS 
-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b00314f003.js" crossorigin="anonymous"></script>
    <title>CEPEIGE</title>
    <style>
    /* Estilo para la barra de navegación */
    .navbar.bg-dark {
        background-color: #192B42 !important;
    }

    /* Estilo para el logo en la esquina derecha */
    .navbar-brand.custom-logo {
        position: absolute;
        top: 0;
        right: 50px; /* Ajusta la distancia desde la derecha */
        padding: 25px;
    }

    /* Ajusta el tamaño del logo para pantallas más pequeñas, como dispositivos móviles */
    @media (max-width: 768px) {
        .navbar-brand.custom-logo img {
            width: 60px; /* Cambia el tamaño del logo para dispositivos móviles */
        }
    }
</style>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" id="navbarToggleBtn">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa-solid fa-user-check"></i>  Asistencia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="fa-solid fa-user-lock"></i> Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbarToggleBtn = document.getElementById('navbarToggleBtn');
        const navbarNav = document.getElementById('navbarNav');

        navbarToggleBtn.addEventListener('click', function() {
            navbarNav.classList.toggle('show');
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" ></script>
  </body>
</html>