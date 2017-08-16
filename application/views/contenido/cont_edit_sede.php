<?php foreach ($sedes->result() as $row){
echo form_open(base_url().'Web/ActulalizarSede/'.$row->id_mantenimiento)?>
         <div class="container espacio ">

        <div class="row right-align">
          <a class="waves-effect waves-teal btn-flat modal-trigger red-text" href="#modal2"><i class="material-icons left">delete_forever</i>Eliminar</a>
        </div>
            <!-- Modal Structure -->
            <div id="modal2" class="modal">
              <div class="modal-content">
                <h4>Eliminar Registro de forma permanente?</h4>
                <p>Desea Eliminar esta sede de manera permanente?</p>
              </div>
              <div class="modal-footer">
                <a href="<?php echo base_url().'Web/EliminarSede/'.$row->id_mantenimiento ?>" class="red-text modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons left">delete_forever</i>Eliminar</a>
              </div>
            </div>
            
              <div class="row">
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">business</i>
                      <input id="icon_prefix" type="text" name='nNombreSede' value="<?php echo($row->NombreSede) ?>">
                      <label for="icon_prefix">Nombre Sede</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">location_on</i>
                      <input id="icon_prefix" type="text" name='nDireccionSede' value="<?php echo($row->DireccionSede) ?>">
                      <label for="icon_prefix">Dirección Sede</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">public</i>
                      <input id="icon_telephone" type="text" name='nIp' value="<?php echo($row->Ip) ?>">
                      <label for="icon_telephone">Ip</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">public</i>
                      <input id="icon_telephone" type="text" name='nTipoEquipos' value="<?php echo($row->TipoEquipos) ?>">
                      <label for="icon_telephone">Tipo de Equipos en la sede</label>
                    </div>
                <!--    <div class="input-field col s6">
                        <select multiple name="nTipoEquipos" id="nTipoEquipos">
                          <option value="<?php echo($row->TipoEquipos) ?>" selected><?php echo($row->TipoEquipos) ?></option>
                          <option value="MG">MG</option>
                          <option value="IPO">IPO</option>
                          <option value="BSM">BSM</option>
                        </select>
                        <label>Tipo de Equipos en la Sede</label>
                    </div> -->
                    <div class="input-field col s3">
                        <?php if($row->FechaPropuesta==0){ ?>
                      <input type="date" class="datepicker red-text" name='nFechaPropuesta' value="<?php echo($row->FechaPropuesta) ?>">
                      <label for="icon_prefix" class="active">Fecha Propuesta</label>
                        <?php }else{?>
                      <input type="date" class="datepicker" name='nFechaPropuesta' value="<?php echo($row->FechaPropuesta) ?>">
                      <label for="icon_prefix" class="active">Fecha Propuesta</label>
                        <?php }?>
                    </div>
                  <div class="input-field col s1">
                      <a href="<?php echo base_url().'Web/ReiniciarFechaPropuesta/'.$row->id_mantenimiento ?>" data-position="bottom" data-delay="50" data-tooltip="Borrrar Fecha Propuesta" class="tooltipped red-text modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons left">close</i></a>   
                  </div>
                    <div class="input-field col s3">
                        <?php if($row->FechaRealizado==0){ ?>
                      <label for="icon_prefix" class="active">Fecha Realizado</label>
                      <input type="date" class="datepicker red-text" name='nFechaRealizado' value="<?php echo($row->FechaRealizado) ?>">
                        <?php }else{?>
                      <input type="date" class="datepicker" name='nFechaRealizado' value="<?php echo($row->FechaRealizado) ?>">
                      <label for="icon_prefix" class="active">Fecha Realizado</label>
                        <?php }?>
                    </div>                                                                        
                  <div class="input-field col s1">
                      <a href="<?php echo base_url().'Web/ReiniciarFechaRealizada/'.$row->id_mantenimiento ?>" data-position="bottom" data-delay="50" data-tooltip="Borrrar Fecha Realizado" class="tooltipped red-text modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons left">close</i></a>   
                  </div>
                  <div class="input-field col s3">
                        <?php if($row->FechaProgramado==0){ ?>
                  <input type='text' class='datepicker red-text' name='nFechaProgramado' value="<?php echo($row->FechaProgramado)?>">
                    <label for="icon_prefix" class="active">Fecha Programada</label>
                        <?php }else{?>
                  <input type='text' class='datepicker' name='nFechaProgramado' value="<?php echo($row->FechaProgramado) ?>">
                    <label for="icon_prefix" class="active">Fecha Programada</label>
                        <?php }?>
                  </div>
                  <div class="input-field col s1">
                      <a href="<?php echo base_url().'Web/ReiniciarFechaProgramada/'.$row->id_mantenimiento ?>" data-position="bottom" data-delay="50" data-tooltip="Borrrar Fecha Programado" class="tooltipped red-text modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons left">close</i></a>   
                  </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">note_add</i>
              <input id="icon_prefix" type="text" name='nObservacion' value="<?php echo($row->ObservacionCliente) ?>">
              <label for="icon_prefix">Observación de confirmación</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">link</i>
              <input id="icon_telephone" type="text" name='nDireccionActa' value="<?php echo($row->DireccionActa) ?>">
              <label for="icon_telephone">Nombre del Archivo de Acta de mantenimiento</label>
            </div>
            <!--  Check box para Documentado-->                                      
                  <?php
                    if($row->Documentado=='on'){ ?>
                        <div class="col s3">
                            <p>
                              <input type="checkbox" id="ch_Documentado" checked="checked" name="ch_Documentado"/>
                              <label for="ch_Documentado">Documentado</label>
                            </p>
                        </div>
                  <?php
                    }else{ ?>
                        <div class="col s3">
                            <p>
                              <input type="checkbox" id="ch_Documentado"  name="ch_Documentado"/>
                              <label for="ch_Documentado">Documentado</label>
                            </p>
                        </div>
                  <?php
                  }?>
            <!--  Check box para Confirmado-->                                      
                  <?php
                    if($row->Confirmado=='on'){ ?>
                        <div class="col 2">
                            <p>
                              <input type="checkbox" id="ch_Confirmado" checked="checked" name="ch_Confirmado"/>
                              <label for="ch_Confirmado">Confirmado con Cliente</label>
                            </p>
                        </div>
                  <?php
                    }else{ ?>
                        <div class="col s2">
                            <p>
                              <input type="checkbox" id="ch_Confirmado"  name="ch_Confirmado"/>
                              <label for="ch_Confirmado">Confirmado con Cliente</label>
                            </p>
                        </div>
                  <?php
                  }?>
              </div>
        </div>
      <div class="row center espacio">
        <a class="waves-effect pink-waves btn-flat" href="<?php echo base_url(); ?>Web/mantenimientos">Cancelar</a>
        <button class="btn waves-effect waves-light pink darken-1" type="submit">Guardar<i class="material-icons right">save</i></button>
      </div>
<?php echo form_close();
} ?>                          