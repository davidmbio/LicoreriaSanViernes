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
		<h2 align="center">Registro de Empleados</h2>
		<div class="three columns"></div>
				<div class="then columns"><br>
				<table class="rounded">
					<thead>
						<tr >
							<th style="background-color: gray;" colspan="2">Datos del empleado</th>
						</tr>
					</thead>
					<tbody>
						<form>
							<tr>
								<td>Nombre:</td>
								<td class="field"><input class="text input" type="text" placeholder="Nombre del cliente" required /></td>
							</tr>
							<tr>
								<td>A. Paterno:</td>
								<td class="field"><input class="text input" type="text" placeholder="Primer apellido" required /></td>
							</tr>
							<tr>
								<td>A. Materno:</td>
								<td class="field"><input class="text input" type="text" placeholder="Segundo apellido" required /></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td class="field"><input class="text input" type="text" placeholder="Nacimiento" required /></td>
							</tr>
							<tr>
								<td>Telefono:</td>
								<td class="field"><input class="phone input" type="text" placeholder="Tefonono" required /></td>
							</tr>
							<tr>
								<td>Nacimiento:</td>
								<td class="field"><input class="email input" type="text" placeholder="Correo electronico" required /></td>
							</tr>
							<tr>
								<td>Usuario:</td>
								<td class="field"><input class="phone input" type="text" placeholder="Tefonono" required /></td>
							</tr>
							<tr>
								<td>Contrase&ntilde;a</td>
								<td class="field"><input class="email input" type="text" placeholder="Correo electronico" required /></td>
							</tr>
							<tr>
								<td></td>
								<td><div class="pretty medium info btn"><button>Registrar datos </button></div>		</td>
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
							<th>Empleado</th>
							<th>Email</th>
							<th>Telefono</th>
							<th>Nacimiento</th>
							<th>Usuario</th>
							<th>Contrase&ntilde;a</th>						
							<th>Editar</th>
							<th>Borrar</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><p>1</p></td>		
							<td><p>David Mobio Hdez</p></td>
							<td><p>davi@example.com</p></td>
							<td><p>7718181636</p></td>
							<td><p>29/12/2013<P></td>
							<td><p>david</p></td>
							<td><p>david1</P></td>
							<td><p><a href=""><i class="icon-pencil"></i> Editar</a></p></td>  
							<td><p><a href=""><i class="icon-cancel-circled"></i> Borrar</a></p></td>
						</tr>
						<tr>
							<td><p>2</p></td>
							<td><p>Alex Glz Lopez</p></td>
							<td><p>alex@example.com</p></td>
							<td><p>771238137</p></td>
							<td><p>04/10/2009</p></td>
							<td><p>alex</p></td>
							<td><p>alex2</p></td>
							<td><p><a href=""><i class="icon-pencil"></i> Editar</a></p></td>
							<td><p><a href=""><i class="icon-cancel-circled"></i> Borrar</a></p></td>							
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php $contenido = ob_get_clean() ?>	
	
<?php include 'layout.php' ?>