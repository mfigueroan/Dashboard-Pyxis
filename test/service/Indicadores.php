<?php

$indicadores = array(
  20,50, 60
);
 
function getIndicadores()
{
  global $indicadores;
  echo "<table style=width: 30px; border=3; >
<tbody>
<tr>";
$color="";
  for($fila=0;$fila<count($indicadores);$fila++){
    if(intval($indicadores[$fila]) >= 20){
      $color = "red";
    }
    if(intval($indicadores[$fila]) >= 40){
      $color = "yellow";
    }
    if(intval($indicadores[$fila]) >= 60){
      $color = "green";
    }
  echo "<td style bgcolor=".$color.">".intval($indicadores[$fila])
  ."</td>";

  }

echo "
</tr>
</tbody>
</table>";
}

function insertarIndicador($id,$num){
    $indicadores[] = array($id,$num);
}

?>