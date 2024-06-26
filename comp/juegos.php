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
	<br><br><br><br>
	<fieldset class="checkbox-group">
		<legend class="checkbox-group-legend">LOS JUEGOS GATUNOS</legend>
		<!-- sopa de letras-->

		<div class="checkbox">
			<label class="checkbox-wrapper">
				<input type="checkbox" class="checkbox-input" />
				<span class="checkbox-tile">
				<span class="checkbox-icon">
				<i class="fas fa-vector-square fa-3x" ></i>
					</span>
					<span class="checkbox-label">Sopa de letras</span>
					<a href="sopa_letras.php" class="boton_1" ><button>ingresar</button></a>
				</span>

			</label>
		</div>
		<!-- juego de memoria -->
		<div class="checkbox">
			<label class="checkbox-wrapper">
				<input type="checkbox" class="checkbox-input" />
				<span class="checkbox-tile">
				<span class="checkbox-icon">
				<i class="fa-brands fa-stack-overflow fa-3x"></i>
					</span>
					<span class="checkbox-label">Juego de memoria</span>
					<a href="juego_memoria.php" class="boton_1" ><button>ingresar</button></a>
				</span>

			</label>
		</div>
		<!--crucigrama -->

		<div class="checkbox">
			<label class="checkbox-wrapper">
				<input type="checkbox" class="checkbox-input" />
				<span class="checkbox-tile">
				<span class="checkbox-icon">
				<i class="fa-brands fa-stack-overflow fa-3x"></i>
					</span>
					<span class="checkbox-label">crucigrama</span>
					
					<a href="crucigrama.php" class="boton_1" ><button>ingresar</button></a>
				</span>

			</label>
		</div>
		<!-- ahorcado -->

		<div class="checkbox">
			<label class="checkbox-wrapper">
				<input type="checkbox" class="checkbox-input" />
				<span class="checkbox-tile">
					<span class="checkbox-icon">
						<i class="fas fa-user-ninja fa-3x"></i>
					</span>
					<span class="checkbox-label">Ahorcado</span>
					<a href="#"class="boton_1" ><button>ingresar</button></a>
				</span>
			</label>
		</div>
	</fieldset>
</body>

</html>