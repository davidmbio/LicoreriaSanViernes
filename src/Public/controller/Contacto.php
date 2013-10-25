<?php
    include '../model/Gestion.php';
    
    $Res_Empresa= Datos_Empresa();
        while($row = mysql_fetch_array($Res_Empresa)){?>

        <h3>Datos de la empresas</h3>
        <p><strong class="small">Tel&eacute;fono</strong><br>
            <?php echo $row['Telefono']; ?></p>
        <p><strong class="small">Correo electronico</strong><br>
            <?php echo $row['Email']; ?></p>
        <h3>Ubicacion</h3><p><?php echo $row['Direccion']; ?></p><br>
        <h3>Quejas y/o sugerencias</h3>
        <form>
            <textarea rows="3"></textarea><br>
        <button class="btn" type="button">Enviar comentario</button>
        </form><?php
    }
    ?>