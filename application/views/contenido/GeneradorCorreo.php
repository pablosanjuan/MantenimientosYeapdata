<!DOCTYPE html>
<html>
<head>
<title>Generador de Formato</title>
</head>
<body style="margin-left:100px; center-align">
    <br><br>
    
<?php foreach ($texto->result() as $row){ ?>
<?php echo($row->Texto); }?>
    <br> <br>
<table style="center-align" border="1">
<tr>
<th style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px">Fecha</th>
<th style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px">Nombre de Sede</th>
<th style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px">Contacto Coomeva</th>    
<th style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px">Técnico</th>
<th style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px">Cédula</th>
<th style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px">EPS</th>
<th style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px">ARL</th>
</tr>
    <?php foreach ($sedes->result() as $row){ 
    if ($row->Programado==1) {?>
<tr><td style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px" rowspan="3"><?php echo($row->FechaProgramado) ?></td><td style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px" rowspan="3"><?php echo($row->NombreSede) ?></td><td style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px" rowspan="3"></td><td> ---</td><td> ---</td><td> ---</td><td> ---</td></tr>
<tr><td>---</td><td>---</td><td>---</td><td>---</td></tr>
<tr><td>---</td><td>---</td><td>---</td><td>---</td></tr>
<?php };}?>
</table>
<p>Agradecemos su apoyo</p>
</body>
</html>