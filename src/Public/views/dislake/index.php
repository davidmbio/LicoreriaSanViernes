<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de votación Me gusta o No me gusta con PHP, Jquery y Ajax</title>
<link rel="stylesheet" href="vots/style.css">
</head>
<body>
<div class="contenedor">
    <?php
    require_once("vots/config.php");
    $posts=$db->query("select * from posts order by id desc");
    if ($filas=$posts->fetch_array()){
        do{
        ?>
        <h3><?php echo utf8_encode($filas["titulo"]); ?></h3>
        <ul class="votos">
            <li class="voting_btn up_button" data-voto="likes" data-id="<?php echo $filas["id"]; ?>"><span><?php echo $filas["likes"]; ?></span></li>
            <li class="voting_btn dw_button" data-voto="hates" data-id="<?php echo $filas["id"]; ?>"><span><?php echo $filas["hates"]; ?></span></li>
        </ul>
        <p><?php echo utf8_encode($filas["resumen"]); ?></p>
        <?php
        }
        while($filas=$posts->fetch_array());
    }
    else
        echo "<h3>No hay entradas disponibles.</h3>";
    ?>
    
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function() 
{
    $(".votos .voting_btn").click(function (e) 
    {
         e.preventDefault();
        var voto_hecho = $(this).data('voto');
        var id = $(this).data("id"); 
        var li = $(this);
        
        if(voto_hecho && id)
        {
            $.post('vots/ajax_voto.php', {'id':id, 'voto':voto_hecho}, function(data) 
            {
                if (data!="voto_duplicado") 
                {
                    li.addClass(voto_hecho+"_votado").find("span").text(data);
                    li.closest("ul").append("<span class='votado'>Gracias!</span>");
                }
                else li.closest("ul").append("<span class='votado'>Ya has votado!</span>");
            });
            setTimeout(function() {$('.votado').fadeOut('fast');}, 3000);
        }
    });
});
</script>
</body>
</html>