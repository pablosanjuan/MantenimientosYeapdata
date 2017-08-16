<div class="parallax-container">
  <div class="parallax"><img src="<?php echo base_url();?>assets/images/recursos/asa.png"></div>
</div>
<div class="row content espacio">
    <h2 class="header titulo1">AVAYA Site Administration</h2>
</div>
<div class="row container espacio">

<?php foreach ($modulos->result() as $row){ ?>
  
    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo base_url(); ?>assets/images/recursos/asa.png">
          <a class="modal-trigger btn-floating halfway-fab waves-effect waves-light red" href=""><i class="material-icons">play_arrow</i></a>
        </div>
        <div class="card-content">
          <p><?php echo($row->NombreModulo) ?></p>
        </div>
      </div>
    </div>
<?php } ?>
</div>