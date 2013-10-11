<!doctype html>
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Licoreria - San Viernes</title>

  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <link rel="stylesheet" href="css/gumby.css"/>    
  <style>
		h3, h2,h4 {
		  	text-align: center;
		    letter-spacing: -.09em;
		    -webkit-transition-duration: 1s;
		}
		a{

		}
	body { 	background-image: url('img/bg02.png'); font-family: "Open Sans"; font-weight: 400; color: #555555; position: relative; -webkit-font-smoothing: antialiased; }
		.container {
			width: 70%;
			margin:0 auto;
			max-width:1140px;
		}
		
		h1 {
			background: rgba(0,0,0,0.2);
			text-align: center;
			color:#B64545;
		    font: bold italic georgia, times new roman, serif;
			text-transform: uppercase;
			display: block;
			text-shadow:#253e45 -1px 1px 0,
			#253e45 -2px 2px 0,
			#d45848 -3px 3px 0,
			#d45848 -4px 4px 0;
			margin: 5% auto 5%;
		}
	</style>
  
</head>		
<body>    
	<div class="container">
		<h1 id="fittext2">Licoreria<br> San Viernes</h1>
		<h4 id="fittext3">¿Eres mayor de edad?Esto es solo una prueba</h4>
		<div class="row" align="center">
			<div class="pretty medium danger btn"><a href="#">Soy menor</a></div>
				<div class="pretty medium success btn"><a href="controller/index.php">Soy mayor</a></div>
		</div>
		
  </div>
	
	<script src="js/jquery-1.7.2.js"></script>
 	<script src="js/jquery.fittext.js"></script>
	<script type="text/javascript">
		$("#fittext1").fitText();
		$("#fittext2").fitText(1.2);
		$("#fittext3").fitText(1.1, { minFontSize: '50px', maxFontSize: '75px' });
	</script>
    
</body>
</html>