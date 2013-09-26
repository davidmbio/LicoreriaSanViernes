<?php $titulo = 'Licoreria - Contacto' ?>
	
<?php ob_start() ?>	
<div class="row" id="tiles" style="background-color: rgba(0,0,0,0.2); text-align: center;">
	<br><h3>Datos de la empresas</h3>
		<p>Telefono:888012839180293</p>
		<p>Email:sanviernes@example.com</p>
		<p>Telefono:</p>
		<p>Telefono:</p>
		
		
	<br><h3>Ubicacion</h3>
		<p>Huejutla de reyes, Col. Centro #4</p>
	
	<br><h3>Quejas y/o sugerencias</h3>
<div class="row">
		<div class="row">
			<div class="four columns">
			</div>
			<div class="four columns">
				<form>
					<ul>
						<li class="field"><textarea class="input textarea" placeholder="Textarea" rows="3"></textarea></li>
					</ul>
				</form>
			</div>
		</div>
	
</div>
<?php $contenido = ob_get_clean() ?>	
	
<?php include 'layout.php' ?>