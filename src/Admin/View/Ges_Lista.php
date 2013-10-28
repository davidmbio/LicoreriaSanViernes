
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
        
        $rs_gest=$Paginacion->fetchResultado()
?>

        <div class="row-fluid show-grid" id=grilla"">        
          <div class="span12">
            <div class="row-fluid show-grid">
              <div class="row-fluid show-grid">
                <div class="span6">Mision</div>                 
                <div class="span6">Vision</div>                                                                                    
              </div>                 
            </div>
          </div>
        </div>
        <div class="row-fluid show-grid">
            <div class="span6"><?=$rs_gest['Mision']?> <br> 
                <a class="btn" href="javascript: Modificar_Gestion(1);"><i class="icon-pencil"></i> Modificar</a></div>
            <div class="span6"><?=$rs_gest['Vision']?> <br>
                <a class="btn" href="javascript: Modificar_Gestion(2);"><i class="icon-pencil"></i> Modificar</a></div>
        </div>

        <div class="row-fluid show-grid" id=grilla"">        
          <div class="span12">
            <div class="row-fluid show-grid">
              <div class="row-fluid show-grid">
                <div class="span3">Email</div>                 
                <div class="span2">Telefono</div>                                                                                    
                <div class="span4">Direccion</div>                                                                                    
                <div class="span3">Valores</div>                                                                                    
              </div>                 
           </div>
        </div>
        <div class="row-fluid show-grid">
            <div class="span3"><?=$rs_gest['Email']?> <br> 
                <a class="btn" href="javascript: Modificar_Gestion(3);"><i class="icon-pencil"></i> Modificar</a></div>
            <div class="span2"><?=$rs_gest['Telefono']?> <br>
                <a class="btn" href="javascript: Modificar_Gestion(4);"><i class="icon-pencil"></i> Modificar</a></div>
            <div class="span4"><?=$rs_gest['Direccion']?> <br>
                <a class="btn" href="javascript: Modificar_Gestion(5);"><i class="icon-pencil"></i> Modificar</a></div>
            <div class="span3"><?=$rs_gest['Valores']?> <br>
                <a class="btn" href="javascript: Modificar_Gestion(6);"><i class="icon-pencil"></i> Modificar</a></div>
        </div>