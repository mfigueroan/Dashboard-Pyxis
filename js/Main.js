$(document).ready(function(){


   $(window).on( "load", function() {

        $("#parrafo").text('Texto de sustitución');
       $.ajax({
        type: "POST",
        url: 'query/Service.php',
        success: function(data){
              $('#test').append(data);
            } });
       
       
    }   );
   

    
    
    
    
    
});