<div  class="container espacio">
    <h2 class="header titulo1">Instructivos del Proyecto</h2>
  <div class="row">
   <?php foreach ($cursos->result() as $row){ ?>
      <?php $row->NombreCurso ?>
    <div class="col s12 m4">
      <div class="card small">
        <div class="card-image">
            <?php if($row->RutaImagen!=""){
            echo("<img src='$row->RutaImagen'>");
            }else{ ?>
            <img class="main_logo" src="<?php echo base_url(); ?>assets/images/recursos/logo_avaya.png">
            <?php } ?>
            
            
        </div>
        <div class="card-content">
          <p><?php echo($row->NombreCurso) ?></p>
        </div>
        <div class="card-action">
          <?php echo("<a class='pink-text' href='".base_url()."Web/curso/$row->id_cursos'>Ver mas</a>")?>
        </div>
      </div>
    </div>
    <?php }?>
  </div>
    <div class="fixed-action-btn">
        <a href="<?php echo base_url(); ?>Web/add_curso" class="btn-floating btn-large waves-effect waves-light pink darken-1"><i class="material-icons">add</i></a>
     </div>
</div>