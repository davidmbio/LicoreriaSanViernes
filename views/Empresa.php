<?php $titulo = 'Licoreria - Empresa' ?>
	
<?php ob_start() ?>	
<div class="row" id="tiles" style="background-color: rgba(0,0,0,0.2); text-align: center;">
	<h3>Mision</h3>
	<div class="tab-content active">
		<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
	</div>
	
	<h3>Mision</h3>
	<div class="tab-content active">
			<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
	</div>
	<h3>Valores</h3>
		<h5><i class="icon-check"></i> Respeto</h5>
		<h5><i class="icon-check"></i> Responsabilidad</h5>
		<h5><i class="icon-check"></i> Honestidad</h5>
		<h5><i class="icon-check"></i> Confianza</h5>
</div>
<?php $contenido = ob_get_clean() ?>	
	
<?php include 'layout.php' ?>