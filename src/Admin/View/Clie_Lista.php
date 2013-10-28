
<?
	include "../Model/conexion.php";
	include "../Model/basico.php";
	include "../../../web/js/lib/PHPPaging.lib.php";
        
	$Paginacion = new PHPPaging;
	$sql = "select * from tblClientes";
	if (isset($_GET['Busqueda_por_Nombre']))
		$sql .= " where Nombre like '%".fn_filtro(substr($_GET['Busqueda_por_Nombre'], 0, 16))."%'";
	if (isset($_GET['Ordenar_por']))
		$sql .= sprintf(" order by %s %s", fn_filtro($_GET['Ordenar_por']), fn_filtro($_GET['Ordenacion']));
	else
		$sql .= " order by IdCliente desc";
	$Paginacion->agregarConsulta($sql); 
	$Paginacion->div('Clientes');
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
                <div class="span3">Nombre</div>
                <div class="span2">Email</div>
                <div class="span2">Telefono</div>
                <div class="span2">Usuario</div>                 
                <div class="span2"><a href="javascript: Agregar_Cliente();" role="button" class="btn" data-toggle="modal"><i class="icon-plus"></i>Nuevo</a></div>                 
                </div>
              </div>
          </div>
        

    <?
        while ($rs_clie = $Paginacion->fetchResultado()){
    ?>
          <div class="row-fluid show-grid">
            <div class="span1" id="<?=$rs_clie['IdCliente']?>"><a href="1"><span class="badge"><?=$rs_clie['IdCliente']?></span></a></div>
            <div class="span3"><?=$rs_clie['Nombre']?>,<?=$rs_clie['Apellidos']?></div>
            <div class="span2"><?=$rs_clie['Email']?></div>
            <div class="span2"><?=$rs_clie['Telefono']?></div>
            <div class="span2"><?=$rs_clie['Usuario']?></div>
            
            <div class="span2">
               <div class="btn-group">
                  <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> Acci&oacute;n</a>
                  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="javascript: Modificar_Cliente(<?=$rs_clie['IdCliente']?>);"><i class="icon-pencil"></i> Editar</a></li>
                    <li><a href="javascript: Eliminar_Cliente(<?=$rs_clie['IdCliente']?>);"><i class="icon-trash"></i> Eliminar</a></li>
                  </ul>
                </div>                      
            </div>
          </div>
    <? } ?>
    <div class="lead">
                  <?=$Paginacion->fetchNavegacion()?>
    </div>