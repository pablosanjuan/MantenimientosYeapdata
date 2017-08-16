<div  class="container espacio">
    <h3 class="header titulo2">Agregar Curso</h3>

<?php echo form_open(base_url().'Web/AddCurso/')?>
    <div class="col s12 row center">
			<div class="row center">
				<a class="waves-effect pink-waves btn-flat" href="<?php echo base_url(); ?>Web/index">Cancelar</a>
				<button class="btn waves-effect waves-light pink darken-1" type="submit">Guardar<i class="material-icons right">save</i></button>
			</div>      	
			<div class="row">
				<div class="input-field col s12">
				  <i class="material-icons prefix">local_library</i>
				  <input id="icon_prefix" type="text" class="validate" name="nNombreCurso">
				  <label for="icon_prefix">Nombre Curso</label>
				</div>
			</div>
    </div>
<?php echo form_close(); ?>
</div>