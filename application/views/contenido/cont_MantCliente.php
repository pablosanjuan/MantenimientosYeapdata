<div class="row container center col s12">
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--> 
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--> 
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--> 
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="src="<?php echo base_url(); ?>assets/js/jQuery.circleProgressBar.min.js""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
<script>
$(function () {
	$('#percent1').percentageLoader({
		valElement: 'p',
		strokeWidth: 7,
		bgColor: '#e0e0e0',
		ringColor: '#64dd17',
		textColor: '#64dd17',
		fontSize: '30px',
		fontWeight: 'normal'
	});
    $('#percent2').percentageLoader({
		valElement: 'p',
		strokeWidth: 7,
		bgColor: '#e0e0e0',
		ringColor: '#c62828',
		textColor: '#c62828',
		fontSize: '30px',
		fontWeight: 'normal'
	});
    $('#percent3').percentageLoader({
		valElement: 'p',
		strokeWidth: 11,
		bgColor: '#c62828',
		ringColor: '#283593',
		textColor: '#283593',
		fontSize: '30px',
		fontWeight: 'normal'
	});
});
</script>
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--> 
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--> 
<!-- <<<<<<<<<<<<<<<<<<<<<<<    CABECERAS      >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--> 
<div class="row right-align espacio">
  <a class="waves-effect waves-teal btn red-text salir z-depth-4" href="<?php echo base_url(); ?>Admin/logout_ci"><i class="material-icons left">exit_to_app</i>Salir</a>
</div>
<div  class="container espacio">
    <h3 class="header center titulo2">Cliente: Coomeva</h3>
</div>

   <div class="row center espacio">
         <?php $reali=0; ?>
      <?php foreach ($sedes->result() as $row){
        $i = count($sedes->result());
        if ($row->Realizado==1) {
            $reali=$reali+1;
        }
        $faltantes=$i-$reali;
        $avance=round((($reali*100)/$i),1);
      } ?>
