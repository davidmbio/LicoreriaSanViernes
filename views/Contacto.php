<?php $titulo = 'Licoreria - Contacto' ?>
	
<?php ob_start() ?>	
<div class="row" id="tiles" style="background-color: rgba(0,0,0,0.2); text-align: center;"><br>
		
		<h3>Datos de la empresas</h3>
		<p>Telefono:837282887</p>
		<p>Email:sanviernes@licor.com</p>
		<p>Telefono:</p><br>
		<h3>Ubicacion</h3><p>Huejutla de reyes, Col. Centro #4</p><br>
		
		<h3>Quejas y/o sugerencias</h3>
		<form>
				<div class="four columns"></div>
		<div class="four columns">
			<ul>
				<li class="field"><textarea class="input textarea" placeholder="Escribe tu comentario"  rows="3"></textarea></li>
			</ul>
			<div class="pretty medium info btn"><button>Enviar comentarios</button></div>
		</div>
		</form><br>
	</div>
<?php $contenido = ob_get_clean() ?>	
	
<?php include 'layout.php' ?>