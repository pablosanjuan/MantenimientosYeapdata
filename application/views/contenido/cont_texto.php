<div  class="container espacio">
    <h3 class="header titulo2">Editar encabezado</h3>

<?php echo form_open(base_url().'Web/edtTexto/')?>
    <div class="col s12 row center">
			<div class="row center">
				<a class="waves-effect pink-waves btn-flat" href="<?php echo base_url(); ?>Web/mantenimientos">Cancelar</a>
				<button class="btn waves-effect waves-light pink darken-1" type="submit">Guardar<i class="material-icons right">save</i></button>
			</div> 
         <?php foreach ($texto->result() as $row){?>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea1" name="nTexto" class="materialize-textarea" data-length="555"><?php echo($row->Texto) ?></textarea>
                <label for="textarea1">Encabezado para correo:</label>
              </div>
            </div>
        <?php } ?>
    </div>
<?php echo form_close(); ?>
</div>