<?php
	include "../Model/conexion.php";
	include "../Model/basico.php";
	include "../../../web/js/lib/PHPPaging.lib.php";
        
	$Paginacion = new PHPPaging;
	$query = "select * from tblCategorias";
	if (isset($_GET['Busqueda_por_Nombre']))
		$query .= " where Categoria like '%".fn_filtro(substr($_GET['Busqueda_por_Nombre'], 0, 16))."%'";
	if (isset($_GET['Ordenar_por']))
		$query .= sprintf(" order by %s %s", fn_filtro($_GET['Ordenar_por']), fn_filtro($_GET['Ordenacion']));
	else
		$query .= " order by IdCategoria desc";
	$Paginacion->agregarConsulta($query); 
	$Paginacion->div('Categoria');
	$Paginacion->modo('desarrollo'); 
	if (isset($_GET['Cantidad_Filas_Mostrar']))
		$Paginacion->porPagina(fn_filtro((int)$_GET['Cantidad_Filas_Mostrar']));
	$Paginacion->verPost(true);
	$Paginacion->mantenerVar("Busqueda_por_Nombre", "Ordenar_por", "Ordenacion", "Cantidad_Filas_Mostrar");
	$Paginacion->ejecutar();
?>

<div class="row-fluid show-grid" id="grilla">        
          <div class="span12">
            <div class="row-fluid show-grid">
              <div class="row-fluid show-grid">
                <div class="span2">Id</div>
                <div class="span7">Nombre</div>                 
                <div class="span3"><a href="javascript: Agregar_Categoria();" role="button" class="btn" data-toggle="modal"><i class="icon-plus"></i>Nuevo</a></div>                 
                </div>
              </div>
          </div>
        

    <?php
        while ($rs_cate = $Paginacion->fetchResultado()){
    ?>
          <div class="row-fluid show-grid">
            <div class="span2" id="<?php echo $rs_cate['IdCategoria']?>"><a href="1"><span class="badge"><?php echo $rs_cate['IdCategoria']?></span></a></div>
            <div class="span7"><?php echo $rs_cate['Categoria']?></div>            
            <div class="span3">
               <div class="btn-group">
                  <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> Acci&oacute;n</a>
                  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="javascript: Modificar_Categoria(<?php echo $rs_cate['IdCategoria']?>);"><i class="icon-pencil"></i> Editar</a></li>
                    <li><a href="javascript: Eliminar_Categoria(<?php echo $rs_cate['IdCategoria']?>);"><i class="icon-trash"></i> Eliminar</a></li>
                  </ul>
                </div>                      
            </div>
          </div>
    <?php } ?>
    <div class="lead">
                  <?php echo $Paginacion->fetchNavegacion()?>
    </div>
</div>