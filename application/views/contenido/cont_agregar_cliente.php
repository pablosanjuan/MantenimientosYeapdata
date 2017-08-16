<div  class="container espacio">
    <h3 class="header titulo2">Agregar Cliente</h3>
<?php echo form_open(base_url().'Web/add_cliente/')?>
    <div class="col s12 row center">
			<div class="row center">
				<a class="waves-effect pink-waves btn-flat" href="<?php echo base_url(); ?>Web/">Cancelar</a>
				<button class="btn waves-effect waves-light pink darken-1" type="submit">Guardar<i class="material-icons right">save</i></button>
			</div>      	
			<div class="row">
				<div class="input-field col s12">
				  <i class="material-icons prefix">business</i>
				  <input id="icon_prefix" type="text" class="" name="nNombreCliente">
				  <label for="icon_prefix">Nombre del Cliente</label>
				</div>
				<div class="input-field col s12">
				  <i class="material-icons prefix">store_mall_directory</i>
				  <input id="icon_telephone" type="text" class="validate" name="nTipoProyecto">
				  <label for="icon_telephone">Tipo Proyecto</label>
				</div>
				<div class="input-field col s12">
				  <i class="material-icons prefix">account_circle</i>
				  <input id="icon_prefix" type="text" class="validate" name="nUsuario">
				  <label for="icon_prefix">Usuario para Cliente</label>
				</div>
                <div class="input-field col s12">
				  <i class="material-icons prefix">locked</i>
				  <input id="icon_prefix" type="text" class="validate" name="nContrasena">
				  <label for="icon_prefix">Contraseña para Cliente</label>
				</div>
			</div>
    </div>
<?php echo form_close(); ?>
</div>