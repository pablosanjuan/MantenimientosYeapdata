<div  class="container espacio">
    <h3 class="header titulo2">Agregar Sede</h3>

<?php echo form_open(base_url().'Web/AddSede/')?>
    <div class="col s12 row center">
			<div class="row center">
				<a class="waves-effect pink-waves btn-flat" href="<?php echo base_url(); ?>Web/mantenimientos">Cancelar</a>
				<button class="btn waves-effect waves-light pink darken-1" type="submit">Guardar<i class="material-icons right">save</i></button>
			</div>      	
			<div class="row">
				<div class="input-field col s6">
				  <i class="material-icons prefix">business</i>
				  <input id="icon_prefix" type="text" class="validate" name="nNombreSede">
				  <label for="icon_prefix">Nombre Sede</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">public</i>
				  <input id="icon_telephone" type="text" class="validate" name="nIp">
				  <label for="icon_telephone">Ip</label>
				</div>
				<div class="input-field col s12">
				  <i class="material-icons prefix">location_on</i>
				  <input id="icon_prefix" type="text" class="validate" name="nDireccionSede">
				  <label for="icon_prefix">Dirección Sede</label>
				</div>
			</div>
    </div>
<?php echo form_close(); ?>
</div>