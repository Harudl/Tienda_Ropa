<script type="text/javascript">
            function mouseOver() {
            var t= document.getElementById("demo");
            t.style.color = "red";
             t.style.border="4px solid black";
             t.style.background="#faf5f5";
              
            }
       
      
  
             function mouseOut() {
           var t1= document.getElementById("demo");
                   t1.style.color = "black";
                   t1.style.border=0;
                   t1.style.background="#ffcccc";

                   }
      
      
      
          function encendercolchones() {
                    // 1 obtener los elementos a manipular
                    var img = document.getElementById("portada_g");// obtiene la primera imagen
                    // 2.manipulacion
                   
                    img.src= "assets/images/imgmenu/colchones.png";

                }
                function encenderdiaflash(){
                    var img = document.getElementById("portada_g");  
                    img.src= "assets/images/imgmenu/diaflash.png";  
                }
                function encenderofertas(){
                    var img = document.getElementById("portada_g");  
                    img.src= "assets/images/imgmenu/ofertatemp.png";
                }
                function encenderdescuento(){
                    var img = document.getElementById("portada_g");  
                    img.src= "assets/images/imgmenu/15dto.png";
                }
                
                
                       var indice = 1;
                function izquierda() {
                    indice--;
                   if (indice>=1){
                   var img = document.querySelector("#femenino1");// obtiene la primera imagen
                   img.src= "assets/images/imgmujer/slider/"+indice+".jpg";
            
                }else{
                 indice=4;
                 izquierda();
                }
                  }
            
                function derecha() {
                    indice++;
                      if (indice<=3){
                        var img = document.querySelector("#femenino1");
                     img.src= "assets/images/imgmujer/slider/"+indice+".jpg";
                  }else{
                 indice=0;
                 derecha();  
                  }
              }
           function punto(color,item) {
                var img = document.querySelector("#item"+item);
                   img.src= "assets/images/imgmujer/items/item"+item+"color"+color+".jpg";
        }
         
        
        function defaut(item) {
              var img = document.querySelector("#item"+item);
                img.src= "assets/images/imgmujer/items/item"+item+".jpg";
        }
        // ---------------------------------------------------------------------->
        function zoom(num){
            var img = document.querySelector("#imgmujer"+num);
              img.style.width = "100%";
               img.style.height = "100%";
               img.style.border="2px solid #ff6699";
         }

         function def(num){
            var img = document.querySelector("#imgmujer"+num);
           img.style.width = "95%";
            img.style.height = "95%";
               img.style.border="2px solid black";
         }
        
                
              function det() {
                    var img = document.getElementById("de");
                    img.src= "assets/images/imge/c1.jpg";
            }
            function de(){
                var img = document.getElementById("de");
                img.src= "assets/images/imge/i1.jpg";
            }
            
            function det1() {
                    var img = document.getElementById("de1");
                    img.src= "assets/images/imge/c2.jpg";
            }
             function de1(){
                var img = document.getElementById("de1");
                img.src= "assets/images/imge/i2.jpg";
            }
            function det2() {
                    var img = document.getElementById("de2");
                    img.src= "assets/images/imge/c3.jpg";
            }
            function de2(){
                var img = document.getElementById("de2");
                img.src= "assets/images/imge/i3.jpg";
            }
            function det3() {
                    var img = document.getElementById("de3");
                    img.src= "assets/images/imge/c4.jpg";
            }
            function de3(){
                var img = document.getElementById("de3");
                img.src= "assets/images/imge/i4.jpg";
            }
      
            
        function des() {
    
             document.getElementById("ima1").src="assets/images/imtar/t2.jpeg" ;
             
          }    
         function ant() {
             document.getElementById("ima1").src="assets/images/imtar/t1.jpeg" ;
          } 
         
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
        </script>