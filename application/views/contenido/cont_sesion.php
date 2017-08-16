<div class="row hide-on-med-and-down" style="z-index: 1">
	<div class="slider fullscreen" id="index-banner" style="padding-bottom: 10px; ">
	    <ul class="slides right-align">
	      <li>
            <img src="<?php echo base_url(); ?>assets/images/recursos/sesion3.jpg">
	        <div class="right-caption fondo_blanco_loguin z-depth-5">
		        <div class="row input-field col s12 center-align espacio">
                    <h3 class="txt_sesion espacio">PLATAFORMA PARA GESTIÓN DE MANTENIMIENTOS</h3>
		        </div>
			 <?=form_open(base_url().'Admin/new_user')?>
	          <div class="row">
		        <div class="input-field col s6 l12">
		          <i class="material-icons prefix">account_circle</i>
		          <input id="icon_prefix" name="username" placeholder="Nombre de Usuario" type="text" class="">
		        </div>
		        <p><?=form_error('username')?></p>
		        <div class="input-field col s6 l12">
		          <i class="material-icons prefix">lock</i>
		          <input id="icon_prefix" name="password" placeholder="Introduce tu Contraseña" type="password" class="">
		        <p><?=form_error('password')?></p>
		        </div>
                <?=form_hidden('token',$token)?>
                    <?=form_close()?>
                    <?php 
                    if($this->session->flashdata('usuario_incorrecto')){
                    ?>
                    <p style="margin-right:20px" class="red-text right-align"><?=$this->session->flashdata('usuario_incorrecto')?></p>
                    <?php
                }?>
		        <div class="input-field col s12">
				<button class="waves-effect waves-light btn indigo" name="submit"><i class="material-icons right">chevron_right</i>Iniciar Sesión</button>
		        </div>
		      </div>
              <div class="row ">
                  <img style="width:40%" class="responsive-img" src="<?php echo base_url(); ?>assets/images/recursos/logo1.png">
              </div>
	       </div>
	      </li>
	    </ul>
	</div>
</div>