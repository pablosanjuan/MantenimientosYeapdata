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
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx    Exportar a Excel         -->
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<div class="row container espacio">
    <a class="col s6 waves-effect waves-teal btn-flat red-text" href="<?php echo base_url(); ?>Web"><i class="red-text material-icons left">reply</i>Atras</a>
    <div class="right-align col s6">
          <!-- Dropdown Trigger -->
    <!--    <a class="waves-effect pink-waves btn-flat" href="<?php echo base_url(); ?>Web/dExcel">Exportar a Excel</a> -->
      <a class='center dropdown-button btn deep-purple darken-3 z-depth-4' href='#' data-activates='dropdown1'><i class="material-icons left">archive</i>Exportar</a>
      <!-- Dropdown Structure -->
      <ul id='dropdown1' class='dropdown-content'>
          <li><a href="<?php echo base_url(); ?>Web/dExcelTodo"><i class="material-icons">cloud</i>Todo</a></li>
          <li><a href="<?php echo base_url(); ?>Web/dExcelRealizados" ><i class="material-icons">done</i>Realizados</a></li>
          <li><a href="<?php echo base_url(); ?>Web/dExcelFaltantes"><i class="material-icons">check_box_outline_blank</i>Faltantes</a></li>
          <li><a href="<?php echo base_url(); ?>Web/dExcelProgramados"><i class="material-icons">schedule</i>Programados</a></li>
      </ul>     
    </div>
</div>
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--> 
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--> 
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--> 
<div class="row container col s6">
    <h3 class="center titulo2">Sede: Coomeva</h3>
</div>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
<div  class="container">
    <div class="row">
       <ul class="tabs z-depth-5">
        <li class="tab col s4"><a class="indigo darken-4 tituloTab" href="#test-swipe-1">Cronograma</a></li>
        <li class="tab col s4"><a  class="indigo darken-4 active tituloTab" href="#test-swipe-2">Consolidado</a></li>
        <li class="tab col s4"><a class="indigo darken-4 tituloTab" href="#test-swipe-3">Programados</a></li>
      </ul>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx    Contenido Cronograma                -->
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
      <div id="test-swipe-1" class="espacio col s12">
          <table class="striped">
            <thead>
              <tr>
                  <th class="center"></th>
                  <th class="center"></th>
                  <th class="cabecera_tabla center titulo3">Fecha Propuesta al Cliente</th>
                  <th class="cabecera_tabla  titulo3">Nombre de Sede</th>
                  <th class="cabecera_tabla center titulo3">Programado</th>
                  <th class="cabecera_tabla center titulo3">Editar</th>
                  <th class="center"></th>
              </tr>
            </thead>
        <tbody>
          <?php $i=0?>
          <?php $j=1?>
          <?php foreach ($sedes->result() as $row[]){
          echo ("<tr>");
            echo ("<th class='center-align cont_peq'>".$j++."</th>");
            if ($row[$i]->Realizado==1) {
              echo ("<th class='center-align cont_peq'><i class='material-icons green-text'>cloud_done</i></th>");
            }else{
              echo ("<th class='center-align cont_peq'><i class='material-icons red-text'>cloud_done</i></th>");
            }
            echo ("<th class='center-align txt1'>".$row[$i]->FechaPropuesta."</th>");
            //echo ("<th class='txt1'>".$row[$i]->NombreSede."</th>");
    
            if ($row[$i]->Realizado==1) {
              echo ("<th class='txt1'>".$row[$i]->NombreSede."</th>");
            }else{
              echo ("<th class='txt1-red'>".$row[$i]->NombreSede."</th>");
            }
            $puntero=$row[$i]->id_mantenimiento;
            $nombb=$row[$i]->NombreSede;
            $FechaP=$row[$i]->FechaProgramado; 
            if($row[$i]->Programado==1){
            echo ("<th class='center-align cont_peq tooltipped' data-position='top' data-delay='5' data-tooltip='$FechaP'><i class='material-icons orange-text'>event_available</i></th>");
            }else{
            echo ("<th class='center-align cont_peq'></th>");
            }
            echo ("<th class='center-align tit_peq'> <a href='".base_url()."Web/EditarSede/$puntero' class=' waves-effect waves-light tooltipped' data-position='top' data-delay='5' data-tooltip='Editar $nombb'><i class='Tiny material-icons blue-text'>edit</i></a></th>") ?> 
            <?php
            $i++;
        echo ("</tr>");
          } ?>
      </tbody>
          </table>
          <!-- Floating Button -->
          <div class="fixed-action-btn">
            <a class="pulse btn-floating btn-large waves-effect waves-light light-blue accent-4" href="<?php echo base_url(); ?>Web/agregar_sede"><i class="material-icons">add</i></a>
          </div>
      </div>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx     Contenido Consolidados                -->
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
      <div id="test-swipe-2" class="col s12 ">

      <div class="row center espacio">
         <?php $reali=0; ?>
      <?php foreach ($sedes->result() as $row){
        if ($row->Realizado==1) {
            $reali=$reali+1;
        }
        $faltantes=$i-$reali;
        $avance=round((($reali*100)/$i),1);
      } ?>
