<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="comp/style/check/check.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Sfcz1ZQ4rd1oWEGkQ4SGtw/3rQf9TmIz63rGdqOnKShKAv3LdG2aBP7BZg4gx2OZoU6bt0A3t/8I4PUvHVtKcQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <br><br><br><br><br><br>
<fieldset class="checkbox-group">
	<legend class="checkbox-group-legend">Los juegos Gatunos</legend>
	<div class="checkbox">
	<label class="checkbox-wrapper">
        <input type="checkbox" class="checkbox-input" />
        <span class="checkbox-tile">
            <span class="checkbox-icon">
                <i class="fas fa-crosshairs"></i> <!-- Reemplaza este icono con el icono deseado -->
            </span>
            <span class="checkbox-label">Crucigrama</span><br>
            <a href="sopa_letras.php"><button>ingresar</button></a>
        </span>
    </label>
	</div>
	<div class="checkbox">
		<label class="checkbox-wrapper">
			<input type="checkbox" class="checkbox-input" checked />
			<span class="checkbox-tile">
				<span class="checkbox-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
						<rect width="256" height="256" fill="none"></rect>
						<polygon points="56 100 56 168 128 236 128 168 200 168 56 32 200 32 200 100 56 100" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
					</svg>
				</span>
				<span class="checkbox-label">Juego de Memoria</span><button>ingresar</button>
			</span>            

		</label>
	</div>
	<div class="checkbox">
		<label class="checkbox-wrapper">
			<input type="checkbox" class="checkbox-input" />
			<span class="checkbox-tile">
				<span class="checkbox-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
						<rect width="256" height="256" fill="none"></rect>
						<polygon points="72 40 184 40 240 104 128 224 16 104 72 40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
						<polygon points="177.091 104 128 224 78.909 104 128 40 177.091 104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
						<line x1="16" y1="104" x2="240" y2="104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></line>
					</svg>
				</span>
				<span class="checkbox-label">Sopa Letras</span><button>ingresar</button>
			</span>            

		</label>
	</div>
	<div class="checkbox">
		<label class="checkbox-wrapper">
			<input type="checkbox" class="checkbox-input" />
			<span class="checkbox-tile">
				<span class="checkbox-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
						<rect width="256" height="256" fill="none"></rect>
						<polygon points="56 100 56 168 128 236 128 168 200 168 56 32 200 32 200 100 56 100" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
					</svg>
				</span>
				<span class="checkbox-label">Ahorcado</span><button>ingresar</button>
			</span>
		</label>
	</div>
</fieldset>
</body>

</html>