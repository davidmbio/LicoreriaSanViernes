<!doctype html>
<!--[if gt IE 9]><!--> 
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $titulo; ?></title>
	
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	
	<link rel="stylesheet" href="../../css/gumby.css">
	<link rel="stylesheet" href="../../css/menu.css">
	<script src="../../js/libs/modernizr-2.6.2.min.js"></script>
	<script src="../../js/libs/jquery-2.0.2.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>	
</head>

<body>
<div class="row" >	

	<!-- imagen de pie de pagina -->
	<div class="row">
		<div class="image image-full rounded photo">
			<img src="../../img/banner.png">
		</div>
	</div>	
	<!-- 
	<div class="row">
		<div class="swf swf-full swf-rounded swf-photo">
			<object type="application/x-shockwave-flash" data="../img/Banner.swf">
				<param name="movie" value="Banner.swf" />
				<param name="menu" value="true" />
				<param name="quality" value="high" />
			</object>
		</div>
	</div>
	 -->
	<!-- menu de la pagina -->						
	<nav class="clearfix">
		<ul class="clearfix">
			<li><a href="../../controller/Acceso.php">Cerrar Sesion</a></li>
			<li><a href="../../controller/admin/Empleados.php">Empleados</a></li>
			<li><a href="../../controller/admin/Productos.php">Productos</a></li>
			<li><a href="../../controller/admin/Publicidad.php">Publicidad</a></li>
			<li><a href="../../controller/admin/Notificacion.php">Notificaciones</a></li>	
			<li><a href="../../controller/admin/Configuracion.php">Configuracion</a></li>	
		</ul>
		<a href="#" id="pull">Menu</a>
	</nav>
	
	<!-- cuerpo de contenido de la pagina  -->
	<div class="row" style="background-color: rgba(0,0,0,0.2);">
		<div class="row">
			<div class="twelve columns">
						<?php echo $contenido ?>
			</div>			
		</div>
	</div>
	<div class="row" >
	</div>
	
	
	<!-- imagen de pie de pagina -->
	<div class="row">
		<div class="image image-full">
			<img src="../../img/footer.png">
		</div>
	</div>
</div>	
	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="../../js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="../../js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>
	<!-- librerias del framework -->
	<script gumby-touch="../js/libs" src="../js/libs/gumby.js"></script>
	<script src="../js/libs/ui/gumby.retina.js"></script>
	<script src="../js/libs/ui/gumby.fixed.js"></script>
	<script src="../js/libs/ui/gumby.skiplink.js"></script>
	<script src="../js/libs/ui/gumby.toggleswitch.js"></script>
	<script src="../js/libs/ui/gumby.checkbox.js"></script>
	<script src="../js/libs/ui/gumby.radiobtn.js"></script>
	<script src="../js/libs/ui/gumby.tabs.js"></script>
	<script src="../js/libs/ui/gumby.navbar.js"></script>
	<script src="../js/libs/ui/jquery.validation.js"></script>
	<script src="../js/libs/gumby.init.js"></script>
	<script src="js/libs/gumby.min.js"></script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
  </body>
</html>