<!-- ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo--> 
<!-- ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo--> 
<!-- xxxxxxxxxxxxxxx -->
<!-- xxxxxxxxxxxxxxx -->
<!-- ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo--> 
       <table class="striped espacio">
            <thead>
                  <th class="txt_amarillo">Total de Mantenimientos: </th>
                  <th class="center txt_verde">Realizados</th>
                  <th class="center txt_rojo">Faltantes</th>
                  <th class="center txt_azul">Avance</th>
            </thead>
            <tbody>
              <tr class="white">
                  <th class="center"><h3 class=''><?php echo($i)?> </h3></th>
                  <th class="center"><h3 class='green-text'><?php echo($reali)?> </h3></th>
                  <th class="center"><h3 class='red-text'><?php echo($faltantes)?> </h3></th>
                  <th>            
                    <?php
                    echo ("<div><div id='percent3' style='width:190px;height:190px;margin: 0 auto;'><p style='display:none;'>".$avance."</p></div></div>");?>  
                  </th>
              </tr>
            </tbody>
          </table>
<!-- ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo--> 
      </div>
       <table class="striped espacio">
            <thead>
              <tr>
                  <th></th>
                  <th></th>
                  <th class="cabecera_tabla  titulo3">Nombre de Sede</th>
                  <th class="cabecera_tabla center titulo3">Fecha Realizado</th>
                  <th class="cabecera_tabla center titulo3">Documentado</th>
                  <th class="cabecera_tabla center titulo3">Confirmado por Cliente</th>
              </tr>
            </thead>
            <tbody>
                <?php $cc=1;
                      $m=0;
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
                      $MesDic = 0;
                foreach ($sedes->result() as $row){
                if ($row->Realizado==1) {
                echo ("<tr>");
                echo ("<th class='center-align cont_peq'>".$cc++."</th>");
                echo ("<th class='center-align cont_peq'><i class='material-icons green-text'>cloud_done</i></th>");
                echo ("<th class='txt1'>".$row->NombreSede."</th>");
                echo ("<th class='center-align txt1'>".$row->FechaRealizado."</th>");
                //if($row->Documentado=='on'){ DireccionActa
                if($row->DireccionActa!=0){
                echo ("<th class='center-align cont_peq'><a target='_blank' href='".base_url()."assets/actas/".$row->DireccionActa.".pdf' class=' waves-effect waves-light tooltipped' data-position='top' data-delay='5' data-tooltip='Ver Acta $row->NombreSede.'><i class='Tiny material-icons blue-text'>description</i></a></th>");
                }else{
                echo ("<th class='center-align cont_peq'></th>");
                }if($row->Confirmado=='on'){
                echo ("<th class='center-align cont_peq'><a class=' waves-effect waves-light'><i class='Tiny material-icons purple-text'>check_circle</i></a></th>");
                }else{
                echo ("<th class='center-align cont_peq'></th>");
                }if($row->ObservacionCliente=="0"){
                        echo ("<th class='center-align cont_peq'></th>");
                }else{
                echo ("<th class='center-align cont_peq'><a class='modal-trigger waves-effect waves-light tooltipped' data-position='top' data-delay='5' data-tooltip='Ver comentario $row->NombreSede' href='#modal$m'><i class='Tiny material-icons blue-text'>visibility</i></a></th>");
                }
  echo("<div id='modal$m' class='modal z-depth-5'>");
    echo("<div class='modal-content'>");
      echo("<h4 class='titModal'>Observaciones sede: $row->NombreSede</h4>");
      echo("<p class='txt_modal'>$row->ObservacionCliente</p>");  
    echo("</div>");
    echo("<div class='modal-footer CustomNav'>");
        echo("<img style='width:8%' class='right main_logo' src='".base_url()."assets/images/recursos/logo.png'>");
        //echo("<a href='#!' class='fuente white-text modal-action modal-close waves-effect waves-green btn-flat'><i class='Tiny material-icons white-text'>close</i>Cerrar</a>");
   echo(" </div>");
  echo("</div>");
                  $PorMes = $row->FechaRealizado;
                  $Mes=substr($PorMes, 5,2);
                    //echo($Mes);
                  switch ($Mes){
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
                    case '08':
?>
<!-- <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  ago
</div> -->
<?php
                        $MesAgo = $MesAgo+1;
                        break;
                    case '09':
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
                    $m++;
              }
              }?>
             </tbody>
        </table>
          <div class="row">      
          <div class="fixed-action-btn toolbar">
            <a class="btn-floating btn-large blue darken-4 pulse tooltipped" data-position="left" data-delay="5" data-tooltip="Manteniminetos por Mes">
              <i class="large material-icons">today</i>
            </a>
            <ul>
              <li class="waves-effect waves-light"><a>Ene: <?php echo($MesEne) ?></a></li>
              <li class="waves-effect waves-light"><a>Feb: <?php echo($MesFeb) ?></a></li>
              <li class="waves-effect waves-light"><a>Mar: <?php echo($MesMar) ?></a></li>
              <li class="waves-effect waves-light"><a>Abr: <?php echo($MesAbr) ?></a></li>
              <li class="waves-effect waves-light"><a>May: <?php echo($MesMay) ?></a></li>
              <li class="waves-effect waves-light"><a>Jun: <?php echo($MesJun) ?></a></li>
              <li class="waves-effect waves-light"><a>Jul: <?php echo($MesJul) ?></a></li>
              <li class="waves-effect waves-light"><a>Ago: <?php echo($MesAgo) ?></a></li>
              <li class="waves-effect waves-light"><a>Sep: <?php echo($MesSep) ?></a></li>
              <li class="waves-effect waves-light"><a>Oct: <?php echo($MesOct) ?></a></li>
              <li class="waves-effect waves-light"><a>Nov: <?php echo($MesNov) ?></a></li>
              <li class="waves-effect waves-light"><a>Dic: <?php echo($MesDic) ?></a></li>
            </ul>
          </div>        
        </div>
      </div>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx     Contenido Programado                -->      
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
      <div id="test-swipe-3">
      <div class="row center espacio">
        <a href="<?php echo base_url(); ?>Web/edit_texto" class="waves-effect waves-light white-waves btn light-blue accent-3"><i class="material-icons right">edit</i>Encabezado Mensaje</a>
        <a href="<?php echo base_url(); ?>Web/generar" target="_blank" class="waves-effect waves-light white-waves btn light-blue darken-4"><i class="material-icons right">email</i>Generar Formato</a>
      </div>  
       <table class="bordered espacio">
            <thead>
              <tr>
                  <th class="cabecera_tabla center titulo3"></th>
                  <th class="cabecera_tabla center titulo3">Fecha Programado</th>
                  <th class="cabecera_tabla center titulo3">Nombre Sede</th>
                  <th class="cabecera_tabla center titulo3">Ip</th>
                  <th class="cabecera_tabla center titulo3">Tipo Equipos</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($sedes->result() as $row){

              if ($row->Programado==1) {
                echo ("<tr>");
                echo ("<th class='center-align txt1'><i class='material-icons orange-text'>event_available</i></th>");
                echo ("<th class='center-align txt1'>".$row->FechaProgramado."</th>");
                echo ("<th class='center-align txt1'>".$row->NombreSede."</th>");
                echo ("<th class='center-align txt1'>".$row->Ip."</th>");
                echo ("<th class='center-align txt1'>".$row->TipoEquipos."</th>");
                echo ("</tr>");       
                      }
              } ?>
             </tbody>
        </table>
      </div>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx     CIERRE DE LA DIVISION                -->      
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
    </div>
</div>