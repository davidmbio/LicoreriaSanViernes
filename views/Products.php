<?php $titulo = 'Licoreria San Viernes' ?>
	
<?php ob_start() ?>
<!-- falta la clase de gumby.css -->
<div class="row" id="tiles" style="background-color: rgba(0,0,0,0.2);">
	<h1 class="lead" align="center">Productos</h1>
	<div class="row">
			<div class="twelve columns">
				<section class="vertical tabs">
					<h4 class="lead">Categoria</h4>
					<ul class="tab-nav four columns">
						<li class="active"><a href="#">Licor 1</a></li>
						<li><a href="#">Licor 3</a></li>
						<li><a href="#">Licor 4</a></li>
					</ul>
					<div class="tab-content eight columns active">
						<ul class="three_up tiles">
							<li class="rounded photo image"><img src="../img/news/1.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/1.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/1.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/1.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/1.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/1.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/1.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/1.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/1.jpg"/></li>
						</ul>
					</div>
					<div class="tab-content eight columns">
						<ul class="three_up tiles">
							<li class="rounded photo image"><img src="../img/news/2.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/2.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/2.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/2.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/2.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/2.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/2.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/2.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/2.jpg"/></li>
						</ul>					</div>
					<div class="tab-content eight columns">
						<ul class="three_up tiles">
							<li class="rounded photo image"><img src="../img/news/3.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/3.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/3.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/3.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/3.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/3.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/3.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/3.jpg"/></li>
							<li class="rounded photo image"><img src="../img/news/3.jpg"/></li>
						</ul>
					</div>
				</section>
			</div>
		</div>
</div>	
<?php $contenido = ob_get_clean() ?>	
	
<?php include 'layout.php' ?>