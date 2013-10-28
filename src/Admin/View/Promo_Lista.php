<?
	include "../Model/conexion.php";
	include "../Model/basico.php";
	include "../../../web/js/lib/PHPPaging.lib.php";
        
	$Paginacion = new PHPPaging;
	$sql = "select * from tblPromocion";
	if (isset($_GET['Busqueda_por_Nombre']))
		$sql .= " where Titulo like '%".fn_filtro(substr($_GET['Busqueda_por_Nombre'], 0, 16))."%'";
	if (isset($_GET['Ordenar_por']))
		$sql .= sprintf(" order by %s %s", fn_filtro($_GET['Ordenar_por']), fn_filtro($_GET['Ordenacion']));
	else
		$sql .= " order by IdPromocion desc";
	$Paginacion->agregarConsulta($sql); 
	$Paginacion->div('Promocion');
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
                <div class="span1">Clave</div>
                <div class="span3">Titulo</div>
                <div class="span2">Final</div>
                <div class="span1">Imagen</div>
                <div class="span3">A promocionar</div>
                <div class="span2"><a href="javascript: Agregar_Promocion();" role="button" class="btn" data-toggle="modal"><i class="icon-plus"></i>Nuevo</a></div>                 
                </div>
              </div>
          </div>
        

    <?
        while ($rs_promo = $Paginacion->fetchResultado()){
    ?>
          <div class="row-fluid show-grid">
            <div class="span1" id="<?=$rs_promo['IdPromocion']?>"><a href="1"><span class="badge"><?=$rs_promo['IdPromocion']?></span></a></div>
            <div class="span3"><?=$rs_promo['Titulo']?></div>
            <div class="span2"><?=$rs_promo['Fin']?></div>
            <div class="span1"><a href="javascript: Promocion_Imagen(<?=$rs_promo['IdPromocion']?>);" role="button" class="btn" data-toggle="modal"><i class="icon-picture"></i></a></div>           
            <div class="span3">                    
                <a href="javascript: Promocionar_por(<?=$rs_promo['IdPromocion']?>,'IdCategoria');" role="button" class="btn" data-toggle="modal"><i class="icon-th-large"></i>Categorias</a>
                <a href="javascript: Promocionar_por(<?=$rs_promo['IdPromocion']?>,'IdProducto');" role="button" class="btn" data-toggle="modal"><i class="icon-glass"></i>Productos</a>
            </div>
            
            <div class="span2">
               <div class="btn-group">
                  <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> Acci&oacute;n</a>
                  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="javascript: Modificar_Promocion(<?=$rs_promo['IdPromocion']?>);"><i class="icon-pencil"></i> Editar</a></li>
                    <li><a href="javascript: Eliminar_Promocion(<?=$rs_promo['IdPromocion']?>);"><i class="icon-trash"></i> Eliminar</a></li>
                  </ul>
                </div>                      
            </div>
          </div>
    <? } ?>
    <div class="lead">
                  <?=$Paginacion->fetchNavegacion()?>
    </div>