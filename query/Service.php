<?php

$service = array
  (
  array("Nombre del servicio 1","Maquina 3RZD","estado"/*Estado de la maquina*/,100/*pacientes en el sistema*/,50/*pacientes ingresados*/,50/*pacientes egresados*/,"ID01"),
  array("Nombre del servicio 2","Maquina 4RZD","estado",100,30,60,"ID02"),
 array("Nombre del servicio 3","Maquina 6RZD","estado",100,50,30,"ID03"),
  array("Nombre del servicio 4","Maquina 7RZD","estado",100,20,50,"ID04")
  );
  
  for ($row = 0; $row < count($service); $row++) {
  
$id = $service[$row][6];
  echo "<div class='columna col-auto'>"
               ."<table style='display: inline-block; border: 1px solid; float: left;'>"
               ."<tbody>"
               ."<tr>"
               ."<td>".$service[$row][0]."</td>"
               ."</tr>"
               ."<tr>"
               ."<td style='background-color:#FF5A5A;'>".$service[$row][1]."<button class='button' onclick=myFunction('".$service[$row][6]."')><span class='glyphicon glyphicon-search'></span></button>"."</br>"
               ."<img src='image/pc.png' style = 'width:40px' ></center></td>"."</tr>"."</tbody>"."</table >".
               "<input type='hidden' id='".$service[$row][6]."nombreServ"."'  value='".$service[$row][0]."'>".
               "<input type='hidden' id='".$service[$row][6]."nombreMaq"."'  value='".$service[$row][1]."'>".
               "<input type='hidden' id='".$service[$row][6]."estado"."'  value='".$service[$row][2]."'>".
               "<input type='hidden' id='".$service[$row][6]."pacientes"."' value='".$service[$row][3]."'>".
               "<input type='hidden' id='".$service[$row][6]."ingresados"."' value='".$service[$row][4]."'>".
               "<input type='hidden' id='".$service[$row][6]."egresados"."' value='".$service[$row][5]."'>"
              . "</div>";
  
    //echo $service[$row][$col];


}

    
    
    




?>