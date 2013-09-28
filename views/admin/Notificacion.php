<?php $titulo = 'Licoreria - Contacto' ?>
	
<?php ob_start() ?>	


<style>
  

  .column:hover, .columns:hover {
    cursor: pointer;
    -webkit-transition-duration: .3s;
    -moz-transition-duration: .3s;
    -o-transition-duration: .3s;
    -ms-transition-duration: .3s;
    transition-duration: .3s;
  }

  

  p {
    font-size: 14px;
    color: #555;

    -webkit-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -o-transition-duration: .2s;
    -ms-transition-duration: .2s;
    transition-duration: .2s;
  }

  .column:hover p, .columns:hover p {
    font-size: 17px;
    font-weight: bold;

    -webkit-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -o-transition-duration: .2s;
    -ms-transition-duration: .2s;
    transition-duration: .2s;
  
  }
</style><br> 
	<div class="row">
		<h2 align="center">Quejas y/o sugerencias de usuarios</h2>
  		<div class="row">
			<div class="twelve columns" >
				<table class="striped rounded">
					<thead>
						<tr style="background-color: gray;">
							<th>Id</th>
							<th>Usuario</th>
							<th>Queja</th>
							<th>Fecha</th>						
							<th>Editar</th>
							<th>Borrar</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><p>1</p></td>		
							<td><p>David</p></td>
							<td><p>La pagina esta muy sencilla</p></td>
							<td><p>1 de Enero de 2014</p></td>
							<td><p><a href=""><i class="icon-pencil"></i> Editar</a></p></td>  
							<td><p><a href=""><i class="icon-cancel-circled"></i> Borrar</a></p></td>
						</tr>
						<tr>
							<td><p>1</p></td>		
							<td><p>David</p></td>
							<td><p>La pagina esta muy sencilla</p></td>
							<td><p>1 de Enero de 2014</p></td>
							<td><p><a href=""><i class="icon-pencil"></i> Editar</a></p></td>  
							<td><p><a href=""><i class="icon-cancel-circled"></i> Borrar</a></p></td>
						</tr>
						<tr>
							<td><p>1</p></td>		
							<td><p>David</p></td>
							<td><p>La pagina esta muy sencilla</p></td>
							<td><p>1 de Enero de 2014</p></td>
							<td><p><a href=""><i class="icon-pencil"></i> Editar</a></p></td>  
							<td><p><a href=""><i class="icon-cancel-circled"></i> Borrar</a></p></td>
						</tr>					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php $contenido = ob_get_clean() ?>	
	
<?php include 'layout.php' ?>