<?

include '../Controller_master.php';

if(isset($_SESSION['IdUser'])) 
    $Contenido= Regresa_Logeado();
else
    $Contenido= Regresa_Logeo();

require '../templates/tamplates.php';


$temp= new Template('../layout/layout.tpl');
$temp->set('title','Registro');
$temp->set('header', 'Informacion personal');
$temp->set('Tipo_Sesion', $Contenido);
$temp->set('content','
<form action="../upload.php" name="form" method="POST" enctype="multipart/form-data" class="modal fade in">
<div class="alert alert-info"><h4>Cambio de imagen de perfil</h4></div>

<ul style="padding-right: 50px; text-align: center;">    
<div class="image img-polaroid">
                    <img src="../'.$_SESSION['UserRutaFoto'].$_SESSION['UserFoto'].'">
		</div>
<input  type="file" name="image" id="image" required="required"/> &nbsp; &nbsp;
    <input  type="submit" name="submit" value="Cargar imagen" class="btn btn-primary"/>
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="history.back();" />
</form>
</ul>
');
$temp->set('En_Promocion', En_Promocion());
echo $temp->output();