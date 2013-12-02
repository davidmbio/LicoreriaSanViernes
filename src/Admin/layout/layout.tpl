<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Licoreria - [title]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    
    <link href="../../../web/css/bootstrap.css" rel="stylesheet">
    <link href="../../../web/css/style.css" rel="stylesheet">
    <link href="../../../web/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../../../web/css/docs.css" rel="stylesheet">
    <link href="../../../web/css/style.css" rel="stylesheet">
    <link href="../../../web/js/google-code-prettify/prettify.css" rel="stylesheet">
    
    <script language="javascript" type="text/javascript" src="../../../web/js/lib/jquery-1.3.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="../../../web/js/lib/jquery.blockUI.js"></script>
    <script language="javascript" type="text/javascript" src="../../../web/js/lib/jquery.validate.1.5.2.js"></script>
    <script language="javascript" type="text/javascript" src="../View/productos/resources/js/jquery-1.10.2.min.js"></script>
    <link href="../../../web/js/lib/PHPPaging.lib.css" rel="stylesheet" type="text/css" />
  
    <script language="javascript" type="text/javascript" src="../Controller/Control_Producto.js"></script>     
    <script language="javascript" type="text/javascript" src="../Controller/Control_Empleado.js"></script>    
    <script language="javascript" type="text/javascript" src="../Controller/Control_Categoria.js"></script>    
    <script language="javascript" type="text/javascript" src="../Controller/Control_Clientes.js"></script>    
    <script language="javascript" type="text/javascript" src="../Controller/Control_Gestion.js"></script>    
    <script language="javascript" type="text/javascript" src="../Controller/Control_Promocion.js"></script>
    <script language="javascript" type="text/javascript" src="../Controller/Control_Text.js"></script>
    <script language="javascript" type="text/javascript" src="../Controller/Control_Comentario.js"></script>    
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
    <div class="jumbotron masthead">
        <div style="color: white">
            <p class="lead">Licoreria San Viernes</p>
        </div>
      </div>
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
               <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="index.php">Bienvenida</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class=""><a href="Cerrar.php"><i class="icon-off icon-white"></i> Cerrar Sesion</a></li>
                            <li class=""><a href="Empleados.php"><i class="icon-user icon-white"></i> Empleados</a></li>
                            <li class=""><a href="Productos.php"><i class="icon-glass icon-white"></i> Productos</a></li>
                            <li class=""><a href="Comentarios.php"><i class="icon-filter icon-white"></i>Comentarios</a></li>
                            <li class=""><a href="Promocion.php"><i class="icon-tag icon-white"></i> Promocion</a></li>
                            <li class=""><a href="Gestion.php"><i class="icon-comment icon-white"></i> Gestion</a></li>
                            <li class=""><a href="Clientes.php"><i class="icon-filter icon-white"></i>Clientes</a></li>
                            <li class=""><a href="Categorias.php"><i class="icon-filter icon-white"></i>Categorias</a></li>
                        </ul>
                    </div>
               </div>
          </div>
        </div>            
    
<div class="container-fluid" style="background-color: white; border-color: #dfa195; border-style: ridge; border-width: 1px; border-radius: 10px; ">
       <div class="row-fluid">
           <div class="span12">
                              <div style="text-align: center;">            
                    <section id="fluidGridSystem">
                        <div class="page-header">
                            <h1><small>[header]</small></h1>
                        </div>
                        [content]     
                    </section>
                </div>
           </div>           
       </div>
    </div>
    
<!-- Footer
================================================== -->
<footer class="footer">
      <div class="container">
          <p class="lead">Licoreria San Viernes 2013</p>
          <p>Todos los derechos reservados</p>
        <p>Desarrollado por: <br>David Monterrubio, Alexander Gonzales, Efren Juarez</p>
      </div>
</footer>

<!-- Librerias incluido
==================================================== -->
    <script src="../../../web/js/jquery.js"></script>
    <script src="../../../web/js/bootstrap-transition.js"></script>
    <script src="../../../web/js/bootstrap-alert.js"></script>
    <script src="../../../web/js/bootstrap-modal.js"></script>
    <script src="../../../web/js/bootstrap-dropdown.js"></script>
    <script src="../../../web/js/bootstrap-scrollspy.js"></script>
    <script src="../../../web/js/bootstrap-tab.js"></script>
    <script src="../../../web/js/bootstrap-tooltip.js"></script>
    <script src="../../../web/js/bootstrap-popover.js"></script>
    <script src="../../../web/js/bootstrap-button.js"></script>
    <script src="../../../web/js/bootstrap-collapse.js"></script>
    <script src="../../../web/js/bootstrap-carousel.js"></script>
    <script src="../../../web/js/bootstrap-typeahead.js"></script>
    <script src="../../../web/js/bootstrap-affix.js"></script>
    <script src="../../../web/js/holder/holder.js"></script>
    <script src="../../../web/js/google-code-prettify/prettify.js"></script>
    <script src="../../../web/js/application.js"></script>
    <script>
      var _gauges = _gauges || [];
      (function() {
        var t   = document.createElement('script');
        t.type  = 'text/javascript';
        t.async = true;
        t.id    = 'gauges-tracker';
        t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
      })();
    </script>
</body>
</html>