$(document).ready(function(){
 num = 0;
      
 $.ajax ({
        type: "POST",
        url: "service/indTest.php",
        cache: false,
        
        success: function( result ) {
         $('#test').html(result);
        
        }
        }); 


        $( "#test" ).click(function() {
 $('#modalIndicador').modal('toggle');
});
        
   $('button#NuevoServiciotest').click(function () {

  var servicio = $('#newserv').val();
  var maquina = $('#newmaq2').val();
  var maquina2 = $('#newmaq3').val();
  var maquina3 = $('#newmaq4').val();

  var Estado = $('#estado2 option:selected').val();
  var Estado2 = $('#estado3 option:selected').val();
  var Estado3 = $('#estado4 option:selected').val();
  var color ="";
  var color2="";
  var color3="";
 
 if(Estado >= 10){
 color="#FF5A5A";
 }if(Estado >= 40){
 color="yellow";
 }
 if(Estado >= 60){
 color="green";
 }
 
 if(Estado2 >= 10){
 color2="#FF5A5A";
 }if(Estado2 >= 40){
 color2="yellow";
 }
 if(Estado2 >= 60){
 color2="green";
 }
 
 if(Estado3 >= 10){
 color3="#FF5A5A";
 }if(Estado3 >= 40){
 color3="yellow";
 }
 if(Estado3 >= 60){
 color3="green";
 }
 
 
 
 if(maquina2!=""){
  alert(color2);
  maquina2 = "<tr style='height: 21px;'><td style='height: 21px; width: 201px; background-color:"+color2+";border: 1px solid;'><center>"+maquina2+"</br><img src='image/pc.jpg' style = 'width:15%' ></center></td></tr>";
 }
  if(maquina3!=""){
  
  maquina3 = "<tr style='height: 21px;'><td style='height: 21px; width: 201px; background-color:"+color3+";border: 1px solid;'><center>"+maquina3+"</br><img src='image/pc.jpg' style = 'width:15%' ></center></td></tr>";
 }
 if(servicio!="" && maquina!=""){
  $('#NuevoServicio').append("<div data-toggle='modal' data-target='#modalservice'>"+"<table style='display: inline-block; border: 1px solid; float: left;'><tbody><tr style='height: 21px;'><td style='height: 21px; width: 201px;' >"+servicio+"</td></tr><tr style='height: 21px;'><td style='height: 21px; width: 201px; background-color:"+color+";border: 1px solid;'><center>"+maquina+"</br><img src='image/pc.jpg' style = 'width:15%' ></center></td></tr>"+maquina2+maquina3+"</tr></tbody></table ></div>");
 
  }
   /* 
"<div data-toggle='modal' data-target='#modalservice'>""<table style='display: inline-block; border: 1px solid; float: left;'><tbody><tr style='height: 21px;'><td style='height: 21px; width: 301px;' >"+

"</td></tr><tr style='height: 21px;'><td style='height: 21px; width: 301px; background-color:#FF5A5A;border: 1px solid;' >"

"</td></tr></tr></tbody></table ></div>"*/
   
});
         
        
        
         
         
         
   });