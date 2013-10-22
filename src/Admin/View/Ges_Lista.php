
<?
	include "../Model/conexion.php";
	include "../Model/basico.php";
	include "../../../web/js/lib/PHPPaging.lib.php";
        
	$Paginacion = new PHPPaging;
	$sql = "select * from tblGestion";
	if (isset($_GET['Busqueda_por_Nombre']))
		$sql .= " where Mision like '%".fn_filtro(substr($_GET['Busqueda_por_Nombre'], 0, 16))."%'";
	if (isset($_GET['Ordenar_por']))
		$sql .= sprintf(" order by %s %s", fn_filtro($_GET['Ordenar_por']), fn_filtro($_GET['Ordenacion']));
	else
		$sql .= " order by IdGestion desc";
	$Paginacion->agregarConsulta($sql); 
	$Paginacion->div('Listado');
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
                <div class="span3">Mision</div>                 
                <div class="span3">Vision</div>                           
                <div class="span3">Valores</div>                                                         
              </div>                 
            </div>
          </div>
</div>
        

    <?
      $rs_gest = $Paginacion->fetchResultado()
    ?>
          <div class="row-fluid show-grid">
            <div class="span1" id="<?=$rs_gest['IdGestion']?>"><a href="1"><span class="badge"><?=$rs_gest['IdGestion']?></span></a></div>
            <div class="span3"><?=$rs_gest['Mision']?></div>
            <div class="span3"><?=$rs_gest['Vision']?></div>
            <div class="span3"><?=$rs_gest['Valores']?></div>
                            <div class="span2">
                       <div class="btn-group">
                          <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> Acci&oacute;n</a>
                          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="javascript: Modificar_Gestion(<?=$rs_gest['IdGestion']?>);"><i class="icon-pencil"></i> Editar</a></li>
                            <li><a href="javascript: Mostrar_Gestion(<?=$rs_gest['IdGestion']?>);"><i class="icon-pencil"></i> Mostrar Todo</a></li>
                          </ul>
                        </div>                      
                 </div>
          </div>