  <?php
        require 'modal/IndicadorModal.php';
        require 'modal/ServiceModal.php';
        require 'modal/nuevoservicio.php';
?>
<html>

    <head>
       <script src="jquery/jquery-3.3.1.min.js"></script>
        <script src="Ajax/Test.js"></script>

          <link rel="stylesheet" href="js/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
         
    </head>
    <body>
        <div class="container">
        <h2>Indicadores</h2>
        <div id="test"></div>
         <h2>Servicios Activos</h2>
<div id="mostrarServicio" class="container" >
<div data-toggle="modal" data-target="#modalservice">
<table style="display: inline-block; border: 1px solid; float: left;">
<tbody>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;" >Servicio 42</td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px; background-color:#FF5A5A; border: 1px solid;" ><center>maquina 13</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px; background-color:green; border: 1px solid;"><center>maquina 12</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px; background-color:green;border: 1px solid;"><center>maquina 12</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
</tbody>
</table >
</div>
<div data-toggle="modal" data-target="#modalservice"> 
<table style="display: inline-block; border: 1px solid; float: left;">
<tbody>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;">Servicio 12</td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:yellow; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center>
</td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:yellow; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:green; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:green; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:green; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
</tbody>
</table>
 </div>
<div data-toggle="modal" data-target="#modalservice"> 
<table style="display: inline-block; border: 1px solid; float: left;">
<tbody>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;">Servicio 62</td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:yellow; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:yellow; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:green; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:green; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
</tbody>
</table>
</div> 
    </div>
    </br>
    </br>
 
<div class="container" style=float:left;>
<div data-toggle="modal" data-target="#modalservice">
<table style="display: inline-block; border: 1px solid; float: left;">
<tbody>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;" >Servicio 53</td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px; background-color:#FF5A5A; border: 1px solid;" ><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px; background-color:green; border: 1px solid;"><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px; background-color:green;border: 1px solid;"><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
</tbody>
</table >
</div>
<div data-toggle="modal" data-target="#modalservice"> 
<table style="display: inline-block; border: 1px solid; float: left;">
<tbody>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;">Servicio 21</td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:yellow; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center>
</td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:yellow; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:green; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:green; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:green; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
</tbody>
</table>
 </div>
<div data-toggle="modal" data-target="#modalservice"> 
<table style="display: inline-block; border: 1px solid; float: left;">
<tbody>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;">Servicio 41</td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:yellow; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:yellow; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:green; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
</tr>
<tr style="height: 21px;">
<td style="height: 21px; width: 201px;background-color:green; border: 1px solid;""><center>maquina XXXX</br>
<img src="image/pc.jpg" style = "width:15%" ></center></td>
</tr>
</tbody>
</table>
</div>

    </div>
<div class="container" style=float:left;>
 <center></center>
<div id="NuevoServicio">
      
    </div></div>
  </div>
    </body>
</html>

  

