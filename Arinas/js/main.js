$(document).ready(function(){
    $(".menuu").mouseenter(function(){
      $(this).css({"background-color": "rgba(255,255,255,0.8)"});
      $(".nav a").css({"color": "#333"});
      $(".logo img").attr("src", "./images/logoarinas2.png");

      $(".menuu").mouseleave(function(){
        $(this).css({"background-color": ""});
        $(".nav a").css({"color": "#fff"});
        $(".logo img").attr("src", "./images/arinaswhite.png");

        
            $(window).scroll(function(){
               var cuurentposition=$(this).scrollTop();
               if (cuurentposition>=1){
                $(".menuu").css({"background-color": "rgba(255,255,255,0.8)"});
                $(".nav a").css({"color": "#333"});
                $(".logo img").attr("src", "./images/logoarinas2.png");
               
            
             

               }
               else{
                $(".menuu").css({"background-color": ""});
                $(".nav a").css({"color": "#fff"});
                $(".logo img").attr("src", "./images/arinaswhite.png");
                
               }
                
              }
        
          );
  


      
    })
    });

    $(".overlay1").mouseenter(function(){
      $(".btnava").css({"visibility": "visible"});
    });

    $(".overlay1").mouseleave(function(){
      $(".btnava").css({"visibility": "hidden"});
    });
  });

