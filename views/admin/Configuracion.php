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
		<div class="two columns"></div>
				<div class="eleven columns"><br>
				<table class="rounded">
					<thead>
						<tr >
							<th style="background-color: gray;" colspan="2">Datos de la empresa</th>
						</tr>
					</thead>
					<tbody>
						<form>
							<tr>
								<td>Mision:</td>
								<td class="field"><textarea class="input textarea" placeholder="Descripcion del producto" rows="3"></textarea></td>
							</tr>
							<tr>
								<td>Vision:</td>
								<td class="field"><textarea class="input textarea" placeholder="Descripcion del producto" rows="3"></textarea></td>
							</tr>
							<tr>
								<td>Valores:</td>
								<td class="field"><textarea class="input textarea" placeholder="Descripcion del producto" rows="3"></textarea></td>
							</tr>
							<tr>
								<td></td>
								<td><div class="pretty medium info btn"><button>Actualizar Datos </button></div>		</td>
							</tr>
						</form>
				    </tbody>
				</table>
			</div>			
	    </div>
</div>
<?php $contenido = ob_get_clean() ?>	
	
<?php include 'layout.php' ?>