<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopa de Letras</title>
    <link rel="stylesheet" href="comp/style/sopaletras/letras.css">
</head>

<body>
    <div id="juego">
        <div id="visor">
            <h1>Sopa de Letras</h1>
            <p>Encuentra estas palabras:</p>
            <ol id="palabras"></ol>
            <div id="puntaje"><span>Puntaje:&nbsp;</span><span class="valor">0</span></div>
            <div id="botones">
                <button id="reiniciar">Reiniciar</button>
            </div>
        </div>
        <div id="lienzo">
            <div id="cuadricula"></div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/keyboardjs/2.7.0/keyboard.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/blashstar/blash.js@latest/src/blash.css.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/blashstar/blash.js@latest/src/blash.html.js?v=51"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sugar/2.0.6/sugar-es5.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=blissfuljs%2Cdefault%2Ces2015%2Ces2016%2Ces2017%2Ces2018%2Ces2019%2Ces2020%2Ces2021%2Ces2022"></script>

    <script src="https://colorjs.io/dist/color.global.js"></script>

    <script src="comp/js/spletras/letras.js"></script>
    
</body>

</html>