<!-- ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo--> 
<!-- oooooooooooooooooooooooo   CIRCULOS DE AVANCE                  oooooooooooooooooooooooooooo--> 
          <table class="">
              <thead>
              <tr>
                  <th class="cabecera_tabla  titulo3"></th>
                  <th class="center txt txt_azul">Avance</th>
              </tr>
            </thead>
            <tbody>
              <tr>
          <?php 
            echo ("<th class='center custom_padding'>
                <ul id='lista' class='lista'>
                    <li><h3 class='txt_amarillo'>Total de Mantenimientos: ".$i." </h3></li>
                    <li><h3 class='txt_verde'>Total de Mantenimientos: ".$reali." </h3></li>
                    <li><h3 class='txt_rojo'>Total de Mantenimientos: ".$faltantes." </h3></li>
                </ul>
            </th>");
            echo ("<th class='txt custom_padding'><h3 class=' center txt'><div id='percent3' class='col s3' style='width:190px;height:190px;'><p style='display:none;'>".$avance."</p></h3></th>");
            //echo ("<th class='txt center custom_padding'><h3 class='center'><div id='percent1' class='col s3' style='width:120px;height:120px;'><p style='display:none; color:#fff'>".$reali."</p></h3></th>");
            //echo ("<th class='txt center custom_padding'><h3 class='txt'><div id='percent2' class='col s3' style='width:120px;height:120px;'><p style='display:none;'>".$faltantes."</p></h3></th>");
            //echo ("<th class='txt center custom_padding'><h3 class='txt'><div id='percent3' class='col s3' style='width:120px;height:120px;'><p style='display:none;'>".$avance."</p></h3></th>");?>
              </tr>
            </tbody>
          </table>
      </div>  
<!-- ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo--> 
<!-- oooooooooooooooooooooo         TABLA CON INFO        oooooooooooooooooooooooooooooooooooooo--> 
    
  <div class="row espacio">
    <div class="col s12">
      <ul class="tabs z-depth-5">
        <li class="tab col s3 txt_amarillo"><a class="txt1-blanco active"  href="#test1">TOTAL</a></li>
        <li class="tab col s3 txt_verde"><a class="txt1-blanco" href="#test2">REALIZADOS</a></li>
        <li class="tab col s3 txt_rojo"><a class="txt1-blanco" href="#test3">FALTANTES</a></li>
        <li class="tab col s3 txt_naranja"><a class="txt1-blanco" href="#test4">PROGRAMADOS</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
          <table class="striped espacio">
                <thead>
                  <tr>
                      <th></th>
                      <th></th>
                      <th class="cabecera_tabla  titulo3">Nombre de Sede</th>
                      <th class="cabecera_tabla center titulo3">Empresa</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $cc=1; 
                          $MesEne = 0;
                          $MesFeb = 0;
                          $MesMar = 0;
                          $MesAbr = 0;
                          $MesMay = 0;
                          $MesJun = 0;
                          $MesJul = 0;
                          $MesAgo = 0;
                          $MesSep = 0;
                          $MesOct = 0;
                          $MesNov = 0;
                          $MesDic = 0;?>
                  <?php foreach ($sedes->result() as $row){
                    echo ("<tr>");
                    echo ("<th class='center-align cont_peq'>".$cc++."</th>");
                    if ($row->Realizado==1) {
                        echo ("<th class='center-align cont_peq'><i class='material-icons green-text'>cloud_done</i></th>");
                    }else{
                        echo ("<th class='center-align cont_peq'><i class='material-icons red-text'>cloud_done</i></th>");
                    }
                    echo ("<th class='txt1'>".$row->NombreSede."</th>");
                    echo ("<th class='center-align txt1'>".$row->EmpresaSede."</th>");
                      $PorMes = $row->FechaRealizado;
                      $Mes=substr($PorMes, 5,2);
                        //echo($Mes);
                      switch ($Mes) {
                        case 01:
                            $MesEne = $MesEne+1;
                            break;
                        case 02:
                            $MesFeb = $MesFeb+1;
                            break;
                        case 03:
                            $MesMar = $MesMar+1;
                            break;
                        case 04:
                            $MesAbr = $MesAbr+1;
                            break;
                        case 05:
                            $MesMay = $MesMay+1;
                            break;
                        case 06:
                            $MesJun = $MesJun+1;
                            break;
                        case 07:
                            $MesJul = $MesJul+1;
                            break;
                        case 08:
                            $MesAgo = $MesAgo+1;
                            break;
                        case 09:
                            $MesSep = $MesSep+1;
                            break;
                        case 10:
                            $MesOct = $MesOct+1;
                            break;
                        case 11:
                            $MesNov = $MesNov+1;
                            break;
                        case 12:
                            $MesDic = $MesDic+1;
                            break;
                    }
                  
                  }?>
                 </tbody>
            </table>
    </div>
    <div id="test2" class="col s12">
              <table class="striped espacio">
                <thead>
                  <tr>
                      <th></th>
                      <th></th>
                      <th class="cabecera_tabla  titulo3">Nombre de Sede</th>
                      <th class="cabecera_tabla center titulo3">Fecha Realizado</th>
                      <th class="cabecera_tabla center titulo3">Observación al cliente</th>
                      <th class="cabecera_tabla center titulo3">Ver Actas</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $cc=1; 
                          $MesEne = 0;
                          $MesFeb = 0;
                          $MesMar = 0;
                          $MesAbr = 0;
                          $MesMay = 0;
                          $MesJun = 0;
                          $MesJul = 0;
                          $MesAgo = 0;
                          $MesSep = 0;
                          $MesOct = 0;
                          $MesNov = 0;
                          $MesDic = 0;?>
                  <?php   $m=0;
                    foreach ($sedes->result() as $row){
                  if ($row-> Realizado==1){
                    echo ("<tr>");
                    echo ("<th class='center-align cont_peq'>".$cc++."</th>");
                    echo ("<th class='center-align cont_peq'><i class='material-icons green-text'>cloud_done</i></th>");
                    echo ("<th class='txt1'>".$row->NombreSede."</th>");
                    echo ("<th class='center-align txt1'>".$row->FechaRealizado."</th>");
                    if($row->ObservacionCliente=="0"){
                        echo ("<th class='center-align cont_peq'></th>");
                    }else{
                        echo ("<th class='center-align cont_peq'><a class='modal-trigger waves-effect waves-light tooltipped' data-position='top' data-delay='5' data-tooltip='Ver comentario $row->NombreSede' href='#modal$m'><i class='Tiny material-icons blue-text'>visibility</i></a></th>");
//ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo
//ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo                    
                    }
  echo("<div id='modal$m' class='modal z-depth-5'>");
    echo("<div class='modal-content'>");
      echo("<h4 class='titModal'>Observaciones sede: $row->NombreSede</h4>");
      echo("<p class='txt_modal'>$row->ObservacionCliente</p>");  
    echo("</div>");
    echo("<div class='modal-footer CustomNav'>");
        echo("<img style='width:8%' class='left main_logo' src='".base_url()."assets/images/recursos/logo.png'>");
        //echo("<a href='#!' class='fuente white-text modal-action modal-close waves-effect waves-green btn-flat'><i class='Tiny material-icons white-text'>close</i>Cerrar</a>");
   echo(" </div>");
  echo("</div>");?>
                    <?php //if($row->Documentado=='on'){
//ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo                    
//ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                    if($row->DireccionActa!=0){
                    echo ("<th class='center-align cont_peq'><a target='_blank' href='".base_url()."assets/actas/".$row->DireccionActa.".pdf' class=' waves-effect waves-light tooltipped' data-position='top' data-delay='5' data-tooltip='Ver Acta $row->NombreSede.'><i class='Tiny material-icons red-text'>description</i></a></th>");
                    }else{
                    echo ("<th class='center-align cont_peq'></th>");}     
                      $PorMes = $row->FechaRealizado;
                      $Mes=substr($PorMes, 5,2);
                        //echo($Mes);
                      switch ($Mes) {
                        case 01:
                            $MesEne = $MesEne+1;
                            break;
                        case 02:
                            $MesFeb = $MesFeb+1;
                            break;
                        case 03:
                            $MesMar = $MesMar+1;
                            break;
                        case 04:
                            $MesAbr = $MesAbr+1;
                            break;
                        case 05:
                            $MesMay = $MesMay+1;
                            break;
                        case 06:
                            $MesJun = $MesJun+1;
                            break;
                        case 07:
                            $MesJul = $MesJul+1;
                            break;
                        case 08:
                            $MesAgo = $MesAgo+1;
                            break;
                        case 09:
                            $MesSep = $MesSep+1;
                            break;
                        case 10:
                            $MesOct = $MesOct+1;
                            break;
                        case 11:
                            $MesNov = $MesNov+1;
                            break;
                        case 12:
                            $MesDic = $MesDic+1;
                            break;
                    }
                  } 
                    $m++;
                  }?>
                 </tbody>
            </table>
    </div>
    <div id="test3" class="col s12">
                  <table class="striped espacio">
                <thead>
                  <tr>
                      <th></th>
                      <th></th>
                      <th class="cabecera_tabla  titulo3">Nombre de Sede</th>
                      <th class="cabecera_tabla center titulo3">Fecha Propuesta a cliente</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $cc=1; 
                          $MesEne = 0;
                          $MesFeb = 0;
                          $MesMar = 0;
                          $MesAbr = 0;
                          $MesMay = 0;
                          $MesJun = 0;
                          $MesJul = 0;
                          $MesAgo = 0;
                          $MesSep = 0;
                          $MesOct = 0;
                          $MesNov = 0;
                          $MesDic = 0;?>
                  <?php foreach ($sedes->result() as $row){

                  if ($row->Realizado==0) {
                    echo ("<tr>");
                    echo ("<th class='center-align cont_peq'>".$cc++."</th>");
                    echo ("<th class='center-align cont_peq'><i class='material-icons red-text'>cloud_done</i></th>");
                    echo ("<th class='txt1'>".$row->NombreSede."</th>");
                    echo ("<th class='center-align txt1'>".$row->FechaPropuesta."</th>");     
                      $PorMes = $row->FechaRealizado;
                      $Mes=substr($PorMes, 5,2);
                        //echo($Mes);
                      switch ($Mes) {
                        case 01:
                            $MesEne = $MesEne+1;
                            break;
                        case 02:
                            $MesFeb = $MesFeb+1;
                            break;
                        case 03:
                            $MesMar = $MesMar+1;
                            break;
                        case 04:
                            $MesAbr = $MesAbr+1;
                            break;
                        case 05:
                            $MesMay = $MesMay+1;
                            break;
                        case 06:
                            $MesJun = $MesJun+1;
                            break;
                        case 07:
                            $MesJul = $MesJul+1;
                            break;
                        case 08:
                            $MesAgo = $MesAgo+1;
                            break;
                        case 09:
                            $MesSep = $MesSep+1;
                            break;
                        case 10:
                            $MesOct = $MesOct+1;
                            break;
                        case 11:
                            $MesNov = $MesNov+1;
                            break;
                        case 12:
                            $MesDic = $MesDic+1;
                            break;
                    }
                  } 
                  }?>
                 </tbody>
            </table>
    </div>
    <div id="test4" class="col s12">
        <div class="row center espacio">
            <h5 class="col s12 ">Actualmente se tienen programados las siguientes sedes con sus fechas para realizar el mantenimiento</h5>
        </div>
           <table class="bordered espacio">
            <thead>
              <tr>
                  <th class="cabecera_tabla center titulo3"></th>
                  <th class="cabecera_tabla center titulo3">Fecha Programado</th>
                  <th class="cabecera_tabla titulo3">Nombre Sede</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($sedes->result() as $row){

              if ($row->Programado==1) {
                echo ("<tr>");
                echo ("<th class='center-align txt1'><i class='material-icons orange-text'>event_available</i></th>");
                echo ("<th class='center-align txt1'>".$row->FechaProgramado."</th>");
                echo ("<th class='txt1'>".$row->NombreSede."</th>");
                echo ("</tr>");       
                      }
              } ?>
             </tbody>
        </table>  
    </div>
  </div>
    
 <!--HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH-->

  <div class="fixed-action-btn vertical">
    <a class="btn-floating btn-large blue darken-4 pulse tooltipped" data-position="left" data-delay="5" data-tooltip="Desacargar como Excel">
      <i class="material-icons">archive</i>
    </a>
    <ul>
      <li><a class="btn-floating orange" href="<?php echo base_url(); ?>Web/dExcelProgramados"><i class="material-icons tooltipped" data-position="left" data-delay="5" data-tooltip="Programados">insert_chart</i></a></li>
      <li><a class="btn-floating red darken-4" href="<?php echo base_url(); ?>Web/dExcelFaltantes"><i class="material-icons tooltipped" data-position="left" data-delay="5" data-tooltip="Faltantes">format_quote</i></a></li>
      <li><a class="btn-floating light-green accent-4" href="<?php echo base_url(); ?>Web/dExcelRealizados"><i class="material-icons tooltipped" data-position="left" data-delay="5" data-tooltip="Realizados">publish</i></a></li>
      <li><a class="btn-floating teal darken-3" href="<?php echo base_url(); ?>Web/dExcelTodo"><i class="material-icons tooltipped" data-position="left" data-delay="5" data-tooltip="Todos">attach_file</i></a></li>
    </ul>
  </div>
        
      </div>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx     CIERRE DE LA DIVISION                -->      
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
    </div>
</div>