<div  class="container espacio">
    <h3 class="header titulo2">Editar Información del Cliente</h3>
<?php foreach ($cliente->result() as $row){
 echo form_open(base_url().'Web/ActulalizarCliente/'.$row->id_cliente)?>
    <div class="col s12 row center">
			<div class="row center">
				<a class="waves-effect pink-waves btn-flat" href="<?php echo base_url(); ?>Web/">Cancelar</a>
				<button class="btn waves-effect waves-light pink darken-1" type="submit">Editar<i class="material-icons left">edit</i></button>
			</div>      	
			<div class="row">
				<div class="input-field col s12">
				  <i class="material-icons prefix">business</i>
				  <input id="icon_prefix" type="text" class="" name="nNombreCliente" value="<?php echo($row->NombreCliente) ?>">
				  <label for="icon_prefix">Nombre del Cliente</label>
				</div>
				<div class="input-field col s12">
				  <i class="material-icons prefix">store_mall_directory</i>
				  <input id="icon_telephone" type="text" class="validate" name="nTipoProyecto" value="<?php echo($row->TipoProyecto) ?>" >
				  <label for="icon_telephone">Tipo Proyecto</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">account_circle</i>
				  <input id="icon_prefix" type="text" class="validate" name="nUsuario" value="<?php echo($row->User) ?>">
				  <label for="icon_prefix">Usuario para Cliente</label>
				</div>
                <div class="input-field col s6">
				  <i class="material-icons prefix">locked</i>
				  <input id="icon_prefix" type="text" class="validate" name="nContrasena" value="<?php echo($row->Pass) ?>">
				  <label for="icon_prefix">Contraseña para Cliente</label>
				</div>
			</div>
    </div>
<?php echo form_close();
} ?> 
</div>