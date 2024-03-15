<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menú de Navegación Responsivo</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b00314f003.js" crossorigin="anonymous"></script>
    
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="comp/style/nav/nav.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Aquí colocamos la foto o imagen del logotipo -->
            <a class="navbar-brand custom-logo" href="index.php">
                <img src="https://c.files.bbci.co.uk/E97C/production/_128027795_gettyimages-636379014.jpg" alt="Logotipo">
            </a>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-heart"></i> Acerca de</a>
                    </li>
                </ul>
            </div>

            <div class="boton">
                <a href="#" class="btn"><i class="fas fa-heart"></i> Ingresar</a>
            </div>
            
            <button class="navbar-toggler" type="button" id="navbarToggleBtn">
                <span class="navbar-toggler-icon"></span>
            </button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"></script>
</body>
</html>
