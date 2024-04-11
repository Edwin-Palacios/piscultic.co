
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
    <link rel="import"  href="localhost/animacionFinal/vista/salaInteractiva.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="../recursos/css/fondo.css">
    <link rel="stylesheet" href="../recursos/css/stile.css">
    <link rel="stylesheet" href="../recursos/css/tarea.css">
    <script src="../recursos/js/lib/jquery-3.7.1.min.js"></script>
    <!-- <script src="../recursos/js/lib/gsap.min.js"></script> -->
    <title>Document</title>
</head>
<body style="overflow: hidden;">

    <div class="container-fondo">

        <div class="cielo">
            <div class="img-nube" id="nube"><img src="../imagenes/7.png" alt=""></div>
            <div class="img-cielo" id="cielo"><img src="../imagenes/8.png" alt=""></div>
            
        </div>
        
        
        <div class="fondo">
        

        <div class="img-montana" style="height: 50%;"><img src="../imagenes/montaña.png" alt=""></div>
        
        <div class="img-fondo" id="" ><img src="../imagenes/9.png" alt="">
        
        
        </div>
        
       
            

        </div>


       

    </div>
   
    
    <div class="cuerpo">
        <div class="container">

           

            
            <header class="cabeza">
                <div class="user">
                    <div class="logo">
                        <span><img src="../recursos/imagenes/usuario.png" alt="logo usuario"></span>
                    </div>
                    <div class="nombre">
                        <h3>Usuario</h3>
                    </div>
                </div>
                <div class="monedas">
                    <div class="cantidad-monedas">
                        <p>Tarea</p>   
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

            <main class="seccion">

                <!-- En esta section de dinamico ira la animacion dependiendo de la tarea elegida para cumplir
                    dinamico nunca sera display none, el contenedor dinamico nunca se tocara, se tocara y se podra tocar lo que hay dentro de dinamico 
                    El contenedor dinamico debera contener el metodo de bola de arcilla y el metodo de escavacion bola de arcilla -->
                <section class="dinamico">

                    <!-- En este div de clase animacion, contendra el personaje el cual estara realizando las actividades
                        tambien contendra el espacio en donde se realizara la prueba e ira cambiando mediante las acciones realizadas por el usuario
                        las acciones realizadas por el usuario esta en el div donde con clase acciones-->
                    <div class="animacion">

                        <div class="con-anima" id="usuario">
                            <img src="../imagenes/13.png" alt="">
                        </div>
                        <div class="con-anima" id="area">

                            
                                
                            

                        </div>
                            

                        <div class="con-anima" id="agua"></div>


                    </div>
                    <div class="acciones">

                            <div class="botones" id="malesa">
                                
                                <button data-click="podar" class="malesa"><p>Malesa</p></button><!--Este boton debe mostra una flecha o un indicador de donde limpiar la malesa
                                                                la unica parte en donde se podra limpiar la malesa sera en la seccion de area
                                                                esa es la unica parte que se puede modificar y realizar las pruebas, 
                                                                como solo es la prueba de la bola de arcilla, no importara que tan ancho sea el area
                                                            en donde se ara la prueba, por eso daremos una medida por defecto, el usuario al dar click 
                                                                se quedara marcado el terreno y automaticamente se quitara la malesa, dejando solo 
                                                                la tierra al descubierto  -->
                                    
                            </div>
                            <div class="botones" id="cavar">
                                
                                <button  class="cavar"><p>Cavar</p></button>
                            
                            </div>


                            <div class="botones" id="agua">
                                
                                <button class="agAgua"><p>Agregar agua</p></button>
                            
                            </div>

                            <div class="botones" id="arcilla">
                                
                                <button class="arcilla"><p>agregar arcilla</p></button>
                            
                            </div>


                    </div>



                </section>

                <section class="recuadro">

                    <div class="tabla">

                        <div class="titulo-recuadro">
                            <span class="h2r"><h2>Prueba</h2></span>
                        </div>
                        <ol class="prueba">
                            <!-- En el metodo bola de arcilla, debe contener un boton para que cuando haga click de una interfaz a mano dereca del contenido 
                                animado el cual se ejecutara -->
                            <li> <a href="">Bola de arcilla</a></li><!--AL ejecutarce lo anterio, el recuadro de dialogo tambien cambiara, ya no se mostrara
                                                                        la tareas que estamos realizando, si no que se mostrara las subtareas que debemos reralizar
                                                                    en pocas palabras, realizar las tareas de las tareas, en estas subtareas tambien se debe
                                                                    tener un contenido tecnico del como realizarla, esto quiere decir que el contenido tendra 
                                                                    informacion clave para la superacion de cada una, cada vez que pase una subtarea, los botones de ellas
                                                                    se bloquearan y se subrayara indicando que esta realizada  -->
                            
                            <li> <a href="">Pozo de agua</a></li>
                            
                        </ol>



                    </div>
                       

                    


                </section>
                
                

            </main>
   
            <footer class="final">

            </footer>
        </div>
    </div>


  
 <script src="../recursos/js/animacion.js"></script>


</body>
</html>