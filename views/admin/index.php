<?php $titulo = 'Licoreria - Contacto' ?>
	
<?php ob_start() ?>	
<div class="row" id="tiles" style="background-color: rgba(0,0,0,0.2); text-align: center;"><br>
		
	<h1>Licoreria San Viernes</h1>
	<h2>Le da la bienvenida a</h2>
	<h2>Nombre del usuario logeado</h2><br>
</div>
<?php $contenido = ob_get_clean() ?>	
	
<?php include 'layout.php' ?>