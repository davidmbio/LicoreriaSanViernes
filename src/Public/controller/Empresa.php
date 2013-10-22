<?php
    include '../model/Gestion.php';
    
    $Res_Empresa= Datos_Empresa();
    while($row = mysql_fetch_array($Res_Empresa)){?>
        <h3 class="min">Mision</h3>
            <p class="lead"><?php echo $row['Mision']; ?></p>
        <h3 class="min">Vision</h3>
            <p class="lead"><?php echo $row['Vision']; ?></p>
        <h3 class="min">Valores</h3>
        <p class="lead"><h5><i class="icon-check"></i><?php echo $row['Valores']; ?></h5></p>
        <?php
    }
    ?>