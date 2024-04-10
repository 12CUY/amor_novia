<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    include 'comp/nav.php';
    ?>
    <audio autoplay loop class="audio-hidden">
        <source src="comp/img/sound/musica_miau.m4a" type="audio/mp3">
    </audio>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbarToggleBtn = document.getElementById('navbarToggleBtn');
            const navbarNav = document.getElementById('navbarNav');

            navbarToggleBtn.addEventListener('click', function() {
                navbarNav.classList.toggle('show');
            });
        });
    </script>
</body>
</html>