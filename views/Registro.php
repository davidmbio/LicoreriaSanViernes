<?php $titulo = 'Licoreria - Contactos' ?>
	
<?php ob_start() ?>	
<style>
.Posicion{
margin-left: 5px;
margin-right: 20px;
}
</style>

<div class="row" id="tiles" style="background-color: rgba(0,0,0,0.2);">
	<div class="row">
		<div class="three columns"></div>
		<div class="Posicion">																	
			<div class="then columns"><br>
				<table class="rounded">
					<thead>
						<tr >
							<th style="background-color: gray;" colspan="2">Registro de Cliente</th>
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
								<td>F. Nacimiento:</td>
								<td class="field"><input class="text input" type="text" placeholder="Nacimiento" required /></td>
							</tr>
							<tr>
								<td>Telefono:</td>
								<td class="field"><input class="phone input" type="text" placeholder="Tefonono" required /></td>
							</tr>
							<tr>
								<td>Correo electronico:</td>
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
	</div>
	
</div>


<?php $contenido = ob_get_clean() ?>	
	
<?php include 'layout.php' ?>