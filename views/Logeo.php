<?php $titulo = 'Licoreria - Contactos' ?>
	
<?php ob_start() ?>	
<style>
.Posicion{
margin-left: 30px;
margin-right: 30px;
}
</style>

<div class="row" id="tiles" style="background-color: rgba(0,0,0,0.2);">
	<div class="row">
		<div class="four columns"></div>
		<div class="Posicion">																	
			<div class="then columns"><br>
				<table class="rounded">
					<thead>
						<tr>
							<th style="background-color: gray;" colspan="2">Registro de Cliente</th>
						</tr>
					</thead>
					<tbody>
						<form>
							<tr>
								<td>Usuario:</td>
								<td class="field"><input class="text input" type="text" placeholder="Nombre del cliente" required /></td>
							</tr>
							<tr>
								<td>Contrase&ntilde;a:</td>
								<td class="field"><input class="text input" type="text" placeholder="Primer apellido" required /></td>
							</tr>
							<tr>
								<td><div class="pretty medium info btn"><button>Entrar</button></div></td>
								<td><div class="pretty medium info btn"><a href="../views/news.php">Cancelar</a></div></td>
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