<div class="container right-align espacio">
  <a class="btn waves-effect waves-blue col s12 red-text salir z-depth-4" href="<?php echo base_url(); ?>Admin/logout_ci"><i class="material-icons left">exit_to_app</i>Cerrar Sesión</a>
</div>
<div  class="container">
    <h2 class="titulo1">Nuestros Clientes</h2>
  <div class="row ">
      <div class="collection col s9">
          <ul class="collection">
            <?php foreach ($clientes->result() as $row){
                if ($row->TipoRol==1) {
                    echo("<li class='collection-item avatar'>");
                      echo("<i class='material-icons circle'>location_city</i>");
                      echo("<a class='txtEmpresas' href='".base_url()."Web/mantenimientos'>".$row->NombreCliente."</a>");
                      echo("<p>".$row->TipoProyecto."</p>");
                        echo("<a href='".base_url()."Web/Editar_cliente/$row->id_cliente' class='secondary-content'><i class='material-icons orange-text'>border_color</i></a>");
                    echo("</li>");
                }
            } ?>
          </ul> 
        </div>
        <div class="col s3">
            <a class="z-depth-4 txt1-blanco col s12 waves-effect waves-light btn-large indigo darken-4" href="<?php echo base_url(); ?>Web/agregar_cliente"><i class="material-icons right">add</i>Agregar Empresa</a>
        </div>
    </div>        
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->   
</div>