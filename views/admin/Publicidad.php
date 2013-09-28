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
		<h2 align="center">Publicidad</h2>
		<div class="three columns"></div>
				<div class="then columns"><br>
				<table class="rounded">
					<thead>
						<tr >
							<th style="background-color: gray;" colspan="2">Datos de la publicacion</th>
						</tr>
					</thead>
					<tbody>
						<form>
							<tr>
								<td>Imagen:</td>
								<td class="field"><input class="text input" type="text" placeholder="Nombre del producto" required /></td>
							</tr>
							<tr>
								<td>Titulo:</td>
								<td class="field"><input class="text input" type="text" placeholder="Precio del producto" required /></td>
							</tr>
							<tr>
								<td>Descripcion:</td>
								<td class="field"><textarea class="input textarea" placeholder="Descripcion del producto" rows="3"></textarea></td>
							</tr>
							<tr>
								<td></td>
								<td><div class="pretty medium info btn"><button>Registrar producto </button></div>		</td>
							</tr>
						</form>
				    </tbody>
				</table>
			</div>			
	    </div>
<br>
  		<div class="row">
			<div class="twelve columns" >
				<table class="striped rounded">
					<thead>
						<tr style="background-color: gray;">
							<th>Id</th>
							<th>Imagen</th>
							<th>Titulo</th>
							<th>Descripcion</th>						
							<th>Editar</th>
							<th>Borrar</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><p>1</p></td>		
							<td><p>Ofertas.jpg</p></td>
							<td><p>Ofertas en licores</p></td>
							<td><p>En la compra de cualquier productos se hacen un 50 % de descuento en productos de jose cuervo especial</p></td>
							<td><p><a href=""><i class="icon-pencil"></i> Editar</a></p></td>  
							<td><p><a href=""><i class="icon-cancel-circled"></i> Borrar</a></p></td>
						</tr>
						<tr>
							<td><p>1</p></td>		
							<td><p>Ofertas.jpg</p></td>
							<td><p>Ofertas en licores</p></td>
							<td><p>En la compra de cualquier productos se hacen un 50 % de descuento en productos de jose cuervo especial</p></td>
							<td><p><a href=""><i class="icon-pencil"></i> Editar</a></p></td>  
							<td><p><a href=""><i class="icon-cancel-circled"></i> Borrar</a></p></td>
						</tr>
												<tr>
							<td><p>1</p></td>		
							<td><p>Ofertas.jpg</p></td>
							<td><p>Ofertas en licores</p></td>
							<td><p>En la compra de cualquier productos se hacen un 50 % de descuento en productos de jose cuervo especial</p></td>
							<td><p><a href=""><i class="icon-pencil"></i> Editar</a></p></td>  
							<td><p><a href=""><i class="icon-cancel-circled"></i> Borrar</a></p></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php $contenido = ob_get_clean() ?>	
	
<?php include 'layout.php' ?>