<?php
	include "../Model/conexion.php";
	include "../Model/basico.php";
	include "../../../web/js/lib/PHPPaging.lib.php";
        
	$Paginacion = new PHPPaging;
	$query = "select co.IdComentario,cl.Nombre,pr.Nombre, co.Comentario, co.Fecha, co.Aprobado from tblComentarios as co 
inner join tblClientes as cl on co.IdCliente=cl.IdCliente
inner join tblProductos as pr on co.IdProducto=pr.IdProducto 
";
	if (isset($_GET['Busqueda_por_Nombre']))
		$query .= " where Comentario like '%".fn_filtro(substr($_GET['Busqueda_por_Nombre'], 0, 16))."%'";
	if (isset($_GET['Ordenar_por']))
		$query .= sprintf(" order by %s %s", fn_filtro($_GET['Ordenar_por']), fn_filtro($_GET['Ordenacion']));
	else
		$query .= " order by IdComentario desc";
	$Paginacion->agregarConsulta($query); 
	$Paginacion->div('Comentario');
	$Paginacion->modo('desarrollo'); 
	if (isset($_GET['Cantidad_Filas_Mostrar']))
		$Paginacion->porPagina(fn_filtro((int)$_GET['Cantidad_Filas_Mostrar']));
	$Paginacion->verPost(true);
	$Paginacion->mantenerVar("Busqueda_por_Nombre", "Ordenar_por", "Ordenacion", "Cantidad_Filas_Mostrar");
	$Paginacion->ejecutar();
?>

<div class="row-fluid show-grid" id=grilla"">        
          <div class="span12">
            <div class="row-fluid show-grid">
              <div class="row-fluid show-grid">
                <div class="span1">Id</div>
                <div class="span2">Producto</div>                 
                <div class="span3">Comentario</div>
                <div class="span2">Comentado el</div>                
                <div class="span2">Estado</div>                
                <div class="span2">Accion</div>                
                </div>
              </div>
          </div>
        

    <?php
        while ($rs_cate = $Paginacion->fetchResultado()){
    ?>
          <div class="row-fluid show-grid">
            <div class="span1" id="<?php echo $rs_cate['IdComentario']?>"><a href="1"><span class="badge"><?php echo $rs_cate['IdComentario']?></span></a></div>
            <div class="span2"><?php echo $rs_cate['Nombre']?></div>     
            <div class="span3"><?php echo $rs_cate['Comentario']?></div>
            <div class="span2"><?php echo $rs_cate['Fecha']?></div>
            <div class="span2">
             <?php if($rs_cate['Aprobado']=='Aprobado')
                     echo '<span class="label label-success">'.$rs_cate['Aprobado'].'</span>';
                   else
                     echo '<span class="label label-warning">'.$rs_cate['Aprobado'].'</span>';?></div>
            <div class="span2">
               <div class="btn-group">
                  <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> Acci&oacute;n</a>
                  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="javascript: Comentario('<?php echo $rs_cate['IdComentario']?>','Aprobado');"><i class="icon-check"></i> Aprobar</a></li>
                    <li><a href="javascript: Comentario('<?php echo $rs_cate['IdComentario']?>','No Aprobado');"><i class="icon-warning-sign"></i> No-Aprobar</a></li>
                    <li><a href="javascript: Comentario('<?php echo $rs_cate['IdComentario']?>','Eliminar');"><i class="icon-trash"></i> Eliminar</a></li>
                  </ul>
                </div>                      
            </div>
          </div>
    <?php } ?>
    <div class="lead">
                  <?php echo $Paginacion->fetchNavegacion()?>
    </div>