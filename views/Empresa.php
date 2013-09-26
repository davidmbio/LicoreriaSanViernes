<?php $titulo = 'Licoreria - Empresa' ?>
	
<?php ob_start() ?>	
<div class="row" id="tiles" style="background-color: rgba(0,0,0,0.2); text-align: center;">
	<div class="eight columns">
		<section class="pill tabs">
			<h3>Mision</h3>
			<div class="tab-content active">
				<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
			</div>
		</section>
	</div>
	
	<div class="eight columns" align="center">
		<section class="pill tabs">
			<h3>Vision</h3>
			<div class="tab-content active">
				<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
			</div>
		</section>
	</div>
</div>
<?php $contenido = ob_get_clean() ?>	
	
<?php include 'layout.php' ?>