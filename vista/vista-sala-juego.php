<?php
require_once('../modelo/login.php');

$modeloUsuario = new usuario();

$modeloUsuario->validarSession();
// $modeloUsuario->cerrarSession();








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="../recursos/css/style2.css">
    <script src="../recursos/js/lib/jquery-3.7.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="cuerpo">
        <div class="container">
            <header class="cabeza">
                <div class="user">
                    <div class="logo">
                        <span><img src="../recursos/imagenes/usuario.png" alt="logo usuario"></span>
                    </div>
                    <div class="nombre">
                        <h3><?php echo $modeloUsuario->getNombreUsuario();  ?></h3>
                    </div>
                </div>
                <div class="monedas">
                    <div class="cantidad-monedas">
                        <p><?php echo $modeloUsuario->getMonedas();  ?></p>   
                    </div>
                    <div class="logo-monedas">
                        <span><img src="../recursos/imagenes/moneda.png" alt="logo moneda"></span>
                    </div>
                </div>
                <div class="menu-derecha">
                    <div class="notificacion">
                        <a href="">
                            <span><img src="../recursos/imagenes/notificaciones.png" alt=""></span>
                        </a>
                    </div>
                    <div class="configuracion">
                        <a href="">
                            <span><img src="../recursos/imagenes/configuraciones1.png" alt=""></span>
                        </a>
                    </div>
                    <div class="menu">
                        <a href="">
                            <span><img src="../recursos/imagenes/menu-abierto.png" alt=""></span>
                        </a>
                    </div>

                </div>
            </header>
            <main class="tronco">
                
                <div class="contenido-sesion">
                    
                    <div class="sesiones">
                        <div id="especial"><span><img src="../recursos/imagenes/pez.png" alt="imagen pez"></span></div>
                        <a href=""><h3>GESTION DE ESTANQUE</h3></a>
                    </div>
                    <div class="sesiones">
                        <div id="especial"><span><img src="../recursos/imagenes/pez.png" alt="imagen pez"></span></div>   
                        <a href=""><h3>MONITOREO Y PARAMETROS DEL AGUA</h3></a>
                    </div>
                    <div class="sesiones">
                        <div id="especial"><span><img src="../recursos/imagenes/pez.png" alt="imagen pez"></span></div>
                        <a href=""><h3>CONTROL DE ALIMENTACION</h3></a>
                    </div>
                </div>

                <section class="container-tronco">
                        <div class="titulos">
                            <span class="principal"><h2>Gestion de estanque</h2></span>
                            <span class="sub-principal"><h3>Piscicultura Extensiva</h3></span>

                        </div>
                        <div class="tipo">
                            <div class="tipo-imagen">
                                <div class="img-izquierda">
                                    <div class="efecto-3d">
                                        <div class="efecto-3d-contenedor">
                                            <p class="p1" id="parra">Terreno desnivelado</p>
                                            <img src="../recursos/imagenes/izquierda.jpeg" alt="" id="img1">
                                        </div>
                                    </div>
                                </div>
                                <div class="img-centro">
                                    <div class="efecto-3d centro">
                                        <div class="efecto-3d-contenedor centro2">
                                            <p class="p2" id="parra">Terreno plano</p>
                                         <img src="../recursos/imagenes/centro.jpeg" alt="" id="img2">
                                        </div>
                                    </div>
                                </div>
                                <div class="img-derecha">
                                    <div class="efecto-3d derecha">
                                        <div class="efecto-3d-contenedor derecha2">
                                            <p class="p3" id="parra">Terreno con agregacion</p>
                                            <img src="../recursos/imagenes/derecha.jpeg" alt="" id="img3">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="eleccion">
                            <div class="boton-izquierda" id="bot">
                                <a class="btnD" data-dir="btnI">
                                    <img src="../recursos/imagenes/flechas-izquierda.png" alt="">
                                </a>
                            </div>
                            <div class="boton-centro">
                                <button onclick="window.location='salaInteractiva.php'">Empezar</button>
                            </div>
                            <div class="boton-derecha" onclick="" id="bot">
                                <a class="btnD" data-dir="btnD">
                                    <img src="../recursos/imagenes/flechas-a-la-derecha.png" alt="">
                                </a>
                            </div>

                        </div>

                </section>

            </main>
            <footer class="final">

            </footer>
        </div>
    </div>



    

    <!-- <script>

        (function(){

            $("#boton").on("click", function(){

                var posision = {
                direccion: ["derecha", "centro", "izquierda"],
            };

            for(var i=0; i< posision.direccion.length; i++){
                var directo = posision.direccion[i];
                $("#img").bind("change", function(){

                    var clase = "img-"+directo+"";

                    $("#img").attr("class", clase);

                })
            }



            })
           


        })();

    </script> -->
    <?php
// session_destroy();



?>

<script>

        

(function(){
    var img ={
    clase: ["izquierda", "centro", "derecha"]
}
 
    var iz= 0;
    var c=1;
    var d=2;
    $("#bot").on("click", function(){

     iz= iz+1;
     c=c+1;
     d=d+1;

        if(iz>2){
            iz=0;
        }else if(c>2){
            c=0;
        }else if(d>2){
            d=0;
        };
        var cambioI= img.clase[iz];
        var cambioC= img.clase[c];
        var cambioD= img.clase[d];
        console.log(cambioI);
        console.log(cambioC);
        console.log(cambioD);

        // $i++;

        // if (cambioD) {
        //     if($i > 3){
        //         $i=1;
        //     }
            // if($("#bot"))
        
            $("#img1").attr("src", "../recursos/imagenes/"+cambioI+".jpeg" );
            // $("#parra").attr("class","p"+($i+2));
        // }else if(cambioC){
        //         if($i > 3){
        //         $i=1;
        //      }
            
            $("#img2").attr("src", "../recursos/imagenes/"+cambioC+".jpeg" );
            // $("#parra").attr("class","p"+($i+1) );

        // }else if(cambioI){
        //     if($i > 3){
            //     $i=0;
            // }
        
            $("#img3").attr("src", "../recursos/imagenes/"+cambioD+".jpeg" );
            // $("#parra").attr("class","p"+$i )
        // }
        
        
       

        
        
    }) 

})();


// (function(){

//     var $imD = $(".img-derecha");
//     var $imC = $(".img-centro");
//     var $imI = $(".img-izquierda");

//     switch(cli){

//         case "btnD": 
//             $imD = $imI
            
                


//             break;
//     }


//     $("a"),on("click", function(){

//         var cli = $(this).data("dir");
//         mover(cli);
    

//     })







// })();



</script>
</body>
</html>
