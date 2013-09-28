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
		<h2 align="center">Registro de Productos</h2>
		<div class="three columns"></div>
				<div class="then columns"><br>
				<table class="rounded">
					<thead>
						<tr >
							<th style="background-color: gray;" colspan="2">Datos del producto</th>
						</tr>
					</thead>
					<tbody>
						<form>
							<tr>
								<td>Producto:</td>
								<td class="field"><input class="text input" type="text" placeholder="Nombre del producto" required /></td>
							</tr>
							<tr>
								<td>Descripcion:</td>
								<td class="field"><textarea class="input textarea" placeholder="Descripcion del producto" rows="3"></textarea></td>
							</tr>
							<tr>
								<td>Precio:</td>
								<td class="field"><input class="text input" type="text" placeholder="Precio del producto" required /></td>
							</tr>
							<tr>
								<td>Categoria:</td>
								<td>
									<div class="picker">
										<select>
											<option value="#" disabled>Seleccione la categoria...</option>
											<option>Licor 1</option>
											<option>Licor 2</option>
											<option>Licor 3</option>
										</select>
									</div>
								</td>
							</tr>
							<tr>
								<td>Imagen:</td>
								<td class="field"><input class="phone input" type="text" placeholder="Imagen del producto" required /></td>
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
							<th>Producto</th>
							<th>Descripcion</th>
							<th>Categoria</th>
							<th>Imagen</th>						
							<th>Editar</th>
							<th>Borrar</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><p>1</p></td>		
							<td><p>Jose Cuervo</p></td>
							<td><p>Bebida con 0% alcohol</p></td>
							<td><p>Licor 1</p></td>
							<td><p>jose.jpg<P></td>
							<td><p><a href=""><i class="icon-pencil"></i> Editar</a></p></td>  
							<td><p><a href=""><i class="icon-cancel-circled"></i> Borrar</a></p></td>
						</tr>
						<tr>
							<td><p>2</p></td>		
							<td><p>Jose Cuervo</p></td>
							<td><p>Bebida con 0% alcohol</p></td>
							<td><p>Licor 1</p></td>
							<td><p>jose.jpg<P></td>
							<td><p><a href=""><i class="icon-pencil"></i> Editar</a></p></td>  
							<td><p><a href=""><i class="icon-cancel-circled"></i> Borrar</a></p></td>
						</tr>
						<tr>
							<td><p>2</p></td>		
							<td><p>Jose Cuervo</p></td>
							<td><p>Bebida con 0% alcohol</p></td>
							<td><p>Licor 1</p></td>
							<td><p>jose.jpg<P></td>
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